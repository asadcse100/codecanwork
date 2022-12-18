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

    <link href="{{ asset('templete') }}/src/assets/css/light/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('templete') }}/src/plugins/css/light/editors/markdown/simplemde.min.css">

    <link href="{{ asset('templete') }}/src/assets/css/dark/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('templete') }}/src/plugins/css/dark/editors/markdown/simplemde.min.css">

    <style>
        .ck-editor__editable[role="textbox"] {
            /* editing area */
            min-height: 250px;
        }

        .ck-content .image {
            /* block images */
            max-width: 80%;
            margin: 20px auto;
        }
    </style>
@endsection

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">

        <div class="middle-content container-xxl p-0">

            <!-- BREADCRUMB -->
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Expert</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Update service</li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->

            <div class="account-settings-container layout-top-spacing">

                <div class="account-content">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <h3>Service Info</h3>
                        </div>
                    </div>
                    <div class="tab-content" id="animateLineContent-4">
                        <div class="tab-pane fade show active" id="animated-underline-home" role="tabpanel"
                            aria-labelledby="animated-underline-home-tab">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <form class="section general-info"
                                        action="{{ route('service.update', $service->slug) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="info">

                                            <div class="row ">
                                                <div class="col-lg-11 mx-auto">
                                                    <div class="row">
                                                        <div class="col-sm-6 mb-4">
                                                            <div class="input-group  mb-3 required">
                                                                <span class="input-group-text" id="inputGroup-sizing"
                                                                    for="validationCustom01">Providing the service<span style="color: red">*</span></span>
                                                                <input type="text" class="form-control "
                                                                    name="title" value="{{ $service->title }}"
                                                                    placeholder="{{ translate('Enter your service title') }}"
                                                                    aria-label="Enter your Bank name" required
                                                                    aria-describedby="nameLabel">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 mb-4">
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text"
                                                                    id="inputGroup-sizing-sm">Service
                                                                    Image</span>
                                                                <img src="{{ asset('storage/uploads/services/' . $service->image) }}"
                                                                    class="img-thumbnail" width="60" />
                                                                <input class="form-control" type="file"
                                                                    value="@if (!empty($service->image)) {{ $service->image }} @endif"
                                                                    name="service_photo">

                                                            </div>
                                                        </div>
                                                        <div id="autosaving" class="row layout-spacing">
                                                            <div class="col-lg-12">
                                                                <div class="widget-header">
                                                                    <div class="row">
                                                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                                            <h4> About The Providing Service<span style="color: red">*</span> </h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <textarea id="about_service" name="about_service" rows="40" cols="50" required> {!! $service->about_service !!} </textarea>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 mb-4">
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text"
                                                                    id="inputGroup-sizing-sm">Select Service<span style="color: red">*</span></span>
                                                                    @php
                                                                        $category_id = Auth::user()->ProfessionalType[0]->category_id;
                                                                    @endphp
                                                                    <input type="hidden" name="category_id" value="{{ $category_id }}">
                                                                <select class="form-select aiz-selectpicker"
                                                                    name="sub_category_id" id="sub_category_id" required>
                                                                    @foreach (\App\Models\ProductService::where('category_id', $category_id)->where('status', 1)->get() as $service)
                                                                        <option value="{{ $service->id }}">
                                                                            {{ $service->title }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>

                                                        {{-- <div class="col-sm-6 mb-4">
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text"
                                                                    id="inputGroup-sizing-sm">Select Sub
                                                                    Category</span>
                                                                <select class="form-select aiz-selectpicker"
                                                                    name="sub_category_id" id="sub_category_id">

                                                                </select>
                                                            </div>
                                                        </div> --}}

                                                        <div class="account-content">
                                                            <div class="row mb-3">
                                                                <div class="col-md-12">
                                                                    <h5>Packages</h5>

                                                                    <div class="animated-underline-content">
                                                                        <ul class="nav nav-tabs" id="animateLine"
                                                                            role="tablist">

                                                                            <li class="nav-item">
                                                                                <a class="nav-link" id="basic-tab"
                                                                                    data-bs-toggle="tab" href="#basic"
                                                                                    role="tab"
                                                                                    aria-controls="basic"
                                                                                    aria-selected="false">Basic</a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a class="nav-link" id="standard-tab"
                                                                                    data-bs-toggle="tab" href="#standard"
                                                                                    role="tab"
                                                                                    aria-controls="standard"
                                                                                    aria-selected="false">Standard</a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a class="nav-link" id="premium-tab"
                                                                                    data-bs-toggle="tab" href="#premium"
                                                                                    role="tab" aria-controls="premium"
                                                                                    aria-selected="false">Premium</a>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="tab-content" id="animateLineContent-4">
                                                                <div class="tab-pane fade show active" id="basic"
                                                                    role="tabpanel" aria-labelledby="basic">
                                                                    <div class="row">
                                                                        <div
                                                                            class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                                                            @php
                                                                            $service_packagex = null;
                                                                                $service_packagex = $service_packages->where('service_type','basic');
                                                                                if(!blank($service_packagex)){
                                                                                    $service_package=$service_packagex[0];
                                                                                }
                                                                            //    dd($service_packages, $service_package->service_price);
                                                                            @endphp

                                                                            <div class="info">
                                                                                <h6>Basic Packages</h6>
                                                                                <div class="row ">
                                                                                    <div class="col-lg-11 mx-auto">
                                                                                        <div class="row">
                                                                                            <div class="col-sm-6 mb-4">
                                                                                                <div
                                                                                                    class="input-group  mb-3 required">
                                                                                                    <span
                                                                                                        class="input-group-text"
                                                                                                        id="inputGroup-sizing"
                                                                                                        for="validationCustom01">Price<span style="color: red">*</span>
                                                                                                        &#2547;</span>

                                                                                                    <input type="number"
                                                                                                        class="form-control "
                                                                                                        name="basic_price"
                                                                                                        value="@if(isset($service_package)){{ $service_package->service_price }}@endif"
                                                                                                        placeholder="{{ translate('Enter Price') }}"
                                                                                                        aria-label="Enter Basic Package Price"
                                                                                                        required
                                                                                                        aria-describedby="nameLabel"
                                                                                                        data-msg="Enter Basic Package Price"
                                                                                                        data-error-class="u-has-error"
                                                                                                        data-success-class="u-has-success">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-6 mb-4">
                                                                                                <div
                                                                                                    class="input-group mb-3">
                                                                                                    <span
                                                                                                        class="input-group-text"
                                                                                                        id="inputGroup-sizing-sm">Devilery
                                                                                                        Within<span style="color: red">*</span></span>
                                                                                                    <input type="number"
                                                                                                        class="form-control "
                                                                                                        name="basic_delivery_time"
                                                                                                        placeholder="{{ translate('Enter Delivery Time') }}"
                                                                                                        aria-label="Enter Basic Package Price"
                                                                                                        value="@if(isset($service_package)){{ $service_package->delivery_time }}@endif"
                                                                                                        required
                                                                                                        aria-describedby="nameLabel"
                                                                                                        data-msg="Enter Basic Package Price"
                                                                                                        data-error-class="u-has-error"
                                                                                                        data-success-class="u-has-success">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-6 mb-4">
                                                                                                <div
                                                                                                    class="input-group mb-3">
                                                                                                    <span
                                                                                                        class="input-group-text"
                                                                                                        id="inputGroup-sizing-sm">Revision
                                                                                                        Limit<span style="color: red">*</span></span>
                                                                                                    <input type="number"
                                                                                                        class="form-control "
                                                                                                        name="basic_revision_limit"
                                                                                                        placeholder="{{ translate('Enter Revision Limit') }}"
                                                                                                        aria-label="Enter Basic Package Price"
                                                                                                        required
                                                                                                        aria-describedby="nameLabel"
                                                                                                        data-msg="Enter Basic Package Price"
                                                                                                        data-error-class="u-has-error"
                                                                                                        value="@if(isset($service_package)){{ $service_package->revision_limit }}@endif"
                                                                                                        data-success-class="u-has-success">
                                                                                                </div>
                                                                                            </div>
                                                                                            {{-- <div class="col-sm-12 mb-4">
                                                                                                <span
                                                                                                class="input-group-text"
                                                                                                id="inputGroup-sizing-sm">What
                                                                                                is included
                                                                                                section</span>
                                                                                                <div
                                                                                                    class="input-group mb-3">

                                                                                                    <input
                                                                                                        id="include_description"
                                                                                                        type="text"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        name="basic_included_description[]">

                                                                                                        <textarea id="basic_included_description" name="basic_included_description[]" rows="40" cols="50"> </textarea>
                                                                                                </div>
                                                                                            </div> --}}

                                                                                            <div id="autosaving"
                                                                                                class="row layout-spacing">
                                                                                                <div class="col-lg-12">
                                                                                                    <div
                                                                                                        class="widget-header">
                                                                                                        <div
                                                                                                            class="row">
                                                                                                            <div
                                                                                                                class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                                                                                <h4> What is
                                                                                                                    included
                                                                                                                    section
                                                                                                                </h4>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div>
                                                                                                        <textarea id="basic_included_description" name="basic_included_description" rows="40" cols="50">
                                                                                                            @if(isset($service_package)){!! $service_package->feature_description !!}@endif  </textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        {{--
                                                                        <button
                                                                        type="button"
                                                                        class="btn btn-soft-secondary btn-sm"
                                                                        data-toggle="add-more"
                                                                        data-content='<div class="row gutters-5">
                                                                            <div class="col">
                                                                                <div class="form-group d-flex">
                                                                                    <input id="include_description" type="text" class="form-control" placeholder="" name="standard_included_description[]">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-soft-danger" data-toggle="remove-parent" data-parent=".row">
                                                                                    <i class="las la-times"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>'
                                                                        data-target=".whats-included-standard">
                                                                        {{ translate('Add New') }}
                                                                    </button> --}}

                                                                    </div>
                                                                </div>

                                                                <div class="tab-pane fade" id="standard" role="tabpanel"
                                                                    aria-labelledby="standard">
                                                                    <div class="row">
                                                                        @php
                                                                        $service_packagex = null;
                                                                            $service_packagex = $service_packages->where('service_type','standard');
                                                                            if(!blank($service_packagex)){
                                                                                $service_package = $service_packagex[1];
                                                                            }
                                                                        @endphp
                                                                        <div
                                                                            class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                                                            <div class="info">
                                                                                <h6>Standard Package</h6>
                                                                                <div class="row ">
                                                                                    <div class="col-lg-11 mx-auto">
                                                                                        <div class="row">
                                                                                            <div class="col-sm-6 mb-4">
                                                                                                <div
                                                                                                    class="input-group  mb-3 required">
                                                                                                    <span
                                                                                                        class="input-group-text"
                                                                                                        id="inputGroup-sizing"
                                                                                                        for="validationCustom01">Price
                                                                                                        &#2547;</span>
                                                                                                    <input type="number"
                                                                                                        class="form-control "
                                                                                                        name="standard_price"
                                                                                                        placeholder="{{ translate('Enter Price') }}"
                                                                                                        value="@if(isset($service_package)){{ $service_package->service_price }}@endif"
                                                                                                        aria-label="Enter Standard Package Price"
                                                                                                        aria-describedby="nameLabel"
                                                                                                        data-msg="Enter Standard Package Price"
                                                                                                        data-error-class="u-has-error"
                                                                                                        data-success-class="u-has-success">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-6 mb-4">
                                                                                                <div
                                                                                                    class="input-group mb-3">
                                                                                                    <span
                                                                                                        class="input-group-text"
                                                                                                        id="inputGroup-sizing-sm">Devilery
                                                                                                        Within</span>
                                                                                                    <input type="number"
                                                                                                        class="form-control "
                                                                                                        name="standard_delivery_time"
                                                                                                        placeholder="{{ translate('Enter Delivery Time') }}"
                                                                                                        aria-label="Enter Standard Package Price"
                                                                                                        value="@if(isset($service_package)){{  $service_package->delivery_time }}@endif"
                                                                                                        aria-describedby="nameLabel"
                                                                                                        data-msg="Enter Standard Package Price"
                                                                                                        data-error-class="u-has-error"
                                                                                                        data-success-class="u-has-success">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-6 mb-4">
                                                                                                <div
                                                                                                    class="input-group mb-3">
                                                                                                    <span
                                                                                                        class="input-group-text"
                                                                                                        id="inputGroup-sizing-sm">Revision
                                                                                                        Limit</span>
                                                                                                    <input type="number"
                                                                                                        class="form-control "
                                                                                                        name="standard_revision_limit"
                                                                                                        placeholder="{{ translate('Enter Revision Limit') }}"
                                                                                                        aria-label="Enter Standard Package Price"
                                                                                                        aria-describedby="nameLabel"
                                                                                                        data-msg="Enter Standard Package Price"
                                                                                                        data-error-class="u-has-error"
                                                                                                        value="@if(isset($service_package)){{ $service_package->revision_limit }}@endif"
                                                                                                        data-success-class="u-has-success">
                                                                                                </div>
                                                                                            </div>

                                                                                            {{-- <div class="col-sm-12 mb-4">
                                                                                                <span
                                                                                                class="input-group-text"
                                                                                                id="inputGroup-sizing-sm">What
                                                                                                is included
                                                                                                section</span>
                                                                                                <div
                                                                                                    class="input-group mb-3">

                                                                                                     <input
                                                                                                        id="include_description"
                                                                                                        type="text"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        name="standard_included_description[]">

                                                                                                        <textarea name="standard_included_description[]" id="standard_included_description" cols="30" rows="10"></textarea>
                                                                                                </div>
                                                                                            </div> --}}


                                                                                            <div id="autosaving"
                                                                                                class="row layout-spacing">
                                                                                                <div class="col-lg-12">
                                                                                                    <div
                                                                                                        class="widget-header">
                                                                                                        <div
                                                                                                            class="row">
                                                                                                            <div
                                                                                                                class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                                                                                <h4> What is
                                                                                                                    included
                                                                                                                    section
                                                                                                                </h4>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div>
                                                                                                        <textarea id="standard_included_description" name="standard_included_description" rows="40" cols="50">
                                                                                                            @if(isset($service_package)){!! $service_package->feature_description !!}@endif </textarea>
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



                                                                <div class="tab-pane fade" id="premium" role="tabpanel"
                                                                    aria-labelledby="premium">
                                                                    <div class="row">
                                                                        @php
                                                                        $service_packagex = null;
                                                                            $service_packagex = $service_packages->where('service_type','premium');
                                                                            if(!blank($service_packagex)){
                                                                                $service_package = $service_packagex[2];
                                                                            }
                                                                        @endphp

                                                                        <div
                                                                            class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                                                            <div class="info">
                                                                                <h6>Premium Package</h6>
                                                                                <div class="row ">
                                                                                    <div class="col-lg-11 mx-auto">
                                                                                        <div class="row">
                                                                                            <div class="col-sm-6 mb-4">
                                                                                                <div
                                                                                                    class="input-group  mb-3 required">
                                                                                                    <span
                                                                                                        class="input-group-text"
                                                                                                        id="inputGroup-sizing"
                                                                                                        for="validationCustom01">Price
                                                                                                        &#2547;</span>
                                                                                                    <input type="number"
                                                                                                        class="form-control "
                                                                                                        name="premium_price"
                                                                                                        placeholder="{{ translate('Enter Price') }}"
                                                                                                        aria-label="Enter Standard Package Price"
                                                                                                        aria-describedby="nameLabel"
                                                                                                        value="@if(isset($service_package)){{ $service_package->service_price }}@endif"
                                                                                                        data-msg="Enter Standard Package Price"
                                                                                                        data-error-class="u-has-error"
                                                                                                        data-success-class="u-has-success">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-6 mb-4">
                                                                                                <div
                                                                                                    class="input-group mb-3">
                                                                                                    <span
                                                                                                        class="input-group-text"
                                                                                                        id="inputGroup-sizing-sm">Devilery
                                                                                                        Within</span>
                                                                                                    <input type="number"
                                                                                                        class="form-control "
                                                                                                        name="premium_delivery_time"
                                                                                                        placeholder="{{ translate('Enter Delivery Time') }}"
                                                                                                        aria-label="Enter Standard Package Price"
                                                                                                        aria-describedby="nameLabel"
                                                                                                        data-msg="Enter Standard Package Price"
                                                                                                        value="@if(isset($service_package)){{ $service_package->delivery_time }}@endif"
                                                                                                        data-error-class="u-has-error"
                                                                                                        data-success-class="u-has-success">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-6 mb-4">
                                                                                                <div
                                                                                                    class="input-group mb-3">
                                                                                                    <span
                                                                                                        class="input-group-text"
                                                                                                        id="inputGroup-sizing-sm">Revision
                                                                                                        Limit</span>
                                                                                                    <input type="number"
                                                                                                        class="form-control "
                                                                                                        name="premium_revision_limit"
                                                                                                        placeholder="{{ translate('Enter Revision Limit') }}"
                                                                                                        aria-label="Enter Standard Package Price"
                                                                                                        aria-describedby="nameLabel"
                                                                                                        data-msg="Enter Standard Package Price"
                                                                                                        value="@if(isset($service_package)){{ $service_package->revision_limit }}@endif"
                                                                                                        data-error-class="u-has-error"
                                                                                                        data-success-class="u-has-success">
                                                                                                </div>
                                                                                            </div>
                                                                                            {{-- <div class="col-sm-12 mb-4">
                                                                                                <span
                                                                                                        class="input-group-text"
                                                                                                        id="inputGroup-sizing-sm">What
                                                                                                        is included
                                                                                                        section</span>
                                                                                                <div
                                                                                                    class="input-group mb-3">

                                                                                                     <input
                                                                                                        id="include_description"
                                                                                                        type="text"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        name="premium_included_description[]">

                                                                                                        <textarea id="premium_included_description" name="premium_included_description[]" rows="40" cols="50"> </textarea>
                                                                                                </div>
                                                                                            </div> --}}

                                                                                            <div id="autosaving"
                                                                                                class="row layout-spacing">
                                                                                                <div class="col-lg-12">
                                                                                                    <div
                                                                                                        class="widget-header">
                                                                                                        <div
                                                                                                            class="row">
                                                                                                            <div
                                                                                                                class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                                                                                <h4> What is
                                                                                                                    included
                                                                                                                    section
                                                                                                                </h4>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div>
                                                                                                        <textarea id="premium_included_description" name="premium_included_description" rows="40" cols="50">
                                                                                                            @if(isset($service_package)){!! $service_package->feature_description !!} @endif</textarea>
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
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="text-center">
                                                <button type="submit"
                                                    class="btn btn-primary transition-3d-hover mr-1">{{ translate('Update Service') }}</button>
                                            </div>
                                    </form>
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
    <!--  END CONTENT AREA  -->

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

    <script src="{{ asset('templete') }}/src/assets/js/scrollspyNav.js"></script>
    <script src="{{ asset('templete') }}/src/plugins/src/editors/markdown/simplemde.min.js"></script>
    <script src="{{ asset('templete') }}/src/plugins/src/editors/markdown/custom-markdown.js"></script>

    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>

    {{-- <script src="{{ asset('zeroplus') }}/zeroplusckeditor.js"></script> --}}

    <script type="text/javascript">
        class MyUploadAdapter {
            constructor(loader) {
                this.loader = loader;
            }

            upload() {
                return this.loader.file
                    .then(file => new Promise((resolve, reject) => {
                        this._initRequest();
                        this._initListeners(resolve, reject, file);
                        this._sendRequest(file);
                    }));
            }

            abort() {
                if (this.xhr) {
                    this.xhr.abort();
                }
            }

            _initRequest() {
                const xhr = this.xhr = new XMLHttpRequest();
                console.log("{{ route('image-upload', ['_token' => csrf_token()]) }}");
                xhr.open('POST', '{{ route('image-upload', ['_token' => csrf_token()]) }}', true);
                xhr.responseType = 'json';
            }

            _initListeners(resolve, reject, file) {
                const xhr = this.xhr;
                const loader = this.loader;
                const genericErrorText = `Couldn't upload file: ${ file.name }.`;

                xhr.addEventListener('error', () => reject(genericErrorText));
                xhr.addEventListener('abort', () => reject());
                xhr.addEventListener('load', () => {
                    const response = xhr.response;

                    if (!response || response.error) {
                        return reject(response && response.error ? response.error.message : genericErrorText);
                    }

                    resolve(response);
                });

                if (xhr.upload) {
                    xhr.upload.addEventListener('progress', evt => {
                        if (evt.lengthComputable) {
                            loader.uploadTotal = evt.total;
                            loader.uploaded = evt.loaded;
                        }
                    });
                }
            }

            _sendRequest(file) {
                const data = new FormData();

                data.append('upload', file);

                this.xhr.send(data);
            }
        }

        function MyCustomUploadAdapterPlugin(editor) {
            editor.plugins.get('FileRepository').createUploadAdapter = (loader) => {
                return new MyUploadAdapter(loader);
            };
        }



        // ClassicEditor
        //         .create( $( '#about_service' ), {
        //             extraPlugins: [ MyCustomUploadAdapterPlugin ],
        //         } )
        //         .catch( error => {
        //             console.error( error );
        //         } );

        ClassicEditor.create(document.querySelector('#about_service'), {
                extraPlugins: [MyCustomUploadAdapterPlugin]
            })
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#basic_included_description'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#standard_included_description'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#premium_included_description'))
            .catch(error => {
                console.error(error);
            });



        // function get_category_by_subcategory() {
        //     var category_id = $('#category_id').val();
        //     console.log(category_id);
        //     $.post('{{ route('get_category.subcategory') }}', {
        //         _token: '{{ csrf_token() }}',
        //         category_id: category_id
        //     }, function(data) {
        //         $('#sub_category_id').html(null);
        //         for (var i = 0; i < data.length; i++) {
        //             $('#sub_category_id').append($('<option>', {
        //                 value: data[i].id,
        //                 text: data[i].title
        //             }));
        //         }
        //         $("#sub_category_id > option").each(function() {
        //             if (this.value == '') {
        //                 $("#sub_category_id").val(this.value).change();
        //             }
        //         });

        //     });
        // }

        // $(document).ready(function() {
        //     get_category_by_subcategory();

        // });

        // $('#category_id').on('change', function() {
        //     get_category_by_subcategory();
        // });
    </script>
@endsection

