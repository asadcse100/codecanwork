@extends('admin.default.layouts.app')

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing layout-top-spacing">

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0 h6">{{ translate('Minimum Amount For Withdraw Request') }}</h5>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" action="{{ route('expert_payment_config_update') }}"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="types[]" value="min_withdraw_amount">

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-text">{{ translate('Minimum Amount') }}</span>
                                        <input type="number" min="1" step="0.01" name="min_withdraw_amount"
                                            value="{{ \App\Models\SystemConfiguration::where('type', 'min_withdraw_amount')->first()->value }}"
                                            class="form-control" placeholder="Minimum Amount">
                                        <small class="form-text text-muted"></small>
                                    </div>
                                </div>

                                <div class="alert alert-info mt-4">
                                    {{ translate('Expert need to have minimum this amount of balance in his account to make a withdrawal request.') }}
                                </div>
                                <div class="form-group mb-0 text-right">
                                    <button type="submit" class="btn btn-primary">{{ translate('Update') }}</button>
                                </div>
                            </form>
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
