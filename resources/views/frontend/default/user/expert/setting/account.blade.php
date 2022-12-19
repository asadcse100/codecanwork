@extends('layouts.app')

@section('css')
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" href="{{ asset('templete') }}/src/plugins/src/filepond/filepond.min.css">
    <link rel="stylesheet" href="{{ asset('templete') }}/src/plugins/src/filepond/FilePondPluginImagePreview.min.css">
    <link href="{{ asset('templete') }}/src/plugins/src/notification/snackbar/snackbar.min.css" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="{{ asset('templete') }}/src/plugins/src/sweetalerts2/sweetalerts2.css">

    <link href="{{ asset('templete') }}/src/plugins/css/light/filepond/custom-filepond.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('templete') }}/src/assets/css/light/components/tabs.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('templete') }}/src/assets/css/light/elements/alert.css">

    <link href="{{ asset('templete') }}/src/plugins/css/light/sweetalerts2/custom-sweetalert.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('templete') }}/src/plugins/css/light/notification/snackbar/custom-snackbar.css" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('templete') }}/src/assets/css/light/forms/switches.css">
    <link href="{{ asset('templete') }}/src/assets/css/light/components/list-group.css" rel="stylesheet" type="text/css">

    <link href="{{ asset('templete') }}/src/assets/css/light/users/account-setting.css" rel="stylesheet" type="text/css" />

    <link href="{{ asset('templete') }}/src/plugins/css/dark/filepond/custom-filepond.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('templete') }}/src/assets/css/dark/components/tabs.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('templete') }}/src/assets/css/dark/elements/alert.css">

    <link href="{{ asset('templete') }}/src/plugins/css/dark/sweetalerts2/custom-sweetalert.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('templete') }}/src/plugins/css/dark/notification/snackbar/custom-snackbar.css" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('templete') }}/src/assets/css/dark/forms/switches.css">
    <link href="{{ asset('templete') }}/src/assets/css/dark/components/list-group.css" rel="stylesheet" type="text/css">

    <link href="{{ asset('templete') }}/src/assets/css/dark/users/account-setting.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('templete') }}/src/plugins/css/dark/tagify/custom-tagify.css" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->
@endsection

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">

        <div class="middle-content container-xxl p-0">

            <!-- BREADCRUMB -->
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Users</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Account Settings</li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->

            <div class="account-settings-container layout-top-spacing">

                <div class="account-content">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <h3>Account Settings</h3>

                            <div class="animated-underline-content">
                                <ul class="nav nav-tabs" id="animateLine" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="animated-underline-home-tab" data-bs-toggle="tab"
                                            href="#animated-underline-home" role="tab"
                                            aria-controls="animated-underline-home" aria-selected="true"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                            </svg> Account</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" id="animated-underline-profile-tab" data-bs-toggle="tab"
                                            href="#animated-underline-profile" role="tab"
                                            aria-controls="animated-underline-profile" aria-selected="false"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-dollar-sign">
                                                <line x1="12" y1="1" x2="12" y2="23">
                                                </line>
                                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                            </svg> Payment</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content" id="animateLineContent-4">
                        <div class="tab-pane fade show active" id="animated-underline-home" role="tabpanel"
                            aria-labelledby="animated-underline-home-tab">
                            <div class="row">

                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                        <div class="info">
                                            <h5 class="">Change Password</h5>
                                            <div class="row">
                                                <form method="POST" action="{{ route('passupdate') }}">
                                                    @csrf
                                                    <div class="col-md-11 mx-auto">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="input-group  mb-3">
                                                                    <span class="input-group-text text-primary">New
                                                                        Password</span>
                                                                    <input type="password" name="new_password" class="form-control"
                                                                        placeholder="New Password">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text text-primary">Confirm Password</span>
                                                                    <input type="password" class="form-control"
                                                                        placeholder="Confirm Password" name="confirm_password"
                                                                        >
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-center">
                                                        <button type="submit"
                                                            class="btn btn-success transition-3d-hover mr-1">{{ translate('Password Update') }}</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="animated-underline-profile" role="tabpanel"
                            aria-labelledby="animated-underline-profile-tab">
                            <div class="row">
                                <div class="col-xl-6 col-lg-12 col-md-12 layout-spacing">
                                    <div class="section general-info payment-info">
                                        <div class="info">
                                            <h6 class="">Bank Info</h6>
                                            <p>Add your New <span class="text-success">Bank</span> Information.
                                            </p>

                                            <div class="row mt-4">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Bank Name</label>
                                                        <input type="text"
                                                            class="form-control add-billing-address-input">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Bank Account Name</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Bank Account Number</label>
                                                        <input type="number" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Routing/IBAN/SWIFT/BIC number</label>
                                                        <input type="number" class="form-control">
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="text-right">
                                                <button type="submit"
                                                    class="btn btn-primary transition-3d-hover mr-1">{{ translate('Add') }}</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-12 col-md-12 layout-spacing">
                                    <div class="section general-info payment-info">
                                        <div class="info">
                                            <h6 class="">Add Payment Method</h6>
                                            <p>Changes your New <span class="text-success">Payment Method</span>
                                                Information.</p>

                                            <div class="row mt-4">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Card Brand</label>
                                                        <div class="invoice-action-currency">
                                                            <div class="dropdown selectable-dropdown cardName-select">
                                                                <a id="cardBrandDropdown" href="javascript:void(0);"
                                                                    class="dropdown-toggle" data-bs-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false"><img
                                                                        src="{{ asset('templete') }}/src/assets/img/card-mastercard.svg"
                                                                        class="flag-width" alt="flag"> <span
                                                                        class="selectable-text">Mastercard</span> <span
                                                                        class="selectable-arrow"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round" stroke-linejoin="round"
                                                                            class="feather feather-chevron-down">
                                                                            <polyline points="6 9 12 15 18 9"></polyline>
                                                                        </svg></span></a>
                                                                <div class="dropdown-menu"
                                                                    aria-labelledby="cardBrandDropdown">
                                                                    <a class="dropdown-item"
                                                                        data-img-value="{{ asset('templete') }}/src/assets/img/card-mastercard.svg"
                                                                        data-value="GBP - British Pound"
                                                                        href="javascript:void(0);"><img
                                                                            src="{{ asset('templete') }}/src/assets/img/card-mastercard.svg"
                                                                            class="flag-width" alt="flag">
                                                                        Mastercard</a>
                                                                    <a class="dropdown-item"
                                                                        data-img-value="{{ asset('templete') }}/src/assets/img/card-americanexpress.svg"
                                                                        data-value="IDR - Indonesian Rupiah"
                                                                        href="javascript:void(0);"><img
                                                                            src="{{ asset('templete') }}/src/assets/img/card-americanexpress.svg"
                                                                            class="flag-width" alt="flag"> American
                                                                        Express</a>
                                                                    <a class="dropdown-item"
                                                                        data-img-value="{{ asset('templete') }}/src/assets/img/card-visa.svg"
                                                                        data-value="USD - US Dollar"
                                                                        href="javascript:void(0);"><img
                                                                            src="{{ asset('templete') }}/src/assets/img/card-visa.svg"
                                                                            class="flag-width" alt="flag"> Visa</a>
                                                                    <a class="dropdown-item"
                                                                        data-img-value="{{ asset('templete') }}/src/assets/img/card-discover.svg"
                                                                        data-value="INR - Indian Rupee"
                                                                        href="javascript:void(0);"><img
                                                                            src="{{ asset('templete') }}/src/assets/img/card-discover.svg"
                                                                            class="flag-width" alt="flag">
                                                                        Discover</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Card Number</label>
                                                        <input type="number"
                                                            class="form-control add-payment-method-input">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Holder Name</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">CVV/CVV2</label>
                                                        <input type="number" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Card Expiry</label>
                                                        <input type="number" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-right">
                                                <button type="submit"
                                                    class="btn btn-primary transition-3d-hover mr-1">{{ translate('Add') }}</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-12 col-md-12 layout-spacing">
                                    <div class="section general-info payment-info">
                                        <div class="info">
                                            <h6 class="">Add Mobile Banking</h6>
                                            <p>Changes your New <span class="text-success">Mobile Banking</span>
                                                Information.</p>
                                            <div class="row mt-4">
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">Mobile Banking</label>
                                                        <select class="form-select">
                                                            <option selected="">Choose...</option>
                                                            <option value="united-states">bkash</option>
                                                            <option value="brazil">Roket</option>
                                                            <option value="indonesia">upay</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="mb-3">
                                                        <label class="form-label">Number</label>
                                                        <input type="number" class="form-control">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="text-right">
                                                <button type="submit"
                                                    class="btn btn-primary transition-3d-hover mr-1">{{ translate('Add') }}</button>
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

    <!--  END CONTENT AREA  -->
@endsection

@section('script')
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script src="{{ asset('templete') }}/src/plugins/src/filepond/filepond.min.js"></script>
    <script src="{{ asset('templete') }}/src/plugins/src/filepond/FilePondPluginFileValidateType.min.js"></script>
    <script src="{{ asset('templete') }}/src/plugins/src/filepond/FilePondPluginImageExifOrientation.min.js"></script>
    <script src="{{ asset('templete') }}/src/plugins/src/filepond/FilePondPluginImagePreview.min.js"></script>
    <script src="{{ asset('templete') }}/src/plugins/src/filepond/FilePondPluginImageCrop.min.js"></script>
    <script src="{{ asset('templete') }}/src/plugins/src/filepond/FilePondPluginImageResize.min.js"></script>
    <script src="{{ asset('templete') }}/src/plugins/src/filepond/FilePondPluginImageTransform.min.js"></script>
    <script src="{{ asset('templete') }}/src/plugins/src/filepond/filepondPluginFileValidateSize.min.js"></script>
    <script src="{{ asset('templete') }}/src/plugins/src/notification/snackbar/snackbar.min.js"></script>
    <script src="{{ asset('templete') }}/src/plugins/src/sweetalerts2/sweetalerts2.min.js"></script>
    <script src="{{ asset('templete') }}/src/assets/js/users/account-settings.js"></script>
    <script src="{{ asset('templete') }}/src/plugins/src/tagify/tagify.min.js"></script>
    <script src="{{ asset('templete') }}/src/plugins/src/tagify/custom-tagify.js"></script>
    <!--  END CUSTOM SCRIPTS FILE  -->
@endsection
