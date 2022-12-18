<?php

namespace App\Http\Controllers;

use App\Utility\EmailUtility;
use App\Utility\NotificationUtility;
use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Project;
use Auth;

class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:show experts reviews'])->only('expert_review_index');
        $this->middleware(['permission:show client reviews'])->only('client_review_index');
    }

    public function expert_review_index()
    {
        $reviews = Review::where('reviewed_user_role_id', 2)->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.default.reviews.expert', compact('reviews'));
    }

    public function client_review_index()
    {
        $reviews = Review::where('reviewed_user_role_id', 3)->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.default.reviews.client', compact('reviews'));
    }

    public function review_index($type)
    {
        $reviews = Review::where('reviewed_user_id', Auth::user()->id)->latest()->paginate(10);
        return view('frontend.default.user.reviews.index', compact('reviews'));
    }

    public function store(Request $request)
    {
        $review = new Review;
        $review->project_id = $request->project_id;
        $review->reviewer_user_id = Auth::user()->id;
        $review->review = $request->review;
        $review->rating = $request->rating;
        if (isExpert()) {
            $project = Project::find($request->project_id);
            $review->reviewed_user_id = $project->client_user_id;
            $review->reviewed_user_role_id = 3;
        } else {
            $project = Project::find($request->project_id);
            $review->reviewed_user_id = $project->project_user->user_id;
            $review->reviewed_user_role_id = 2;
        }
        $review->save();

        if (isexpert()) {
            //expert to client
            NotificationUtility::set_notification(
                "client_review_by_expert",
                translate('You have been given a review for a project by'),
                route('user_review', ['type'=>'client'], false),
                $project->client_user_id,
                Auth::user()->id,
                'client'
            );
            EmailUtility::send_email(
                translate('You have been given a review for a project'),
                translate('You have been given a review for a project by'). Auth::user()->name,
                get_email_by_user_id($project->client_user_id),
                route('user_review', ['type'=>'client'])
            );
        } else if (isClient()) {
            //client to expert
            NotificationUtility::set_notification(
                "expert_review_by_client",
                translate('You have been given a review for a project by'),
                route('user_review', ['type'=>'expert'], false),
                $project->project_user->user_id,
                Auth::user()->id,
                'expert'
            );
            EmailUtility::send_email(
                translate('You have been given a review for a project'),
                translate('You have been given a review for a project by'). Auth::user()->name,
                get_email_by_user_id($project->project_user->user_id),
                route('user_review', ['type'=>'expert'])
            );
        }

        $userProfile = $review->reviewed->profile;
        if (count(Review::where('reviewed_user_id', $review->reviewed_user_id)->where('published', 1)->get()) > 0) {
            $userProfile->rating = Review::where('reviewed_user_id', $review->reviewed_user_id)->where('published', 1)->avg('rating');
        } else {
            $userProfile->rating = 0;
        }

        $userProfile->save();

        flash(translate('Review has been submitted successfully'))->success();
        return back();
    }

    function update_review_published(Request $request)
    {
        $review = Review::findOrFail($request->id);
        $review->published = $request->status;
        $review->save();

        $userProfile = $review->reviewed->profile;
        if (count(Review::where('reviewed_user_id', $review->reviewed_user_id)->where('published', 1)->get()) > 0) {
            $userProfile->rating = Review::where('reviewed_user_id', $review->reviewed_user_id)->where('published', 1)->avg('rating');
        } else {
            $userProfile->rating = 0;
        }

        $userProfile->save();

        return 1;
    }
}
