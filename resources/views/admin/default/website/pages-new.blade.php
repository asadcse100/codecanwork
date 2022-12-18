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
            <div class="aiz-titlebar mt-2 mb-3">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1 class="h3">{{ translate('Add New Page') }}</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('custom-pages.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="row mb-4 layout-spacing">
                                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0 mt-4">
                                            <div class="widget-content widget-content-area blog-create-section">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h6 class="fw-600 mb-0">{{ translate('Page Content') }}</h6>
                                                    </div>
                                                    <div class="row p-4">
                                                        <div class="col-sm-6 mb-4">
                                                            <div class="input-group  mb-3 required">
                                                                <span class="input-group-text"
                                                                    id="inputGroup-sizing-sm">Title</span>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Title" name="title">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 mb-4">
                                                            <div class="input-group  mb-3 required">
                                                                <span class="input-group-text"
                                                                    id="inputGroup-sizing-sm">Link</span>
                                                                <input type="text" class="form-control"
                                                                    placeholder="page-link" name="slug">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 mb-4">
                                                            <div class="input-group  mb-3 required">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Add
                                                                    Content</span>
                                                                <textarea class="aiz-text-editor form-control" placeholder="Content.." data-min-height="400" name="content"></textarea>
                                                            </div>
                                                        </div>

                                                        {{-- Seo Fields --}}
                                                        <div class="card-header">
                                                            <h6 class="fw-600 mb-0">{{ translate('Seo Fields') }}</h6>
                                                        </div>
                                                        <div class="row p-4">
                                                            <div class="col-sm-6 mb-4">
                                                                <div class="input-group  mb-3 required">
                                                                    <span class="input-group-text"
                                                                        id="inputGroup-sizing-sm">Meta Title</span>
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Title" name="meta_title">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 mb-4">
                                                                <div class="input-group  mb-3 required">
                                                                    <span class="input-group-text"
                                                                        id="inputGroup-sizing-sm">Meta description</span>
                                                                    <textarea class="resize-off form-control" placeholder="Description" name="meta_description"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 mb-4">
                                                                <div class="input-group  mb-3 required">
                                                                    <span class="input-group-text"
                                                                        id="inputGroup-sizing-sm">Keywords</span>
                                                                    <textarea class="resize-off form-control" placeholder="Keyword, Keyword" name="keywords"></textarea>
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
                                                                    class="btn btn-outline-primary">{{ translate('Add Page') }}</button>
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
            </div>
        </div>
    </div>



    <!--  END CONTENT AREA  -->
@endsection
@section('modal')
    @include('admin.default.partials.delete_modal')
@endsection
@section('script')
    <!-- BEGIN PAGE LEVEL SCRIPTS -->

    <!-- END PAGE LEVEL SCRIPTS -->
@endsection
