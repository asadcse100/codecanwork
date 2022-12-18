@extends('admin.default.layouts.app')

@section('css')
    <!-- BEGIN PAGE LEVEL STYLES -->

    <!-- END PAGE LEVEL STYLES -->
@endsection

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">
            <div class="col-md-3   layout-top-spacing">
                <h5 class="mb-md-0 h6">{{ translate('Create New Package') }}</h5>
            </div>

            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="widget-content widget-content-area layout-top-spacing">
                        <div class="card-body">
                            <form class="form-horizontal" action="{{ route('package.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row layout-spacing">
                                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0">
                                        <div class="widget-content widget-content-area blog-create-section">
                                            <div class="row layout-top-spacing p-4">
                                                <div class="col-sm-6 mb-4">
                                                    <div class="input-group mb-3 required">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm"
                                                            for="validationCustom01">Package Name</span>
                                                        <input type="text" id="name" name="name" required
                                                            placeholder="{{ translate('Eg. Bronze Package') }}"
                                                            class="form-control">
                                                        <div class="invalid-feedback">
                                                            Please fill the Package Name.
                                                        </div>
                                                    </div>
                                                </div>

                                                <input type="hidden" id="type" name="type" value="expert"
                                                    class="form-control">
                                                <div class="col-sm-6 mb-4">
                                                    <div class="input-group mb-3 required">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm"
                                                            for="validationCustom01">Price</span>
                                                        <input type="number" min="0" step="0.01" id="price"
                                                            name="price" required placeholder="{{ translate('Eg. 25') }}"
                                                            class="form-control">
                                                        <div class="invalid-feedback">
                                                            Please fill the Package Name.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mb-4">
                                                    <div class="input-group mb-3 required">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm"
                                                            for="validationCustom01">Badge</span>
                                                        <input class="form-control file-upload-input" name="badge"
                                                            type="file" id="formFile">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mb-4">
                                                    <div class="input-group mb-3 required">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm"
                                                            for="validationCustom01">Icon</span>
                                                        <input class="form-control file-upload-input" name="icon"
                                                            type="file" id="formFile">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mb-4">
                                                    <div class="input-group mb-3 required">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm"
                                                            for="validationCustom01">Validate For</span>
                                                        <input type="number" min="0" step="1"
                                                            id="number_of_days" name="number_of_days" required
                                                            placeholder="{{ translate('Eg. 30') }}" class="form-control">
                                                        {{-- <small
                                                            class="form-text text-muted">{{ translate('Number in days. Use 0 for life time') }}</small> --}}
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mb-4">
                                                    <div class="input-group mb-3 required">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm"
                                                            for="validationCustom01">Fixed Project</span>
                                                        <input type="number" min="0" step="1" id="fixed_limit"
                                                            name="fixed_limit" required
                                                            placeholder="Limitation for Fixed Project Posting"
                                                            class="form-control">
                                                        {{-- <small
                                                            class="form-text text-muted">{{ translate('Amount will be deducted from project payment. Use 0 for no deduction') }}</small> --}}
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mb-4">
                                                    <div class="input-group mb-3 required">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm"
                                                            for="validationCustom01">Commision Type</span>
                                                        <select class="select2 form-select aiz-selectpicker"
                                                            name="commission_type" id="commission_type"
                                                            data-toggle="select2" data-placeholder="Choose ...">
                                                            <option value="percent">{{ translate('Percent') }}</option>
                                                            <option value="amount">{{ translate('Flat Rate') }}</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mb-4">
                                                    <div class="input-group mb-3 required">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm"
                                                            for="validationCustom01">Long Term Project</span>
                                                        <input type="number" min="0" step="1"
                                                            id="long_term_limit" name="long_term_limit" required
                                                            placeholder="Limitation for Long Term Project Posting"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mb-4">
                                                    <div class="input-group mb-3 required">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm"
                                                            for="validationCustom01">Bio Word Limit</span>
                                                        <input type="number" min="0" step="1"
                                                            id="bio_text_limit" name="bio_text_limit" required
                                                            placeholder="Bio Word Limit" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6 mb-4">
                                                    <div class="input-group mb-3 required">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm"
                                                            for="validationCustom01">Portfolio Limit</span>
                                                        <input type="number" min="0" step="1"
                                                            id="portfolio_add_limit" name="portfolio_add_limit" required
                                                            placeholder="Portfolio Adding Limit" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mb-4">
                                                    <div class="input-group mb-3 required">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm"
                                                            for="validationCustom01">Bio Limit</span>
                                                        <input type="number" min="0" step="1"
                                                            id="bio_text_limit" name="bio_text_limit" required
                                                            placeholder="Bio Word Limit" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label
                                                        for="following_status">{{ translate('Enable expert Following ?') }}</label>
                                                    <div>
                                                        <label class="aiz-switch aiz-switch-success mb-0">
                                                            <input type="checkbox" checked="checked"
                                                                name="following_status">
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label>{{ translate('Recommended ?') }}</label>
                                                    <div>
                                                        <label class="aiz-switch aiz-switch-success mb-0">
                                                            <input type="checkbox" checked="checked" name="recommended">
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="active">{{ translate('Publish Package?') }}</label>
                                                    <div>
                                                        <label class="aiz-switch aiz-switch-success mb-0">
                                                            <input type="checkbox" checked="checked" name="active">
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0 text-right">
                                                    <button type="submit"
                                                        class="btn btn-outline-success mb-2 me-4">{{ translate('Create New Package') }}</button>
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

    </div>
    <!--  END CONTENT AREA  -->
@endsection

@section('script')
    <!-- BEGIN PAGE LEVEL SCRIPTS -->

    <!-- END PAGE LEVEL SCRIPTS -->
@endsection
