@extends('layouts.app')

@section('css')
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ asset('templete') }}/src/plugins/src/apex/apexcharts.css" rel="stylesheet" type="text/css">

    <link href="{{ asset('templete') }}/src/assets/css/light/components/list-group.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('templete') }}/src/assets/css/light/widgets/modules-widgets.css">

    <link href="{{ asset('templete') }}/src/assets/css/dark/components/list-group.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('templete') }}/src/assets/css/dark/widgets/modules-widgets.css">
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
@endsection

@section('content')

    <div class="layout-px-spacing">
        <div class="">

            <!-- Analytics -->

            <div class="layout-top-spacing ">
                <h5 class="text-center">Cancelled Projects</h5>
                <hr>
            </div>
            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-five">

                    {{-- Bidded Projects --}}
                    <div class="continer">
                        <div class="widget-heading">


                            <a href="javascript:void(0)" class="task-info">

                                <div class="usr-avatar">
                                    <span>$500</span>
                                </div>
                            </a>
                            <div class="task-action">
                                <button class="btn btn-danger btn-sm mb-2 me-4">Cancellled</button>
                                <button class="btn btn-warning btn-sm mb-2 me-4">% Deducted</button>
                            </div>

                        </div>
                        <div class="widget-content">
                            <a href="#">
                                <h5>I want a good banner design for my eCommerce.</h5>
                                <div class="task-action">
                                    <i style='font-size:10px' class='far'>&#xf017;</i>

                                </div>
                            </a>
                            <hr>
                            <span>Design for my ecommerce banner and Branding</span>
                            <hr>

                            <div class="meta-info">
                                <div class="avatar--group">
                                    <div class="avatar translateY-axis">
                                        <img alt="avatar" src="{{ asset('templete') }}/src/assets/img/team-2-2.jpg" />
                                    </div>
                                    <div class="container">
                                        <div class="media-body">
                                            <h5 class="media-heading mb-1">Xavier</h5>
                                            <span>
                                                <p class="badge badge-warning ">5</p>
                                                (0 Reviews)
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="totalbids">
                                    <button class="btn btn-outline-dark  mb-2 me-4 btn-sm disabled">Cancelled By Lisa
                                        Elizabeth</button>
                                </div>
                            </div>


                        </div>

                    </div>

                    {{-- End Bidded Projects --}}
                </div>

            </div>




        </div>

    </div>
@endsection

@section('script')
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{ asset('templete') }}/src/plugins/src/apex/apexcharts.min.js"></script>
    <script src="{{ asset('templete') }}/src/assets/js/widgets/modules-widgets.js"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
@endsection

@section('modal')
    @include('admin.default.partials.delete_modal')
@endsection
