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
                <h5 class="mb-md-0 h6">{{ translate('Withdraw Requests list') }}</h5>
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
                    <th>User Name</th>
                    <th>Requested Amount</th>
                    <th>Message</th>
                    <th>Payment Method</th>
                    <th>Paid-Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($withdraw_requests as $key => $withdraw_request)
                    <tr>
                        <td>{{ $key + 1 + ($withdraw_requests->currentPage() - 1) * $withdraw_requests->perPage() }}
                        </td>
                        @if ($withdraw_request->user != null)
                            <td>
                                {{ $withdraw_request->user->name }}
                            </td>
                        @else
                            <td>
                                {{ translate('Not Found') }}
                            </td>
                        @endif
                        <td>
                            {{ single_price($withdraw_request->requested_amount) }}
                        </td>
                        <td>
                            {{ $withdraw_request->descriptions }}
                        </td>
                        <td>
                            {{ strtoupper($withdraw_request->payment_method) }}
                        </td>
                        <td>
                            @if ($withdraw_request->paid_status != 0)
                                <span
                                    class="badge badge-inline badge-primary">{{ translate('Paid') }}</span>
                            @else
                                <span
                                    class="badge badge-inline badge-danger">{{ translate('Non-Paid') }}</span>
                            @endif
                        </td>
                        <td class="text-right">

                            <a class="btn btn-soft-primary btn-icon btn-circle btn-sm btn icon"
                                href="{{ route('pay_to_expert', encrypt($withdraw_request->id)) }}"
                                title="{{ translate('Pay Now') }}">
                                <i class="las la-money-check"></i>
                            </a>
                            <a href="{{ route('pay_to_expert.cancel', encrypt($withdraw_request->id)) }}"
                                class="btn btn-soft-danger btn-icon btn-circle btn-sm"
                                title="{{ translate('Delete') }}">
                                <i class="las la-trash"></i>
                            </a>
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
    function sort_withdraw_request_list(el) {
        $('#sort_withdraw_request_list').submit();
    }
</script>
@endsection
