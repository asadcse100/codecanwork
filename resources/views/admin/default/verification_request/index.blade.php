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

            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area">
                            <div class="layout-top-spacing ">
                                <h5 class="text-center">Verification Lists</h5>
                                <hr>
                            </div>
                            <table id="individual-col-search" class="table dt-table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>User Type</th>
                                        <th>Verification Status</th>
                                        <th class="text-center dt-no-sorting">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $key => $user)
                                        <tr>
                                            <td class="text-center">
                                                {{ $key + 1 + ($users->currentPage() - 1) * $users->perPage() }}</td>
                                            @if ($user != null || !$user->isEmpty())
                                                <td>
                                                    {{ $user->name }}
                                                </td>
                                                <td>
                                                    {{ $user->email }}
                                                </td>
                                            @else
                                                <td>
                                                    Not Found
                                                </td>
                                            @endif
                                            <td>
                                                {{ $user->user_type }}
                                            </td>
                                            @php
                                                $verification = \App\Models\Verification::where('user_id', $user->id)->first();
                                            @endphp
                                            <td>
                                                @if ($verification != null && $verification->verified != 0)
                                                    <span
                                                        class="badge badge-success badge-inline">{{ translate('Verified') }}</span>
                                                @elseif ($verification != null && $verification->verified == 0)
                                                    <span
                                                        class="badge badge-info badge-inline">{{ translate('New Request') }}</span>
                                                @else
                                                    <span
                                                        class="badge badge-secondary badge-inline">{{ translate('Not Recieved Yet') }}</span>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                @if ($user != null)
                                                    <a href="{{ route('verification_request_details', $user->user_name) }}"
                                                        title="{{ translate('View Details') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-eye">
                                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                            <circle cx="12" cy="12" r="3"></circle>
                                                        </svg>
                                                    </a>
                                                @endif
                                                @if ($verification != null)
                                                    <a href="#"
                                                        data-href="{{ route('verification_request_delete', $user->id) }}"
                                                        title="{{ translate('Delete') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="feather feather-trash-2 table-cancel">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path
                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                            </path>
                                                            <line x1="10" y1="11" x2="10"
                                                                y2="17"></line>
                                                            <line x1="14" y1="11" x2="14"
                                                                y2="17"></line>
                                                        </svg>
                                                    </a>
                                                @endif

                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
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
    <!-- BEGIN PAGE LEVEL SCRIPTS -->

    <!-- END PAGE LEVEL SCRIPTS -->
    <script type="text/javascript">
        function show_verification_request_modal(id) {
            $.post('{{ route('cancel-project-request.show') }}', {
                _token: '{{ csrf_token() }}',
                id: id
            }, function(data) {
                $('#cancel-project-request').modal('show');
                $('#cancel-project-request_body').html(data);
            })
        }
    </script>
@endsection
