@extends('layouts.app')

@section('css')
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ asset('templete') }}/src/plugins/src/autocomplete/css/autoComplete.02.css" rel="stylesheet"
        type="text/css" />

    <link href="{{ asset('templete') }}/src/plugins/css/light/autocomplete/css/custom-autoComplete.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('templete') }}/src/plugins/css/dark/autocomplete/css/custom-autoComplete.css" rel="stylesheet"
        type="text/css" />

    <link href="{{ asset('templete') }}/src/assets/css/light/pages/knowledge_base.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('templete') }}/src/assets/css/dark/pages/knowledge_base.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('templete') }}/src/assets/css/light/forms/switches.css">
    <link href="{{ asset('templete') }}/src/plugins/css/light/pricing-table/css/component.css" rel="stylesheet"
        type="text/css" />

    <link rel="stylesheet" type="text/css" href="{{ asset('templete') }}/src/assets/css/dark/forms/switches.css">
    <link href="{{ asset('templete') }}/src/plugins/css/dark/pricing-table/css/component.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('templete') }}/src/assets/css/light/pages/faq.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('templete') }}/src/assets/css/dark/pages/faq.css" rel="stylesheet" type="text/css" />
@endsection
<style>
    .pricing-table-2 .pricing-plan .pricing-header-section .pricing-header-pricing {
        max-width: 138px !important;
    }
</style>
@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing" style="margin-top: 50px">
        <div class="">
            <div class="col-md-4   layout-top-spacing">
                <h5 class="mb-md-0 h6">{{ translate('Package-Select') }}</h5>
            </div>
            <div class="col-xxl-12 col-xl-12 col-lg-12col-md-12 col-sm-12">
                <div class="row" id="cancel-row">
                    @foreach ($packages as $key => $package)
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 layout-top-spacing">

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!--  END CONTENT AREA  -->
@endsection

@section('modal')
    <!-- Select Payment Type Modal -->
    <div class="modal fade" id="select_payment_type_modal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        {{ translate('Select Payment Type') }}
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="package_id" name="package_id" value="">
                    <div class="row">
                        <div class="col-md-2">
                            <label>{{ translate('Payment Type') }}</label>
                        </div>
                        <div class="col-md-10">
                            <div class="mb-3">
                                <select class="form-control aiz-selectpicker" onchange="payment_type(this.value)"
                                    data-minimum-results-for-search="Infinity">
                                    <option value="">{{ translate('Select One') }}
                                    </option>
                                    <option value="online">
                                        {{ translate('Online payment') }}</option>
                                    <option value="offline">
                                        {{ translate('Offline payment') }}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-right">
                        <button type="button" class="btn btn-sm btn-primary transition-3d-hover mr-1"
                            id="select_type_cancel" data-dismiss="modal">{{ translate('Cancel') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Online Payment modal -->
    <div class="modal fade" id="purchase_package_modal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Select a payment option
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body" id="purchase_package_modal_body">

                </div>
            </div>
        </div>
    </div>


    <!-- offline payment Modal -->
    <div class="modal fade" id="offline_client_package_purchase_modal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        {{ translate('Package Purchase by Offline Payment') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div id="offline_client_package_purchase_modal_body"></div>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('templete') }}/src/assets/js/pages/faq.js"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script>
        var getSwithchInput = document.querySelector('#toggle-1');
        var pricingContainer = document.querySelector('.pricing-plans-container')

        getSwithchInput.addEventListener('change', function() {
            var isChecked = getSwithchInput.checked;
            if (isChecked) {
                pricingContainer.classList.add('billed-yearly');

                pricingContainer.querySelectorAll('.badge').forEach(element => {
                    element.classList.add('show')
                });

            } else {
                pricingContainer.classList.remove('billed-yearly')
                pricingContainer.querySelectorAll('.badge').forEach(element => {
                    element.classList.remove('show')
                });
            }
        })
    </script>


    <script type="text/javascript">
        function select_payment_type(id) {
            $('input[name=package_id]').val(id);
            $('#select_payment_type_modal').modal('show');
        }

        function payment_type(type) {
            var package_id = $('#package_id').val();
            if (type == 'online') {
                $("#select_type_cancel").click();
                online_payment(package_id);
            } else if (type == 'offline') {
                $("#select_type_cancel").click();
                $.post('{{ route('offline_package_purchase_modal') }}', {
                    _token: '{{ csrf_token() }}',
                    package_id: package_id
                }, function(data) {
                    $('#offline_client_package_purchase_modal_body').html(data);
                    $('#offline_client_package_purchase_modal').modal('show');
                });
            }
        }

        function online_payment(id) {
            $.post('{{ route('get_package_purchase_modal') }}', {
                _token: '{{ csrf_token() }}',
                id: id
            }, function(data) {
                $('#purchase_package_modal').modal('show');
                $('#purchase_package_modal_body').html(data);
                $(".aiz-selectpicker").selectpicker();
            })
        }
    </script>
@endsection
