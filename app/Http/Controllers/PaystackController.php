<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Paystack;
use Session;
use Auth;


class PaystackController extends Controller
{
    public function redirectToGateway(Request $request)
    {
        $user = Auth::user();
        $request->email = $user->email;
        $request->amount = round(Session::get('payment_data')['amount'] * 100);
        $request->currency = env('PAYSTACK_CURRENCY_CODE', 'NGN');
        $request->reference = Paystack::genTranxRef();
        return Paystack::getAuthorizationUrl()->redirectNow();
    }


    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
        if (Session::has('payment_type')) {
            $payment = Paystack::getPaymentData();
            if (!empty($payment['data']) && $payment['data']['status'] == 'success') {
                if (Session::get('payment_type') == 'package_payment') {
                    return (new PackagePaymentController)->package_payment_done(Session::get('payment_data'), $payment);
                }
                elseif (Session::get('payment_type') == 'milestone_payment') {
                    return (new MilestonePaymentController)->milestone_payment_done(Session::get('payment_data'), $payment);
                }
                elseif (Session::get('payment_type') == 'service_payment') {
                    return (new ServicePaymentController)->service_package_payment_done(Session::get('payment_data'), $payment);
                }
                elseif (Session::get('payment_type') == 'wallet_payment') {
                    return (new PackagePaymentController)->package_payment_done(Session::get('payment_data'), $payment);
                }
            }
            else{
                Session::forget('payment_data');
                flash(translate('Payment cancelled'))->success();
                return redirect()->route('home');
            }
        }
    }
}
