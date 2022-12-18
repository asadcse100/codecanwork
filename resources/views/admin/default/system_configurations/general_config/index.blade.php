@extends('admin.default.layouts.app')

@section('css')
    <!-- BEGIN PAGE LEVEL STYLES -->

    <!-- END PAGE LEVEL STYLES -->
@endsection

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">
        <div class="">
            <div class="layout-top-spacing">
            </div>

            <div class="row layout-top-spacing">
                <div class="col-lg-12 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="mb-0 h6">{{ translate('General Settings') }}</h1>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" action="{{ route('general-config.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="row mb-4 layout-spacing">
                                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0 mt-4">
                                            <div class="widget-content widget-content-area blog-create-section">
                                                <div class="card">
                                                    <div class="row p-4">
                                                        <div class="col-sm-6 mb-4">
                                                            <div class="input-group  mb-3 required">
                                                                <span class="input-group-text"
                                                                    id="inputGroup-sizing-sm">System Name</span>
                                                                <input type="text" name="site_name" class="form-control"
                                                                    value="{{ get_setting('site_name') }}">
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 mb-4">
                                                            <div class="input-group  mb-3 required">
                                                                <span class="input-group-text"
                                                                    id="inputGroup-sizing-sm">System Logo-White</span>
                                                                <input class="form-control file-upload-input" type="file"
                                                                    id="formFile" name="system_logo_white"
                                                                    value="{{ get_setting('system_logo_white') }}">
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 mb-4">
                                                            <div class="input-group  mb-3 required">
                                                                <span class="input-group-text"
                                                                    id="inputGroup-sizing-sm">System Logo-Black</span>
                                                                <input class="form-control file-upload-input" type="file"
                                                                    id="formFile" name="system_logo_black"
                                                                    value="{{ get_setting('system_logo_black') }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 mb-4">
                                                            <div class="input-group  mb-3 required">
                                                                <span class="input-group-text"
                                                                    id="inputGroup-sizing-sm">System Timezone</span>
                                                                <select name="timezone"
                                                                    class="form-control aiz-selectpicker"
                                                                    data-live-search="true">
                                                                    @foreach (timezones() as $key => $value)
                                                                        <option value="{{ $value }}"
                                                                            @if (app_timezone() == $value) selected @endif>
                                                                            {{ $key }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 mb-4">
                                                            <div class="input-group  mb-3 required">
                                                                <span class="input-group-text"
                                                                    id="inputGroup-sizing-sm">Admin login page
                                                                    background</span>
                                                                <input class="form-control file-upload-input" type="file"
                                                                    id="formFile"
                                                                    value="{{ \App\Utility\SettingsUtility::get_settings_value('admin_login_background') }}"
                                                                    class="selected-files">
                                                            </div>
                                                        </div>

                                                        <div class="form-group mb-3 text-right">
                                                            <button type="submit"
                                                                class="btn btn-outline-primary btn-sm mb-2 me-4">{{ translate('Update') }}</button>
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
            </div>
        </div> <!-- end card-body -->
    </div> <!-- end card-->



    <!--  END CONTENT AREA  -->
@endsection
@section('modal')
    @include('admin.default.partials.delete_modal')
@endsection
@section('script')
    <!-- BEGIN PAGE LEVEL SCRIPTS -->

    <!-- END PAGE LEVEL SCRIPTS -->
@endsection
