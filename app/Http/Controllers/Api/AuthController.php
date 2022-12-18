<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
use App\Models\UserProfile;
use App\Models\ReferralCode;
use App\Services\ReferralService;
use Hash;
use Illuminate\Support\Str;
use Auth;

class AuthController extends Controller
{
    public function signup(Request $request)
    {
        $input = $request->all();
        $input['password'] =  Hash::make($input['password']);
        $input['user_name'] = Str::slug($input['name'], '-').date('Ymd-his');//) . rand(10, 10000);Str::slug($user->name, '-').date('Ymd-his');
        $input['user_type'] = 'freelancer';

        if(!empty($request->refer)){
            $referCode = ReferralCode::where('code', $request->refer)->first();

            if(empty($referCode)){
                return response()->json([
                    'result' => false,
                    'message' => 'Invalid referral code'
                ], 201);
            }
        }


        $user = User::create($input);

        $user_profile = new UserProfile;
        $user_profile->user_id = $user->id;
        $user_profile->save();

        return response()->json([
            'result' => true,
            'message' => 'Registration Successful.',
            'user_id' => $user->id,
            'username'=> $input['user_name'],
            'phone' => $input ['phone'],
            'refer' => $input['refer'],
        ], 201);
    }

    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->orWhere('phone', $request->email)->first();

        if ($user != null) {
            if (Hash::check($request->password, $user->password)) {

                return $this->loginSuccess($user);
            } else {
                return response()->json(['result' => false, 'message' => 'Unauthorized', 'user' => null], 201);
            }
        } else {
            return response()->json(['result' => false, 'message' => 'User not found', 'user' => null], 201);
        }
    }

    public function user(Request $request)
    {
        return response()->json($request->user());
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        return response()->json([
            'result' => true,
            'message' => 'Successfully logged out'
        ]);
    }

    protected function loginSuccess($user)
    {

      return response()->json([
            'result' => true,
            'message' => 'Successfully logged In',
            'expires_at' => null,
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'phone' => $user->phone,
            'username' => $user->user_name,
            'refer' => $user->refer,
            'photo' => $user->photo
        ]);
    }

    public function userDataUpdate(Request $request)
    {
        User::where('id', $request->id)
        ->update([
            'full_name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone
        ]);

        return response()->json([
            'result' => true,
            'message' => 'Update Successful'
        ]);
    }
}
