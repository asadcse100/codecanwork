@extends('admin.default.layouts.app')

@section('css')
    <!-- BEGIN PAGE LEVEL STYLES -->

    <!-- END PAGE LEVEL STYLES -->
@endsection

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">
        <div class="">
            <div class="layout-top-spacing">
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="fw-600 mb-0">{{ translate('Edit Configuration') }}</h6>
                        </div>
                        <div class="card-body">
                            <div class="card-body">
                                <form class="form-horizontal" action="{{ route('env_key_update.update') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="layout-spacing">
                                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0 mt-4">
                                                <div class="card">
                                                    <div class="row p-4">
                                                        <div class="col-sm-6 mb-4">
                                                            <div class="input-group  mb-3 required">
                                                                <span class="input-group-text"
                                                                    id="inputGroup-sizing-sm">MAIL DRIVER</span>
                                                                <select class="form-select aiz-selectpicker"
                                                                    name="MAIL_DRIVER" required>
                                                                    <option value=""
                                                                        @if (env('MAIL_DRIVER') == '') selected @endif>
                                                                        {{ translate('Select mail driver') }}</option>
                                                                    <option value="sendmail"
                                                                        @if (env('MAIL_DRIVER') == 'sendmail') selected @endif>
                                                                        {{ translate('Sendmail') }}</option>
                                                                    <option value="smtp"
                                                                        @if (env('MAIL_DRIVER') == 'smtp') selected @endif>
                                                                        {{ translate('SMTP') }}</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 mb-4">
                                                            <div class="input-group  mb-3 required">
                                                                <span class="input-group-text"
                                                                    id="inputGroup-sizing-sm">MAIL HOST</span>
                                                                <input type="text" name="MAIL_HOST" class="form-control"
                                                                    value="{{ env('MAIL_HOST') }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 mb-4">
                                                            <div class="input-group  mb-3 required">
                                                                <span class="input-group-text"
                                                                    id="inputGroup-sizing-sm">MAIL PORT</span>
                                                                <input type="text" name="MAIL_PORT" class="form-control"
                                                                    value="{{ env('MAIL_PORT') }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 mb-4">
                                                            <div class="input-group  mb-3 required">
                                                                <span class="input-group-text"
                                                                    id="inputGroup-sizing-sm">MAIL USERNAME</span>
                                                                <input type="text" name="MAIL_USERNAME"
                                                                    class="form-control" value="{{ env('MAIL_USERNAME') }}"
                                                                    required>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 mb-4">
                                                            <div class="input-group  mb-3 required">
                                                                <span class="input-group-text"
                                                                    id="inputGroup-sizing-sm">MAIL PASSWORD</span>
                                                                <input type="password" name="MAIL_PASSWORD"
                                                                    class="form-control" value="{{ env('MAIL_PASSWORD') }}"
                                                                    required>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 mb-4">
                                                            <div class="input-group  mb-3 required">
                                                                <span class="input-group-text"
                                                                    id="inputGroup-sizing-sm">MAIL FROM ADDRESS</span>
                                                                <input type="text" name="MAIL_FROM_ADDRESS"
                                                                    class="form-control"
                                                                    value="{{ env('MAIL_FROM_ADDRESS') }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 mb-4">
                                                            <div class="input-group  mb-3 required">
                                                                <span class="input-group-text"
                                                                    id="inputGroup-sizing-sm">MAIL FROM NAME</span>
                                                                <input type="text" name="MAIL_FROM_NAME"
                                                                    class="form-control"
                                                                    value="{{ env('MAIL_FROM_NAME') }}" required>
                                                            </div>
                                                        </div>

                                                        <div class="form-group mb-3 text-right">
                                                            <button type="submit"
                                                                class="btn btn-outline-success">{{ translate('Update') }}</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div> <!-- end card-body -->
                </div> <!-- end card-->

            </div>
        </div>
    </div>

    <!--  END CONTENT AREA  -->
@endsection
@section('modal')
    @include('admin.default.partials.delete_modal')
@endsection
@section('script')
    <!-- BEGIN PAGE LEVEL SCRIPTS -->

    <!-- END PAGE LEVEL SCRIPTS -->
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
