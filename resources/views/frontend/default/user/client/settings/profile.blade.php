@extends('layouts.app')

@section('css')
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ asset('templete') }}/src/plugins/src/autocomplete/css/autoComplete.02.css" rel="stylesheet"
        type="text/css" />

    <link href="{{ asset('templete') }}/src/plugins/css/light/autocomplete/css/custom-autoComplete.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('templete') }}/src/plugins/css/dark/autocomplete/css/custom-autoComplete.css" rel="stylesheet"
        type="text/css" />

    <link href="{{ asset('templete') }}/src/assets/css/light/pages/knowledge_base.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('templete') }}/src/assets/css/dark/pages/knowledge_base.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

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
    <!--  END CUSTOM STYLE FILE  -->
@endsection

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">
            <div class="account-content layout-top-spacing">
                <div class="row mb-3">
                    <div class="col-md-12">
                        <h2>Profile Setting</h2>
                        <div class="animated-underline-content">
                            <ul class="nav nav-tabs" id="animateLine" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" id="animated-underline-profile-tab" data-bs-toggle="tab"
                                        href="#animated-underline-profile" role="tab"
                                        aria-controls="animated-underline-profile" aria-selected="false"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z">
                                            </path>
                                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                        </svg> Basic Info</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" id="animated-underline-home-tab" data-bs-toggle="tab"
                                        href="#animated-underline-home" role="tab"
                                        aria-controls="animated-underline-home" aria-selected="true"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z">
                                            </path>
                                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                        </svg> Account Info</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="animated-underline-preferences-tab" data-bs-toggle="tab"
                                        href="#animated-underline-preferences" role="tab"
                                        aria-controls="animated-underline-preferences" aria-selected="false"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4">
                                            </circle>
                                        </svg> Cover Images & Identity Verification</a>
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
                                <form class="section general-info">
                                    <div class="info">
                                        {{-- <h6 class="">Account Info</h6> --}}
                                        <div class="row">
                                            <div class="col-lg-11 mx-auto">
                                                <div class="row">
                                                    <div class="col-xl-2 col-lg-12 col-md-4">
                                                        <div class="profile-image  mt-4 pe-md-4">
                                                            <div class="img-uploader-content text-center">
                                                                <label class="form-label">Profile Image
                                                                </label>
                                                                <input type="file" class="filepond" name="filepond"
                                                                    accept="image/png, image/jpeg, image/gif" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-10 col-lg-10 col-md-8 mt-md-0 mt-4">
                                                        <div class="form">
                                                            <div class="row">
                                                                <div class="col-sm-5 mb-4">
                                                                    <div class="input-group  mb-3 required">
                                                                        <span class="input-group-text"
                                                                            id="inputGroup-sizing-sm">Username</span>
                                                                        <input type="text" class="form-control"
                                                                            name="username"
                                                                            @if ($user_profile->user->user_name != null) value="{{ $user_profile->user->user_name }}" @endif>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-5 mb-4">
                                                                    <div class="input-group  mb-3 required">
                                                                        <span class="input-group-text"
                                                                            id="inputGroup-sizing-sm">Email</span>
                                                                        <input type="email" class="form-control"
                                                                            name="email"
                                                                            @if ($user_profile->user->email != null) value="{{ $user_profile->user->email }}" @endif
                                                                            placeholder="Enter your email address"
                                                                            aria-label="Enter your email address" required
                                                                            aria-describedby="emailLabel" disabled>
                                                                        {{-- <div class="input-group-append">
                                                                            @if ($user_profile->user->email_verified_at == null)
                                                                                <a class="btn btn-secondary"
                                                                                    href="{{ route('email.verification') }}">
                                                                                    {{ translate('Send Verification Link') }}
                                                                                </a>
                                                                            @else
                                                                                <span class="btn btn-success">
                                                                                    {{ translate('Verified') }}
                                                                                    <i class="las la-check"></i>
                                                                                </span>
                                                                            @endif
                                                                        </div>
                                                                        @if ($user_profile->user->email_verified_at == null)
                                                                            <span
                                                                                class="alert alert-danger d-block py-1 mt-1">{{ translate('Verify your email address') }}</span>
                                                                        @endif --}}
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-1 mb-4">
                                                                    <div class="input-group-append">
                                                                        @if ($user_profile->user->email_verified_at == null)
                                                                            <a class="btn btn-secondary"
                                                                                href="{{ route('email.verification') }}">
                                                                                {{ translate('Send Verification Link') }}
                                                                            </a>
                                                                        @else
                                                                            <span class="btn btn-success">
                                                                                {{ translate('Verified') }}
                                                                                <i class="las la-check"></i>
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                    @if ($user_profile->user->email_verified_at == null)
                                                                        <span
                                                                            class="alert alert-danger d-block py-1 mt-1">{{ translate('Verify your email address') }}</span>
                                                                    @endif
                                                                </div>

                                                                <!-- End Input -->

                                                                <!-- Title -->
                                                                <div class="col-sm-6 mb-4">
                                                                    <div class="input-group  mb-3 required">
                                                                        <span class="input-group-text"
                                                                            id="inputGroup-sizing-sm">New Password</span>
                                                                        <input type="password" class="form-control"
                                                                            name="new_password">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6 mb-4">
                                                                    <div class="input-group  mb-3 required">
                                                                        <span class="input-group-text"
                                                                            id="inputGroup-sizing-sm">Confirm
                                                                            Password</span>
                                                                        <input type="password" class="form-control"
                                                                            name="confirm_password">
                                                                    </div>
                                                                </div>

                                                                <!-- End Input -->

                                                                <div class="text-right mt-4">
                                                                    <!-- Buttons -->
                                                                    <button type="submit"
                                                                        class="btn btn-primary">{{ translate('Save Changes') }}</button>
                                                                    <!-- End Buttons -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane fade" id="animated-underline-profile" role="tabpanel"
                        aria-labelledby="animated-underline-profile-tab">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                <div class="section general-info payment-info">
                                    <div class="info">
                                        <h6 class="">Basic Info</h6>

                                        <form action="{{ route('user_profile.basic_info_update') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div div class="row">
                                                <div class="col-lg-4 mb-4">
                                                    <div class="input-group  mb-3 required">
                                                        <span class="input-group-text"
                                                            id="inputGroup-sizing-sm">Name</span>
                                                        <input type="text" class="form-control" name="name"
                                                            value="{{ $user_profile->user->name }}"
                                                            placeholder="Enter your name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="input-group  mb-3 required">
                                                        <span class="input-group-text"
                                                            id="inputGroup-sizing-sm">Gender</span>
                                                        <select class="form-select aiz-selectpicker" name="gender"
                                                            required>
                                                            <option value="male"
                                                                @if ($user_profile->gender == 'male') selected @endif>Male
                                                            </option>
                                                            <option value="female"
                                                                @if ($user_profile->gender == 'female') selected @endif>Female
                                                            </option>
                                                            <option value="other"
                                                                @if ($user_profile->gender == 'other') selected @endif>Other
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="input-group  mb-3 required">
                                                        <span class="input-group-text"
                                                            id="inputGroup-sizing-sm">Phone</span>
                                                        <input type="number" class="form-control" name="phone"
                                                            @if ($user_profile->user->address->phone != null) value="{{ $user_profile->user->address->phone }}" @endif
                                                            placeholder="Enter your contact number" required>
                                                    </div>
                                                </div>
                                                <!-- Input -->
                                                <div class="js-form-message">
                                                    <div class="form-group row">
                                                        <div class="col-lg-4">
                                                            <div class="input-group  mb-3 required">
                                                                <span class="input-group-text"
                                                                    id="inputGroup-sizing-sm">Country</span>
                                                                <select class="form-select aiz-selectpicker"
                                                                    name="country_id" id="country_id" required
                                                                    data-live-search="true">
                                                                    @foreach (\App\Models\Country::all() as $key => $country)
                                                                        @if ($user_profile->user->address->country_id != null)
                                                                            <option value="{{ $country->id }}"
                                                                                @if ($user_profile->user->address->country_id == $country->id) selected @endif>
                                                                                {{ $country->name }}</option>
                                                                        @else
                                                                            <option value="{{ $country->id }}">
                                                                                {{ $country->name }}
                                                                            </option>
                                                                        @endif
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="input-group  mb-3 required">
                                                                <span class="input-group-text"
                                                                    id="inputGroup-sizing-sm">City</span>
                                                                <select class="form-select aiz-selectpicker"
                                                                    name="city_id" id="city_id" required
                                                                    data-msg="Please select your city."
                                                                    data-live-search="true">

                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="input-group  mb-3 ">
                                                                <span class="input-group-text"
                                                                    id="inputGroup-sizing-sm">Postal Code</span>
                                                                <input type="number" id="postal_code" name="postal_code"
                                                                    @if ($user_profile->user->address->postal_code != null) value="{{ $user_profile->user->address->postal_code }}" @endif
                                                                    placeholder="{{ translate('Eg. 1203') }}"
                                                                    class="form-control">
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                                <div class="js-form-message layout-top-spacing">
                                                    <div class="form-group row">
                                                        <div class="col-lg-12">
                                                            <div class="input-group  mb-3">
                                                                <span class="input-group-text"
                                                                    id="inputGroup-sizing-sm">Address</span>
                                                                <input type="text" class="form-control" name="address"
                                                                    @if ($user_profile->user->address->street != null) value="{{ $user_profile->user->address->street }}" @endif
                                                                    placeholder="Enter your street address">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="mb-3 mt-4">
                                                <!-- Title -->
                                                <div class="col-mb-">
                                                    <h5 class="h6 mb-0">
                                                        {{ translate('Bio') }}
                                                        <span class="text-danger">*</span>
                                                    </h5>
                                                    <small
                                                        class="form-text text-muted">{{ translate('Tell us about yourself in few sentences') }}.</small>
                                                </div>
                                                <!-- End Title -->
                                                <div class="form-group">
                                                    <textarea class="form-control" rows="3" maxlength="{{ $user_profile->user->userPackage->bio_text_limit }}"
                                                        name="bio" required>{{ $user_profile->bio }}</textarea>
                                                </div>
                                                <div class="text-right mt-4">
                                                    <!-- Buttons -->
                                                    <button type="submit"
                                                        class="btn btn-primary">{{ translate('Save Changes') }}</button>
                                                    <!-- End Buttons -->
                                                </div>
                                        </form>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="animated-underline-preferences" role="tabpanel"
                    aria-labelledby="animated-underline-preferences-tab">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                            <div class="section general-info">
                                <div class="info">
                                    <h6 class="">Cover Images</h6>
                                    <form class="js-validate" action="{{ route('user_profile.photo_update') }}"
                                        method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="card-body">
                                            <div class="col-sm-12 mb-4">
                                                <div class="input-group  mb-3">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Cover
                                                        Image</span>
                                                    <input type="file" class="form-control" type="file"
                                                        name="cover_photo"
                                                        value="{{ $user_profile->user->cover_photo }}">
                                                </div>
                                            </div>
                                            <div class="text-right mt-4">
                                                <!-- Buttons -->
                                                <button type="submit"
                                                    class="btn btn-primary ">{{ translate('Save Changes') }}</button>
                                                <!-- End Buttons -->
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                            <div class="section general-info">

                                @if ($verification == null)
                                    <div class="info">
                                        <div class="card-header">
                                            <h4 class="h6 font-weight-medium mb-0">
                                                {{ translate('Identity Verification') }}</h4>
                                        </div>
                                        <div class="card-body">
                                            <form action="{{ route('user_profile.verification_store') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="card-body">
                                                    <div class="col-sm-12 mb-4">
                                                        <div class="input-group  mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">Nid /
                                                                Passport PDF</span>
                                                            <input type="file" class="form-control" type="file"
                                                                name="verification_type" value="identity_verification">
                                                        </div>
                                                    </div>
                                                    <div class="text-right mt-4">
                                                        <!-- Buttons -->
                                                        <button type="submit"
                                                            class="btn btn-primary ">{{ translate('Save Changes') }}</button>
                                                        <!-- End Buttons -->
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                @elseif ($verification != null && $verification->verified == 0)
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="h6 font-weight-medium mb-0">
                                                {{ translate('Identity Verification') }}</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="alert alert-info" role="alert">
                                                {{ translate('Your identity verification has not been approved yet.') }}
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="h6 font-weight-medium mb-0">
                                                {{ translate('Identity Verification') }}</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="alert alert-success" role="alert">
                                                {{ translate('Your identity verifed successfully.') }}
                                            </div>
                                        </div>
                                    </div>
                                @endif
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
@section('modal')
    @include('frontend.default.partials.cancel_modal')
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
    <!--  END CUSTOM SCRIPTS FILE  -->
@endsection
