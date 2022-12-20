@extends('admin.default.layouts.app')

@section('css')
    <!-- BEGIN PAGE LEVEL STYLES -->
    <!-- END PAGE LEVEL STYLES -->
@endsection

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">
        <div class="">
                        <!-- BREADCRUMB -->
<div class="page-meta">
    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
        <div class="row">
            <div class="col-md-10">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item active" aria-current="page">All Package</li>
                </ol>
            </div>
            <div class="col-md-2">
                <button style="float: right;" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg" class="btn btn-outline-info">Create Package</button>
            </div>
        </div>
    </nav>
  </div>
  <!-- /BREADCRUMB -->
            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="widget-content widget-content-area layout-top-spacing">
                        <form class="" id="sort_projects" action="" method="GET">
                            <div class="card-header row gutters-5" style="justify-content:center">

                                <div class="col-md-3 ml-auto">
                                    <select class="form-control form-control-sm aiz-selectpicker mb-2 mb-md-0" name="user_id" id="user_id"
                                        data-live-search="true" onchange="sort_projects()">
                                        <option value="">{{ translate('Filter by Client') }}</option>
                                        @foreach (App\Models\User::where('user_type', 'client')->get() as $key => $client)
                                            @if ($client->user != null)
                                                <option value="{{ $client->id }}"
                                                    @if ($client->id == $client_id) selected @endif>
                                                    {{ $client->name }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-3 ml-auto">
                                    <select class="form-control form-control-sm aiz-selectpicker mb-2 mb-md-0" name="type" id="type"
                                        onchange="sort_projects()">
                                        <option value="">{{ translate('Sort by') }}</option>
                                        <option value="created_at,asc"
                                            @isset($col_name, $query) @if ($col_name == 'created_at' && $query == 'asc') selected @endif
                                        @endisset>
                                            {{ translate('Time (Old > New)') }}</option>
                                        <option value="created_at,desc"
                                            @isset($col_name, $query) @if ($col_name == 'created_at' && $query == 'desc') selected @endif
                                    @endisset>
                                            {{ translate('Time (New > Old)') }}</option>
                                        <option value="price,desc"
                                            @isset($col_name, $query) @if ($col_name == 'price' && $query == 'desc') selected @endif
                                @endisset>
                                            {{ translate('Price (High > Low)') }}</option>
                                        <option value="price,asc"
                                            @isset($col_name, $query) @if ($col_name == 'price' && $query == 'asc') selected @endif
                            @endisset>
                                            {{ translate('Price (Low > High)') }}</option>
                                    </select>
                                </div>

                            </div>
                        </form>

                        <table id="individual-col-search" class="table dt-table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Title</th>
                                    <th>Type</th>
                                    <th data-breakpoints="sm">Total sale</th>
                                    <th data-breakpoints="sm">Badge</th>
                                    <th data-breakpoints="md">Price</th>
                                    <th data-breakpoints="md">Commision</th>
                                    <th data-breakpoints="md">Recommended</th>
                                    <th data-breakpoints="md">Icon</th>
                                    <th>Status</th>
                                    <th>Options</th>
                                </tr>
                            </thead>

                            <div class="modal fade bd-example-modal-lg" id="bd-edit-modal-lg" aria-hidden="true"
                            aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">

                                    <div class="">
                                        <!-- Start now   -->
                                        <div class="row">

                                            <div
                                                class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0">

                                                <div
                                                    class="widget-content widget-content-area blog-create-section">
                                                    <div class="col-md-3   layout-top-spacing">
                                                        <h5 class="mb-md-0 h6">{{ translate('Create New Package') }}</h5>
                                                    </div>
                                                    <form class="form-horizontal" action="{{ route('package.store') }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row layout-spacing">
                                                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0">
                                                            <div class="widget-content widget-content-area blog-create-section">
                                                                <div class="row layout-top-spacing p-4">
                                                                    <div class="col-sm-6 mb-2">
                                                                        <div class="input-group mb-3 required">
                                                                            <span class="input-group-text" id="inputGroup-sizing-sm"
                                                                                for="validationCustom01">Package Name</span>
                                                                            <input type="text" id="name" name="name" required
                                                                                placeholder="{{ translate('Eg. Bronze Package') }}"
                                                                                class="form-control form-control-sm">
                                                                            <div class="invalid-feedback">
                                                                                Please fill the Package Name.
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <input type="hidden" id="type" name="type" value="freelancer"
                                                                        class="form-control">

                                                                    <div class="col-sm-6 mb-2">
                                                                        <div class="input-group mb-3 required">
                                                                            <span class="input-group-text" id="inputGroup-sizing-sm"
                                                                                for="validationCustom01">Price</span>
                                                                            <input type="number" min="0" step="0.01" id="price"
                                                                                name="price" required placeholder="{{ translate('Eg. 25') }}"
                                                                                class="form-control form-control-sm">
                                                                            {{-- <small
                                                                                class="form-text text-muted">{{ translate('Use 0 for free package') }}</small> --}}
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 mb-2">
                                                                        <div class="input-group mb-3 required">
                                                                            <span class="input-group-text" id="inputGroup-sizing-sm"
                                                                                for="validationCustom01">Badge</span>
                                                                            <input class="form-control file-upload-input" name="badge"
                                                                                type="file" id="formFile">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 mb-2">
                                                                        <div class="input-group mb-3 required">
                                                                            <span class="input-group-text" id="inputGroup-sizing-sm"
                                                                                for="validationCustom01">Icon</span>
                                                                            <input class="form-control file-upload-input" name="photo"
                                                                                type="file" id="formFile">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 mb-2">
                                                                        <div class="input-group mb-3 required">
                                                                            <span class="input-group-text" id="inputGroup-sizing-sm"
                                                                                for="validationCustom01">Validate For</span>
                                                                            <input type="number" min="0" step="1"
                                                                                id="number_of_days" name="number_of_days" required
                                                                                placeholder="{{ translate('Eg. 30') }}" class="form-control form-control-sm">
                                                                            {{-- <small
                                                                                class="form-text text-muted">{{ translate('Number in days. Use 0 for life time') }}</small> --}}
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 mb-2">
                                                                        <div class="input-group mb-3 required">
                                                                            <span class="input-group-text" id="inputGroup-sizing-sm"
                                                                                for="validationCustom01">Commision</span>
                                                                            <input type="number" min="1" step="1" id="commission"
                                                                                name="commission" required
                                                                                placeholder="{{ translate('Eg. 5') }}" class="form-control form-control-sm">
                                                                            {{-- <small
                                                                                class="form-text text-muted">{{ translate('Amount will be deducted from project payment. Use 0 for no deduction') }}</small> --}}
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 mb-2">
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
                                                                    <div class="col-sm-6 mb-2">
                                                                        <div class="input-group mb-3 required">
                                                                            <span class="input-group-text" id="inputGroup-sizing-sm"
                                                                                for="validationCustom01">Fixed Projects</span>
                                                                            <input type="number" min="0" step="1"
                                                                                id="fixed_limit" name="fixed_limit" required
                                                                                placeholder="Bid Limitation for Fixed Projects"
                                                                                class="form-control form-control-sm">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 mb-2">
                                                                        <div class="input-group mb-3 required">
                                                                            <span class="input-group-text" id="inputGroup-sizing-sm"
                                                                                for="validationCustom01">Long Term Projects</span>
                                                                            <input type="number" min="0" step="1"
                                                                                id="long_term_limit" name="long_term_limit" required
                                                                                placeholder="Bid Limitation for Long Term Projects"
                                                                                class="form-control form-control-sm">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-sm-6 mb-2">
                                                                        <div class="input-group mb-3 required">
                                                                            <span class="input-group-text" id="inputGroup-sizing-sm"
                                                                                for="validationCustom01">Skill Limit</span>
                                                                            <input type="number" min="0" step="1"
                                                                                id="skill_add_limit" name="skill_add_limit" required
                                                                                placeholder="Skill Adding Limit" class="form-control form-control-sm">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 mb-2">
                                                                        <div class="input-group mb-3 required">
                                                                            <span class="input-group-text" id="inputGroup-sizing-sm"
                                                                                for="validationCustom01">Portfolio Limit</span>
                                                                            <input type="number" min="0" step="1"
                                                                                id="portfolio_add_limit" name="portfolio_add_limit" required
                                                                                placeholder="Portfolio Adding Limit" class="form-control form-control-sm">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 mb-2">
                                                                        <div class="input-group mb-3 required">
                                                                            <span class="input-group-text" id="inputGroup-sizing-sm"
                                                                                for="validationCustom01">Bio Limit</span>
                                                                            <input type="number" min="0" step="1"
                                                                                id="bio_text_limit" name="bio_text_limit" required
                                                                                placeholder="Bio Word Limit" class="form-control form-control-sm">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 mb-2">
                                                                        <div class="input-group mb-3 required">
                                                                            <span class="input-group-text" id="inputGroup-sizing-sm"
                                                                                for="validationCustom01">Project Bookmark Limit</span>
                                                                            <input type="number" min="0" step="1"
                                                                                id="project_bookmark_limit" name="project_bookmark_limit"
                                                                                placeholder="Project Bookmark Limit" class="form-control form-control-sm">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 mb-2">
                                                                        <div class="input-group mb-3 required">
                                                                            <span class="input-group-text" id="inputGroup-sizing-sm"
                                                                                for="validationCustom01">Job Experience Limit</span>
                                                                            <input type="number" min="0" step="1"
                                                                                id="job_experience_limit" name="job_experience_limit" required
                                                                                placeholder="Job Experience Limit" class="form-control form-control-sm">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 mb-2">
                                                                        <div class="input-group mb-3 required">
                                                                            <span class="input-group-text" id="inputGroup-sizing-sm"
                                                                                for="validationCustom01">Service Limit</span>
                                                                            <input type="number" min="0" step="1"
                                                                                id="service_limit" name="service_limit" required
                                                                                placeholder="Service Limit" class="form-control form-control-sm">
                                                                        </div>
                                                                    </div>


                                                                    <div class="form-group mb-3">
                                                                        <label>{{ translate('Enable Client Following ?') }}</label>
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
                                                                        <label>{{ translate('Publish Package?') }}</label>
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
                                <!-- End new Blog  -->
                            </div>
                        </div>

                        </table>
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
    <script type="text/javascript">
        function sort_projects(el) {
            $('#sort_projects').submit();
        }

        function project_approval(el) {
            if (el.checked) {
                var status = 1;
            } else {
                var status = 0;
            }
            $.post('{{ route('project_approval') }}', {
                _token: '{{ csrf_token() }}',
                id: el.value,
                status: status
            }, function(data) {
                if (data == 1) {
                    AIZ.plugins.notify('success', 'Project has been approved successfully.');
                } else {
                    AIZ.plugins.notify('danger', 'Something went wrong');
                }
            });
        }
    </script>
@endsection
