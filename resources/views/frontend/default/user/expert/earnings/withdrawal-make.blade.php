@extends('layouts.app')

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing layout-top-spacing">
            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area">
                            <div class="layout-top-spacing ">
                                <h5 class="text-center">Your withdrawal history</h5>
                                <hr>
                            </div>
                            <div class="container">
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <div class="alert alert-info mb-0">
                                            {{ translate('Your available balance is') }}
                                            {{ single_price(optional($profile)->balance) }}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="alert alert-info mb-0">
                                            {{ translate('Minimum withdrawal amount is') }}
                                            {{ single_price(\App\Models\SystemConfiguration::where('type', 'min_withdraw_amount')->first()->value) }}

                                            {{-- Paypal payment charge is {{ single_price(\App\Models\SystemConfiguration::where('type', 'paypal_charge')->first()->value) }},
                                    Bank payment charge is
                                    {{ single_price(\App\Models\SystemConfiguration::where('type', 'bank_charge')->first()->value) }} --}}
                                        </div>
                                    </div>
                                </div>
                                <form class="form-horizontal" action="{{ route('store_withdrawal_request_to_admin') }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label for="exampleFormControlInput2">Withdrawal amount</label>
                                                <input type="number" class="form-control" name="amount"
                                                    min="{{ \App\Models\SystemConfiguration::where('type', 'min_withdraw_amount')->first()->value }}"
                                                    max="{{ optional($profile)->balance }}" step="1"
                                                    placeholder="Enter withdrawal amount"
                                                    value="{{ optional($profile)->balance }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label for="exampleFormControlSelect1">Payment method</label>
                                                <select class="form-control aiz-selectpicker" name="payment_method" required
                                                    data-placeholder="Select a payment method" required>
                                                    <option value="bank">{{ translate('Bank') }}</option>
                                                    <option value="paypal">{{ translate('Paypal') }}</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="exampleFormControlTextarea1">Any message
                                            </label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>

                                        <div class="col-md-12 text-center">
                                            <button class="mt-4 mb-4 btn btn-primary">Request for Withdraw</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    <!--  END CONTENT AREA  -->
@endsection

@section('modal')
    @include('admin.default.partials.delete_modal')
@endsection
