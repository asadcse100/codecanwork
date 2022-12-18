<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\UserCollection;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Lcobucci\JWT\Parser;
use DB;
class UserController extends Controller
{
    public function info($id)
    {
        return new UserCollection(User::where('id', $id)->get());
    }

    public function updateName(Request $request)
    {
        $user = User::findOrFail($request->user_id);
        $user->update([
            'name' => $request->name
        ]);
        return response()->json([
            'message' => translate('Profile information has been updated successfully')
        ]);
    }

    public function getUserInfoByAccessToken(Request $request)
    {
        $false_response = [
            'result' => false,
            'id' => 0,
            'name' => "",
            'email' => "",
            'phone' => ""
        ];

        $user = request()->user();

        if ($user == null) {
            return response()->json($false_response);
        }

        return response()->json([
            'result' => true,
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'phone' => $user->phone
        ]);
    }
}
