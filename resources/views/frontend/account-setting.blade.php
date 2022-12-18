@extends('layouts.app')

@section('css')
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="{{ asset('templete') }}/src/assets/css/light/components/list-group.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('templete') }}/src/assets/css/light/users/user-profile.css" rel="stylesheet" type="text/css" />

    <link href="{{ asset('templete') }}/src/assets/css/dark/components/list-group.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('templete') }}/src/assets/css/dark/users/user-profile.css" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->
@endsection
@section('body')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">
        <div class="">
            <!-- BREADCRUMB -->
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">

                </nav>
            </div>
            <!-- /BREADCRUMB -->
            <div class="row">

                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="payment-history layout-spacing ">
                        <div class="widget-content widget-content-area">
                            <h3 class="">Payment History</h3>
                            <div class="list-group list-group-numbered">
                                <div class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="me-auto">
                                        <div class="fw-bold title">March</div>
                                        <p class="sub-title mb-0">Pro Membership</p>
                                    </div>
                                    <span class="pay-pricing align-self-center me-3">$45</span>
                                    <div class="btn-group dropstart align-self-center" role="group">
                                        <a id="paymentHistory1" href="javascript:void(0);" class="dropdown-toggle"
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
                                        <div class="dropdown-menu" aria-labelledby="paymentHistory1">
                                            <a class="dropdown-item" href="javascript:void(0);">View Invoice</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Download Invoice</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="me-auto">
                                        <div class="fw-bold title">February</div>
                                        <p class="sub-title mb-0">Pro Membership</p>
                                    </div>
                                    <span class="pay-pricing align-self-center me-3">$45</span>
                                    <div class="btn-group dropstart align-self-center" role="group">
                                        <a id="paymentHistory2" href="javascript:void(0);" class="dropdown-toggle"
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
                                        <div class="dropdown-menu" aria-labelledby="paymentHistory2">
                                            <a class="dropdown-item" href="javascript:void(0);">View Invoice</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Download Invoice</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="me-auto">
                                        <div class="fw-bold title">January</div>
                                        <p class="sub-title mb-0">Pro Membership</p>
                                    </div>
                                    <span class="pay-pricing align-self-center me-3">$45</span>
                                    <div class="btn-group dropstart align-self-center" role="group">
                                        <a id="paymentHistory3" href="javascript:void(0);" class="dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-more-horizontal">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="19" cy="12" r="1"></circle>
                                                <circle cx="5" cy="12" r="1"></circle>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="payment-methods layout-spacing ">
                        <div class="widget-content widget-content-area">
                            <h3 class="">Payment Methods</h3>

                            <div class="list-group list-group-numbered">
                                <div class="list-group-item d-flex justify-content-between align-items-start">
                                    <img src="{{ asset('templete') }}/src/assets/img/card-americanexpress.svg"
                                        class="align-self-center me-3" alt="americanexpress">
                                    <div class="me-auto">
                                        <div class="fw-bold title">American Express</div>
                                        <p class="sub-title mb-0">Expires on 12/2025</p>
                                    </div>
                                    <span class="badge badge-success align-self-center me-3">Primary</span>
                                </div>

                                <div class="list-group-item d-flex justify-content-between align-items-start">
                                    <img src="{{ asset('templete') }}/src/assets/img/card-mastercard.svg"
                                        class="align-self-center me-3" alt="mastercard">
                                    <div class="me-auto">
                                        <div class="fw-bold title">Mastercard</div>
                                        <p class="sub-title mb-0">Expires on 03/2025</p>
                                    </div>
                                </div>

                                <div class="list-group-item d-flex justify-content-between align-items-start">
                                    <img src="{{ asset('templete') }}/src/assets/img/card-visa.svg"
                                        class="align-self-center me-3" alt="visa">
                                    <div class="me-auto">
                                        <div class="fw-bold title">Visa</div>
                                        <p class="sub-title mb-0">Expires on 10/2025</p>
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
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('templete') }}/src/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('templete') }}/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('templete') }}/src/plugins/src/mousetrap/mousetrap.min.js"></script>
    <script src="{{ asset('templete') }}/layouts/vertical-dark-menu/app.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
@endsection
