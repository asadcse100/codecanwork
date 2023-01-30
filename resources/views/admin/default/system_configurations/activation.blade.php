@extends('admin.default.layouts.app')
@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">
            <div class="col-md-3 layout-top-spacing">
                <h6>{{ translate('General Activation') }}</h6>
            </div>
            <div class="row layout-top-spacing">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="mb-0">{{ translate('Project Approval') }}</h6>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>{{ translate('Enable project approval feature?') }}</label>
                                <div>
                                    <label class="aiz-switch aiz-switch-success mb-0">
                                        <input type="checkbox" onchange="updateSettings(this, 'project_approval')"
                                            @if (\App\Models\SystemConfiguration::where('type', 'project_approval')->first()->value == 1) checked @endif>
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="alert alert-info mb-0">
                                {{ translate('If you enable this feature all client projects will be pending after adding by clients. You need to approve each project to make those projects public for bidding.') }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="mb-0">{{ translate('Force HTTPS') }}</h6>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>{{ translate('Enable Force HTTPS feature?') }}</label>
                                <div>
                                    <label class="aiz-switch aiz-switch-success mb-0">
                                        <input type="checkbox" onchange="updateSettings(this, 'FORCE_HTTPS')"
                                            @if (env('FORCE_HTTPS') == 'On') checked @endif>
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="alert alert-info mb-0">
                                {{ translate('If you enable this feature all requests will be redirect via https.') }}
                            </div>
                        </div>
                    </div>
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
        function updateSettings(el, type) {
            if ($(el).is(':checked')) {
                var value = 1;
            } else {
                var value = 0;
            }
            $.post('{{ route('system_configuration.update.activation') }}', {
                _token: '{{ csrf_token() }}',
                type: type,
                value: value
            }, function(data) {
                if (data == 1) {
                    AIZ.plugins.notify('success', 'Setting has been updated.');
                } else {
                    AIZ.plugins.notify('danger', 'Something went wrong');
                }
            });
        }
    </script>
@endsection
