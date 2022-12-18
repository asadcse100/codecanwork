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
                                <h5 class="text-center">List of service sold</h5>
                                <hr>
                            </div>
                            <table id="individual-col-search" class="table dt-table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Service Title</th>
                                        <th>Client Name</th>
                                        <th>Service Type</th>
                                        <th>Amount</th>
                                        <th>My Earning</th>
                                        <th>Purchased At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($purchasedServices as $purchasedService)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <a target="_blank"
                                                    href="{{ route('service.show', $purchasedService->servicePackage->service->slug) }}">
                                                    {{ \Illuminate\Support\Str::limit($purchasedService->servicePackage->service->title, 15, $end = '...') }}
                                                    @if ($purchasedService->cancel_status == 1)
                                                        <span
                                                            class="ml-2 badge badge-danger badge-inline badge-md">{{ translate('Cancelled') }}</span>
                                                    @elseif($purchasedService->cancel_requested == 1)
                                                        <span
                                                            class="badge badge-info badge-inline badge-md">{{ translate('Cancel Requested') }}</span>
                                                    @endif
                                                </a>
                                            </td>
                                            <td>{{ $purchasedService->user->name }}</td>
                                            <td>{{ ucfirst($purchasedService->servicePackage->service_type) }}</td>
                                            <td>{{ single_price($purchasedService->amount) }}</td>
                                            <td>{{ single_price($purchasedService->expert_profit) }}</td>
                                            <td>{{ $purchasedService->created_at }}</td>
                                    @endforeach
                                    </tr>

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

@section('modal')
    @include('admin.default.partials.delete_modal')
@endsection
