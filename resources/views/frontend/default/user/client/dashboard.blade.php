@extends('layouts.app')

@section('content')
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ asset('templete') }}/src/plugins/src/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('templete') }}/src/assets/css/light/dashboard/dash_1.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('templete') }}/src/assets/css/dark/dashboard/dash_1.css" rel="stylesheet" type="text/css" />

    <link href="{{ asset('templete') }}/src/assets/css/light/components/list-group.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('templete') }}/src/assets/css/light/dashboard/dash_2.css" rel="stylesheet" type="text/css" />

    <link href="{{ asset('templete') }}/src/assets/css/dark/components/list-group.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('templete') }}/src/assets/css/dark/dashboard/dash_2.css" rel="stylesheet" type="text/css" />

    <link href="{{ asset('templete') }}/src/assets/css/light/users/user-profile.css" rel="stylesheet" type="text/css" />

    <link href="{{ asset('templete') }}/src/assets/css/dark/users/user-profile.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://cdn.lineicons.com/3.0/lineicons.css">

    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <div class="layout-px-spacing">

        <div class="">

            <div class="row layout-top-spacing">

                <div class="col-md-12">
                    @php
                        $verification = \App\Models\Verification::where('user_id', Auth::user()->id)
                            ->where('type', 'identity_verification')
                            ->first();
                    @endphp
                    @if ($verification == null || !$verification->verified)
                        <div class="alert alert-danger">
                            {{ translate('Please verify your identity') }}. <a href="{{ route('user.profile') }}"
                                class="alert-link">{{ translate('Verify Now') }}</a>
                        </div>
                    @endif
                    @if (Auth::user()->email_verified_at == null)
                        <div class="alert alert-danger">
                            {{ translate('Please verify your Email') }}. <a href="{{ route('user.profile') }}"
                                class="alert-link">{{ translate('Verify Now') }}</a>
                        </div>
                    @endif
                    @if (Auth::user()->userPackage->package_invalid_at != null &&
                        Carbon\Carbon::now()->diffInDays(Carbon\Carbon::parse(Auth::user()->userPackage->package_invalid_at), false) < 8)
                        <div class="alert alert-danger">
                            {{ translate('Please renew/upgrade your package. Your current package will expire soon') }}.
                            <a href="{{ route('select_package') }}" class="alert-link">{{ translate('Upgrade Now') }}</a>
                        </div>
                    @endif
                </div>


                <!-- Start Update by Bashir -->

                <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-chart-one">
                        <div class="widget-heading">
                            <div class="">
                                <div class="opacity-50">{{ translate('This Month Expense') }}</div>
                                <div class="h4 fw-700 text-primary">
                                    {{ single_price(\App\Models\MilestonePayment::where('paid_status', 1)->where('client_user_id', Auth::user()->id)->whereBetween('updated_at', [Carbon\Carbon::now()->startOfMonth(), Carbon\Carbon::now()->endOfMonth()])->sum('amount')) }}
                                </div>
                            </div>
                            <div class="task-action">
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="renvenue"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-more-horizontal">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="19" cy="12" r="1"></circle>
                                            <circle cx="5" cy="12" r="1"></circle>
                                        </svg>
                                    </a>
                                    <div class="dropdown-menu left" aria-labelledby="renvenue"
                                        style="will-change: transform;">
                                        <a class="dropdown-item" href="javascript:void(0);">Weekly</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Monthly</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Yearly</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget-content">
                            <div id="revenueMonthly"></div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-chart-two">
                        <div class="widget-heading">
                            <div class="">
                                <div class="opacity-50">{{ translate('Total Expense') }}</div>
                                <div class="h4 fw-700 text-success">
                                    {{ single_price(\App\Models\MilestonePayment::where('paid_status', 1)->where('client_user_id', Auth::user()->id)->sum('amount')) }}
                                </div>
                            </div>
                        </div>
                        <div class="widget-content">
                            <div id="chart-2" class=""></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">


            </div>
            <div class="row gutters-10">

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                    <div class="widget widget-one_hybrid widget-followers">
                        <div class="widget-heading">
                            <div class="w-title">
                                <div class="">

                                    <div class="opacity-50">{{ translate('Total Projects') }}</div>
                                    <div class="h3 fw-700">{{ count(Auth::user()->number_of_projects) }}</div>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    </svg>
                                </div>

                            </div>
                        </div>
                        <div class="widget-content">
                            <div class="w-chart">
                                <div id="hybrid_followers"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                    <div class="widget widget-one_hybrid widget-referral">
                        <div class="widget-heading">
                            <div class="w-title">
                                <div class="">
                                    <div class="px-3 pt-3">
                                        <div class="opacity-50">{{ translate('Total Completed Projects') }}</div>
                                        @php
                                            $completedProjects = 0;
                                            foreach (Auth::user()->number_of_projects as $key => $project) {
                                                if ($project->closed) {
                                                    $completedProjects++;
                                                }
                                            }
                                        @endphp
                                        <div class="h3 fw-700">{{ $completedProjects }}</div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="widget-content">
                            <div class="w-chart">
                                <div id="hybrid_followers1"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                    <div class="widget widget-one_hybrid widget-engagement">
                        <div class="widget-heading">
                            <div class="w-title">
                                <div class="">
                                    <div class="px-3 pt-3">
                                        <div class="opacity-50">{{ translate('Running Projects') }}</div>
                                        @php
                                            $onGoingProjects = 0;
                                            foreach (Auth::user()->number_of_projects as $key => $project) {
                                                if (!$project->closed && \App\Models\ProjectUser::where('project_id', $project->id)->first() != null) {
                                                    $onGoingProjects++;
                                                }
                                            }
                                        @endphp
                                        <div class="h3 fw-700">{{ $onGoingProjects }}</div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="widget-content">
                            <div class="w-chart">
                                <div id="hybrid_followers3"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="row widget-statistic">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                        <div class="widget widget-one_hybrid widget-followers">
                            <div class="widget-heading">
                                <div class="">
                                    <div class="card-header">
                                        <h6 class="mb-0">{{ translate('Current Package') }}</h6>
                                    </div>
                                    <hr>
                                    <div class="card-body text-center">
                                        <img src="{{ asset('profile/badge/' . Auth::user()->userPackage->package->badge) }}"
                                            class="img-fluid mb-4 h-110px" style="width: 150px; height: 150px;">
                                        <h4 class="fw-600 mb-3 text-primary">
                                            @if (!empty(Auth::user()->userPackage->package->name))
                                                {{ Auth::user()->userPackage->package->name }}
                                            @endif
                                        </h4>
                                        <p class="mb-1 text-muted">
                                            {{ translate('Remaining Fixed Projects') }} -
                                            @if (!empty(Auth::user()->userPackage->fixed_limit))
                                                {{ Auth::user()->userPackage->fixed_limit }}
                                            @endif
                                        </p>
                                        <p class="text-muted mb-1">
                                            {{ translate('Remaining Long Term Projects') }} -
                                            @if (!empty(Auth::user()->userPackage->long_term_limit))
                                                {{ Auth::user()->userPackage->long_term_limit }}
                                            @endif
                                        </p>
                                        <a href="{{ route('select_package') }}"
                                            class="btn btn-primary d-inline-block">{{ translate('Upgrade') }}</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                        <div class="widget widget-one_hybrid widget-followers">
                            <div class="widget-heading">
                                <div class="">
                                    <div class="card-header">
                                        <h6 class="mb-0">{{ translate('Current Package Summary') }}</h6>
                                    </div>
                                    <hr>
                                    <div class="card-body">
                                        <ul class="list-unstyled mb-0">
                                            <li class=" py-2">
                                                @if (!empty(Auth::user()->userPackage->package->fixed_limit))
                                                    <span
                                                        class="mr-2 badge badge-circle badge-success badge-sm align-middle p-1">
                                                        <i class="lni lni-checkmark-circle"></i>
                                                    </span>
                                                @else
                                                    <span
                                                        class="mr-2 badge badge-circle badge-danger badge-sm align-middle p-1">
                                                        <i class="lni lni-timer"></i>
                                                    </span>
                                                @endif
                                                <span>{{ translate('Fixed Projects') }} - <span class="fw-700">
                                                        @if (!empty(Auth::user()->userPackage->package->fixed_limit))
                                                            {{ Auth::user()->userPackage->package->fixed_limit }}
                                                        @endif
                                                    </span></span>
                                            </li>
                                            <li class=" py-2">
                                                @if (!empty(Auth::user()->userPackage->package->long_term_limit))
                                                    <span
                                                        class="mr-2 badge badge-circle badge-success badge-sm align-middle p-1">
                                                        <i class="lni lni-checkmark-circle"></i>
                                                    </span>
                                                @else
                                                    <span
                                                        class="mr-2 badge badge-circle badge-danger badge-sm align-middle p-1">
                                                        <i class="lni lni-timer"></i>
                                                    </span>
                                                @endif
                                                <span>{{ translate('Long Term Projects') }} - <span class="fw-700">
                                                        @if (!empty(Auth::user()->userPackage->package->long_term_limit))
                                                            {{ Auth::user()->userPackage->package->long_term_limit }}
                                                        @endif
                                                    </span></span>
                                            </li>
                                            <li class=" py-2">
                                                @if (!empty(Auth::user()->userPackage->package->bio_text_limit))
                                                    <span
                                                        class="mr-2 badge badge-circle badge-success badge-sm align-middle p-1">
                                                        <i class="lni lni-checkmark-circle"></i>
                                                    </span>
                                                @else
                                                    <span
                                                        class="mr-2 badge badge-circle badge-danger badge-sm align-middle p-1">
                                                        <i class="lni lni-timer"></i>
                                                    </span>
                                                @endif
                                                <span>{{ translate('Bio Word Limit') }} - <span class="fw-700">
                                                        @if (!empty(Auth::user()->userPackage->package->bio_text_limit))
                                                            {{ Auth::user()->userPackage->package->bio_text_limit }}
                                                        @endif
                                                    </span></span>
                                            </li>
                                            <li class=" py-2">
                                                @if (!empty(Auth::user()->userPackage->package->following_status))
                                                    <span
                                                        class="mr-2 badge badge-circle badge-success badge-sm align-middle p-1">
                                                        <i class="lni lni-checkmark-circle"></i>
                                                    </span>
                                                @else
                                                    <span
                                                        class="mr-2 badge badge-circle badge-danger badge-sm align-middle p-1">
                                                        <i class="lni lni-timer"></i>
                                                    </span>
                                                @endif
                                                <span>{{ translate('Expert Bookmark option') }}</span>
                                            </li>
                                           
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                        <div class="widget widget-one_hybrid widget-followers">
                            <div class="widget-heading">
                                <div class="">
                                    <div class="card-header">
                                        <h6 class="mb-0">{{ translate('Suggested Package') }}</h6>
                                    </div>
                                    <hr>
                                    <div class="card-body">
                                        <ul class="list-group ">
											@foreach (\App\Models\Package::client()->active()->get()->except(Auth::user()->profile->package_id) as $key => $package)
                                                <li class="list-group-item">
													<a href="{{ route('select_package') }}" class="d-flex align-items-center text-inherit">
														<img src="{{ asset('profile/badge/' . $package->badge) }}" class="img-fluid mr-4 h-40px">
														<span class="">
															<h4 class="h6 mb-0">{{ $package->name }}</h4>
															<span class=" fs-15 fw-700 text-primary">{{ single_price($package->price) }}</span>
															<span class="fs-10 text-secondary">/{{ $package->number_of_days }} {{ translate('days') }}</span>
														</span>
													</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
						<div class="widget widget-one_hybrid widget-followers">
							<div class="widget-heading">
								<div class="">
									<div class="card-header">
										<h6 class="mb-0">{{ translate('Running Projects') }}</h6>
									</div>
									<hr>
									<div class="c-scrollbar-light card-body overflow-auto" style="max-height: 365px">
										<ul class="list-group list-group-flush">
											@foreach (Auth::user()->number_of_projects as $key => $project)
												@if(!$project->closed && \App\Models\ProjectUser::where('project_id', $project->id)->first() != null)
													<li class="list-group-item px-0">
														<a href="{{ route('project.details', $project->slug) }}" class="text-inherit d-flex align-items-center">
															<span class="avatar avatar-sm flex-shrink-0 bg-soft-primary mr-3">
																@if($project->client->photo != null)
																	<img src="{{ asset('profile/photos/' . $project->client->photo) }}">
                                                                    
																@else
																	<img src="{{asset('assets/frontend/default/img/avatar-place.png') }}">
																@endif
															</span>
															<span class="flex-grow-1 text-truncate-2">{{ $project->name }}</span>
														</a>
													</li>
												@endif
											@endforeach
										</ul>
									</div>
								</div>
							</div>
		
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
						<div class="widget widget-one_hybrid widget-followers">
							<div class="widget-heading">
								<div class="">
									<div class="card-header">
										<h6 class="mb-0">{{ translate('Suggested Experts') }}</h6>
									</div>
									<hr>
									<div class="card-body px-0">
										<div class="aiz-auto-scroll c-scrollbar-light px-3"
											style="max-height: 340px;overflow-y: scroll;">
											<ul class="list-group list-group-flush">
												@foreach (\App\Models\UserProfile::where('user_role_id', 2)->inRandomOrder()->limit(10)->get(); as $key => $userProfile)
													@if($userProfile->user != null)
														<li class="list-group-item px-0">
															<a href="{{ route('expert.details', $userProfile->user->user_name) }}" class="text-inherit d-flex align-items-center">
																<span class="avatar avatar-sm flex-shrink-0 bg-soft-primary mr-3">
																	@if($userProfile->user->photo != null)
																		<img src=" {{ asset('profile/photos/' . $userProfile->user->photo) }}">
                                                                       
																	@else
																		<img src="{{asset('assets/frontend/default/img/avatar-place.png') }}">
																	@endif
																</span>
																<span class="flex-grow-1 text-truncate-2">{{ $userProfile->user->name }}</span>
																<span class="flex-shrink-0 ml-3">
																	<span class="d-block opacity-50 fs-10">{{ translate('Hourly Rate') }}</span>
																	<span class="fs-15">{{ single_price($userProfile->hourly_rate) }}</span>
																</span>
															</a>
														</li>
													@endif
												@endforeach
											</ul>
										</div>
									</div>
								</div>
							</div>
		
						</div>
					</div>
                </div>
            </div>
            

           

        </div>

    </div>

    </div>

    </div>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{ asset('templete') }}/src/plugins/src/apex/apexcharts.min.js"></script>
    <script src="{{ asset('templete') }}/src/assets/js/dashboard/dash_1.js"></script>

    <script src="{{ asset('templete') }}/src/assets/js/dashboard/dash_2.js"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
@section('script')
    <script type="text/javascript">
        AIZ.plugins.chart('#pie-1', {
            type: 'doughnut',
            data: {
                labels: [
                    "Total Project",
                    "Completed Project",
                    "Running Project",
                ],
                datasets: [{
                    data: [{{ count(Auth::user()->number_of_projects) }}, {{ $completedProjects }},
                        {{ $onGoingProjects }}
                    ],
                    backgroundColor: [
                        "#fd3995",
                        "#34bfa3",
                        "#5d78ff",
                    ]
                }]
            },
            options: {
                cutoutPercentage: 70,
                legend: {
                    labels: {
                        fontFamily: 'Montserrat',
                        boxWidth: 10,
                        usePointStyle: true
                    },
                    onClick: function() {
                        return '';
                    },
                    position: 'bottom'
                }
            }
        });
        AIZ.plugins.chart('#graph-1', {
            type: 'line',
            data: {
                labels: ["JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC"],
                datasets: [{
                    fill: true,
                    borderColor: '#377dff',
                    backgroundColor: 'rgba(55, 125, 255,.1)',
                    label: 'Expense',
                    data: [{{ \App\Models\MilestonePayment::where('paid_status', 1)->where('client_user_id', Auth::user()->id)->whereMonth('created_at', '=', '01')->whereYear('created_at', '=', date('Y'))->sum('amount') }},
                        {{ \App\Models\MilestonePayment::where('paid_status', 1)->where('client_user_id', Auth::user()->id)->whereMonth('created_at', '=', '02')->whereYear('created_at', '=', date('Y'))->sum('amount') }},
                        {{ \App\Models\MilestonePayment::where('paid_status', 1)->where('client_user_id', Auth::user()->id)->whereMonth('created_at', '=', '03')->whereYear('created_at', '=', date('Y'))->sum('amount') }},
                        {{ \App\Models\MilestonePayment::where('paid_status', 1)->where('client_user_id', Auth::user()->id)->whereMonth('created_at', '=', '04')->whereYear('created_at', '=', date('Y'))->sum('amount') }},
                        {{ \App\Models\MilestonePayment::where('paid_status', 1)->where('client_user_id', Auth::user()->id)->whereMonth('created_at', '=', '05')->whereYear('created_at', '=', date('Y'))->sum('amount') }},
                        {{ \App\Models\MilestonePayment::where('paid_status', 1)->where('client_user_id', Auth::user()->id)->whereMonth('created_at', '=', '06')->whereYear('created_at', '=', date('Y'))->sum('amount') }},
                        {{ \App\Models\MilestonePayment::where('paid_status', 1)->where('client_user_id', Auth::user()->id)->whereMonth('created_at', '=', '07')->whereYear('created_at', '=', date('Y'))->sum('amount') }},
                        {{ \App\Models\MilestonePayment::where('paid_status', 1)->where('client_user_id', Auth::user()->id)->whereMonth('created_at', '=', '08')->whereYear('created_at', '=', date('Y'))->sum('amount') }},
                        {{ \App\Models\MilestonePayment::where('paid_status', 1)->where('client_user_id', Auth::user()->id)->whereMonth('created_at', '=', '09')->whereYear('created_at', '=', date('Y'))->sum('amount') }},
                        {{ \App\Models\MilestonePayment::where('paid_status', 1)->where('client_user_id', Auth::user()->id)->whereMonth('created_at', '=', '10')->whereYear('created_at', '=', date('Y'))->sum('amount') }},
                        {{ \App\Models\MilestonePayment::where('paid_status', 1)->where('client_user_id', Auth::user()->id)->whereMonth('created_at', '=', '11')->whereYear('created_at', '=', date('Y'))->sum('amount') }},
                        {{ \App\Models\MilestonePayment::where('paid_status', 1)->where('client_user_id', Auth::user()->id)->whereMonth('created_at', '=', '12')->whereYear('created_at', '=', date('Y'))->sum('amount') }}
                    ],

                }]
            },
            options: {
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        gridLines: {
                            color: '#f2f3f8',
                            zeroLineColor: '#f2f3f8'
                        },
                        ticks: {
                            fontColor: "#8b8b8b",
                            fontFamily: 'Montserrat',
                            fontSize: 10
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            color: '#f2f3f8'
                        },
                        ticks: {
                            fontColor: "#8b8b8b",
                            fontFamily: 'Montserrat',
                            fontSize: 10
                        }
                    }]
                }
            }
        });
    </script>
@endsection
@endsection
