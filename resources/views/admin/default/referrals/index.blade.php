@extends('admin.default.layouts.app')

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing layout-top-spacing">
        <div class="row layout-top-spacing">
            <div class="col-lg-12 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h1 class="mb-0 h6">{{ translate('Referral Systems') }}</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ Route('update.referral') }}" class="form-settings" method="POST">
                            <div class="form-sets gy-3 wide-md">
                                <div class="row g-3 align-center">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="form-label"
                                                for="enable-referral-system">{{ __('Referral Systems') }}</label>
                                            <span
                                                class="form-note w-max-350px">{{ __('Users able to invite people using their referral id.') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            {{-- <div class="custom-control custom-switch">
                                                    <input class="switch-option-value" type="hidden" name="system" value="{{ sys_settings('referral_system') ?? 'no' }}">
                                                    <input id="enable-referral-system" type="checkbox" class="custom-control-input switch-option"
                                                           data-switch="yes"{{ (sys_settings('referral_system', 'no') == 'yes') ? ' checked=""' : ''}}>
                                                    <label for="enable-referral-system" class="custom-control-label" data-switch="yes"{{ (sys_settings('referral_system', 'no') == 'yes') ? ' checked=""' : ''}}>{{ __('Enable') }}</label>
                                                </div> --}}
                                            <div class="form-check form-switch form-check-inline">
                                                <input class="switch-option-value" type="hidden" name="system"
                                                    value="{{ sys_settings('referral_system') ?? 'no' }}">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="enable-referral-system" name="system"
                                                    value="{{ sys_settings('referral_system') ?? 'no' }}">
                                                <label class="form-check-label"
                                                    for="enable-referral-system">{{ __('Enable') }}</label>
                                            </div>
                                            <span class="form-note mt-1"><em
                                                    class="text-danger">{{ __('Application only track referral id when it enable.') }}</em></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-3 align-center">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="form-label"
                                                for="show-referred-users">{{ __('Referral List Table') }}</label>
                                            <span
                                                class="form-note w-max-350px">{{ __('Show referred user list in referral page.') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <div class="custom-control custom-switch">
                                                <input class="switch-option-value" type="hidden" name="show_referred_users"
                                                    value="{{ sys_settings('referral_show_referred_users') ?? 'no' }}">
                                                {{-- <input id="show-referred-users" type="checkbox" class="custom-control-input switch-option"
                                                           data-switch="yes"{{ (sys_settings('referral_show_referred_users', 'no') == 'yes') ? ' checked=""' : ''}}>
                                                    <label for="show-referred-users" class="custom-control-label">{{ __('Enable') }}</label> --}}
                                            </div>
                                            <div class="form-check form-switch form-check-inline">
                                                {{-- <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" name="show_referred_users" value="{{ sys_settings('referral_show_referred_users') ?? 'no' }}"> --}}
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="flexSwitchCheckChecked"
                                                    data-switch="yes"{{ sys_settings('referral_show_referred_users', 'no') == 'yes' ? ' checked=""' : '' }}>
                                                <label class="form-check-label"
                                                    for="flexSwitchCheckChecked">{{ __('Enable') }}</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-3 align-top">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="form-label"
                                                for="currency-supported">{{ __('Referral Table Options') }}</label>
                                            <span class="form-note">
                                                {{ __('Additional option for referral table in referral page.') }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <ul class="custom-control-group g-2" style="list-style: none;">
                                            <li>
                                                <div class="custom-control custom-control-sm custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        name="user_table_opts[]" id="earning"
                                                        value="earning"{{ in_array('earning', sys_settings('referral_user_table_opts', [])) ? ' checked' : '' }}>
                                                    <label class="custom-control-label"
                                                        for="earning">{{ __('Show Earning') }}</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-control-sm custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        name="user_table_opts[]" id="compact"
                                                        value="compact"{{ in_array('compact', sys_settings('referral_user_table_opts', [])) ? ' checked' : '' }}>
                                                    <label class="custom-control-label"
                                                        for="compact">{{ __('Shorten Username') }}</label>
                                                </div>
                                            </li>
                                            <input type="hidden" name="user_table_opts[]">
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="divider"></div>
                            <div class="form-sets gy-3 wide-md">
                                <div class="row g-3 align-start">
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label class="form-label"
                                                for="invite-title">{{ __('Invitation Card Title') }}</label>
                                            <span class="form-note">
                                                {!! __('Display the title on invitation card block.') !!}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control form-control-sm" id="invite-title"
                                                    name="invite_title"
                                                    value="{{ sys_settings('referral_invite_title') }}">
                                            </div>
                                            <div class="form-note">
                                                {{ __('Eg. Refer Us & Earn') }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-3 align-start">
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label class="form-label"
                                                for="invite-text">{{ __('Invitation Card Short Text') }}</label>
                                            <span class="form-note">
                                                {!! __('Display shorten text on invitation card block.') !!}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control form-control-sm"
                                                    id="invite-text" name="invite_text"
                                                    value="{{ sys_settings('referral_invite_text') }}">
                                            </div>
                                            <div class="form-note">
                                                {{ __('Eg. Use the below link to invite your friends.') }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-3 align-start">
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label class="form-label"
                                                for="referral-landing-page">{{ __('Invitation Page Redirection') }}</label>
                                            <span class="form-note">
                                                {!! __('Select the page you would like redirect from referral link.') !!}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="form-group">
                                            <div class="form-control-wrap w-max-250px">
                                                <select name="invite_redirect" class="form-select form-control-sm">
                                                    <option
                                                        value="register"{{ sys_settings('referral_invite_redirect', 'register') == 'register' ? ' selected' : '' }}>
                                                        {{ __(':name Page', ['name' => __('Register')]) }}
                                                    </option>
                                                    <option
                                                        value="invest"{{ sys_settings('referral_invite_redirect') == 'invest' ? ' selected' : '' }}>
                                                        {{ __(':name Page', ['name' => __('Investment')]) }}
                                                    </option>
                                                    <option
                                                        value="home"{{ sys_settings('referral_invite_redirect') == 'home' ? ' selected' : '' }}>
                                                        {{ __(':name Page', ['name' => __('Home')]) }}
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="divider"></div>

                            <h5 class="title">{{ __('Referral Commission') }} <span
                                    class="text-primary small fs-14px ucap"> - {{ __('Who Refer') }}</span></h5>
                            <div class="form-sets gy-3 wide-md">
                                <div class="row g-3 align-center">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="form-label"
                                                for="referer-signup-bonus-enable">{{ __('Allow on Referral Signup') }}</label>
                                            <span
                                                class="form-note w-max-350px">{{ __('Give direct commission if someone registered through referral.') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <div class="custom-control custom-switch">
                                                <input class="switch-option-value" type="hidden" name="signup_referer"
                                                    value="{{ sys_settings('referral_signup_referer') ?? 'no' }}">

                                            </div>
                                            <div class="form-check form-switch form-check-inline">

                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="flexSwitchCheckDefault"
                                                    data-switch="yes"{{ sys_settings('referral_signup_referer', 'no') == 'yes' ? ' checked=""' : '' }}>
                                                <label class="form-check-label"
                                                    for="flexSwitchCheckDefault">{{ __('Allowed') }}</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-3 align-center">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="form-label"
                                                for="referer-signup-bonus-amount">{{ __('Commission on each Signup') }}</label>
                                            <span
                                                class="form-note">{{ __('The amount will be received once email verification completed.') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <div class="form-control-wrap w-max-250px">
                                                <div class="form-text-hint"><span>{{ base_currency() }}</span></div>
                                                <input type="number" id="referer-signup-bonus-amount"
                                                    class="form-control form-control-sm" name="signup_referer_bonus"
                                                    value="{{ sys_settings('referral_signup_referer_bonus', '0') }}"
                                                    min="0">
                                            </div>
                                            <div class="form-note">{{ __('Specify the commission amount to referer.') }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-sets gy-3 wide-md">
                                <div class="row g-3 align-center">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="form-label"
                                                for="referer-deposit-bonus-enable">{{ __('Allow on Successful Deposit') }}</label>
                                            <span
                                                class="form-note">{{ __('Allow commission on successful deposit for referral signup.') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <div class="form-check form-switch form-check-inline">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="flexSwitchCheckChecked" name="deposit_referer"
                                                    value="{{ sys_settings('referral_deposit_referer') ?? 'no' }}">
                                                {{-- <input id="referer-deposit-bonus-enable" type="checkbox" class="custom-control-input switch-option"
                                                           data-switch="yes"{{ (sys_settings('referral_deposit_referer', 'no') == 'yes') ? ' checked=""' : ''}}> --}}
                                                <label class="form-check-label"
                                                    for="flexSwitchCheckChecked">{{ __('Allowed') }}</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-3 align-center">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="form-label"
                                                for="referer-deposit-bonus-allowed">{{ __('Bonus Allowed for Deposit') }}</label>
                                            <span
                                                class="form-note">{{ __('How many times bonus will apply on deposit.') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="row gx-1 gy-1">
                                            <div class="col-6 w-max-250px">
                                                <div class="form-group">
                                                    <div class="form-control-wrap">
                                                        <select class="form-select form-control-sm"
                                                            name="deposit_referer_allow"
                                                            id="referer-deposit-bonus-allowed">
                                                            <option
                                                                value="only"{{ sys_settings('referral_deposit_referer_allow', 'only') == 'only' ? ' selected' : '' }}>
                                                                {{ __('First Deposit Only') }}</option>
                                                            <option
                                                                value="all"{{ sys_settings('referral_deposit_referer_allow', 'only') == 'all' ? ' selected' : '' }}>
                                                                {{ __('For All Deposit') }}</option>
                                                            <option
                                                                value="number"{{ sys_settings('referral_deposit_referer_allow', 'only') == 'number' ? ' selected' : '' }}>
                                                                {{ __('Number of Deposit') }}</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-note">{{ __('Allowed Bonus') }}</div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <div class="form-control-wrap w-max-100px">
                                                        <input type="number" placeholder="2"
                                                            class="form-control form-control-sm"
                                                            name="deposit_referer_max"
                                                            value="{{ sys_settings('referral_deposit_referer_max', '') }}"
                                                            min="2">
                                                    </div>
                                                    <div class="form-note">{{ __('Number') }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-3 align-center">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="form-label"
                                                for="referer-deposit-bonus-amount">{{ __('Commission on Deposit') }}</label>
                                            <span
                                                class="form-note">{{ __('The amount will be received once first deposit completed.') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="row gx-1 gy-1 w-max-250px">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <div class="form-control-wrap">
                                                        <input type="number" id="referer-deposit-bonus-amount"
                                                            class="form-control form-control-sm"
                                                            name="deposit_referer_bonus"
                                                            value="{{ sys_settings('referral_deposit_referer_bonus', '0') }}"
                                                            min="0">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <select class="form-select form-control-sm"
                                                        name="deposit_referer_type">
                                                        <option
                                                            value="percent"{{ sys_settings('referral_deposit_referer_type', 'percent') == 'percent' ? ' selected' : '' }}>
                                                            {{ __('Percent') }}</option>
                                                        <option
                                                            value="fixed"{{ sys_settings('referral_deposit_referer_type', 'percent') == 'fixed' ? ' selected' : '' }}>
                                                            {{ __('Fixed (:base)', ['base' => base_currency()]) }}
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-note">
                                                    {{ __('Specify the commission amount to referer.') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="divider"></div>

                            <h5 class="title">{{ __('Commission for User') }} <span
                                    class="text-primary small fs-14px ucap"> - {{ __('Who Joined') }}</span></h5>
                            <div class="form-sets gy-3 wide-md">
                                <div class="row g-3 align-center">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="form-label"
                                                for="user-signup-bonus-enable">{{ __('Allow on Referral Signup') }}</label>
                                            <span
                                                class="form-note w-max-350px">{{ __('Give direct commission to user who registered via referral.') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            {{-- <div class="custom-control custom-switch">
                                                    <input class="switch-option-value" type="hidden" name="signup_user" value="{{ sys_settings('referral_signup_user') ?? 'no' }}">
                                                    <input id="user-signup-bonus-enable" type="checkbox" class="custom-control-input switch-option" data-switch="yes"{{ (sys_settings('referral_signup_user', 'no') == 'yes') ? ' checked=""' : ''}}>
                                                    <label for="user-signup-bonus-enable" class="custom-control-label">{{ __('Allowed') }}</label>
                                                </div> --}}
                                            <div class="form-check form-switch form-check-inline">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="flexSwitchCheckDefault" name="signup_user"
                                                    value="{{ sys_settings('referral_signup_user') ?? 'no' }}">
                                                <label class="form-check-label"
                                                    for="flexSwitchCheckDefault">{{ __('Allowed') }}</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-3 align-start">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="form-label"
                                                for="user-signup-bonus-amount">{{ __('Commission on Joining') }}</label>
                                            <span
                                                class="form-note">{{ __('The amount will be received once user verified the email.') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <div class="form-control-wrap w-max-250px">
                                                <div class="form-text-hint"><span>{{ base_currency() }}</span></div>
                                                <input type="number" id="user-signup-bonus-amount"
                                                    class="form-control form-control-sm" name="signup_user_bonus"
                                                    value="{{ sys_settings('referral_signup_user_bonus', '0') }}"
                                                    min="0">
                                            </div>
                                            <div class="form-note">{{ __('Specify the commission amount for user.') }}
                                            </div>
                                        </div>
                                        <div class="form-group mt-n2">
                                            {{-- <div class="custom-control custom-checkbox custom-control-sm">
                                                    <input class="switch-option-value" type="hidden" name="signup_user_reward" value="{{ sys_settings('referral_signup_user_reward') ?? 'no' }}">
                                                    <input id="user-signup-apply-reward" type="checkbox" class="custom-control-input switch-option" data-switch="yes"{{ (sys_settings('referral_signup_user_reward', 'no') == 'yes') ? ' checked=""' : ''}}>
                                                    <label for="user-signup-apply-reward" class="custom-control-label">{{ __('Do not apply the main signup bonus.') }}</label>
                                                </div> --}}
                                            <div class="form-check form-switch form-check-inline">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="flexSwitchCheckDefault" name="signup_user_reward"
                                                    value="{{ sys_settings('referral_signup_user_reward') ?? 'no' }}">
                                                <label class="form-check-label"
                                                    for="flexSwitchCheckDefault">{{ __('Do not apply the main signup bonus.') }}</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-sets gy-3 wide-md">
                                <div class="row g-3 align-center">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="form-label"
                                                for="user-deposit-bonus-enable">{{ __('Allow on Successful Deposit') }}</label>
                                            <span
                                                class="form-note">{{ __('Allow commission on successful deposit if joined via referral.') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            {{-- <div class="custom-control custom-switch">
                                                    <input class="switch-option-value" type="hidden" name="deposit_user" value="{{ sys_settings('referral_deposit_user') ?? 'no' }}">
                                                    <input id="user-deposit-bonus-enable" type="checkbox" class="custom-control-input switch-option"
                                                           data-switch="yes"{{ (sys_settings('referral_deposit_user', 'no') == 'yes') ? ' checked=""' : ''}}>
                                                    <label for="user-deposit-bonus-enable" class="custom-control-label">{{ __('Allowed') }}</label>
                                                </div> --}}
                                            <div class="form-check form-switch form-check-inline">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="flexSwitchCheckDefault" name="deposit_user"
                                                    value="{{ sys_settings('referral_deposit_user') ?? 'no' }}">
                                                <label class="form-check-label"
                                                    for="flexSwitchCheckDefault">{{ __('Allowed') }}</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-3 align-center">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="form-label"
                                                for="user-deposit-bonus-allowed">{{ __('Bonus Allowed for Deposit') }}</label>
                                            <span
                                                class="form-note">{{ __('How many times bonus will apply on deposit if joined.') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="row gx-1 gy-1">
                                            <div class="col-6 w-max-250px">
                                                <div class="form-group">
                                                    <div class="form-control-wrap">
                                                        <select class="form-select form-control-sm"
                                                            name="deposit_user_allow" id="user-deposit-bonus-allowed">
                                                            <option
                                                                value="only"{{ sys_settings('referral_deposit_user_allow', 'only') == 'only' ? ' selected' : '' }}>
                                                                {{ __('First Deposit Only') }}</option>
                                                            <option
                                                                value="all"{{ sys_settings('referral_deposit_user_allow', 'only') == 'all' ? ' selected' : '' }}>
                                                                {{ __('For All Deposit') }}</option>
                                                            <option
                                                                value="number"{{ sys_settings('referral_deposit_user_allow', 'only') == 'number' ? ' selected' : '' }}>
                                                                {{ __('Number of Deposit') }}</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-note">{{ __('Allowed Bonus') }}</div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <div class="form-control-wrap w-max-100px">
                                                        <input type="number" placeholder="2"
                                                            class="form-control form-control-sm" name="deposit_user_max"
                                                            value="{{ sys_settings('referral_deposit_user_max', '') }}"
                                                            min="2">
                                                    </div>
                                                    <div class="form-note">{{ __('Number') }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-3 align-center">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="form-label"
                                                for="user-deposit-bonus-amount">{{ __('Commission on Deposit') }}</label>
                                            <span
                                                class="form-note">{{ __('User will receive the amount once deposit completed.') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="row gx-1 gy-1 w-max-250px">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <div class="form-control-wrap">
                                                        <input type="number" id="user-deposit-bonus-amount"
                                                            class="form-control form-control-sm" name="deposit_user_bonus"
                                                            value="{{ sys_settings('referral_deposit_user_bonus', '0') }}"
                                                            min="0">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <select class="form-select form-control-sm" name="deposit_user_type">
                                                        <option
                                                            value="percent"{{ sys_settings('referral_deposit_user_type', 'percent') == 'percent' ? ' selected' : '' }}>
                                                            {{ __('Percent') }}</option>
                                                        <option
                                                            value="fixed"{{ sys_settings('referral_deposit_user_type', 'percent') == 'fixed' ? ' selected' : '' }}>
                                                            {{ __('Fixed (:base)', ['base' => base_currency()]) }}
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-note">
                                                    {{ __('Specify the commission amount to referer.') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-sets gy-3 wide-md">
                                <div class="row g-3">
                                    <div class="col-md-7 offset-lg-5">
                                        <div class="form-group mt-2">
                                            @csrf
                                            <input type="hidden" name="form_prefix" value="referral">
                                            <input type="hidden" name="form_type" value="referral-settings">
                                            <button type="submit" class="btn btn-success">

                                                <span>{{ __('Update') }}</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        @if (view()->exists('MultiReferral::settings'))
                            @include('MultiReferral::settings')
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end card-body -->
    <!--  END CONTENT AREA  -->
@endsection
@section('modal')
    @include('admin.default.partials.delete_modal')
@endsection
