@extends('admin.default.layouts.app')

@section('content')
<div class="row">

    <div class="col-lg-7">
        <div class="card">
            <div class="card-header">
                <h1 class="mb-0 h6">{{translate('Badges list')}}</h1>
            </div>
            <div class="card-body">
                <table id="individual-col-search" class="table dt-table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{translate('Title')}}</th>
                            <th>{{translate('Type')}}</th>
                            <th>{{translate('Min number')}}</th>
                            <th>{{translate('Icon')}}</th>
                            <th class="text-right">{{translate('Options')}}</th>
                        </tr>
                    </thead>
                </table>

                <div class="modal fade bd-example-modal-lg" id="bd-edit-modal-lg" aria-hidden="true"
                aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="">
                            <!-- Start now   -->
                            <div class="row">
                                <div
                                    class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0">
                                    <div class="widget-content widget-content-area blog-create-section">
                                        <form class="form-horizontal" action="{{ route('badges.update', $badge->id) }}" method="POST" enctype="multipart/form-data">
                                            <input name="_method" type="hidden" value="PATCH">
                                            @csrf
                                            <div class="form-group mb-3">
                                                <label for="name">{{translate('Name')}}</label>
                                                <input type="text" id="name" name="name" required placeholder="{{ translate('Eg. Completed 100+ projects') }}" value="{{ $badge->name }}" class="form-control" required>
                                            </div>
                                            <input type="hidden" name="role_id" value="{{ $badge->role->id }}">
                                            <div class="form-group mb-3">
                                                <label for="type">{{translate('Badge Type')}}</label>
                                                <select class="select2 form-control aiz-selectpicker" name="type" id="type" data-show="selectShow" data-target=".min-num-type" data-placeholder="Choose ...">
                                                    <option value="project_badge" @if ($badge->type == "project_badge") selected @endif>{{translate('Project Badge')}}</option>
                                                    <option value="earning_badge" @if ($badge->type == "earning_badge") selected @endif>{{translate('Earning Badge')}}</option>
                                                    <option value="membership_badge" @if ($badge->type == "membership_badge") selected @endif>{{translate('Membership Badge')}}</option>
                                                </select>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="min_value" class="min-num-type">{{translate('Min number of ')}}
                                                    <span class="project_badge">{{translate('project')}}</span>
                                                    <span class="earning_badge d-none">{{translate('earnings')}}</span>
                                                    <span class="membership_badge d-none">{{translate('account age - in days')}}</span>
                                                </label>
                                                <input type="number" id="value" name="value" min="0" step="0.01" placeholder="{{ translate('Eg. 100') }}" value="{{ $badge->value }}" class="form-control" required>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label>{{translate('Badge Icon')}}</label>
                                                <div class="custom-file">
                                                    <label class="custom-file-label">
                                                        <input type="file" class="custom-file-input" name="icon" >
                                                        <span class="custom-file-name">{{translate('Choose Badge Icon')}}</span>
                                                    </label>
                                                </div>
                                                <small class="form-text text-muted">.svg {{ translate('file recommended') }}</small>
                                            </div>
                                            <div class="form-group mb-0 text-right">
                                                <button type="submit" class="btn btn-primary">{{translate('Update Badge')}}</button>
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
            </div>
        </div>
    </div>
    <div class="col-lg-5">
        <div class="card">
            <div class="card-header">
                <h1 class="mb-0 h6">{{translate('Add New Badge')}}</h1>
            </div>
            <div class="card-body">
                <form class="form-horizontal" action="{{ route('badges.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="name">{{translate('Title')}}</label>
                            <input type="text" id="name" name="name" required placeholder="{{ translate('Eg. Completed 100+ projects') }}" class="form-control" required>
                        </div>
                        <input type="hidden" name="role_id" value="freelancer">
                        <div class="form-group mb-3">
                            <label for="type">{{translate('Badge Type')}}</label>
                            <select class="select2 form-control aiz-selectpicker" name="type" id="type" data-show="selectShow" data-target=".min-num-type" data-placeholder="Choose ...">
                                <option value="project_badge">{{translate('Project Badge')}}</option>
                                <option value="earning_badge">{{translate('Earning Badge')}}</option>
                                <option value="membership_badge">{{translate('Membership Badge')}}</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="min_value" class="min-num-type">{{translate('Min number of ')}}
                                <span class="project_badge">{{translate('project')}}</span>
                                <span class="earning_badge d-none">{{translate('earnings')}}</span>
                                <span class="membership_badge d-none">{{translate('account age - in days')}}</span>
                            </label>
                            <input type="number" id="value" name="value" min="0" step="1" placeholder="{{ translate('Eg. 100') }}" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>{{translate('Badge Icon')}}</label>
                            <div class="custom-file">
                                <label class="custom-file-label">
                                    <input type="file" class="custom-file-input" name="icon" required="">
                                    <span class="custom-file-name">{{translate('Choose Badge Icon')}}</span>
                                </label>
                            </div>
                            <small class="form-text text-muted">.svg {{ translate('file recommended') }}</small>
                        </div>
                        <div class="form-group mb-0 text-right">
                            <button type="submit" class="btn btn-primary">{{translate('Add New Badge')}}</button>
                        </div>
                    </form>

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div>
</div>
@endsection
@section('modal')
    @include('admin.default.partials.delete_modal')
@endsection
