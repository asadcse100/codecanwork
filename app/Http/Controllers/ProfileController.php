<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use Auth;
use Hash;
use App\Models\User;
use App\Models\Address;
use App\Models\UserProfile;
use App\Models\Verification;
use App\Models\ExpertAccount;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    // Show admin profile
    public function admin_profile()
    {
        return view('admin.default.profiles.index');
    }

    // Update admin profile
    public function update_admin_profile(Request $request)
    {
        if(env("DEMO_MODE") == "On"){
            flash(translate('This action is blocked in demo version!'))->error();
            return back();
        }
        if (!User::where('email', $request->email)->where( 'id', '!=', auth()->user()->id)->first()) {
            $user = User::findOrFail(auth()->user()->id);
            $user->name = $request->name;
            $user->email = $request->email;
            if($request->new_password != null && ($request->new_password == $request->confirm_password)){
                $user->password = Hash::make($request->new_password);
            }
            $user->photo = $request->profile_photo;

            if($user->save()){
                flash(translate('Your Profile has been updated successfully!'))->success();
                return back();
            }
            flash(translate('Sorry! Something went wrong.'))->error();
            return back();
        }
        flash(translate('This Email is already used.'))->error();
        return back();

    }

    public function profile_show(){
        $data = null;
        $data['freelancer_account'] = ExpertAccount::where('user_id', Auth::user()->id)->first();
        $data['user_profile'] = UserProfile::where('user_id', Auth::user()->id)->first();
        $data['verification'] = Verification::where('user_id', Auth::user()->id)->where('type', 'identity_verification')->first();

        return view('frontend.default.user.user-profile-show',$data);
    }

    //Redirect to user profile page to update profile
    public function user_profile()
    {
        $user_profile = UserProfile::where('user_id', Auth::user()->id)->first();
        $verification = Verification::where('user_id', Auth::user()->id)->where('type', 'identity_verification')->first();

        if (isClient()) {
            return view('frontend.default.user.client.settings.profile', compact('user_profile', 'verification'));
        }
        elseif (isExpert()) {
            return view('frontend.default.user.expert.setting.profile', compact('user_profile','verification'));
        }
        else {
            // flash(translate('Sorry! Something went wrong.'))->error();
            return back();
        }
    }

    public function user_account()
    {
        $expert_account = ExpertAccount::where('user_id', Auth::user()->id)->first();
        return view('frontend.default.user.expert.setting.account', compact('expert_account'));
    }

    public function basic_info_update(Request $request)
    {
        if(env("DEMO_MODE") == "On"){
            // flash(translate('This action is blocked in demo version!'))->error();
            return back();
        }

        $user = User::findOrFail(Auth::user()->id);
        if($request->new_password != null && ($request->new_password == $request->confirm_password)){
            $user->password = Hash::make($request->new_password);
        }
        $user->name = $request->name;
        if ($user->save()) {
            $user_profile = UserProfile::where('user_id', Auth::user()->id)->first();
            $user_profile->gender = $request->gender;
            $user_profile->nationality = $request->nationality;
            $user_profile->specialist = $request->specialist;
            if ($request->hourly_rate != null) {
                $user_profile->hourly_rate = $request->hourly_rate;
            }
            if ($user_profile->save()) {
                $user_address =  Address::where('addressable_id', $user->id)->first();
                $user_address->street = $request->address;
                $user_address->country_id = $request->country_id;
                $user_address->city_id = $request->city_id;
                $user_address->postal_code = $request->postal_code;
                $user_address->phone = $request->phone;
                if ($user->address()->save($user_address)) {
                    // flash(translate('Your Info has been updated successfully'))->success();
                    return redirect()->route('user.profile');
                }
                else {
                    // flash(translate('Sorry! Something went wrong.'))->error();
                    return back();
                }
            }
            else {
                // flash(translate('Sorry! Something went wrong.'))->error();
                return back();
            }
        }
        else {
            // flash(translate('Sorry! Something went wrong.'))->error();
            return back();
        }
    }

    public function photo_update(Request $request)
    {
        $user = User::findOrFail(Auth::user()->id);
        $user->photo = $request->profile_photo;
        $user->cover_photo = $request->cover_photo;
        if ($user->save()) {
            // flash(translate('Your Picture has been updated successfully'))->success();
            return redirect()->route('user.profile');
        }
        else {
            // flash(translate('Sorry! Something went wrong.'))->error();
            return back();
        }
    }
    public function bio_update(Request $request)
    {
        if(env("DEMO_MODE") == "On"){
            // flash(translate('This action is blocked in demo version!'))->error();
            return back();
        }

        $user = User::findOrFail(Auth::user()->id);
        $username_availability = User::where('user_name', '=', Str::slug($request->username, '-'))->first();
        if ($username_availability == null) {
            $user->user_name = Str::slug($request->username, '-');
            if($request->new_password != null && ($request->new_password == $request->confirm_password)){
                $user->password = Hash::make($request->new_password);
            }
            if ($user->save()) {
                $user_profile = UserProfile::where('user_id', Auth::user()->id)->first();
                $user_profile->bio = $request->bio;
                if ($request->skills != null) {
                    $user_profile->skills = json_encode($request->skills);
                }
                $user_profile->save();
                // flash(translate('Your info has been updated successfully'))->success();
                return redirect()->route('user.profile');
            }
        }
        else {
            if($request->new_password != null && ($request->new_password == $request->confirm_password)){
                $user->password = Hash::make($request->new_password);
                $user->save();
            }
            $user_profile = UserProfile::where('user_id', Auth::user()->id)->first();
            $user_profile->bio = $request->bio;
            if ($request->skills != null) {
                $user_profile->skills = json_encode(array_slice($request->skills, 0, $user->userPackage->skill_add_limit));
            }
            $user_profile->save();
            // flash(translate('Your info has been updated successfully'))->success();
            return redirect()->route('user.profile');
        }
    }

    
    public function profile_update(Request $request)
    {
        // dd($request->toArray());

        // $user = User::find(Auth::user()->id);
        // $user_profile = UserProfile::where('user_id', $user->id)->first();

        // if ($request->skills != null) {
        //     $user_profile->skills = json_encode(array_slice($request->skills, 0, $user->userPackage->skill_add_limit));
        // }
        // if($user_profile){
        //     $user_profile->update($request->all());
        // }

        UserProfile::updateOrCreate([
            'user_id' => Auth::user()->id
          ],
          [
            'gender' => $request->gender,
            'bio' => $request->bio,
            'headline' => $request->headline,
            'github' => $request->github,
            'facebook' => $request->facebook,
            'tweeter' => $request->tweeter,
            'linkedin' => $request->linkedin,
            'skills' => $request->skills,
            'hourly_rate' => $request->hourly_rate,
            'consultant_fee' => $request->consultant_fee,
            'created_at' => Carbon::now()
          ]);

        return back();
    }
}
