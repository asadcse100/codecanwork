@extends('admin.default.layouts.app')

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing layout-top-spacing">
            <div class="col-md-3 layout-top-spacing">
                <h6>{{ translate('General Config') }}</h6>
            </div>
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
                                        <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-sm-12 mb-2">
                                            <div class="input-group mb-2 required">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">System Name</span>
                                                <input type="text" name="site_name" class="form-control"
                                                    value="{{ get_setting('site_name') }}">
                                            </div>
                                        </div>

                                       <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-sm-12 mb-2">
                                            <div class="input-group mb-2 required">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">System
                                                    Logo-White</span>
                                                <input class="form-control" type="file" id="formFile"
                                                    name="system_logo_white" value="{{ get_setting('system_logo_white') }}">
                                            </div>
                                        </div>

                                       <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-sm-12 mb-2">
                                            <div class="input-group mb-2 required">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">System
                                                    Logo-Black</span>
                                                <input class="form-control" type="file" id="formFile"
                                                    name="system_logo_black" value="{{ get_setting('system_logo_black') }}">
                                            </div>
                                        </div>
                                       <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-sm-12 mb-2">
                                            <div class="input-group  mb-2 required">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">System
                                                    Timezone</span>
                                                <select name="timezone"
                                                    class="form-control"
                                                    data-live-search="true">
                                                    @foreach (timezones() as $key => $value)
                                                        <option value="{{ $value }}"
                                                            @if (app_timezone() == $value) selected @endif>
                                                            {{ $key }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                       <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-sm-12 mb-2">
                                            <div class="input-group  mb-2 required">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Admin login page
                                                    background</span>
                                                <input class="form-control" type="file" id="formFile"
                                                    value="{{ \App\Utility\SettingsUtility::get_settings_value('admin_login_background') }}"
                                                    class="selected-files">
                                            </div>
                                        </div>
                                        <div class="col-sm-7 mt-2">
                                            <div class="form-group mb-2">
                                                <button style="float: right;" type="submit"
                                                    class="btn btn-outline-info">{{ translate('Update') }}</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- end card-body -->
    <!--  END CONTENT AREA  -->
@endsection
@section('modal')
    @include('admin.default.partials.delete_modal')
@endsection
