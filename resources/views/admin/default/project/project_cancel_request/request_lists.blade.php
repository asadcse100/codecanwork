@extends('admin.default.layouts.app')

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">
            <div class="col-md-3 layout-top-spacing">
                <h5 class="mb-md-0 h6">{{ translate('Cancellation Request Projects') }}</h5>
            </div>

            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">
                    <div class="widget-content widget-content-area layout-top-spacing">

                        <table id="individual-col-search" class="table dt-table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{ translate('Project') }}</th>
                                    <th data-breakpoints="md">{{ translate('Type') }}</th>
                                    <th data-breakpoints="md">{{ translate('Price') }}</th>
                                    <th>{{ translate('Request Sent By') }}</th>
                                    <th data-breakpoints="md">{{ translate('Status') }}</th>
                                    <th class="text-right">{{ translate('Options') }}</th>
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
                                                <span class="badge badge-inline badge-warning">{{ translate('Pending') }}</span>
                                            </td>
                                        @else
                                            <td>
                                                <span class="badge badge-inline badge-success">{{ translate('Cancelled') }}</span>
                                            </td>
                                        @endif
                                        <td class="text-right">
                                            <a href="javascript:void(0)"
                                                onclick="show_cancel_request_modal('{{ $cancel_project->id }}')"
                                                title="{{ translate('Show') }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                    height="18" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="feather feather-eye">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>
                                            </a>
                                            <a href="javascript:void(0)"
                                                data-href="{{ route('cancel-project-request.destroy', $cancel_project->id) }}"
                                                title="{{ translate('Delete') }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-trash-2 table-cancel">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                    </path>
                                                    <line x1="10" y1="11" x2="10" y2="17">
                                                    </line>
                                                    <line x1="14" y1="11" x2="14" y2="17">
                                                    </line>
                                                </svg>
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
    <!--  END CONTENT AREA  -->
@endsection

@section('modal')
    @include('admin.default.partials.delete_modal')
    <div class="modal fade" id="cancel-project-request">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ translate('Cancel Request') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="cancel-project-request_body">

                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
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
