@extends('admin.default.layouts.app')

@section('css')
    <!-- BEGIN PAGE LEVEL STYLES -->

    <!-- END PAGE LEVEL STYLES -->
@endsection

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">
        <div class="">
            <div class="layout-top-spacing">
            </div>

            <div class="aiz-titlebar mt-2 mb-3">
                <div class="row align-items-center">
                    <div class="col">
                        <h1 class="h3">{{ translate('Website Header') }}</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="mb-0">{{ translate('Header Setting') }}</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('system_configuration.update') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="col-sm-12 mb-4">
                                    <div class="input-group  mb-3 required">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Header Logo</span>
                                        <input type="file" name="header_logo" class="form-control file-upload-input"
                                            value="{{ App\Models\SystemConfiguration::where('type', 'header_logo')->first()->value }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>{{ translate('Enable stikcy header?') }}</label>
                                    <div>
                                        <label class="aiz-switch mb-0">
                                            <input type="hidden" name="types[]" value="header_stikcy">
                                            <input type="checkbox" name="header_stikcy"
                                                @if (App\Models\SystemConfiguration::where('type', 'header_stikcy')->first()->value == 'on') checked @endif>
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button type="submit"
                                        class="btn btn-outline-success btn-sm mb-2 me-4">{{ translate('Update') }}</button>
                                </div>
                            </form>
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
@section('script')
    <!-- BEGIN PAGE LEVEL SCRIPTS -->

    <!-- END PAGE LEVEL SCRIPTS -->
@endsection
