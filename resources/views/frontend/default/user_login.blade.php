@extends('layouts.blank')

@section('content')
    <div class="auth-container d-flex">
        <div class="container mx-auto align-self-center">
            <div class="row">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center mx-auto">
                    <div class="card mt-3 mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="text-center">
                                    <a href="">
                                        <img src="{{ asset('templete') }}/src/assets/img/zerop.png" class="navbar-logo"
                                            alt="logo" style="height: 170px; width:auto;">
                                    </a>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <h2>Sign In</h2>
                                    <p>Enter your email or phone and password to Sign In</p>
                                    <hr>
                                </div>
                                <form method="POST" action="{{ route('login') }}" class="needs-validation">
                                    @csrf
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Email / Phone</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                placeholder="Email/Phone" name="email" required>
                                            {{-- @error('email')
                                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                            @enderror --}}
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-4">
                                            <label class="form-label ">Password</label>
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                placeholder="********" name="password" required>
                                            {{-- @error('password')
                                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                            @enderror --}}
                                        </div>
                                    </div>

                                    <div class="mb-3 text-right">
                                        <a class="link-muted text-capitalize font-weight-normal"
                                            href="{{ route('password.request') }}">{{ translate('Forgot Password?') }}</a>
                                    </div>

                                    <div class="col-12 text-center">
                                        <div class="mb-4">
                                            <button class="btn btn-outline-info">SIGN IN</button>
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
                                        <p class="mb-0">Don't have an account?<a href="{{ route('register') }}"
                                                class="text-warning"> Create an account</a></p>
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
