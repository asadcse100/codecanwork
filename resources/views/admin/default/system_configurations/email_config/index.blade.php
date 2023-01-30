@extends('admin.default.layouts.app')

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing layout-top-spacing">
        <div class="col-xl-12 col-lg-12 col-sm-12 layout-top-spacing">
            <div class="card">
                <div class="card-header">
                    <h6 class="fw-600 mb-0">{{ translate('Email Configuration') }}</h6>
                </div>
                <form class="form-horizontal" action="{{ route('env_key_update.update') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0">
                            <div class="widget-content widget-content-area blog-create-section">
                                <div class="row p-4">
                                    <div class="col-sm-6 mb-2">
                                        <div class="input-group mb-2 required">
                                            <span class="input-group-text">MAIL DRIVER</span>
                                            <select class="form-select aiz-selectpicker" name="MAIL_DRIVER"
                                                required>
                                                <option value="" @if (env('MAIL_DRIVER') == '') selected @endif>
                                                    {{ translate('Select mail driver') }}</option>
                                                <option value="sendmail" @if (env('MAIL_DRIVER') == 'sendmail') selected @endif>
                                                    {{ translate('Sendmail') }}</option>
                                                <option value="smtp" @if (env('MAIL_DRIVER') == 'smtp') selected @endif>
                                                    {{ translate('SMTP') }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-2">
                                        <div class="input-group mb-2 required">
                                            <span class="input-group-text">MAIL HOST</span>
                                            <input type="text" name="MAIL_HOST" class="form-control"
                                                value="{{ env('MAIL_HOST') }}" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-2">
                                        <div class="input-group mb-2 required">
                                            <span class="input-group-text">MAIL PORT</span>
                                            <input type="text" name="MAIL_PORT" class="form-control"
                                                value="{{ env('MAIL_PORT') }}" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-2">
                                        <div class="input-group mb-2 required">
                                            <span class="input-group-text">MAIL
                                                USERNAME</span>
                                            <input type="text" name="MAIL_USERNAME" class="form-control"
                                                value="{{ env('MAIL_USERNAME') }}" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-2">
                                        <div class="input-group mb-2 required">
                                            <span class="input-group-text">MAIL
                                                PASSWORD</span>
                                            <input type="password" name="MAIL_PASSWORD" class="form-control"
                                                value="{{ env('MAIL_PASSWORD') }}" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-2">
                                        <div class="input-group mb-2 required">
                                            <span class="input-group-text">MAIL FROM
                                                ADDRESS</span>
                                            <input type="text" name="MAIL_FROM_ADDRESS"
                                                class="form-control" value="{{ env('MAIL_FROM_ADDRESS') }}"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-2">
                                        <div class="input-group mb-2 required">
                                            <span class="input-group-text">MAIL FROM
                                                NAME</span>
                                            <input type="text" name="MAIL_FROM_NAME" class="form-control"
                                                value="{{ env('MAIL_FROM_NAME') }}" required>
                                        </div>
                                    </div>
                                    <div class="form-group mb-2 text-right">
                                        <button style="float: right;" type="submit"
                                            class="btn btn-outline-info p-1">{{ translate('Update') }}</button>
                                    </div>
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
@section('script')
    <script type="text/javascript">
        function sort_projects(el) {
            $('#sort_projects').submit();
        }
        function project_approval(el) {
            if (el.checked) {
                var status = 1;
            } else {
                var status = 0;
            }
            $.post('{{ route('project_approval') }}', {
                _token: '{{ csrf_token() }}',
                id: el.value,
                status: status
            }, function(data) {
                if (data == 1) {
                    AIZ.plugins.notify('success', 'Project has been approved successfully.');
                } else {
                    AIZ.plugins.notify('danger', 'Something went wrong');
                }
            });
        }
    </script>
@endsection
