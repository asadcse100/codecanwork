@extends('admin.default.layouts.app')

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <!-- Paypal -->
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h6>{{ translate('Paypal Configuration') }}</h6>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" action="{{ route('payment-config.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="payment_method" value="paypal">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-2">
                                        <label class="align-self-center"
                                            for="rtl">{{ translate('Activation') }}</label>
                                    </div>
                                    <div class="col-4">
                                        <label class="aiz-switch aiz-switch-success mb-0">
                                            <input type="checkbox" @if (\App\Utility\SettingsUtility::get_settings_value('paypal_activation_checkbox') == 1) checked @endif
                                                name="paypal_activation_checkbox">
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group">
                                    <span class="input-group-text">{{ translate('PAYPAL CLIENT ID') }}</span>
                                    <input type="hidden" name="types[]" value="PAYPAL_CLIENT_ID">
                                    <input type="text" name="PAYPAL_CLIENT_ID" class="form-control"
                                        value="{{ env('PAYPAL_CLIENT_ID') }}">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group">
                                    <span class="input-group-text">{{ translate('PAYPAL CLIENT SECRET') }}</span>
                                    <input type="hidden" name="types[]" value="PAYPAL_CLIENT_SECRET">
                                    <input type="password" name="PAYPAL_CLIENT_SECRET" class="form-control"
                                        value="{{ env('PAYPAL_CLIENT_SECRET') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-4">
                                        <label class="align-self-center"
                                            for="rtl">{{ translate('Sandbox Activation') }}</label>
                                    </div>
                                    <div class="col-4">
                                        <label class="aiz-switch aiz-switch-success mb-0">
                                            <input type="checkbox" @if (\App\Utility\SettingsUtility::get_settings_value('paypal_sandbox_checkbox') == 1) checked @endif
                                                name="paypal_sandbox_checkbox">
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-3 text-right">
                                <button type="submit" class="btn btn-primary">{{ translate('Update') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end card-body -->
            <!-- Stripe -->
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">{{ translate('Stripe Configuration') }}</h5>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" action="{{ route('payment-config.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="payment_method" value="stripe">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-2">
                                        <label class="align-self-center"
                                            for="rtl">{{ translate('Activation') }}</label>
                                    </div>
                                    <div class="col-4">
                                        <label class="aiz-switch aiz-switch-success mb-0">
                                            <input type="checkbox" @if (\App\Utility\SettingsUtility::get_settings_value('stripe_activation_checkbox') == 1) checked @endif
                                                name="stripe_activation_checkbox">
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group">
                                    <span class="input-group-text">{{ translate('STRIPE KEY') }}</span>
                                    <input type="hidden" name="types[]" value="STRIPE_KEY">
                                    <input type="text" name="STRIPE_KEY" class="form-control"
                                        value="{{ env('STRIPE_KEY') }}">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group">
                                    <span class="input-group-text">{{ translate('STRIPE SECRET') }}</span>
                                    <input type="hidden" name="types[]" value="STRIPE_SECRET">
                                    <input type="password" name="STRIPE_SECRET" class="form-control"
                                        value="{{ env('STRIPE_SECRET') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-4">
                                        <label class="align-self-center"
                                            for="rtl">{{ translate('Sandbox Activation') }}</label>
                                    </div>
                                    <div class="col-4">
                                        <label class="aiz-switch aiz-switch-success mb-0">
                                            <input type="checkbox" @if (\App\Utility\SettingsUtility::get_settings_value('stripe_sandbox_checkbox') == 1) checked @endif
                                                name="stripe_sandbox_checkbox">
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-3 text-right">
                                <button type="submit" class="btn btn-primary">{{ translate('Update') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- end card-body -->

            <!-- SSlcommerz -->
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">{{ translate('SSlcommerz Configuration') }}</h5>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" action="{{ route('payment-config.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="payment_method" value="sslcommerz">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-2">
                                        <label class="align-self-center"
                                            for="rtl">{{ translate('Activation') }}</label>
                                    </div>
                                    <div class="col-4">
                                        <label class="aiz-switch aiz-switch-success mb-0">
                                            <input type="checkbox" @if (\App\Utility\SettingsUtility::get_settings_value('sslcommerz_activation_checkbox') == 1) checked @endif
                                                name="sslcommerz_activation_checkbox">
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group">
                                    <span class="input-group-text">{{ translate('Sslcz Store Id') }}</span>
                                    <input type="hidden" name="types[]" value="SSLCZ_STORE_ID">
                                    <input type="text" name="SSLCZ_STORE_ID" class="form-control"
                                        value="{{ env('SSLCZ_STORE_ID') }}">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group">
                                    <span class="input-group-text">{{ translate('Sslcz store password') }}</span>
                                    <input type="hidden" name="types[]" value="SSLCZ_STORE_PASSWD">
                                    <input type="password" name="SSLCZ_STORE_PASSWD" class="form-control"
                                        value="{{ env('SSLCZ_STORE_PASSWD') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label class="align-self-center"
                                            for="rtl">{{ translate('Sslcommerz Sandbox Mode') }}</label>
                                    </div>
                                    <div class="col-4">
                                        <label class="aiz-switch aiz-switch-success mb-0">
                                            <input type="checkbox" @if (\App\Utility\SettingsUtility::get_settings_value('sslcommerz_sandbox_checkbox') == 1) checked @endif
                                                name="sslcommerz_sandbox_checkbox">
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-3 text-right">
                                <button type="submit" class="btn btn-primary">{{ translate('Update') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- PayStack -->
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">{{ translate('PayStack Configuration') }}</h5>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" action="{{ route('payment-config.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="payment_method" value="paystack ">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-2">
                                        <label class="align-self-center"
                                            for="rtl">{{ translate('Activation') }}</label>
                                    </div>
                                    <div class="col-4">
                                        <label class="aiz-switch aiz-switch-success mb-0">
                                            <input type="checkbox" @if (\App\Utility\SettingsUtility::get_settings_value('paystack_activation_checkbox') == 1) checked @endif
                                                name="paystack_activation_checkbox">
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group">
                                    <span class="input-group-text">{{ translate('Public Key') }}</span>
                                    <input type="hidden" name="types[]" value="PAYSTACK_PUBLIC_KEY">
                                    <input type="text" name="PAYSTACK_PUBLIC_KEY" class="form-control"
                                        value="{{ env('PAYSTACK_PUBLIC_KEY') }}">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group">
                                    <span class="input-group-text">{{ translate('Secret Key') }}</span>
                                    <input type="hidden" name="types[]" value="PAYSTACK_SECRET_KEY">
                                    <input type="password" name="PAYSTACK_SECRET_KEY" class="form-control"
                                        value="{{ env('PAYSTACK_SECRET_KEY') }}">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group">
                                    <span class="input-group-text">{{ translate('Merchant Key') }}</span>
                                    <input type="hidden" name="types[]" value="PAYSTACK_MERCHANT_EMAIL">
                                    <input type="text" name="PAYSTACK_MERCHANT_EMAIL" class="form-control"
                                        value="{{ env('PAYSTACK_MERCHANT_EMAIL') }}">
                                </div>
                            </div>
                            <div class="form-group mb-3 text-right">
                                <button type="submit" class="btn btn-primary">{{ translate('Update') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Instamojo -->
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">{{ translate('Instamojo Configuration') }}</h5>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" action="{{ route('payment-config.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="payment_method" value="instamojo">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-2">
                                        <label class="align-self-center"
                                            for="rtl">{{ translate('Activation') }}</label>
                                    </div>
                                    <div class="col-4">
                                        <label class="aiz-switch aiz-switch-success mb-0">
                                            <input type="checkbox" @if (\App\Utility\SettingsUtility::get_settings_value('instamojo_activation_checkbox') == 1) checked @endif
                                                name="instamojo_activation_checkbox">
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group">
                                    <span class="input-group-text">{{ translate('API Key') }}</span>
                                    <input type="hidden" name="types[]" value="INSTAMOJO_API_KEY">
                                    <input type="text" name="INSTAMOJO_API_KEY" class="form-control"
                                        value="{{ env('INSTAMOJO_API_KEY') }}">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group">
                                    <span class="input-group-text">{{ translate('Auth Token') }}</span>
                                    <input type="hidden" name="types[]" value="INSTAMOJO_AUTH_TOKEN">
                                    <input type="text" name="INSTAMOJO_AUTH_TOKEN" class="form-control"
                                        value="{{ env('INSTAMOJO_AUTH_TOKEN') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-4">
                                        <label class="align-self-center"
                                            for="rtl">{{ translate('Sandbox Activation') }}</label>
                                    </div>
                                    <div class="col-4">
                                        <label class="aiz-switch aiz-switch-success mb-0">
                                            <input type="checkbox" @if (\App\Utility\SettingsUtility::get_settings_value('instamojo_sandbox_checkbox') == 1) checked @endif
                                                name="instamojo_sandbox_checkbox">
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-3 text-right">
                                <button type="submit" class="btn btn-primary">{{ translate('Update') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Paytm  -->
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">{{ translate('Paytm Configuration') }}</h5>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" action="{{ route('payment-config.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="payment_method" value="paytm">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-2">
                                        <label class="align-self-center"
                                            for="rtl">{{ translate('Activation') }}</label>
                                    </div>
                                    <div class="col-4">
                                        <label class="aiz-switch aiz-switch-success mb-0">
                                            <input type="checkbox" @if (\App\Utility\SettingsUtility::get_settings_value('paytm_activation_checkbox') == 1) checked @endif
                                                name="paytm_activation_checkbox">
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group">
                                    <span class="input-group-text">{{ translate('Environment') }}</span>
                                    <input type="hidden" name="types[]" value="PAYTM_ENVIRONMENT">
                                    <input type="text" name="PAYTM_ENVIRONMENT" class="form-control"
                                        value="{{ env('PAYTM_ENVIRONMENT') }}">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group">
                                    <span class="input-group-text">{{ translate('Merchant ID') }}</span>
                                    <input type="hidden" name="types[]" value="PAYTM_MERCHANT_ID">
                                    <input type="text" name="PAYTM_MERCHANT_ID" class="form-control"
                                        value="{{ env('PAYTM_MERCHANT_ID') }}">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group">
                                    <span class="input-group-text">{{ translate('Merchant Key') }}</span>
                                    <input type="hidden" name="types[]" value="PAYTM_MERCHANT_KEY">
                                    <input type="text" name="PAYTM_MERCHANT_KEY" class="form-control"
                                        value="{{ env('PAYTM_MERCHANT_KEY') }}">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group">
                                    <span class="input-group-text">{{ translate('Merchant Website') }}</span>
                                    <input type="hidden" name="types[]" value="PAYTM_MERCHANT_WEBSITE">
                                    <input type="text" name="PAYTM_MERCHANT_WEBSITE" class="form-control"
                                        value="{{ env('PAYTM_MERCHANT_WEBSITE') }}">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group">
                                    <span class="input-group-text">{{ translate('Paytm Channel') }}</span>
                                    <input type="hidden" name="types[]" value="PAYTM_CHANNEL">
                                    <input type="text" name="PAYTM_CHANNEL" class="form-control"
                                        value="{{ env('PAYTM_CHANNEL') }}">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group">
                                    <span class="input-group-text">{{ translate('Industry Type') }}</span>
                                    <input type="hidden" name="types[]" value="PAYTM_INDUSTRY_TYPE">
                                    <input type="text" name="PAYTM_INDUSTRY_TYPE" class="form-control"
                                        value="{{ env('PAYTM_INDUSTRY_TYPE') }}">
                                </div>
                            </div>
                            <div class="form-group mb-3 text-right">
                                <button type="submit" class="btn btn-primary">{{ translate('Update') }}</button>
                            </div>
                        </form>
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
@section('script')
    <!-- BEGIN PAGE LEVEL SCRIPTS -->

    <!-- END PAGE LEVEL SCRIPTS -->
    <script type="text/javascript">
        function sort_projects(el) {
            $('#sort_projects').submit();
        }

        function project_approval(el) {
            if (el.checked) {
                var status = 1;
            } else {
                var status = 0;
            }
            $.post('{{ route('project_approval') }}', {
                _token: '{{ csrf_token() }}',
                id: el.value,
                status: status
            }, function(data) {
                if (data == 1) {
                    AIZ.plugins.notify('success', 'Project has been approved successfully.');
                } else {
                    AIZ.plugins.notify('danger', 'Something went wrong');
                }
            });
        }
    </script>
@endsection
