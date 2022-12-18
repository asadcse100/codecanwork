@extends('admin.default.layouts.app')

@section('css')
    <!-- BEGIN PAGE LEVEL STYLES -->

    <!-- END PAGE LEVEL STYLES -->
@endsection

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">
        <div class="">
            <div class="col-md-3   layout-top-spacing">
                <h5 class="mb-md-0 h6">{{ translate('Cancellation Request Projects') }}</h5>
            </div>

            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="widget-content widget-content-area layout-top-spacing">
                        <form class="" id="sort_projects" action="" method="GET">
                            <div class="card-header row gutters-5" style="justify-content:center">
                                <div class="col-md-3 ml-auto">
                                    <select class="form-control aiz-selectpicker mb-2 mb-md-0" name="user_id" id="user_id"
                                        data-live-search="true" onchange="sort_projects()">
                                        <option value="">{{ translate('Filter by Client') }}</option>
                                        @foreach (App\Models\User::where('user_type', 'client')->get() as $key => $client)
                                            @if ($client->user != null)
                                                <option value="{{ $client->id }}"
                                                    @if ($client->id == $client_id) selected @endif>
                                                    {{ $client->name }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-3 ml-auto">
                                    <select class="form-control aiz-selectpicker mb-2 mb-md-0" name="type" id="type"
                                        onchange="sort_projects()">
                                        <option value="">{{ translate('Sort by') }}</option>
                                        <option value="created_at,asc"
                                            @isset($col_name, $query) @if ($col_name == 'created_at' && $query == 'asc') selected @endif
                                        @endisset>
                                        {{ translate('Time (Old > New)') }}</option>
                                    <option value="created_at,desc"
                                        @isset($col_name, $query) @if ($col_name == 'created_at' && $query == 'desc') selected @endif
                                    @endisset>
                                    {{ translate('Time (New > Old)') }}</option>
                                <option value="price,desc"
                                    @isset($col_name, $query) @if ($col_name == 'price' && $query == 'desc') selected @endif
                                @endisset>
                                {{ translate('Price (High > Low)') }}</option>
                            <option value="price,asc"
                                @isset($col_name, $query) @if ($col_name == 'price' && $query == 'asc') selected @endif
                            @endisset>
                            {{ translate('Price (Low > High)') }}</option>
                    </select>
                </div>

            </div>
        </form>
        <table id="individual-col-search" class="table dt-table-hover">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th>Project</th>
                    <th>Type</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cancel_projects as $key => $cancel_project)
                    <tr>
                        <td>{{ $key + 1 + ($cancel_projects->currentPage() - 1) * $cancel_projects->perPage() }}
                        </td>
                        @if ($cancel_project->project != null)
                            <td>
                                {{ $cancel_project->project->name }}
                            </td>
                            <td>
                                {{ $cancel_project->project->type }}
                            </td>
                            <td>
                                {{ single_price($cancel_project->project->price) }}
                            </td>
                        @endif
                        @if ($cancel_project->requested_user != null)
                            <td>
                                {{ $cancel_project->requested_user->name }}
                            </td>
                        @endif
                        @if ($cancel_project->project->cancel_by_user_id == null)
                            <td>
                                <span
                                    class="badge badge-inline badge-warning">{{ translate('Pending') }}</span>
                            </td>
                        @else
                            <td>
                                <span
                                    class="badge badge-inline badge-success">{{ translate('Cancelled') }}</span>
                            </td>
                        @endif
                        <td class="text-right">
                            <a href="javascript:void(0)"
                                onclick="show_cancel_request_modal('{{ $cancel_project->id }}')"
                                class="btn btn-soft-primary btn-icon btn-circle btn-sm"
                                title="{{ translate('Show') }}">
                                <i class="las la-eye"></i>
                            </a>
                            <a href="javascript:void(0)"
                                class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                data-href="{{ route('cancel-project-request.destroy', $cancel_project->id) }}"
                                title="{{ translate('Delete') }}">
                                <i class="las la-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
            {{ $cancel_projects->appends(request()->input())->links() }}
        </table>
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
<!-- BEGIN PAGE LEVEL SCRIPTS -->

<!-- END PAGE LEVEL SCRIPTS -->
<script type="text/javascript">
    function show_cancel_request_modal(id) {
        $.post('{{ route('cancel-project-request.show') }}', {
            _token: '{{ csrf_token() }}',
            id: id
        }, function(data) {
            $('#cancel-project-request').modal('show');
            $('#cancel-project-request_body').html(data);
        })
    }

    function sort_cancel_projects(el) {
        $('#sort_cancel_projects').submit();
    }
</script>
@endsection
