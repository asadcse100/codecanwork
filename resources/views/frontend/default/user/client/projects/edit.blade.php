@extends('layouts.app')

@section('css')
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('templete') }}/src/plugins/src/table/datatable/datatables.css">

    <link rel="stylesheet" type="text/css"
        href="{{ asset('templete') }}/src/plugins/css/light/table/datatable/dt-global_style.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('templete') }}/src/plugins/css/light/table/datatable/custom_dt_miscellaneous.css">

    <link rel="stylesheet" type="text/css"
        href="{{ asset('templete') }}/src/plugins/css/dark/table/datatable/dt-global_style.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('templete') }}/src/plugins/css/dark/table/datatable/custom_dt_miscellaneous.css">

    <!-- END PAGE LEVEL STYLES -->
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
@endsection

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">

            <div class="col-md-6 layout-top-spacing">
                <h1 class="h3">{{ translate('Edit Project') }}</h1>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area layout-top-spacing">
                        <form class="form-horizontal" action="{{ route('projects.update', $project->id) }}" method="POST"
                            enctype="multipart/form-data">
                            <input name="_method" type="hidden" value="PATCH">
                            @csrf

                            <div class="row layout-spacing">
                                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="widget-content widget-content-area blog-create-section">
                                        <div class="">
                                            <div class="row layout-top-spacing p-4">
                                                <div class="col-sm-6 mb-4">
                                                    <div class="input-group  mb-3 ">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm">Project
                                                            title</span>
                                                        <input type="text" class="form-control" name="name"
                                                            value="{{ $project->name }}">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mb-4">
                                                    <div class="input-group  mb-3 ">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm">Project
                                                            budget</span>
                                                        <input type="number" min="0" step="0.01"
                                                            class="form-control" name="price"
                                                            value="{{ $project->price }}">
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 mb-4">
                                                    <div class="input-group  mb-3 ">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm">Project
                                                            type</span>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="projectTypeFixed" name="projectType"
                                                                class="custom-control-input" value="Fixed"
                                                                @if ($project->type == 'Fixed') checked @endif>
                                                            <label class="custom-control-label"
                                                                for="projectTypeFixed">{{ translate('Fixed') }}</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="projectTypeLong" name="projectType"
                                                                class="custom-control-input" value="Long Term"
                                                                @if ($project->type == 'Long Term') checked @endif>
                                                            <label class="custom-control-label"
                                                                for="projectTypeLong">{{ translate('Long term') }}</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- <div class="form-group">
                                                    <div class="form-label mb-2">
                                                        {{ translate('Project type') }}
                                                        <span class="text-danger">*</span>
                                                    </div class="aiz-radio-inline">
                                                    @if ($client_package->fixed_limit > 0)
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="projectTypeFixed" name="projectType"
                                                                class="custom-control-input" value="Fixed" checked>
                                                            <label class="custom-control-label"
                                                                for="projectTypeFixed">{{ translate('Fixed') }}</label>
                                                        </div>
                                                    @else
                                                        <div class="alert alert-info custom-control-inline mb-0"
                                                            role="alert">
                                                            {{ translate('Your fixed type project post limit is over.') }}
                                                        </div>
                                                    @endif
                                                    @if ($client_package->long_term_limit > 0)
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="projectTypeLong" name="projectType"
                                                                class="custom-control-input" value="Long Term">
                                                            <label class="custom-control-label"
                                                                for="projectTypeLong">{{ translate('Long term') }}</label>
                                                        </div>
                                                    @else
                                                        <div class="alert alert-info custom-control-inline mb-0"
                                                            role="alert">
                                                            {{ translate('Your long term project post limit is over.') }}
                                                        </div>
                                                    @endif
                                                </div> --}}

                                                <div class="col-sm-4 mb-4">
                                                    <div class="input-group  mb-3 ">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm">Project
                                                            category</span>
                                                        <select class="form-select aiz-selectpicker" name="category_id"
                                                            required data-live-search="true">
                                                            @foreach ($categories as $category)
                                                                <option value="{{ $category->id }}"
                                                                    @if ($project->project_category_id == $category->id) selected @endif>
                                                                    {{ $category->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mb-4">
                                                    <div class="input-group  mb-3 ">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm">Skills
                                                            required
                                                        </span>
                                                        <select multiple class="form-control aiz-selectpicker"
                                                            name="skills[]" required
                                                            data-placeholder="Select required skills"
                                                            data-selected-text-format="count" data-live-search="true">
                                                            @foreach ($skills as $skill)
                                                                <option value="{{ $skill->id }}"
                                                                    @if (in_array($skill->id, json_decode($project->skills))) selected @endif>
                                                                    {{ $skill->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 mb-4">
                                                    <div class="input-group  mb-3 ">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm">Project
                                                            summary</span>
                                                        <textarea class="form-control" rows="3" name="excerpt" required>{{ $project->excerpt }}</textarea>
                                                    </div>
                                                </div>

                                                <div class="col-sm-12 mb-4">
                                                    <div class="input-group  mb-3 ">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm">Project
                                                            Details</span>
                                                        <textarea class="form-control aiz-text-editor js-summernote-editor" data-height="300" rows="3"
                                                            name="description" required
                                                            data-toolbar='[
                                                            ["style", ["style"]],
                                                            ["font", ["bold", "underline", "clear"]],
                                                            ["fontsize", ["fontsize"]],
                                                            ["para", ["ul", "ol", "paragraph"]]
                                                        ]'>{{ $project->description }}
                                                        </textarea>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6 mb-4">
                                                    <div class="input-group  mb-3">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm">File
                                                            attachment</span>
                                                        <input type="file" class="form-control" type="file"
                                                            name="attachments">
                                                    </div>
                                                </div>



                                            </div>
                                            <div class="modal-footer">
                                                <span type="button" data-bs-dismiss="modal"
                                                    class="badge outline-badge-danger mb-2 me-4">Discard</span>
                                                <button type="submit" class="btn btn-primary mb-2 me-4">Update
                                                    Project</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                        </form>
                    </div>
                </div>


            </div>
        </div>



        <!--  END CONTENT AREA  -->
    @endsection
    @section('modal')
        @include('frontend.default.partials.cancel_modal')
        @include('frontend.default.partials.complete_modal')
    @endsection

    @section('script')
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{{ asset('templete') }}/src/plugins/src/table/datatable/datatables.js"></script>
        <script src="{{ asset('templete') }}/src/plugins/src/table/datatable/button-ext/dataTables.buttons.min.js">
            < /scrip> <
            script src = "{{ asset('templete') }}/src/plugins/src/table/datatable/button-ext/jszip.min.js" >
        </script>
        <script src="{{ asset('templete') }}/src/plugins/src/table/datatable/button-ext/buttons.html5.min.js"></script>
        <script src="{{ asset('templete') }}/src/plugins/src/table/datatable/button-ext/buttons.print.min.js"></script>
        <script src="{{ asset('templete') }}/src/plugins/src/table/datatable/custom_miscellaneous.js"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
    @endsection
