@extends('layouts.app')

@section('css')
    <link href="{{ asset('templete') }}/src/assets/css/light/components/list-group.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('templete') }}/src/assets/css/light/widgets/modules-widgets.css">

    <link href="{{ asset('templete') }}/src/assets/css/dark/components/list-group.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('templete') }}/src/assets/css/dark/widgets/modules-widgets.css">
@endsection

@section('content')
    <div class="layout-px-spacing">
        <div class="">
            <div class="row layout-top-spacing">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-card-one">
                        <div class="widget-content">

                            <div class="media">
                                <div class="w-img">
                                    <img src="{{ asset('templete') }}/src/assets/img/profile-19.jpeg" alt="avatar">
                                </div>
                                <div class="media-body">
                                    <h6>Jimmy Turner</h6>
                                    <p class="meta-date-time">Monday, May 18</p>
                                </div>
                            </div>

                            <p>"Duis aute irure dolor" in reprehenderit in voluptate velit esse cillum "dolore eu fugiat"
                                nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>

                            <div class="w-action">
                                <div class="card-like">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-up">
                                        <path
                                            d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                        </path>
                                    </svg>
                                    <span>551 Likes</span>
                                </div>

                                <div class="read-more">
                                    <a href="javascript:void(0);">Read More <svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-chevrons-right">
                                            <polyline points="13 17 18 12 13 7"></polyline>
                                            <polyline points="6 17 11 12 6 7"></polyline>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-card-one">
                        <div class="widget-content">

                            <div class="media">
                                <div class="w-img">
                                    <img src="{{ asset('templete') }}/src/assets/img/profile-19.jpeg" alt="avatar">
                                </div>
                                <div class="media-body">
                                    <h6>Jimmy Turner</h6>
                                    <p class="meta-date-time">Monday, May 18</p>
                                </div>
                            </div>

                            <p>"Duis aute irure dolor" in reprehenderit in voluptate velit esse cillum "dolore eu fugiat"
                                nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>

                            <div class="w-action">
                                <div class="card-like">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-up">
                                        <path
                                            d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                        </path>
                                    </svg>
                                    <span>551 Likes</span>
                                </div>

                                <div class="read-more">
                                    <a href="javascript:void(0);">Read More <svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-chevrons-right">
                                            <polyline points="13 17 18 12 13 7"></polyline>
                                            <polyline points="6 17 11 12 6 7"></polyline>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-card-one">
                        <div class="widget-content">

                            <div class="media">
                                <div class="w-img">
                                    <img src="{{ asset('templete') }}/src/assets/img/profile-19.jpeg" alt="avatar">
                                </div>
                                <div class="media-body">
                                    <h6>Jimmy Turner</h6>
                                    <p class="meta-date-time">Monday, May 18</p>
                                </div>
                            </div>

                            <p>"Duis aute irure dolor" in reprehenderit in voluptate velit esse cillum "dolore eu fugiat"
                                nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>

                            <div class="w-action">
                                <div class="card-like">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-up">
                                        <path
                                            d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                        </path>
                                    </svg>
                                    <span>551 Likes</span>
                                </div>

                                <div class="read-more">
                                    <a href="javascript:void(0);">Read More <svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-chevrons-right">
                                            <polyline points="13 17 18 12 13 7"></polyline>
                                            <polyline points="6 17 11 12 6 7"></polyline>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-card-one">
                        <div class="widget-content">

                            <div class="media">
                                <div class="w-img">
                                    <img src="{{ asset('templete') }}/src/assets/img/profile-19.jpeg" alt="avatar">
                                </div>
                                <div class="media-body">
                                    <h6>Jimmy Turner</h6>
                                    <p class="meta-date-time">Monday, May 18</p>
                                </div>
                            </div>

                            <p>"Duis aute irure dolor" in reprehenderit in voluptate velit esse cillum "dolore eu fugiat"
                                nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>

                            <div class="w-action">
                                <div class="card-like">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-up">
                                        <path
                                            d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                        </path>
                                    </svg>
                                    <span>551 Likes</span>
                                </div>

                                <div class="read-more">
                                    <a href="javascript:void(0);">Read More <svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-chevrons-right">
                                            <polyline points="13 17 18 12 13 7"></polyline>
                                            <polyline points="6 17 11 12 6 7"></polyline>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('modal')
    @include('frontend.default.partials.bookmark_remove_modal')
@endsection
