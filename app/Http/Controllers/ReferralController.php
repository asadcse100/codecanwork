<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Referral;
use App\Models\Setting;
use Illuminate\Http\Request;

use App\Enums\TransactionType;
use App\Enums\TransactionStatus;
use Illuminate\Support\Str;


class ReferralController extends Controller
{
    public function index()
    {
        // if (!referral_system()) {
        //     return redirect()->route('dashboard')->withErrors(['warning' => __('Sorry, the page you are looking for could not be found.')]);
        // }
        $data = [];
        $data['refers'] = Referral::with('referred')->where('refer_by', auth()->user()->id)->get();
        $transactionsQuery = Transaction::where('type', 'referral')->where('user_id', auth()->user()->id)->orderBy('id', 'desc');
        $bonusReceivedCollection = $transactionsQuery->get()->where('status', 2);

        // $data['earnings'] = $bonusReceivedCollection->mapToGroups(function ($item, $key) {
        //     return [data_get($item->user_id, 'referral.user') => $item->amount];
        // })->all();

        $data['bonusReceived'] = $bonusReceivedCollection->sum('amount');
        $data['bonusPending'] = $transactionsQuery->get()->where('status', 'pending')->sum('amount');
        $data['transactions'] = $transactionsQuery->get();
        return view('frontend.referral.index', $data);
    }

    public function referrals()
    {
        return view('admin.default.referrals.index');
    }

    public function update(Request $request)
    {
        $prefix     = ($request->get('form_prefix')) ? str_replace('-', '_', strtolower($request->get('form_prefix'))) : '';
        foreach ($request->toArray() as $key => $value) {
            $key = (Str::startsWith($key, ['app_', 'sys_'])) ? str_replace(['app_', 'sys_'], '', $key) : $key;
            if (!empty($prefix)) {
                $key = $prefix.'_'.$key;
            }
            Setting::updateOrCreate(['key' => $key], ['value' => $value]);
        }
        return back();
    }
}
