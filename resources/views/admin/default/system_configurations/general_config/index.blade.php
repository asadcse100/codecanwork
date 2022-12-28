@extends('admin.default.layouts.app')

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing layout-top-spacing">
        <div class="">
            <!-- BREADCRUMB -->
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <div class="row">
                        <div class="col-md-9">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item active">General Config</li>
                            </ol>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- /BREADCRUMB -->

            <div class="col-xl-12 col-lg-12 col-sm-12 layout-top-spacing">
                <div class="card">
                    <div class="card-header">
                        <h1 class="mb-0 h6">{{ translate('General Settings') }}</h1>
                    </div>
                    <form class="form-horizontal" action="{{ route('general-config.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0">
                                <div class="widget-content widget-content-area blog-create-section">

                                    <div class="row p-4">
                                        <div class="col-sm-6 mb-2">
                                            <div class="input-group  mb-2 required">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">System Name</span>
                                                <input type="text" name="site_name" class="form-control form-control-sm"
                                                    value="{{ get_setting('site_name') }}">
                                            </div>
                                        </div>

                                        <div class="col-sm-6 mb-2">
                                            <div class="input-group  mb-2 required">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">System
                                                    Logo-White</span>
                                                <input class="form-control file-upload-input" type="file" id="formFile"
                                                    name="system_logo_white" value="{{ get_setting('system_logo_white') }}">
                                            </div>
                                        </div>

                                        <div class="col-sm-6 mb-2">
                                            <div class="input-group  mb-2 required">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">System
                                                    Logo-Black</span>
                                                <input class="form-control file-upload-input" type="file" id="formFile"
                                                    name="system_logo_black" value="{{ get_setting('system_logo_black') }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mb-2">
                                            <div class="input-group  mb-2 required">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">System
                                                    Timezone</span>
                                                <select name="timezone"
                                                    class="form-control aiz-selectpicker form-control-sm"
                                                    data-live-search="true">
                                                    @foreach (timezones() as $key => $value)
                                                        <option value="{{ $value }}"
                                                            @if (app_timezone() == $value) selected @endif>
                                                            {{ $key }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mb-2">
                                            <div class="input-group  mb-2 required">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Admin login page
                                                    background</span>
                                                <input class="form-control file-upload-input" type="file" id="formFile"
                                                    value="{{ \App\Utility\SettingsUtility::get_settings_value('admin_login_background') }}"
                                                    class="selected-files">
                                            </div>
                                        </div>

                                        <div class="form-group mb-2">
                                            <button style="float: right;" type="submit"
                                                class="btn btn-outline-info p-1">{{ translate('Update') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- end card-body -->
    </div> <!-- end card-->
    <!--  END CONTENT AREA  -->
@endsection
@section('modal')
    @include('admin.default.partials.delete_modal')
@endsection
