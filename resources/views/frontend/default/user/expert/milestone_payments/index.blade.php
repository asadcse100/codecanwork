@extends('layouts.app')

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
                                <h5 class="text-center">Total Requests</h5>
                                <hr>
                            </div>
                            <table id="individual-col-search" class="table dt-table-hover">
                                <thead>
                                    <tr>
                                        <th data-breakpoints="">#</th>
                                        <th data-breakpoints="">{{ translate('Project Name') }}</th>
                                        <th data-breakpoints="">{{ translate('Client') }}</th>
                                        <th data-breakpoints="md">{{ translate('Sending date') }}</th>
                                        <th data-breakpoints="md">{{ translate('Requested Amount') }}</th>
                                        <th data-breakpoints="lg">{{ translate('Client Status') }}</th>
                                        <th data-breakpoints="lg">{{ translate('Payment Status') }}</th>
                                        <th data-breakpoints="">{{ translate('Actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($milestones as $key => $milestone)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $milestone->project->name }}</td>
                                            <td>
                                                {{ $milestone->client->name }}
                                            </td>
                                            <td>{{ $milestone->created_at }}</td>
                                            <td>
                                                {{ single_price($milestone->amount) }}
                                            </td>
                                            <td>
                                                @if ($milestone->client_seen == 1)
                                                    Seen
                                                @else
                                                    Unseen
                                                @endif
                                            </td>
                                            <td>
                                                @if ($milestone->paid_status == 1)
                                                    <span
                                                        class="badge badge-inline badge-success">{{ translate('Paid') }}</span>
                                                @else
                                                    <span
                                                        class="badge badge-inline badge-secondary">{{ translate('Pending') }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                <button type="submit" class="btn btn-xs btn-primary transition-3d-hover"
                                                    onclick="request_message_show_modal('{{ $milestone->id }}')">Show</button>
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
    </div>
    </div>
    <!--  END CONTENT AREA  -->
@endsection

@section('script')
    <script type="text/javascript">
        function request_message_show_modal(id) {
            $.post('{{ route('milestone_request_message_show_modal') }}', {
                _token: '{{ csrf_token() }}',
                id: id
            }, function(data) {
                $('#request_message_show_modal').modal('show');
                $('#request_message_show_modal_body').html(data);
            });
        }
    </script>
@endsection

@section('modal')
    <div class="modal fade" id="request_message_show_modal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ translate('Details') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="request_message_show_modal_body">

                </div>
            </div>
        </div>
    </div>
    @include('admin.default.partials.delete_modal')
@endsection
