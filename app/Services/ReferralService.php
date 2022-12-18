<?php

namespace App\Services;

use App\Enums\UserRoles;

use App\Models\ReferralCode;
use App\Models\Referral;
use App\Models\User;
use Carbon\Carbon;
use Session;

class ReferralService extends Service
{
    private function getUserByRef($code): ?int
    {
        $referral = ReferralCode::where('code', $code)->first();

        if (blank($referral)) {
            return false;
        }

        // $user = User::where('id', $referral->user_id)->where('status', 'active')->first();
        $user = User::where('id', $referral->user_id)->first();

        return (!blank($user)) ? $user->id : false;
    }

    public function getReferrer()
    {
        return session('referby');
    }

    public function getReferCode()
    {
        return session('refercode');
    }

    public function getReferMeta()
    {
        $meta = [];
        if ($this->getReferrer()) {
            $meta['by'] = $this->getReferrer();
        }
        if ($this->getReferCode()) {
            $meta['code'] = $this->getReferCode();
        }

        return (!empty($meta) && $this->getReferrer()) ? $meta : false;
    }

    public function setReferrer($code)
    {
        $refer = $this->getUserByRef($code);

        if (!empty($refer)) {
            session(['referby' => $refer]);
            session(['refercode' => $code]);
        }

        // if (request()->has('source')) {
        //     $refid = (int) request()->get('source', 0);
        //     update_gss('checker', $refid, 'ref');
        // }
    }

    public static function createReferral($user)
    {
        // dd($user);
        // if (empty($user->refer) || !is_json($user->refer)) {
        //     return;
        // }
        // dd($user);
        // $refer = json_decode($user->refer);

        // if(empty($refer->by)) {
        //     return;
        // }

        // $referrer = User::find($refer->by);
        // if (empty($referrer)) {
        //     return;
        // }

        // $meta['at'] = time();
        // if (!empty($refer->code)) {
        //     $meta['code'] = $refer->code;
        // }

        $refer_user = ReferralCode::where('code', $user->refer)->first();

        $ref = new Referral();
        $ref->user_id = $user->id;
        $ref->refer_by = $refer_user->user_id;
        $ref->join_at = $user->created_at;
        $ref->meta = (!empty($meta)) ? $meta : [];
        $ref->save();

        // $user->refer = $referrer->id;
        // $user->save();

        session(['referby' => '']);
        session(['refercode' => '']);
    }
}
