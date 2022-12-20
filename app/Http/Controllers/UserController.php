<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserProfile;
use App\Models\ExpertAccount;
use App\Models\Package;
use App\Models\UserPackage;
use Cache;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:show all experts'])->only('all_experts');
        $this->middleware(['permission:show all clients'])->only('all_clients');

    }

    public function all_experts(Request $request)
    {
        $sort_search = null;
        $col_name = null;
        $query = null;
        $experts = UserProfile::query();

        $user_ids = User::where(function($user) use ($sort_search){
            $user->where('user_type', 'expert');
        })->pluck('id')->toArray();

        $experts = $experts->where(function($expert) use ($user_ids){
            $expert->whereIn('user_id', $user_ids);
        });

        if ($request->search != null || $request->type != null) {
            if ($request->has('search')){
                $sort_search = $request->search;
                $user_ids = User::where(function($user) use ($sort_search){
                    $user->where('user_type', 'expert')->where('name', 'like', '%'.$sort_search.'%')->orWhere('email', 'like', '%'.$sort_search.'%');
                })->pluck('id')->toArray();

                $experts = $experts->where(function($expert) use ($user_ids){
                    $expert->whereIn('user_id', $user_ids);
                });
            }
            if ($request->type != null){
                $var = explode(",", $request->type);
                $col_name = $var[0];
                $query = $var[1];
                $experts = $experts->orderBy($col_name, $query);
            }

            $experts = $experts->paginate(10);
        }
        else {
            $experts = $experts->orderBy('created_at', 'desc')->paginate(10);
        }
        $packages = Package::where('active', 1)->get();
        return view('admin.default.expert.experts.index', compact('experts', 'sort_search', 'col_name', 'query', 'packages'));
    }

     public function login($id)
    {
        $user = User::findOrFail(decrypt($id));
        auth()->login($user, true);

        return redirect()->route('dashboard');
    }


    public function all_clients(Request $request)
    {
        $sort_search = null;
        $col_name = null;
        $query = null;
        $clients = UserProfile::query();

        $user_ids = User::where(function($user) use ($sort_search){
            $user->where('user_type', 'client');
        })->pluck('id')->toArray();

        $experts = $clients->where(function($expert) use ($user_ids){
            $expert->whereIn('user_id', $user_ids);
        });


        if ($request->search != null || $request->type != null) {
            if ($request->has('search')){
                $sort_search = $request->search;
                $user_ids = User::where(function($user) use ($sort_search){
                    $user->where('user_type', 'client')->where('name', 'like', '%'.$sort_search.'%')->orWhere('email', 'like', '%'.$sort_search.'%');
                })->pluck('id')->toArray();
                $clients = $clients->where(function($client) use ($user_ids){
                    $client->whereIn('user_id', $user_ids);
                });
            }
            if ($request->type != null){
                $var = explode(",", $request->type);
                $col_name = $var[0];
                $query = $var[1];
                $clients = $clients->orderBy($col_name, $query);
            }

            $clients = $clients->paginate(10);
        }
        else {
            $clients = $clients->orderBy('created_at', 'desc')->paginate(10);
        }
        return view('admin.default.client.clients.index', compact('clients', 'sort_search', 'col_name', 'query'));
    }

    public function expert_details($user_name)
    {
        $user = User::where('user_name', $user_name)->first();
        $user_profile = UserProfile::where('user_id', $user->id)->first();
        $user_account = expertAccount::where('user_id', $user->id)->first();
        return view('admin.default.expert.experts.show', compact('user', 'user_profile', 'user_account'));
    }

    public function client_details($user_name)
    {
        $user = User::where('user_name', $user_name)->first();
        $user_profile = UserProfile::where('user_id', $user->id)->first();
        $user_account = expertAccount::where('user_id', $user->id)->first();
        $projects = $user->number_of_projects()->paginate(10);
        return view('admin.default.client.clients.show', compact('user', 'user_profile', 'user_account','projects'));
    }

    public function userOnlineStatus()
    {
        $users = User::all();

        foreach ($users as $user) {
            if (Cache::has('user-is-online-' . $user->id))
                echo "User " . $user->name . " is online.";
            else
                echo "User " . $user->name . " is offline.";
        }
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        if($user->banned){
            $user->banned = 0;
            $user->save();
            flash(translate('User has been unbanned successfully'))->success();
        }
        else{
            $user->banned = 1;
            $user->save();
            flash(translate('User has been banned successfully'))->success();
        }
        return back();
    }

    public function set_account_type(Request $request)
    {
        auth()->user()->user_type = $request->user_type;

        if(auth()->user()->save()) {
            session()->forget('new_user');
        }

        flash(translate('User account type set successfully'))->success();
        return back();

    }
}
