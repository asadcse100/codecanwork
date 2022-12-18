@extends('layouts.app')

@section('css')
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
        <div class="">

            <div class="col-md-6 layout-top-spacing">
                <h1 class="h3">{{ translate('Post A New Project') }}</h1>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area layout-top-spacing">
                        <form class="form-horizontal" action="{{ route('projects.store') }}" method="POST"
                            enctype="multipart/form-data">
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
                                                            placeholder="Enter project title">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mb-4">
                                                    <div class="input-group  mb-3 ">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm">Project
                                                            budget</span>
                                                        <input type="number" min="0" step="0.01"
                                                            class="form-control" name="price"
                                                            placeholder="Enter project budget">
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 mb-4">
                                                    <div class="input-group  mb-3 ">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm">Project
                                                            type</span>
                                                        <div class="form-check form-check-primary form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="projectType" id="form-check-radio-primary"
                                                                checked="">
                                                            <label class="form-check-label" for="form-check-radio-primary">
                                                                Fixed
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-info form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="projectType" id="form-check-radio-info">
                                                            <label class="form-check-label" for="form-check-radio-info">
                                                                Long term
                                                            </label>
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
                                                        <select class="form-select aiz-selectpicker" id="category_id"
                                                            name="category_id" data-live-search="true">
                                                            @foreach ($categories as $category)
                                                                <option value="{{ $category->id }}">{{ $category->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mb-4">
                                                    <div class="input-group  mb-3 ">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm">Skills
                                                        </span>
                                                        <select multiple class="form-select aiz-selectpicker"
                                                            name="skills[]" data-live-search="true"
                                                            data-placeholder="Select  skills"
                                                            data-selected-text-format="count">
                                                            @foreach ($skills as $skill)
                                                                <option value="{{ $skill->id }}">{{ $skill->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 mb-4">
                                                    <div class="input-group  mb-3 ">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm">Project
                                                            summary</span>
                                                        <textarea class="form-control" rows="1" name="excerpt"></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-sm-12 mb-4">
                                                    <div class="input-group  mb-3 ">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm">Project
                                                            Details</span>
                                                        <textarea class="form-control aiz-text-editor" data-height="300" rows="1" name="description"
                                                            data-toolbar='[
                                            ["style", ["style"]],
                                            ["font", ["bold", "underline", "clear"]],
                                            ["fontsize", ["fontsize"]],
                                            ["para", ["ul", "ol", "paragraph"]]
                                        ]'>
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

                                                <div class="text-right">
                                                    @if ($client_package->fixed_limit > 0 || $client_package->fixed_limit > 0)
                                                        <button type="submit"
                                                            class="btn btn-primary transition-3d-hover mr-1">{{ translate('Post Project') }}</button>
                                                    @else
                                                        <div class="alert alert-info custom-control-inline mb-0"
                                                            role="alert">
                                                            {{ translate('Upgrade your Package.') }}
                                                        </div>
                                                    @endif
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <span type="button" data-bs-dismiss="modal"
                                                    class="badge outline-badge-danger mb-2 me-4">Discard</span>
                                                <button type="submit" class="btn btn-primary mb-2 me-4">Post
                                                    a Project</button>
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

