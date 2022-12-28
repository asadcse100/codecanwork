@extends('admin.default.layouts.app')

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">
        <div class="layout-top-spacing">

            <div class="aiz-titlebar mt-2 mb-3">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1 class="h3">{{ translate('Currency List') }}</h1>
                    </div>
                    <div class="col-md-6 text-md-center">
                        <a href="{{ route('currencies.create') }}" class="btn btn-outline-primary mb-2 me-4"
                            title="{{ translate('Add New Currency') }}">
                            {{ translate('Add New Currency') }}
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="h6 mb-0">{{ translate('System Default Currency') }}</h5>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" action="{{ route('system_configuration.update') }}"
                                method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="hidden" name="types[]" value="system_default_currency">
                                    <div class="row">
                                        <div class="offset-lg-1 col-md-8">
                                            <select class="form-select aiz-selectpicker" name="system_default_currency"
                                                data-live-search="true" data-placeholder="Choose ..." required>
                                                @foreach ($currencies as $key => $currency)
                                                    <option value="{{ $currency->id }}"
                                                        @if (\App\Models\SystemConfiguration::where('type', 'system_default_currency')->first()->value == $currency->id) selected @endif>
                                                        {{ $currency->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <button type="submit" class="btn btn-primary">{{ translate('Save') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="h6 mb-0">{{ translate('Currency Formats') }}</h5>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" action="{{ route('system_configuration.update') }}"
                                method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <input type="hidden" name="types[]" value="symbol_format">
                                            <select class="form-select aiz-selectpicker" name="symbol_format"
                                                data-placeholder="Choose ..." required>
                                                <option value="1" @if (\App\Models\SystemConfiguration::where('type', 'symbol_format')->first()->value == 1) selected @endif>
                                                    [Symbol]
                                                    [Amount]</option>
                                                <option value="2" @if (\App\Models\SystemConfiguration::where('type', 'symbol_format')->first()->value == 2) selected @endif>
                                                    [Amount]
                                                    [Symbol]</option>
                                            </select>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="hidden" name="types[]" value="no_of_decimals">
                                            <select class="form-select aiz-selectpicker" name="no_of_decimals"
                                                data-placeholder="Choose ..." required>
                                                <option value="0" @if (\App\Models\SystemConfiguration::where('type', 'no_of_decimals')->first()->value == 0) selected @endif>
                                                    12345
                                                </option>
                                                <option value="1" @if (\App\Models\SystemConfiguration::where('type', 'no_of_decimals')->first()->value == 1) selected @endif>
                                                    1234.5
                                                </option>
                                                <option value="2" @if (\App\Models\SystemConfiguration::where('type', 'no_of_decimals')->first()->value == 2) selected @endif>
                                                    123.45
                                                </option>
                                                <option value="3" @if (\App\Models\SystemConfiguration::where('type', 'no_of_decimals')->first()->value == 3) selected @endif>
                                                    12.345
                                                </option>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <button type="submit" class="btn btn-primary">{{ translate('Save') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="layout-top-spacing">
                </div>
                <div class="col-12">
                    <div class="widget-content widget-content-area">
                        <div class="card-header">
                            <h5 class="h6 mb-0">{{ translate('All Currencies') }}</h5>
                        </div>
                        <div class="card-body">
                            <table id="individual-col-search" class="table dt-table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ translate('Currency name') }}</th>
                                        <th>{{ translate('Currency symbol') }}</th>
                                        <th>{{ translate('Currency code') }}</th>
                                        <th>{{ translate('Exchange rate') }}(1 USD = ?)</th>
                                        <th class="text-right">{{ translate('Options') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($currencies as $key => $currency)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $currency->name }}</td>
                                            <td>{{ $currency->symbol }}</td>
                                            <td>{{ $currency->code }}</td>
                                            <td>{{ $currency->exchange_rate }}</td>


                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle" href="#" role="button"
                                                        id="dropdownMenuLink2" data-bs-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="true">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="feather feather-more-horizontal">
                                                            <circle cx="12" cy="12" r="1">
                                                            </circle>
                                                            <circle cx="19" cy="12" r="1">
                                                            </circle>
                                                            <circle cx="5" cy="12" r="1">
                                                            </circle>
                                                        </svg>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink20">
                                                        @if ($currency->id != 1)
                                                            <a href="{{ route('currencies.edit', encrypt($currency->id)) }}"
                                                                class="dropdown-item">Edit</a>
                                                            @php
                                                                $system_default_currency = \App\Utility\SettingsUtility::get_settings_value('system_default_currency');
                                                            @endphp
                                                            @if ($system_default_currency != $currency->id)
                                                                <a class="dropdown-item"
                                                                    href="{{ route('currencies.destroy', $currency->id) }}"
                                                                    onclick="deleteFn()">Delete</a>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
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
        function sort_projects(el) {
            $('#sort_projects').submit();
        }

        function project_approval(el) {
            if (el.checked) {
                var status = 1;
            } else {
                var status = 0;
            }
            $.post('{{ route('project_approval') }}', {
                _token: '{{ csrf_token() }}',
                id: el.value,
                status: status
            }, function(data) {
                if (data == 1) {
                    AIZ.plugins.notify('success', 'Project has been approved successfully.');
                } else {
                    AIZ.plugins.notify('danger', 'Something went wrong');
                }
            });
        }
    </script>
@endsection
