@extends('admin.default.layouts.app')

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing layout-top-spacing">
        <div class="">

            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area">
                            <div class="layout-top-spacing ">
                                <h5 class="text-center">Chat Lists</h5>
                                <hr>
                            </div>
                            <table id="individual-col-search" class="table dt-table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Client</th>
                                        <th>Expert</th>
                                        <th>Chat Started</th>
                                        <th class="text-center dt-no-sorting">Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($chat_threads as $key => $chat_thread)
                                        <tr>
                                            <td class="text-center">
                                                {{ $key + 1 + ($chat_threads->currentPage() - 1) * $chat_threads->perPage() }}
                                            </td>
                                            @if ($chat_thread->sender != null)
                                                <td>
                                                    {{ $chat_thread->sender->name }}
                                                </td>
                                            @else
                                                <td>
                                                    Not Found
                                                </td>
                                            @endif

                                            @if ($chat_thread->receiver != null)
                                                <td>
                                                    {{ $chat_thread->receiver->name }}
                                                </td>
                                            @else
                                                <td>
                                                    {{ translate('Not Found') }}
                                                </td>
                                            @endif
                                            <td>
                                                {{ $chat_thread->created_at }}
                                            </td>
                                            <td class="text-right">
                                                @can('single user chat details')
                                                    <a href="{{ route('chat_details_for_admin', encrypt($chat_thread->id)) }}"
                                                        class="btn btn-sm btn-icon btn-circle btn-soft-primary"
                                                        title="{{ translate('Edit') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                                    </a>
                                                @endcan
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
