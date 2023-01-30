@extends('admin.default.layouts.app')

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">
            <!-- BREADCRUMB -->
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <div class="row">
                        <div class="col-md-10">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item active" aria-current="page">Package Payment History</li>
                            </ol>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- /BREADCRUMB -->

            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">
                    <div class="widget-content widget-content-area layout-top-spacing">
                        <table id="individual-col-search" class="table dt-table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{ translate('Package Name') }}</th>
                                    <th data-breakpoints="sm">{{ translate('Package Type') }}</th>
                                    <th data-breakpoints="sm">{{ translate('User') }}</th>
                                    <th>{{ translate('Amount') }}</th>
                                    <th data-breakpoints="sm">{{ translate('Payment Method') }}</th>
                                    @if (\App\Addon::where('unique_identifier', 'offline_payment')->first() != null && \App\Addon::where('unique_identifier', 'offline_payment')->first()->activated)
                                    <th data-breakpoints="">{{ translate('Payment Type')}}</th>
                                    <th data-breakpoints="md">{{ translate('Approval').' ( '.translate('For Manual Payment').' )'}}</th>
                                    @endif
                                    <th class="text-right">{{ translate('Date') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($package_payments as $key => $payment)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>
                                            @if ($payment->package != null)
                                                {{ $payment->package->name }}
                                            @else
                                                {{ translate('Package Removed') }}
                                            @endif
                                        </td>
                                        <td>{{ $payment->package_type }}</td>
                                        <td>
                                            @if ($payment->user != null)
                                                {{ $payment->user->name }}
                                            @else
                                                {{ translate('Not Found') }}
                                            @endif
                                        <td>{{ single_price($payment->amount) }}</td>
                                        <td>
                                            <span class="badge badge-inline badge-success">
                                                {{ translate('Paid by') }} {{ $payment->payment_method }}
                                            </span>
                                        </td>
                                        @if (\App\Addon::where('unique_identifier', 'offline_payment')->first() != null &&
                                            \App\Addon::where('unique_identifier', 'offline_payment')->first()->activated)
                                            <td>
                                                @if ($payment->offline_payment == 1)
                                                    <span
                                                        class="badge badge-inline badge-info">{{ translate('Manual') }}</span>
                                                @else
                                                    <span
                                                        class="badge badge-inline badge-success">{{ translate('Online') }}</span>
                                                @endif
                                            </td>
                                            @if ($payment->offline_payment == 1)
                                                <td>
                                                    @if ($payment->approval == 1)
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

                                        <td class="text-right">
                                            {{ $payment->created_at }}
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
    <!--  END CONTENT AREA  -->
@endsection
@section('modal')
    @include('admin.default.partials.delete_modal')
@endsection
@section('script')

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
