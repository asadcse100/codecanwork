@extends('admin.default.layouts.app')

@section('css')
    <!-- BEGIN PAGE LEVEL STYLES -->

    <!-- END PAGE LEVEL STYLES -->
@endsection

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">
        <div class="">

            <div class="widget-content widget-content-area layout-top-spacing">

                <form id="add_form" class="form-horizontal  needs-validation" action="{{ route('roles.store') }}"
                    method="POST" novalidate onsubmit="return validateform()">
                    @csrf
                    <div class="row layout-spacing">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0">
                            <div class="widget-content widget-content-area blog-create-section">
                                <div class="col-md-6 layout-top-spacing p-2">
                                    <h4 class="mb-md-0 h6">{{ translate('Create Roles') }}</h4>
                                </div>
                                <hr>
                                <div class="">
                                    <div class="row layout-top-spacing p-4">
                                        <div class="col-sm-6 mb-4">
                                            <div class="input-group mb-3 required">
                                                <span class="input-group-text" id="inputGroup-sizing-sm"
                                                    for="validationCustom01">Role Name</span>
                                                <input type="text" placeholder="{{ translate('Role Name') }}"
                                                    id="name" name="name" class="form-control" required>
                                                <div class="invalid-feedback">
                                                    Please fill the Role Name.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mb-4">

                                            <div class="panel-heading bord-btm mt-2">
                                                <h3 class="h6">{{ translate('Permissions') }}</h3>
                                            </div>

                                            <hr>
                                            <div class="row">
                                                @foreach (\App\Models\Permission::all() as $key => $permission)
                                                    <div class="col-lg-6">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h3 class="mb-0 h6 text-center">
                                                                    {{ ucfirst($permission->name) }}</h3>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="clearfix">
                                                                    <label class="aiz-switch aiz-switch-success mb-0">
                                                                        <input type="checkbox" name="permissions[]"
                                                                            value="{{ $permission->name }}">
                                                                        <span class="slider round"></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>

                                        </div>

                                    </div>

                                </div>
                                <hr>
                                <div class="col-md-12 p-2" style="text-align:right;">
                                    <a href="{{ route('roles.index') }}" class="btn btn-outline-danger mb-2 me-4">
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
