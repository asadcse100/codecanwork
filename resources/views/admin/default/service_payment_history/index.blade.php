@extends('admin.default.layouts.app')
@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">
        <div class="col-md-3 layout-top-spacing">
            <h5 class="mb-md-0 h6">{{ translate('Service Payments') }}</h5>
        </div>
        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-content widget-content-area layout-top-spacing">
                        <table id="individual-col-search" class="table dt-table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Service</th>
                                    <th>Service Type</th>
                                    <th>Client</th>
                                    <th>Expert</th>
                                    <th>Amount</th>
                                    <th>My Earnings</th>
                                    <th>Expert Earnings</th>
                                    <th>Payment Method</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($service_payments as $key => $service_payment)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td><a target="_blank"
                                                href="{{ route('service.show', $service_payment->servicePackage->service->slug) }}">{{ $service_payment->servicePackage->service->title }}</a>
                                        </td>
                                        <td>{{ ucfirst($service_payment->servicePackage->service_type) }}</td>
                                        <td>{{ $service_payment->user->name }}</td>
                                        <td>{{ $service_payment->expert->name }}</td>
                                        <td>{{ single_price($service_payment->amount) }}</td>
                                        <td>{{ single_price($service_payment->admin_profit) }}</td>
                                        <td>{{ single_price($service_payment->expert_profit) }}</td>
                                        <td>
                                            <span class="badge badge-inline badge-success">{{ translate('Paid via') }}
                                                {{ $service_payment->payment_method }}</span>
                                        </td>
                                        @if (
                                            \App\Addon::where('unique_identifier', 'offline_payment')->first() != null &&
                                                \App\Addon::where('unique_identifier', 'offline_payment')->first()->activated)
                                            <td>
                                                @if ($service_payment->offline_payment == 1)
                                                    <span
                                                        class="badge badge-inline badge-info">{{ translate('Manual') }}</span>
                                                @else
                                                    <span
                                                        class="badge badge-inline badge-success">{{ translate('Online') }}</span>
                                                @endif
                                            </td>
                                            @if ($service_payment->offline_payment == 1)
                                                <td>
                                                    @if ($service_payment->approval == 1)
                                                        <span
                                                            class="badge badge-inline badge-success">{{ translate('Approved') }}</span>
                                                    @else
                                                        <span
                                                            class="badge badge-inline badge-info">{{ translate('Pending') }}</span>
                                                    @endif
                                                </td>
                                            @else
                                                <td></td>
                                            @endif
                                        @endif
                                        <td class="text-right">{{ $service_payment->created_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
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
@endsection
@section('script')
    <!-- BEGIN PAGE LEVEL SCRIPTS -->

    <!-- END PAGE LEVEL SCRIPTS -->
    <script type="text/javascript">
        function update_review_published(el) {
            if (el.checked) {
                var status = 1;
            } else {
                var status = 0;
            }
            $.post('{{ route('reviews.published') }}', {
                _token: '{{ csrf_token() }}',
                id: el.value,
                status: status
            }, function(data) {
                if (data == 1) {
                    AIZ.plugins.notify('success', 'Review status updated successfully');
                } else {
                    AIZ.plugins.notify('danger', 'Something went wrong');
                }
            });
        }
    </script>
@endsection
