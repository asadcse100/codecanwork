@extends('layouts.app')

@section('content')
<!--  BEGIN CONTENT AREA  -->
<div class="layout-px-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-content widget-content-area layout-top-spacing">
            <div class="layout-top-spacing ">
                <h5 class="text-center">{{ translate('Package Payment History') }}</h5>
                <hr>
            </div>
            <table id="individual-col-search" class="table dt-table-hover">
                <thead>
                    <tr>
                        <th data-breakpoints="">#</th>
                        <th data-breakpoints="">{{ translate('Package Name') }}</th>
                        @if (\App\Addon::where('unique_identifier', 'offline_payment')->first() != null && \App\Addon::where('unique_identifier', 'offline_payment')->first()->activated)
                        <th data-breakpoints="">{{ translate('Payment Type') }}</th>
                        <th data-breakpoints="" width="20%">
                            {{ translate('Approval') . ' ( ' . translate('For Manual Payment') . ' )' }}
                        </th>
                        @endif
                        <th data-breakpoints="">{{ translate('Amount') }}</th>
                        <th data-breakpoints="md">{{ translate('Purchase Date') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($package_payments as $key => $package_payment)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>
                            @if ($package_payment->package != null)
                            {{ $package_payment->package->name }}
                            @else
                            {{ translate('Not Found') }}
                            @endif
                        </td>
                        @if (\App\Addon::where('unique_identifier', 'offline_payment')->first() != null && \App\Addon::where('unique_identifier', 'offline_payment')->first()->activated)
                        <td>
                            @if ($package_payment->offline_payment == 1)
                            <span class="badge badge-inline badge-info">{{ translate('Manual Payment') }}</span>
                            @else
                            <span class="badge badge-inline badge-success">{{ translate('Online Payment') }}</span>
                            @endif
                        </td>
                        @if ($package_payment->offline_payment == 1)
                        <td>
                            @if ($package_payment->approval == 1)
                            <span class="badge badge-inline badge-success">{{ translate('Approved') }}</span>
                            @else
                            <span class="badge badge-inline badge-info">{{ translate('Pending') }}</span>
                            @endif
                        </td>
                        @else
                        <td></td>
                        @endif
                        @endif
                        <td>{{ single_price($package_payment->amount) }}</td>
                        <td>{{ $package_payment->created_at }}</td>
                        {{-- <td>
                                    @if (date('Y-m-d') > $package_payment->user->profile->package_invalid_at)
                                        <span class="badge badge-inline badge-danger">{{translate('Expired')}}</span>
                        @else
                        <span class="badge badge-inline badge-success">{{translate('Valid')}}</span>
                        @endif
                        </td> --}}
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $package_payments->links() }}
        </div>
    </div>
</div>
<!--  END CONTENT AREA  -->
@endsection