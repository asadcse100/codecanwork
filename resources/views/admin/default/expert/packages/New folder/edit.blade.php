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
                <h5 class="mb-md-0 h6">{{ translate('Edit Package') }}</h5>
            </div>

            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="widget-content widget-content-area layout-top-spacing">
                        <div class="card-body">
                            <form class="form-horizontal" action="{{ route('package.update', $package->id) }}" method="POST"
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
                                                            value="{{ $package->name }}" class="form-control">
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
                                                            name="price" value="{{ $package->price }}"
                                                            class="form-control">
                                                        {{-- <small
                                                            class="form-text text-muted">{{ translate('Use 0 for free package') }}</small> --}}
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mb-4">
                                                    <div class="input-group mb-3 required">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm"
                                                            for="validationCustom01">Badge</span>
                                                        <input class="form-control file-upload-input" name="badge"
                                                            type="file" id="formFile" value="{{ $package->badge }}">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mb-4">
                                                    <div class="input-group mb-3 required">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm"
                                                            for="validationCustom01">Icon</span>
                                                        <input class="form-control file-upload-input" name="photo"
                                                            type="file" id="formFile" value="{{ $package->icon }}">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6 mb-4">
                                                    <div class="input-group mb-3 required">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm"
                                                            for="validationCustom01">Validate For</span>
                                                        <input type="number" min="0" step="1"
                                                            id="number_of_days" name="number_of_days"
                                                            value="{{ $package->number_of_days }}" class="form-control">
                                                        {{-- <small
                                                            class="form-text text-muted">{{ translate('Number in days. Use 0 for life time') }}</small> --}}
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mb-4">
                                                    <div class="input-group mb-3 required">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm"
                                                            for="validationCustom01">Commision</span>
                                                        <input type="number" min="1" step="1" id="commission"
                                                            name="commission" value="{{ $package->commission }}"
                                                            class="form-control">
                                                        {{-- <small
                                                            class="form-text text-muted">{{ translate('Amount will be deducted from project payment. Use 0 for no deduction') }}</small> --}}
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mb-4">
                                                    <div class="input-group mb-3 required">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm"
                                                            for="validationCustom01">Commision Type</span>
                                                        <select class="select2 form-control aiz-selectpicker"
                                                            name="commission_type" id="commission_type"
                                                            data-toggle="select2" data-placeholder="Choose ...">
                                                            <option value="percent"
                                                                @if ($package->commission_type == 'percent') selected @endif>
                                                                {{ translate('Percent') }}</option>
                                                            <option value="amount"
                                                                @if ($package->commission_type == 'amount') selected @endif>
                                                                {{ translate('Flat Rate') }}</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mb-4">
                                                    <div class="input-group mb-3 required">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm"
                                                            for="validationCustom01">Fixed Projects</span>
                                                        <input type="number" min="0" step="1"
                                                            id="fixed_limit" name="fixed_limit"
                                                            value="{{ $package->fixed_limit }}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mb-4">
                                                    <div class="input-group mb-3 required">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm"
                                                            for="validationCustom01">Long Term Projects</span>
                                                        <input type="number" min="0" step="1"
                                                            id="long_term_limit" name="long_term_limit" required
                                                            value="{{ $package->long_term_limit }}" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6 mb-4">
                                                    <div class="input-group mb-3 required">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm"
                                                            for="validationCustom01">Skill Limit</span>
                                                        <input type="number" min="0" step="1"
                                                            id="skill_add_limit" name="skill_add_limit"
                                                            value="{{ $package->skill_add_limit }}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mb-4">
                                                    <div class="input-group mb-3 required">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm"
                                                            for="validationCustom01">Portfolio Limit</span>
                                                        <input type="number" min="0" step="1"
                                                            id="portfolio_add_limit" name="portfolio_add_limit"
                                                            value="{{ $package->portfolio_add_limit }}"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mb-4">
                                                    <div class="input-group mb-3 required">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm"
                                                            for="validationCustom01">Bio Limit</span>
                                                        <input type="number" min="0" step="1"
                                                            id="bio_text_limit" name="bio_text_limit"
                                                            value="{{ $package->bio_text_limit }}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mb-4">
                                                    <div class="input-group mb-3 required">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm"
                                                            for="validationCustom01">Project Bookmark Limit</span>
                                                        <input type="number" min="0" step="1"
                                                            id="project_bookmark_limit" name="project_bookmark_limit"
                                                            value="{{ $package->bookmark_project_limit }}"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mb-4">
                                                    <div class="input-group mb-3 required">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm"
                                                            for="validationCustom01">Job Experience Limit</span>
                                                        <input type="number" min="0" step="1"
                                                            id="job_experience_limit" name="job_experience_limit"
                                                            value="{{ $package->job_exp_limit }}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mb-4">
                                                    <div class="input-group mb-3 required">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm"
                                                            for="validationCustom01">Service Limit</span>
                                                        <input type="number" min="0" step="1"
                                                            id="service_limit" name="service_limit"
                                                            value="{{ $package->service_limit }}" class="form-control">
                                                    </div>
                                                </div>


                                                <div class="form-group mb-3">
                                                    <label>{{ translate('Enable Client Following ?') }}</label>
                                                    <div>
                                                        <label class="aiz-switch aiz-switch-success mb-0">
                                                            <input type="checkbox"
                                                                @if ($package->following_status == '1') checked @endif
                                                                name="following_status">
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label>{{ translate('Recommended ?') }}</label>
                                                    <div>
                                                        <label class="aiz-switch aiz-switch-success mb-0">
                                                            <input type="checkbox" name="recommended"
                                                                @if ($package->recommended == '1') checked @endif>
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label>{{ translate('Publish Package ?') }}</label>
                                                    <div>
                                                        <label class="aiz-switch aiz-switch-success mb-0">
                                                            <input type="checkbox"
                                                                @if ($package->active == '1') checked @endif
                                                                name="active">
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0 text-right">
                                                    <button type="submit"
                                                        class="btn btn-primary">{{ translate('Update Package') }}</button>
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
