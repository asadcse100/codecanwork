@extends('layouts.app')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="d-flex">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                        <div class="info">
                            <h6 class="">Educational Information</h6>
                            <hr>
                            <form class="section general-info"
                                action="{{ route('user_profile.education_info_update', $education->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="container">
                                    <div class="row">
                                        <div class="card">
                                            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">

                                                <div class="row gutters-10">
                                                    <div class="col-md-6 mt-3">
                                                        <label>Institute/School Name</label>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="school_name"
                                                                value="{{ $education->school_name }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <label>Degree</label>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="degree"
                                                                value="{{ $education->degree }}" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 mt-3">
                                                        <label class="form-label">Passing Year</label>
                                                        <input type="number" class="form-control" name="passing_year"
                                                            value="{{ $education->passing_year }}" required>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <label class="form-label">Country</label>
                                                        <select class="form-select mb-3" id="school_country_id"
                                                            name="country_id" required data-live-search="true">
                                                            @foreach (\App\Models\Country::all() as $country)
                                                                <option value="{{ $country->id }}"
                                                                    @if ($education->country_id == $country->id) selected @endif>
                                                                    {{ $country->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 mt-1 mb-3">
                                                        <div class="form-group text-end">
                                                            <button class="btn btn-success">Update
                                                                Education
                                                                Information</button>
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
        </div>
    @endsection
