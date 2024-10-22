@extends('admin.default.layouts.app')

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">
            <div class="layout-top-spacing">
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="mb-0 h6">{{ translate('Update Badge') }}</h1>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" action="{{ route('badges.update', $badge->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row layout-spacing">
                                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0">
                                        <div class="card">
                                            <div class="row layout-top-spacing p-4">
                                                <div class="col-sm-12 mb-4">
                                                    <div class="input-group mb-3 required">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm"
                                                            for="validationCustom01">Name</span>
                                                        <input type="text" id="name" name="name" required
                                                            value="{{ $badge->name }}" class="form-control" required>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="role_id" value="client">
                                                <div class="col-sm-12 mb-4">
                                                    <div class="input-group mb-3 required">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm"
                                                            for="validationCustom01">Badge Type</span>
                                                        <select class="select2 form-select aiz-selectpicker" name="type"
                                                            id="type" data-show="selectShow"
                                                            data-target=".min-num-type" data-placeholder="Choose ...">
                                                            <option value="project_badge"
                                                                @if ($badge->type == 'project_badge') selected @endif>
                                                                {{ translate('Project Badge') }}</option>
                                                            <option value="spent_badge"
                                                                @if ($badge->type == 'spent_badge') selected @endif>
                                                                {{ translate('Spent Badge') }}</option>
                                                            <option value="membership_badge"
                                                                @if ($badge->type == 'membership_badge') selected @endif>
                                                                {{ translate('Membership Badge') }}</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="role_id" value="client">
                                                <div class="col-sm-12 mb-4">
                                                    <div class="input-group mb-3 required">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm"
                                                            for="validationCustom01">Min number of</span>
                                                        <input type="number" id="value" name="value" min="0"
                                                            step="0.01" value="{{ $badge->value }}" class="form-control"
                                                            required>
                                                    </div>
                                                </div>
                                                {{-- <div class="form-group mb-3">
                                    <label>{{ translate('Badge Icon') }}</label>
                                    <div class="input-group" data-toggle="aizuploader" data-type="image">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text bg-soft-secondary font-weight-medium">
                                                {{ translate('Browse') }}</div>
                                        </div>
                                        <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                        <input type="hidden" name="icon" class="selected-files">
                                    </div>
                                    <div class="file-preview box sm">
                                    </div>
                                    <small class="form-text text-muted">.svg {{ translate('file recommended') }}</small>
                                </div> --}}
                                                <div class="col-sm-12 mb-4">
                                                    <div class="input-group mb-3 required">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm"
                                                            for="validationCustom01">Badge Icon</span>
                                                        <input class="form-control file-upload-input" type="file"
                                                            id="formFile" value="{{ $badge->icon }}">
                                                    </div>
                                                </div>

                                                <div class="form-group mb-3 text-right">
                                                    <button type="submit"
                                                        class="btn btn-outline-primary mb-2 me-4">{{ translate('Update Badge') }}</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div> <!-- end card-body -->
                    </div> <!-- end card-->
                </div>
            </div>

        </div>
    </div>

    <!--  END CONTENT AREA  -->
@endsection
@section('modal')
    @include('admin.default.partials.delete_modal')
@endsection
