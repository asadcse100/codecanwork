@extends('layouts.app')
@section('css')
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="{{ asset('templete') }}/src/assets/css/light/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('templete') }}/src/plugins/css/light/clipboard/custom-clipboard.css">

    <link href="{{ asset('templete') }}/src/assets/css/dark/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('templete') }}/src/plugins/css/dark/clipboard/custom-clipboard.css">
    <!--  END CUSTOM STYLE FILE  -->
@endsection
@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">
        <!-- BREADCRUMB -->
        <div class="page-meta layout-spacing">
            <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                <div class="row">
                    <div class="col-md-10">
                        <ol class="breadcrumb layout-top-spacing">
                            <li class="breadcrumb-item active" aria-current="page">Referral Activity</li>
                            <li class="breadcrumb-item">
                                <a href="#">{{ __("See who you've referred and statistic of your referrals.") }}</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </nav>
        </div>
        <!-- /BREADCRUMB -->
        @php
            $data['total'] = App\Models\User::where('refer', 1)->count();
            $type = 'invite';
            $card_id = isset($attr['id']) && !empty($attr['id']) ? ' id="' . $attr['id'] . '"' : '';
            $card_class = isset($attr['class']) && !empty($attr['class']) ? ' ' . $attr['class'] : '';
        @endphp
        <div class="nk-refwg-invite{{ $card_class }}"{{ $card_id }}>
            <div class="nk-refwg-head g-3">
                <div class="nk-refwg-title">
                    <h5 class="title ">{{ __(sys_settings('referral_invite_title', 'Refer Us & Earn')) }}</h5>
                    @if (sys_settings('referral_invite_text'))
                        <div class="title-sub">
                            {{ __(sys_settings('referral_invite_text', 'Use the below link to invite your friends.')) }}
                        </div>
                    @endif
                </div>
                {{-- <div class="nk-refwg-action">
                        <a href="#" class="btn btn-primary">{{__('Invite')}}</a>
                    </div> --}}
            </div>
            <div class="clipboard">
                <div class="input-group clipboard-input">
                    <input type="text" class="form-control" id="copy-basic-input"
                        value="{{ route('auth.invite', ['ref' => get_ref_code(Auth::user()->id)]) }}">
                    <div class="copy-icon jsclipboard cbBasic" data-bs-trigger="click" title="Copied"
                        data-clipboard-target="#copy-basic-input">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-copy">
                            <rect x="9" y="9" width="13" height="13" rx="2" ry="2">
                            </rect>
                            <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="row layout-top-spacing">
            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-content widget-content-area">
                        {{-- {!! Panel::profile_alerts() !!} --}}
                        <div class="seperator-header text-center">
                            <h4 class="">{{ __('My Referral List') }}</h4>
                        </div>
                        @if (sys_settings('referral_show_referred_users', 'no') == 'yes')
                            <table class="multi-table table dt-table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Name</th>
                                        <th>Join Date</th>
                                        @if (in_array('earning', sys_settings('referral_user_table_opts', [])))
                                            <th>Referral Income</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($refers as $key => $refer)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td><a
                                                    href="{{ Route('expert.details', $refer->referred->user_name) }}">{{ $refer->referred->name }}</a>
                                            </td>
                                            <td>{{ show_date(data_get($refer, 'join_at'), true) }}</td>
                                            @php
                                                $earned = App\Models\Transaction::where('user_id', $refer->user_id)
                                                    ->where('type', 'referral')
                                                    ->sum('amount');
                                            @endphp
                                            <td>{{ $earned }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                        <div class="seperator-header text-center">
                            <h4 class="">{{ __('My Referral Commissions') }}</h4>
                        </div>
                        <table class="multi-table table table-striped dt-table-hover table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Details</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Earning</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transactions as $tranx)
                                    <tr>
                                        <td>{{ $tranx->trans_details }}</td>
                                        <td>{{ show_date(data_get($tranx, 'created_at'), true) }}</td>
                                        <td>
                                            @if ($tranx->status == 2)
                                                Completed
                                            @else
                                                Pending
                                            @endif
                                        </td>
                                        <td>{{ $tranx->amount }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @if ($type == 'cards')
            <div class="card card-bordered">
                <div class="nk-refwg">
        @endif
        @if ($type == 'invite' || $type == 'invite-card' || $type == 'cards')
            @if ($type == 'invite-card')
                <div class="nk-block">
                    <div class="card card-bordered">
                        <div class="card-inner">
            @endif
            @if ($type == 'invite-card')
            @endif
        @endif
        @if ($type == 'stats' || $type == 'stats-card' || $type == 'cards')
            @if ($type == 'stats-card')
                <div class="nk-block">
                    <div class="card card-bordered">
                        <div class="card-inner">
            @endif
            <div class="nk-refwg-stats{{ $card_class . ($type == 'cards' ? ' bg-lighter' : '') }}"{{ $card_id }}>
                <div class="nk-refwg-group g-3">
                    <div class="nk-refwg-name">
                        <h6 class="title">{{ __('My Referral') }} <em class="icon ni ni-info" data-toggle="tooltip"
                                data-placement="right"
                                title="{{ __('People who have signed up using your referral link.') }}"></em></h6>
                    </div>
                    <div class="nk-refwg-info g-3">
                        <div class="nk-refwg-sub">
                            <div class="title">{{ $referrals['total'] ?? 0 }}</div>
                            <div class="sub-text">{{ __('Total Joined') }}</div>
                        </div>
                        <div class="nk-refwg-sub">
                            <div class="title">{{ $referrals['month'] ?? 0 }}</div>
                            <div class="sub-text">{{ __('This Month') }}</div>
                        </div>
                    </div>
                    @if (has_route('referrals'))
                        <div class="nk-refwg-more dropdown mt-n1 mr-n1">
                            <a href="{{ route('referrals') }}" class="btn btn-icon btn-trigger"><em
                                    class="icon ni ni-more-h"></em></a>
                        </div>
                    @endif
                </div>
                @if (!empty($referrals['chart']))
                    <div class="nk-refwg-ck">
                        <canvas class="chart-refer-stats" id="referralchart"></canvas>
                    </div>
                @endif
            </div>
            @if ($type == 'stats-card')
    </div>
    </div>
    </div>
    @endif
    @endif
    @if ($type == 'cards')
        </div>
        </div>
    @endif
    {{-- {!! cards('support') !!} --}}
    </div>
    </div>
    <!--  END CONTENT AREA  -->
@endsection

@section('script')
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script src="{{ asset('templete') }}/src/assets/js/scrollspyNav.js"></script>
    <script src="{{ asset('templete') }}/src/plugins/src/clipboard/clipboard.min.js"></script>
    <script src="{{ asset('templete') }}/src/plugins/src/clipboard/custom-clipboard.min.js"></script>
    <!--  END CUSTOM SCRIPTS FILE  -->
@endsection

@section('modal')
    @include('admin.default.partials.delete_modal')
@endsection
