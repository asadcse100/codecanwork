@extends('admin.default.layouts.app')
@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing layout-top-spacing">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="fw-600 mb-0">{{ translate('General') }}</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('general-config.store') }}" method="POST">
                                @csrf
                                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <div class="widget-content widget-content-area">
                                                    <div class="row layout-top-spacing p-4">
                                                        <div class="col-sm-6 mb-4">
                                                            <div class="input-group  mb-3 required">
                                                                <span class="input-group-text"
                                                                    id="inputGroup-sizing-sm">Frontend
                                                                    Website
                                                                    Name</span>
                                                                <input type="text" name="website_name"
                                                                    class="form-control"
                                                                    value="{{ get_setting('website_name') }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 mb-4">
                                                            <div class="input-group  mb-3 required">
                                                                <span class="input-group-text"
                                                                    id="inputGroup-sizing-sm">Site
                                                                    Motto</span>
                                                                <input type="text" name="site_motto" class="form-control"
                                                                    value="{{ get_setting('site_motto') }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 mb-4">
                                                            <div class="input-group  mb-3 required">
                                                                <span class="input-group-text"
                                                                    id="inputGroup-sizing-sm">Site Icon</span>
                                                                <input type="text" name="site_motto" class="form-control"
                                                                    value="{{ get_setting('site_motto') }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 mb-4">
                                                            <div class="input-group  mb-3 required">
                                                                <span class="input-group-text"
                                                                    id="inputGroup-sizing-sm">Site Icon</span>
                                                                <input class="form-control file-upload-input" type="file"
                                                                    name="site_icon" id="formFile">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 mb-4">
                                                            <div class="input-group  mb-3 required">
                                                                <span class="input-group-text"
                                                                    id="inputGroup-sizing-sm">Website Base Color</span>
                                                                <input type="text" name="base_color" class="form-control"
                                                                    placeholder="#377dff"
                                                                    value="{{ get_setting('base_color') }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 mb-4">
                                                            <div class="input-group  mb-3 required">
                                                                <span class="input-group-text"
                                                                    id="inputGroup-sizing-sm">Website Base Hover
                                                                    Color</span>
                                                                <input type="text" name="base_hov_color"
                                                                    class="form-control" placeholder="#377dff"
                                                                    value="{{ get_setting('base_hov_color') }}">
                                                            </div>
                                                        </div>

                                                        <div class="text-right">
                                                            <button type="submit"
                                                                class="btn btn-outline-info mb-2 me-4">{{ translate('Update') }}</button>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                            </form>
                        </div>
                    </div>
                    <div class="card layout-top-spacing">
                        <div class="card-header">
                            <h6 class="fw-600 mb-0">{{ translate('Global Seo') }}</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('system_configuration.update') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                    <div class="row mb-4 layout-spacing">
                                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0 mt-4">
                                            <div class="widget-content widget-content-area blog-create-section">
                                                    <div class="row layout-top-spacing p-4">

                                                        <div class="col-sm-6 mb-4">
                                                            <div class="input-group  mb-3 required">
                                                                <span class="input-group-text"
                                                                    id="inputGroup-sizing-sm">Meta Title</span>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Title" name="meta_title"
                                                                    value="{{ get_setting('meta_title') }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 mb-4">
                                                            <div class="input-group  mb-3 required">
                                                                <span class="input-group-text"
                                                                    id="inputGroup-sizing-sm">Meta description</span>
                                                                <textarea class="resize-off form-control" name="meta_description"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 mb-4">
                                                            <div class="input-group  mb-3 required">
                                                                <span class="input-group-text"
                                                                    id="inputGroup-sizing-sm">meta_keywords</span>
                                                                <textarea class="resize-off form-control" name="meta_keywords"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 mb-4">
                                                            <div class="input-group  mb-3 required">
                                                                <span class="input-group-text"
                                                                    id="inputGroup-sizing-sm">Meta Image</span>
                                                                <input class="form-control file-upload-input"
                                                                    type="file" name="meta_image" id="formFile">
                                                            </div>
                                                        </div>

                                                        <div class="text-right">
                                                            <button type="submit"
                                                                class="btn btn-outline-primary btn-sm mb-2 me-4">{{ translate('Update') }}</button>
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
        </div>
    <!--  END CONTENT AREA  -->
@endsection
@section('modal')
    @include('admin.default.partials.delete_modal')
@endsection

