<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExpertAccount;
use Auth;

class ExpertAccountController extends Controller
{
    // expert Account related info store like bank, paypal etc
    public function store(Request $request)
    {
        $expert_account = ExpertAccount::where('user_id', Auth::user()->id)->first();
        if ($expert_account != null) {
            if ($request->bank_name != null) {
                $expert_account->bank_name = $request->bank_name;
                $expert_account->bank_account_name = $request->bank_account_name;
                $expert_account->bank_account_number = $request->bank_account_number;
                $expert_account->bank_routing_number = $request->bank_routing_number;
            }
            if ($request->paypal_acc_name != null) {
                $expert_account->paypal_acc_name = $request->paypal_acc_name;
                $expert_account->paypal_email = $request->paypal_acc_email;
            }
            if ($expert_account->save()) {
                flash(translate('Your Info has been updated successfully'))->success();
                return redirect()->route('user.account');
            }
            else {
                flash(translate('Sorry! Something went wrong.'))->error();
                return back();
            }
        }
        else {
            $expert_account = new ExpertAccount;
            $expert_account->user_id = Auth::user()->id;
            if ($request->bank_name != null) {
                $expert_account->bank_name = $request->bank_name;
                $expert_account->bank_account_name = $request->bank_account_name;
                $expert_account->bank_account_number = $request->bank_account_number;
                $expert_account->bank_routing_number = $request->bank_routing_number;
            }
            if ($request->paypal_acc_name != null) {
                $expert_account->paypal_acc_name = $request->paypal_acc_name;
                $expert_account->paypal_email = $request->paypal_acc_email;
            }
            if ($expert_account->save()) {
                flash(translate('Your Info has been updated successfully'))->success();
                return redirect()->route('user.account');
            }
            else {
                flash(translate('Sorry! Something went wrong.'))->error();
                return back();
            }
        }
    }
}
