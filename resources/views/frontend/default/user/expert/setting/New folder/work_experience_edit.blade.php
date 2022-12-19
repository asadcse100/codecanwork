@extends('layouts.app')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="d-flex">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                        <div class="info">
                            <h6 class="">Work Experience</h6>
                            <hr>
                            <form class="section general-info"
                                action="{{ route('user_profile.work_experience_update', $work_exp->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card">
                                    <div class="container">

                                        <div class="row">
                                            <div class="col-md-6 mt-3">
                                                <label>Company Name</label>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="company_name"
                                                        value="{{ $work_exp->company_name }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-4">

                                            <div class="col-md-4">
                                                <label>Joining date</label>
                                                <div class="form-group">
                                                    <input type="date" class="aiz-date-range form-control"
                                                        name="start_date" value="{{ $work_exp->start }}" data-single="true"
                                                        data-show-dropdown="true" autocomplete="off" />
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <label> Curnetly working here</label>
                                                <div class="form-check form-switch form-check-inline form-switch-info">
                                                    <input class="form-check-input" type="checkbox" role="switch"
                                                        name="present" @if ($work_exp->present == '1') checked @endif
                                                        id="current_working">
                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Leaving Date</label>
                                                    <input type="date" class="aiz-date-range form-control"
                                                        name="end_date" value="{{ $work_exp->end }}" data-single="true"
                                                        id="leaving_date" data-show-dropdown="true" autocomplete="off" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Designation</label>
                                                    <input type="text" class="form-control" name="designation"
                                                        value="{{ $work_exp->designation }}" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Company Website</label>
                                                    <input type="text" class="form-control" name="company_website"
                                                        value="{{ $work_exp->company_website }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Company Location</label>
                                                    <input type="text" class="form-control" name="location"
                                                        value="{{ $work_exp->location }}" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 mt-1 mb-3">
                                            <div class="form-group text-end">
                                                <button class="btn btn-success">Update Work Experience</button>
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
        </div>
        <script>
            $(document).ready(function() {
                $("#current_working").click(function() {
                    var checked_status = this.checked;
                    if (checked_status == false) {
                        $("#leaving_date").removeAttr("disabled");
                    } else {
                        $("#leaving_date").attr("disabled", "disabled");
                    }
                });
            });
        </script>
    @endsection
