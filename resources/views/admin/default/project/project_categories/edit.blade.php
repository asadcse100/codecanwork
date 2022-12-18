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
                <h5 class="mb-md-0 h6">{{ translate('Edit Category') }}</h5>
            </div>

            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="widget-content widget-content-area layout-top-spacing">
                        <form class="form-horizontal" action="{{ route('project-categories.update', $project_category->id) }}"
                            method="POST" enctype="multipart/form-data">
                            <input name="_method" type="hidden" value="PATCH">
                            @csrf
                            <div class="row layout-spacing">
                                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0">
                                    <div class="widget-content widget-content-area blog-create-section">
                                        <div class="row layout-top-spacing p-4">
                                            <div class="col-sm-6 mb-4">
                                                <div class="input-group mb-3 required">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm"
                                                        for="validationCustom01">Name</span>
                                                    <input type="text" id="name" name="name"
                                                        placeholder="{{ translate('Category Name') }}"
                                                        value="{{ $project_category->name }}" class="form-control" required>
                                                    <div class="invalid-feedback">
                                                        Please fill the Role Name.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 mb-4">
                                                <div class="input-group mb-3 required">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm"
                                                        for="validationCustom01">Parent</span>
                                                    <select class="select2 form-select aiz-selectpicker" name="parent_id"
                                                        data-toggle="select2"
                                                        data-placeholder="Choose ..."data-live-search="true">
                                                        <option
                                                            value="0"@if ($project_category->parent_id == '0') selected @endif>
                                                            {{ translate('No Parent') }}</option>
                                                        @foreach ($project_categories as $project_cat)
                                                            <option value="{{ $project_cat->id }}"
                                                                @if ($project_cat->id == $project_category->parent_id) selected @endif>
                                                                {{ $project_cat->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 mb-4">
                                                <label for="image">{{ translate('Icon') }}</label>
                                                <input class="form-control file-upload-input mb-3" name="photo"
                                                    value="{{ $project_category->photo }}" type="file" id="formFile">
                                            </div>
                                            <hr>
                                            <div class="col-md-12 p-2" style="text-align:right;">
                                                <a href="{{ route('project-categories.index') }}"
                                                    class="btn btn-outline-danger mb-2 me-4">
                                                    <span>Discard</span>
                                                </a>
                                                <button type="submit"
                                                    class="btn btn-outline-success mb-2 me-4">Save</button>

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
    <script src="{{ asset('templete') }}/src/plugins/src/table/datatable/datatables.js"></script>
    <script src="{{ asset('templete') }}/src/plugins/src/table/datatable/button-ext/dataTables.buttons.min.js"></script>
    <script src="{{ asset('templete') }}/src/plugins/src/table/datatable/button-ext/jszip.min.js"></script>
    <script src="{{ asset('templete') }}/src/plugins/src/table/datatable/button-ext/buttons.html5.min.js"></script>
    <script src="{{ asset('templete') }}/src/plugins/src/table/datatable/button-ext/buttons.print.min.js"></script>
    <script src="{{ asset('templete') }}/src/plugins/src/table/datatable/custom_miscellaneous.js"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <script type="text/javascript">
        function show_cancel_request_modal(id) {
            $.post('{{ route('cancel-project-request.show') }}', {
                _token: '{{ csrf_token() }}',
                id: id
            }, function(data) {
                $('#cancel-project-request').modal('show');
                $('#cancel-project-request_body').html(data);
            })
        }

        function sort_cancel_projects(el) {
            $('#sort_cancel_projects').submit();
        }
    </script>
@endsection
