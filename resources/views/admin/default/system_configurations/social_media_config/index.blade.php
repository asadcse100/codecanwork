@extends('admin.default.layouts.app')

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing layout-top-spacing">
        <div class="row">
            <!-- Facebook Login -->
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h6>{{ translate('Facebook Login') }}</h6>
                    </div>
                    <form class="form-horizontal" action="{{ route('social-media-config.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="social_media_type" value="facebook_login">
                        <div class="row">
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0">
                                <div class="widget-content widget-content-area blog-create-section">
                                    <div class="row p-4">
                                        <div class="form-group mb-3">
                                            <div class="col-2">
                                                <label class="align-self-center"
                                                    for="rtl">{{ translate('Activation') }}</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <label class="aiz-switch aiz-switch-success mb-0">
                                                <input type="checkbox" @if (get_setting('facebook_login_activation_checkbox') == 1) checked @endif
                                                    name="facebook_login_activation_checkbox">
                                                <span></span>
                                            </label>
                                        </div>
                                        <div class="form-group mb-3">
                                            <div class="input-group">
                                                <span class="input-group-text">{{ translate('APP ID') }}</span>
                                                <input type="hidden" name="types[]" value="FACEBOOK_APP_ID">
                                                <input type="text" name="FACEBOOK_APP_ID" class="form-control"
                                                    value="{{ env('FACEBOOK_APP_ID') }}">
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <div class="input-group">
                                                <span class="input-group-text">{{ translate('APP SECRET') }}</span>
                                                <input type="hidden" name="types[]" value="FACEBOOK_APP_SECRET">
                                                <input type="text" name="FACEBOOK_APP_SECRET" class="form-control"
                                                    value="{{ env('FACEBOOK_APP_SECRET') }}">
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <button type="submit"
                                                class="btn btn-outline-info">{{ translate('Update') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Google Login -->
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h6>{{ translate('Google Login') }}</h6>
                    </div>
                    <form class="form-horizontal" action="{{ route('social-media-config.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="social_media_type" value="google_login">
                        <div class="row">
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0">
                                <div class="widget-content widget-content-area blog-create-section">

                                    <div class="row p-4">
                                        <div class="form-group mb-3">
                                            <div class="col-2">
                                                <label class="align-self-center"
                                                    for="rtl">{{ translate('Activation') }}</label>
                                            </div>
                                            <div class="col-2">
                                                <label class="aiz-switch aiz-switch-success mb-0">
                                                    <input type="checkbox" @if (get_setting('google_login_activation_checkbox') == 1) checked @endif
                                                        name="google_login_activation_checkbox">
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <div class="input-group">
                                                <span class="input-group-text">{{ translate('GOOGLE CLIENT ID') }}</span>
                                                <input type="hidden" name="types[]" value="GOOGLE_CLIENT_ID">
                                                <input type="text" name="GOOGLE_CLIENT_ID" class="form-control"
                                                    value="{{ env('GOOGLE_CLIENT_ID') }}">
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <div class="input-group">
                                                <span
                                                    class="input-group-text">{{ translate('GOOGLE CLIENT SECRET') }}</span>
                                                <input type="hidden" name="types[]" value="GOOGLE_CLIENT_SECRET">
                                                <input type="text" name="GOOGLE_CLIENT_SECRET" class="form-control"
                                                    value="{{ env('GOOGLE_CLIENT_SECRET') }}">
                                            </div>
                                        </div>
                                        <div class="form-group mb-3 text-right">
                                            <button type="submit"
                                                class="btn btn-outline-info">{{ translate('Update') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

            <!-- Twitter Login -->
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h6>{{ translate('Twitter Login') }}</h6>
                    </div>
                    <form class="form-horizontal" action="{{ route('social-media-config.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="social_media_type" value="twitter_login">
                        <div class="row">
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0">
                                <div class="widget-content widget-content-area blog-create-section">

                                    <div class="row p-4">
                                        <div class="form-group mb-3">
                                            <div class="col-2">
                                                <label class="align-self-center"
                                                    for="rtl">{{ translate('Activation') }}</label>
                                            </div>
                                            <div class="col-2">
                                                <label class="aiz-switch aiz-switch-success mb-0">
                                                    <input type="checkbox" @if (get_setting('twitter_login_activation_checkbox') == 1) checked @endif
                                                        name="twitter_login_activation_checkbox">
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group mb-3">
                                            <div class="input-group">
                                                <span class="input-group-text">{{ translate('TWITTER CLIENT ID') }}</span>
                                                <input type="hidden" name="types[]" value="TWITTER_CLIENT_ID">
                                                <input type="text" name="TWITTER_CLIENT_ID" class="form-control"
                                                    value="{{ env('TWITTER_CLIENT_ID') }}">
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <div class="input-group">
                                                <span
                                                    class="input-group-text">{{ translate('TWITTER CLIENT SECRET') }}</span>
                                                <input type="hidden" name="types[]" value="TWITTER_CLIENT_SECRET">
                                                <input type="text" name="TWITTER_CLIENT_SECRET" class="form-control"
                                                    value="{{ env('TWITTER_CLIENT_SECRET') }}">
                                            </div>
                                        </div>
                                        <div class="form-group mb-3 text-right">
                                            <button type="submit"
                                                class="btn btn-outline-info">{{ translate('Update') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- LinkedIn Login -->
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h6>{{ translate('LinkedIn Login') }}</h6>
                    </div>
                    <form class="form-horizontal" action="{{ route('social-media-config.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="social_media_type" value="linkedin_login">
                        <div class="row">
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0">
                                <div class="widget-content widget-content-area blog-create-section">

                                    <div class="row p-4">
                                        <div class="form-group mb-3">
                                            <div class="col-2">
                                                <label class="align-self-center"
                                                    for="rtl">{{ translate('Activation') }}</label>
                                            </div>
                                            <div class="col-2">
                                                <label class="aiz-switch aiz-switch-success mb-0">
                                                    <input type="checkbox" @if (get_setting('linkedin_login_activation_checkbox') == 1) checked @endif
                                                        name="linkedin_login_activation_checkbox">
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group mb-3">
                                            <div class="input-group">
                                                <span
                                                    class="input-group-text">{{ translate('LINKEDIN CLIENT ID') }}</span>
                                                <input type="hidden" name="types[]" value="LINKEDIN_CLIENT_ID">
                                                <input type="text" name="LINKEDIN_CLIENT_ID" class="form-control"
                                                    value="{{ env('LINKEDIN_CLIENT_ID') }}">
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <div class="input-group">
                                                <span
                                                    class="input-group-text">{{ translate('LINKEDIN CLIENT SECRET') }}</span>
                                                <input type="hidden" name="types[]" value="LINKEDIN_CLIENT_SECRET">
                                                <input type="text" name="LINKEDIN_CLIENT_SECRET" class="form-control"
                                                    value="{{ env('LINKEDIN_CLIENT_SECRET') }}">
                                            </div>
                                        </div>
                                        <div class="form-group mb-3 text-right">
                                            <button type="submit"
                                                class="btn btn-outline-info">{{ translate('Update') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Google Analytics -->
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h6>{{ translate('Google Analytics') }}</h6>
                    </div>
                    <form class="form-horizontal" action="{{ route('social-media-config.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="social_media_type" value="google_analytics">
                        <div class="row">
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0">
                                <div class="widget-content widget-content-area blog-create-section">

                                    <div class="row p-4">
                                        <div class="form-group mb-3">
                                            <div class="col-2">
                                                <label class="align-self-center"
                                                    for="rtl">{{ translate('Activation') }}</label>
                                            </div>
                                            <div class="col-2">
                                                <label class="aiz-switch aiz-switch-success mb-0">
                                                    <input type="checkbox" @if (get_setting('google_analytics_activation_checkbox') == 1) checked @endif
                                                        name="google_analytics_activation_checkbox">
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group mb-3">
                                            <div class="input-group">
                                                <span class="input-group-text">{{ translate('TRACKING ID') }}</span>
                                                <input type="hidden" name="types[]"
                                                    value="GOOGLE_ANALYTICS_TRACKING_ID">
                                                <input type="text" name="GOOGLE_ANALYTICS_TRACKING_ID"
                                                    class="form-control"
                                                    value="{{ env('GOOGLE_ANALYTICS_TRACKING_ID') }}">
                                            </div>
                                        </div>
                                        <div class="form-group mb-3 text-right">
                                            <button type="submit"
                                                class="btn btn-outline-info">{{ translate('Update') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Google reCAPTCHA -->
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h6>{{ translate('Google reCAPTCHA') }}</h6>
                    </div>
                    <form class="form-horizontal" action="{{ route('social-media-config.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="social_media_type" value="google_recaptcha">
                        <div class="row">
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0">
                                <div class="widget-content widget-content-area blog-create-section">

                                    <div class="row p-4">
                                        <div class="form-group mb-3">
                                            <div class="col-2">
                                                <label class="align-self-center"
                                                    for="rtl">{{ translate('Activation') }}</label>
                                            </div>
                                            <div class="col-2">
                                                <label class="aiz-switch aiz-switch-success mb-0">
                                                    <input type="checkbox" @if (get_setting('google_recaptcha_activation_checkbox') == 1) checked @endif
                                                        name="google_recaptcha_activation_checkbox">
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group mb-3">
                                            <div class="input-group">
                                                <span class="input-group-text">{{ translate('Site KEY') }}</span>
                                                <input type="hidden" name="types[]" value="CAPTCHA_KEY">
                                                <input type="text" name="CAPTCHA_KEY" class="form-control"
                                                    value="{{ env('CAPTCHA_KEY') }}">
                                            </div>
                                        </div>
                                        <div class="form-group mb-3 text-right">
                                            <button type="submit"
                                                class="btn btn-outline-info">{{ translate('Update') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- facebook Chat -->
            <div class="col-lg-6 mb-4">
                <div class="card ">
                    <div class="card-header">
                        <h5 class="mb-0 h6">{{ translate('Facebook Chat Setting') }}</h5>
                    </div>
                    <form class="form-horizontal" action="{{ route('social-media-config.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="social_media_type" value="facebook_chat">
                        <div class="row">
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0">
                                <div class="widget-content widget-content-area blog-create-section">

                                    <div class="row p-4">
                                        <div class="form-group mb-3">
                                            <div class="col-2">
                                                <label class="align-self-center "
                                                    for="rtl">{{ translate('Activation') }}</label>
                                            </div>
                                            <div class="col-2">
                                                <label class="aiz-switch aiz-switch-success mb-0">
                                                    <input type="checkbox" @if (get_setting('facebook_chat_activation_checkbox') == 1) checked @endif
                                                        name="facebook_chat_activation_checkbox">
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group mb-3">
                                            <div class="input-group">
                                                <span class="input-group-text">{{ translate('FACEBOOK PAGE ID') }}</span>
                                                <input type="hidden" name="types[]" value="FACEBOOK_PAGE_ID">
                                                <input type="text" name="FACEBOOK_PAGE_ID" class="form-control"
                                                    value="{{ env('FACEBOOK_PAGE_ID') }}">
                                            </div>
                                        </div>
                                        <div class="form-group mb-3 text-right">
                                            <button type="submit"
                                                class="btn btn-outline-info">{{ translate('Update') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6 ">
                            {{ translate('Please be carefull when you are configuring Facebook chat. For incorrect configuration you will not get messenger icon on your user-end site.') }}
                        </h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group mar-no">
                            <li class="list-group-item text-dark">1.
                                {{ translate('Login into your facebook page') }}</li>
                            <li class="list-group-item text-dark">2.
                                {{ translate('Find the About option of your facebook page') }}.</li>
                            <li class="list-group-item text-dark">3.
                                {{ translate('At the very bottom, you can find the \“Facebook Page ID\”') }}.
                            </li>
                            <li class="list-group-item text-dark">4.
                                {{ translate('Go to Settings of your page and find the option of \"Advance Messaging\"') }}.
                            </li>
                            <li class="list-group-item text-dark">5.
                                {{ translate('Scroll down that page and you will get \"white listed domain\"') }}.
                            </li>
                            <li class="list-group-item text-dark">6.
                                {{ translate('Set your website domain name') }}.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">{{ translate('Facebook Pixel Setting') }}</h5>
                    </div>
                    <form class="form-horizontal" action="{{ route('social-media-config.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="social_media_type" value="fb_pixel">
                        <div class="row">
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0">
                                <div class="widget-content widget-content-area blog-create-section">

                                    <div class="row p-4">
                                        <div class="form-group mb-3">
                                            <div class="col-2">
                                                <label class="align-self-center"
                                                    for="rtl">{{ translate('Activation') }}</label>
                                            </div>
                                            <div class="col-2">
                                                <label class="aiz-switch aiz-switch-success mb-0">
                                                    <input type="checkbox" @if (get_setting('fb_pixel_activation_checkbox') == 1) checked @endif
                                                        name="fb_pixel_activation_checkbox">
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group mb-3">
                                            <div class="input-group">
                                                <span class="input-group-text">{{ translate('Pixel ID') }}</span>
                                                <input type="hidden" name="types[]" value="FACEBOOK_PIXEL_ID">
                                                <input type="text" name="FACEBOOK_PIXEL_ID" class="form-control"
                                                    value="{{ env('FACEBOOK_PIXEL_ID') }}">
                                            </div>
                                        </div>
                                        <div class="form-group mb-3 text-right">
                                            <button type="submit"
                                                class="btn btn-outline-info">{{ translate('Update') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">
                            {{ translate('Please be carefull when you are configuring Facebook pixel.') }}
                        </h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group mar-no">
                            <li class="list-group-item text-dark">1.
                                {{ translate('Log in to Facebook and go to your Ads Manager account') }}.
                            </li>
                            <li class="list-group-item text-dark">2.
                                {{ translate('Open the Navigation Bar and select Events Manager') }}.
                            </li>
                            <li class="list-group-item text-dark">3.
                                {{ translate('Copy your Pixel ID from underneath your Site Name and paste the number into Facebook Pixel ID field') }}.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">{{ translate('Facebook Comment Setting') }}
                        </h5>
                    </div>
                        <form class="form-horizontal" action="{{ route('social-media-config.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="social_media_type" value="fb_comment">
                            <div class="row">
                                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0">
                                    <div class="widget-content widget-content-area blog-create-section">

                                        <div class="row p-4">
                                            <div class="form-group mb-3">
                                                <div class="col-2">
                                                    <label class="align-self-center"
                                                        for="rtl">{{ translate('Activation') }}</label>
                                                </div>
                                                <div class="col-2">
                                                    <label class="aiz-switch aiz-switch-success mb-0">
                                                        <input type="checkbox"
                                                            @if (get_setting('fb_comment_activation_checkbox') == 1) checked @endif
                                                            name="fb_comment_activation_checkbox">
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-group mb-3">
                                                <div class="input-group">
                                                    <span
                                                        class="input-group-text">{{ translate('Facebook App ID') }}</span>
                                                    <input type="hidden" name="types[]" value="FACEBOOK_COMMENT_APP_ID">
                                                    <input type="text" name="FACEBOOK_COMMENT_APP_ID"
                                                        class="form-control"
                                                        value="{{ env('FACEBOOK_COMMENT_APP_ID') }}">
                                                </div>
                                            </div>
                                            <div class="form-group mb-3 text-right">
                                                <button type="submit"
                                                    class="btn btn-outline-info">{{ translate('Update') }}</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">
                            {{ translate('Please be carefull when you are configuring Facebook Comment. For incorrect configuration you will not get comment section on your user-end site.') }}
                        </h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group mar-no">
                            <li class="list-group-item text-dark">
                                1. {{ translate('Login into your facebook page') }}
                            </li>
                            <li class="list-group-item text-dark">
                                2.
                                {{ translate('After then go to this URL https://developers.facebook.com/apps/') }}.
                            </li>
                            <li class="list-group-item text-dark">
                                3. {{ translate('Create Your App') }}.
                            </li>
                            <li class="list-group-item text-dark">
                                4. {{ translate('In Dashboard page you will get your App ID') }}.
                            </li>
                        </ul>
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
