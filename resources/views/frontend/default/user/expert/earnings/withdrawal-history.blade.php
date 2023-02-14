@extends('layouts.app')

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">
        <div class="layout-top-spacing">
            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area">
                            <div class="layout-top-spacing ">
                                <h5 class="text-center">Your withdrawal history</h5>
                                <hr>
                            </div>
                            <table id="individual-col-search" class="table dt-table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Requested Amount</th>
                                        <th>Paid Amount</th>
                                        <th>Payment method</th>
                                        <th>Date</th>
                                        <th>Reciept</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($withdraw_requests as $key => $withdraw_request)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ single_price($withdraw_request->requested_amount) }}</td>
                                            <td>{{ single_price($withdraw_request->paid_amount) }}</td>
                                            <td>{{ $withdraw_request->payment_method }}</td>
                                            <td>{{ $withdraw_request->created_at }}</td>
                                            <td>
                                                @if ($withdraw_request->reciept != null)
                                                    <a href="{{ asset('profile/reciepts/' . $withdraw_request->reciept) }}"
                                                        target="_blank"
                                                        class="text-secondary">{{ translate('Show Reciept') }}</a>
                                                @elseif(!$withdraw_request->paid_status)
                                                    <span
                                                        class="badge badge-inline badge-info">{{ translate('N/A') }}</span>
                                                @else
                                                    <span
                                                        class="badge badge-inline badge-info">{{ translate('No Reciept') }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($withdraw_request->paid_status != 0)
                                                    <span
                                                        class="badge badge-inline badge-success">{{ translate('Paid') }}</span>
                                                @else
                                                    <span
                                                        class="badge badge-inline badge-danger">{{ translate('Pending') }}</span>
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
@endsection
@section('modal')
    @include('admin.default.partials.delete_modal')
@endsection
