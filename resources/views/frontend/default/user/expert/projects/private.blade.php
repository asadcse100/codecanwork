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
        <!-- Analytics -->
        <div class="layout-top-spacing ">
            <h5 class="text-center">Project Proposals</h5>
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
                            <button class="btn btn-dark mb-2 me-4">Pending</button>
                        </div>
                    </div>
                    <div class="widget-content">
                        <a href="#">
                            <h6>I want a good banner design for my eCommerce.</h6>
                        </a>
                        <span>Design for my ecommerce banner and Branding</span>
                        <hr>
                        <div class="meta-info">
                            <div class="due-time">
                                <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-clock">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <polyline points="12 6 12 12 16 14"></polyline>
                                    </svg> 3 Days Left</p>
                            </div>
                            <div class="avatar--group">
                                <button class="btn btn-danger mb-2 me-4">Reject</button>
                                <button class="btn btn-success mb-2 me-4">Accpet</button>
                                <button class="btn btn-info mb-2 me-4">Chat with Client</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End Bidded Projects --}}
            </div>
        </div>
    </div>
@endsection

@section('script')
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{ asset('templete') }}/src/plugins/src/apex/apexcharts.min.js"></script>
    <script src="{{ asset('templete') }}/src/assets/js/widgets/modules-widgets.js"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
@endsection

@section('modal')
    @include('admin.default.partials.delete_modal')
@endsection
