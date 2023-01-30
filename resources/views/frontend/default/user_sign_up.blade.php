@extends('layouts.app')

@section('content')
    <div class="auth-container d-flex">
        <div class="container mx-auto align-self-center">
            <div class="row">
                <div class="col-xxl-6 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center mx-auto">
                    <div class="card mt-3 mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="text-center">
                                    <a href="">
                                        <img src="{{ asset('templete') }}/src/assets/img/zerop.png" class="navbar-logo"
                                            alt="logo" style="height: 110px; width:auto;">
                                    </a>
                                </div>
                                <div class="col-md-12 mb-3 text-center">
                                    <h4>Join with us</h4>
                                    <p>Fill out the form to get started</p>
                                    <hr>
                                </div>
                                <form class="" id="reg-form" method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <input type="hidden" name="user_types[]" value="expert">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Full Name</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                placeholder="Full Name" name="name" required>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                placeholder="Email" name="email" required>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Phone</label>
                                            <input type="number" class="form-control @error('phone') is-invalid @enderror"
                                                placeholder="Your Phone Number" name="phone" required>
                                            @error('phone')
                                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-4">
                                            <label class="form-label ">Password</label>
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                placeholder="********" name="password" required>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-4">
                                            <label class="form-label ">Confirm Password</label>
                                            <input type="password" class="form-control" placeholder="********"
                                                name="password_confirmation" required>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    @php
                                        $reffer_code = session::get('refercode');
                                    @endphp
                                    <div class="col-12">
                                        <div class="mb-4">
                                            <label class="form-label ">Refferal Code</label>
                                            <input type="text" class="form-control" name="refer"
                                                @if (!empty($reffer_code)) value="{{ $reffer_code }}" @endif>
                                        </div>
                                    </div>
                                    {{--
                                    <div class="form-group mb-4">
                                        <div class="aiz-radio-inline">
                                            <label class="aiz-radio">
                                                <input type="radio" name="user_types[]" value="expert" checked="checked"> {{ translate('As A Expert') }}
                                                <span class="aiz-rounded-check"></span>
                                            </label>
                                            &nbsp;&nbsp;
                                            <label class="aiz-radio">
                                                <input type="radio" name="user_types[]" value="client"> {{ translate('As A Client') }}
                                                <span class="aiz-rounded-check"></span>
                                            </label>
                                        </div>
                                    </div> --}}
                                    @if (get_setting('google_recaptcha_activation_checkbox') == 1)
                                        <div class="form-group">
                                            <div class="g-recaptcha" data-sitekey="{{ env('CAPTCHA_KEY') }}"></div>
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <div class="aiz-checkbox-list">
                                            <label class="aiz-checkbox">
                                                <input type="checkbox" name="condition" required>
                                                <span
                                                    class="fs-13">{{ translate('By signing up you agree to our terms and conditions') }}.</span>
                                                <span class="aiz-square-check"></span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-12 text-center">
                                        <div class="mb-4">
                                            <button class="btn btn-outline-info">SIGN UP</button>
                                        </div>
                                    </div>
                                </form>
                                @if (\App\Utility\SettingsUtility::get_settings_value('facebook_login_activation_checkbox') == 1 ||
                                    \App\Utility\SettingsUtility::get_settings_value('twitter_login_activation_checkbox') == 1 ||
                                    \App\Utility\SettingsUtility::get_settings_value('google_login_activation_checkbox') == 1 ||
                                    \App\Utility\SettingsUtility::get_settings_value('linkedin_login_activation_checkbox') == 1)
                                    <div class="col-12 mb-4">
                                        <div class="">
                                            <div class="seperator">
                                                <hr>
                                                <div class="seperator-text"> <span>Or continue with</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    @if (\App\Utility\SettingsUtility::get_settings_value('google_login_activation_checkbox') == 1)
                                        <div class="col-sm-3 col-12">
                                            <div class="mb-4">
                                                <a href="{{ route('social.login', ['provider' => 'google']) }}"
                                                    class="btn  btn-social-login w-100 ">
                                                    <img src="{{ asset('templete') }}/src/assets/img/google-gmail.svg"
                                                        alt="" class="img-fluid">
                                                </a>
                                            </div>
                                        </div>
                                    @endif

                                    @if (\App\Utility\SettingsUtility::get_settings_value('facebook_login_activation_checkbox') == 1)
                                        <div class="col-sm-3 col-12">
                                            <div class="mb-4">
                                                <a href="{{ route('social.login', ['provider' => 'facebook']) }}"
                                                    class="btn  btn-social-login w-100">
                                                    <img src="{{ asset('templete') }}/src/assets/img/facebook.svg"
                                                        alt="" class="img-fluid">
                                                </a>
                                            </div>
                                        </div>
                                    @endif
                                    @if (\App\Utility\SettingsUtility::get_settings_value('twitter_login_activation_checkbox') == 1)
                                        <div class="col-sm-3 col-12">
                                            <div class="mb-4">
                                                <a href="{{ route('social.login', ['provider' => 'twitter']) }}"
                                                    class="btn  btn-social-login w-100">
                                                    <img src="{{ asset('templete') }}/src/assets/img/twitter.svg"
                                                        alt="" class="img-fluid">
                                                </a>
                                            </div>
                                        </div>
                                    @endif
                                    @if (\App\Utility\SettingsUtility::get_settings_value('linkedin_login_activation_checkbox') == 1)
                                        <div class="col-sm-3 col-12">
                                            <div class="mb-4">
                                                <a href="{{ route('social.login', ['provider' => 'linkedin']) }}"
                                                    class="btn  btn-social-login w-100">
                                                    <img src="{{ asset('templete') }}/src/assets/img/linkedin.svg"
                                                        alt="" class="img-fluid">
                                                </a>
                                            </div>
                                        </div>
                                    @endif
                                @endif
                                <div class="col-12">
                                    <div class="text-center">
                                        <p class="mb-0">"Already have an account?<a href="{{ route('user.login') }}"
                                                class="text-warning"> Login to your account</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    @if (get_setting('google_recaptcha_activation_checkbox') == 1)
        <script src="https://www.google.com/recaptcha/api.js" async defer>
            $(document).ready(function() {
                $("#reg-form").on("submit", function(evt) {
                    var response = grecaptcha.getResponse();
                    if (response.length == 0) {
                        //reCaptcha not verified
                        alert("please verify you are humann!");
                        evt.preventDefault();
                        return false;
                    }
                    //captcha verified
                    //do the rest of your validations here
                    $("#reg-form").submit();
                });
            });
        </script>
    @endif
@endsection
