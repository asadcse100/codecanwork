@extends('layouts.app')

@section('content')
<!--  BEGIN CONTENT AREA  -->
<div class="layout-px-spacing layout-top-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-content widget-content-area layout-top-spacing">
            <div class="layout-top-spacing ">
                <h5 class="text-center">{{ translate('Cancel Purchased Services') }}</h5>
                <hr>
            </div>
            <form class="" id="sort_projects" action="" method="GET">
                <div class=" row gutters-5" style="justify-content:center">
                    {{-- <div class="col-md-3  text-md-left">
                            <h5 class="mb-md-0 h6">{{ translate('All Projects') }}</h5>
                </div> --}}
                <div class="col-md-3 ml-auto">
                    <select class="form-control aiz-selectpicker mb-2 mb-md-0" name="user_id" id="user_id" data-live-search="true" onchange="sort_projects()">
                        <option value="">{{ translate('Filter by Client') }}</option>
                        @foreach (App\Models\User::where('user_type', 'client')->get() as $key => $client)
                        {{-- @if ($client->user != null) --}}
                        {{-- <option value="{{ $client->id }}" @if ($client->id == $client_id) selected @endif>
                        {{ $client->name }}
                        </option> --}}
                        {{-- @endif --}}
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3 ml-auto">
                    <select class="form-control aiz-selectpicker mb-2 mb-md-0" name="type" id="type" onchange="sort_projects()">
                        <option value="">{{ translate('Sort by') }}</option>
                        <option value="created_at,asc" @isset($col_name, $query) @if ($col_name=='created_at' && $query=='asc' ) selected @endif @endisset>
                            {{ translate('Time (Old > New)') }}
                        </option>
                        <option value="created_at,desc" @isset($col_name, $query) @if ($col_name=='created_at' && $query=='desc' ) selected @endif @endisset>
                            {{ translate('Time (New > Old)') }}
                        </option>
                        <option value="price,desc" @isset($col_name, $query) @if ($col_name=='price' && $query=='desc' ) selected @endif @endisset>
                            {{ translate('Price (High > Low)') }}
                        </option>
                        <option value="price,asc" @isset($col_name, $query) @if ($col_name=='price' && $query=='asc' ) selected @endif @endisset>
                            {{ translate('Price (Low > High)') }}
                        </option>
                    </select>
                </div>

        </div>
        </form>
        <table id="individual-col-search" class="table dt-table-hover">
            <thead>
                <tr>
                    <th data-breakpoints="">#</th>
                    <th data-breakpoints="">{{ translate('Service Title') }}</th>
                    <th data-breakpoints="md">{{ translate('Expert') }}</th>
                    <th data-breakpoints="">{{ translate('Service Type') }}</th>
                    <th data-breakpoints="md">{{ translate('Bought At') }}</th>
                    @if (
                    \App\Addon::where('unique_identifier', 'offline_payment')->first() != null &&
                    \App\Addon::where('unique_identifier', 'offline_payment')->first()->activated)
                    <th data-breakpoints="">{{ translate('Payment Type') }}</th>
                    <th data-breakpoints="" width="15%">
                        {{ translate('Approval') . ' ( ' . translate('For Manual Payment') . ' )' }}
                    </th>
                    @endif
                    <th data-breakpoints="md">{{ translate('Purchased At') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($purchasedServices as $purchasedService)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><a target="_blank" href="{{ route('service.show', $purchasedService->servicePackage->service->slug) }}">{{ \Illuminate\Support\Str::limit($purchasedService->servicePackage->service->title, 15, $end = '...') }}</a>
                    </td>
                    <td><a target="_blank" href="{{ route('expert.details', $purchasedService->expert->user_name) }}">{{ $purchasedService->expert->name }}</a>
                    </td>
                    <td>{{ ucfirst($purchasedService->servicePackage->service_type) }}</td>
                    <td>{{ single_price($purchasedService->amount) }}</td>
                    @if (
                    \App\Addon::where('unique_identifier', 'offline_payment')->first() != null &&
                    \App\Addon::where('unique_identifier', 'offline_payment')->first()->activated)
                    <td>
                        @if ($purchasedService->offline_payment == 1)
                        <span class="badge badge-inline badge-info">{{ translate('Manual Payment') }}</span>
                        @else
                        <span class="badge badge-inline badge-success">{{ translate('Online Payment') }}</span>
                        @endif
                    </td>
                    @if ($purchasedService->offline_payment == 1)
                    <td>
                        @if ($purchasedService->approval == 1)
                        <span class="badge badge-inline badge-success">{{ translate('Approved') }}</span>
                        @else
                        <span class="badge badge-inline badge-info">{{ translate('Pending') }}</span>
                        @endif
                    </td>
                    @else
                    <td></td>
                    @endif
                    @endif
                    <td>{{ $purchasedService->created_at }}</td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
<!--  END CONTENT AREA  -->
@endsection
@section('modal')
<!-- cancel Modal -->
<div class="modal fade" id="cancel-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title h6">{{ translate('Cancel Confirmation') }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body text-center">
                <p class="lead">{{ translate('Are you sure to cancel this?') }}</p>
                <button type="button" class="btn btn-link mt-2" data-dismiss="modal">{{ translate('Cancel') }}</button>
                <a id="cancel-link" class="btn btn-primary mt-2">{{ translate('Confirm') }}</a>
            </div>
        </div>
    </div>
</div>
@include('admin.default.partials.delete_modal')
@endsection