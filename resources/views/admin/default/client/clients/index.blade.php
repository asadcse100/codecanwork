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
                <h5 class="mb-md-0 h6">{{ translate('Client Lists') }}</h5>
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
                    <th>Name</th>
                    <th>Email</th>
                    <th>Package</th>
                    <th>Verification Status</th>
                    <th>Total Spent</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $key => $client)
                    @if ($client->user != null)
                        <tr>
                            <td>{{ $key + 1 + ($clients->currentPage() - 1) * $clients->perPage() }}
                            </td>
                            <td>
                                {{ $client->user->name }}
                            </td>
                            <td>
                                {{ $client->user->email }}
                            </td>
                            <td>
                                @if ($client->user->userPackage != null && $client->user->userPackage->package != null)
                                    {{ $client->user->userPackage->package->name }}
                                @else
                                    {{ translate('Package Removed') }}
                                @endif
                            </td>
                            @php
                                $verification = \App\Models\Verification::where('user_id', $client->user_id)
                                    ->where('role_id', '3')
                                    ->first();
                            @endphp
                            <td>
                                @if ($verification != null && $verification->verified != 0)
                                    <span
                                        class="badge badge-inline badge-success">{{ translate('Verified') }}</span>
                                @elseif ($verification != null && $verification->verified == 0)
                                    <span
                                        class="badge badge-inline badge-primary">{{ translate('New Request') }}</span>
                                @else
                                    <span
                                        class="badge badge-inline badge-danger">{{ translate('Not Recieved Yet') }}</span>
                                @endif
                            </td>
                            <td>
                                {{ single_price(\App\Models\MilestonePayment::where('client_user_id', $client->user->id)->where('paid_status', 1)->sum('amount')) }}
                            </td>
                            <td class="text-right">
                                @if ($client->user != null)
                                    <a href="{{ route('client_info_show', $client->user->user_name) }}"
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
                                @if ($client->user->banned)
                                    <a href="javascript:void(0)" data-target="#unban-modal"
                                        data-href="{{ route('user.ban', $client->user->id) }}"
                                        title="{{ translate('Unban') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                            height="18" viewBox="0 0 512 512" fill="white"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="fa-solid fa-circle-check">
                                            <path
                                                d="M0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256zM371.8 211.8C382.7 200.9 382.7 183.1 371.8 172.2C360.9 161.3 343.1 161.3 332.2 172.2L224 280.4L179.8 236.2C168.9 225.3 151.1 225.3 140.2 236.2C129.3 247.1 129.3 264.9 140.2 275.8L204.2 339.8C215.1 350.7 232.9 350.7 243.8 339.8L371.8 211.8z" />
                                        </svg>

                                    </a>
                                @else
                                    <a href="javascript:void(0)" data-target="#ban-modal"
                                        data-href="{{ route('user.ban', $client->user->id) }}"
                                        title="{{ translate('Ban') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                            height="18" viewBox="0 0 512 512" fill="white"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="fa-solid fa-ban">
                                            <path
                                                d="M512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM99.5 144.8C77.15 176.1 64 214.5 64 256C64 362 149.1 448 256 448C297.5 448 335.9 434.9 367.2 412.5L99.5 144.8zM448 256C448 149.1 362 64 256 64C214.5 64 176.1 77.15 144.8 99.5L412.5 367.2C434.9 335.9 448 297.5 448 256V256z" />
                                        </svg>
                                    </a>
                                @endif
                            </td>
                        </tr>
                    @endif
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
    function sort_clients(el) {
        $('#sort_clients').submit();
    }
</script>
@endsection
