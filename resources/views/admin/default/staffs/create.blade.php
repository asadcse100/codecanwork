@extends('admin.default.layouts.app')

@section('css')
    <!-- BEGIN PAGE LEVEL STYLES -->

    <!-- END PAGE LEVEL STYLES -->
@endsection

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">

            <div class="widget-content widget-content-area layout-top-spacing">

                <form id="add_form" class="form-horizontal  needs-validation" action="{{ route('staffs.store') }}"
                    method="POST" novalidate onsubmit="return validateform()">
                    @csrf
                    <div class="row layout-spacing">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0">
                            <div class="widget-content widget-content-area blog-create-section">
                                <div class="col-md-6 layout-top-spacing p-2">
                                    <h4 class="mb-md-0 h6">{{ translate('Create Employee') }}</h4>
                                </div>
                                <hr>
                                <div class="">
                                    <div class="row layout-top-spacing p-4">
                                        <div class="col-sm-6 mb-4">
                                            <div class="input-group mb-3 required">
                                                <span class="input-group-text" id="inputGroup-sizing-sm"
                                                    for="validationCustom01">Employee Name</span>
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="{{ translate('Employee Name') }}" required>
                                                <div class="invalid-feedback">
                                                    Please fill the Employee Name.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mb-4">
                                            <div class="input-group  mb-3 required">
                                                <span class="input-group-text" id="inputGroup-sizing-sm"
                                                    for="validationCustom02">Email</span>
                                                <input type="email" lang="en" class="form-control" name="email"
                                                    placeholder="Employee Email" required>
                                                <div class="invalid-feedback">
                                                    Please fill the Email.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mb-4">
                                            <div class="input-group  mb-3 required">
                                                <span class="input-group-text" id="inputGroup-sizing-sm"
                                                    for="validationCustom02">Password</span>
                                                <input type="text" class="form-control" name="password"
                                                    placeholder="Password" required>
                                                <div class="invalid-feedback">
                                                    Password is required
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 mb-4">
                                            <div class="input-group  mb-3 required">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Role</span>
                                                <select class="form-select aiz-selectpicker" name="role_id" id="role_id"
                                                    data-live-search="true" required>
                                                    @foreach ($roles as $role)
                                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <hr>
                                <div class="col-md-12 p-2" style="text-align:right;">
                                    <a href="{{ route('staffs.index') }}" class="btn btn-outline-danger mb-2 me-4">
                                        <span>Discard</span>
                                    </a>
                                    <button type="submit" class="btn btn-outline-success mb-2 me-4">Save</button>

                                </div>
                            </div>

                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
    <!--  END CONTENT AREA  -->
@endsection
@section('modal')
    @include('admin.default.partials.delete_modal')
@endsection
<script>
    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
</script>
@section('script')
    <!-- BEGIN PAGE LEVEL SCRIPTS -->

    <!-- END PAGE LEVEL SCRIPTS -->
@endsection
