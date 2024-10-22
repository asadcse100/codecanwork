@extends('admin.default.layouts.app')

@section('content')
    <div class="layout-px-spacing">
        <div class="">
            <div class="layout-top-spacing">
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="fw-600 mb-0">{{ translate('Create New Currency') }}</h6>
                        </div>
                        <div class="card-body">

                            <form class="form-horizontal" action="{{ route('currencies.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="layout-spacing">
                                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0 mt-4">
                                            <div class="card">
                                                <div class="row layout-top-spacing p-4">
                                                    <div class="col-sm-6 mb-4">
                                                        <div class="input-group  mb-3 required">
                                                            <span class="input-group-text"
                                                                id="inputGroup-sizing-sm">Currency Name</span>
                                                            <input type="text" id="name" name="name"
                                                                class="form-control" placeholder="Eg. US Dollar" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 mb-4">
                                                        <div class="input-group  mb-3 required">
                                                            <span class="input-group-text"
                                                                id="inputGroup-sizing-sm">Currency Symbol</span>
                                                            <input type="text" id="symbol" name="symbol"
                                                                class="form-control" placeholder="Eg. $" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 mb-4">
                                                        <div class="input-group  mb-3 required">
                                                            <span class="input-group-text"
                                                                id="inputGroup-sizing-sm">Currency Code</span>
                                                            <input type="text" id="code" name="code"
                                                                class="form-control" placeholder="Eg. USD" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 mb-4">
                                                        <div class="input-group  mb-3 required">
                                                            <span class="input-group-text"
                                                                id="inputGroup-sizing-sm">Exchange rate</span>
                                                            <input type="number" min="0" step="0.01"
                                                                id="exchange_rate" placeholder="Eg. 5" name="exchange_rate"
                                                                class="form-control" required>
                                                        </div>
                                                    </div>


                                                    <div class="form-group mb-3 text-right">
                                                        <button type="submit"
                                                            class="btn btn-outline-primary">{{ translate('Add New Currency') }}</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </form>
                        </div> <!-- end card-body -->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div>
        </div>
    </div>
    </div>
    <!-- end row-->
@endsection
