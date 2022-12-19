@extends('admin.default.layouts.app')
@section('content')
    <div class="aiz-titlebar mt-2 mb-3">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="h3">{{ translate('All') }} {{ $role->name }}</h1>
            </div>
            <!-- BREADCRUMB -->
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <div class="row">
                        <div class="col-md-10">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item active" aria-current="page">All Employee</li>
                            </ol>
                        </div>
                        <div class="col-md-2">
                            <button data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg"
                                class="btn btn-outline-info"> </button>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- /BREADCRUMB -->
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">{{ $role->name }}</h6>
                </div>
                <div class="card-body">
                    <table class="table aiz-table mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ translate('Name') }}</th>
                                <th>{{ translate('Designation') }}</th>
                                <th data-breakpoints="md">{{ translate('Email') }}</th>
                                <th data-breakpoints="sm">{{ translate('Phone') }}</th>
                                <th class="text-right">{{ translate('Options') }}</th>
                            </tr>
                        </thead>
                    </table>


                    <div class="modal fade bd-example-modal-lg" id="bd-edit-modal-lg" aria-hidden="true"
                        aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="">
                                    <!-- Start  -->
                                    <div class="row">
                                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0">
                                            <div class="widget-content widget-content-area blog-create-section">
                                                <form class="form-horizontal" action="{{ route('employees.store') }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group mb-3">
                                                        <label for="name">{{ translate('Name') }}</label>
                                                        <input type="text" id="name" name="name" required
                                                            placeholder="{{ translate('Eg. Leom Jafex') }}"
                                                            class="form-control">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="email">{{ translate('Email') }}</label>
                                                        <input type="email" id="email" name="email" required
                                                            placeholder="{{ translate('Eg. email@example.com') }}"
                                                            class="form-control">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="password">{{ translate('Password') }}</label>
                                                        <input type="password" id="password" name="password" required
                                                            placeholder="{{ translate('Eg. ********') }}"
                                                            class="form-control">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="form-group mb-3">
                                                                <label for="country">{{ translate('Country') }}</label>
                                                                <select class="form-control aiz-selectpicker"
                                                                    name="country_id" id="country_id"
                                                                    data-live-search="true" data-placeholder="Choose ...">
                                                                    @foreach (\App\Models\Country::all() as $key => $country)
                                                                        <option value="{{ $country->id }}">
                                                                            {{ $country->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group mb-3">
                                                                <label for="country">{{ translate('City') }}</label>
                                                                <select class="form-control aiz-selectpicker" name="city_id"
                                                                    id="city_id" data-live-search="true"
                                                                    data-placeholder="Choose ...">

                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group mb-3">
                                                                <label
                                                                    for="postal_code">{{ translate('Postal Code') }}</label>
                                                                <input type="number" id="postal_code" name="postal_code"
                                                                    required placeholder="{{ translate('Eg. 1203') }}"
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="street">{{ translate('Address') }}</label>
                                                        <input type="text" id="street" name="street" required
                                                            placeholder="{{ translate('Eg. Street') }}"
                                                            class="form-control">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="phone">{{ translate('Phone') }}</label>
                                                        <input type="number" id="phone" name="phone" required
                                                            placeholder="{{ translate('Eg. 015XXXXXXXX') }}"
                                                            class="form-control">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="designation">{{ translate('Designation') }}</label>
                                                        <select class="form-control aiz-selectpicker" name="designation"
                                                            id="designation" data-placeholder="Choose ...">
                                                            @foreach (\App\Models\Role::all() as $key => $role)
                                                                @if ($role->id != '1' && $role->id != '2' && $role->id != '3')
                                                                    <option value="{{ $role->id }}">
                                                                        {{ $role->name }}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label"
                                                            for="signinSrEmail">{{ translate('Profile Image') }}</label>
                                                        <div class="input-group " data-toggle="aizuploader"
                                                            data-type="image">
                                                            <div class="input-group-prepend">
                                                                <div
                                                                    class="input-group-text bg-soft-secondary font-weight-medium">
                                                                    {{ translate('Browse') }}</div>
                                                            </div>
                                                            <div class="form-control file-amount">
                                                                {{ translate('Choose File') }}</div>
                                                            <input type="hidden" name="avatar" class="selected-files">
                                                        </div>
                                                        <div class="file-preview"></div>
                                                    </div>
                                                    <div class="form-group mb-0 text-right">
                                                        <button type="submit"
                                                            class="btn btn-primary">{{ translate('Add Employee') }}</button>
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
    </div>
@endsection
@section('modal')
    @include('admin.default.partials.delete_modal')
@endsection
