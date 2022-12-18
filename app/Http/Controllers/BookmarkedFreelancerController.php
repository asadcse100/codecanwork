<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookmarkEdexpert;
use Auth;

class BookmarkedExpertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookmarked_experts = BookmarkedExpert::where('user_id', Auth::user()->id)->paginate(8);
        return view('frontend.default.user.client.bookmarked-experts', compact('bookmarked_experts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        $userPackage = Auth::user()->userPackage;
        if($userPackage->following_status){
            $bookmarked_expert = new BookmarkEdexpert;
            $bookmarked_expert->user_id = Auth::user()->id;
            $bookmarked_expert->expert_user_id = decrypt($id);
            $bookmarked_expert->save();
        }
        else {
            flash(translate('Expert following option is not available on your package.'))->warning();
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BookmarkedExpert::destroy($id);
        return back();
    }
}
