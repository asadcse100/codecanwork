@extends('admin.default.layouts.app')

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">
            <div class="col-md-3   layout-top-spacing">
                <h5 class="mb-md-0 h6">{{ translate('Client Packages') }}</h5>
            </div>
            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">
                    <div class="widget-content widget-content-area layout-top-spacing">
                        <form class="" id="sort_projects" action="" method="GET">
                            <div class="card-header row gutters-5" style="justify-content:center">

                                <div class="col-md-3 ml-auto">
                                    @can('create new client package')
                                        <a href="{{ route('client_package.create', 'client') }}"
                                            class="btn btn-outline-primary mb-2 me-4">
                                            <span>{{ translate('Create New Package') }}</span>
                                        </a>
                                    @endcan
                                </div>
                                <div class="col-md-3 ml-auto">
                                    <select class="form-control form-control-sm aiz-selectpicker mb-2 mb-md-0"
                                        name="user_id" id="user_id" data-live-search="true" onchange="sort_projects()">
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
                                    <select class="form-control form-control-sm aiz-selectpicker mb-2 mb-md-0"
                                        name="type" id="type" onchange="sort_projects()">
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
                                    <th>Title</th>
                                    <th>Type</th>
                                    <th>Total sale</th>
                                    <th>Badge</th>
                                    <th>Price</th>
                                    <th>Recommended</th>
                                    <th>Icon</th>
                                    <th>Current Status</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($packages as $key => $package)
                                    <tr>
                                        <td>{{ $key + 1 + ($packages->currentPage() - 1) * $packages->perPage() }}
                                        </td>
                                        <td>{{ $package->name }}</td>
                                        <td class="text-capitalize">{{ str_replace('_', ' ', $package->type) }}</td>
                                        <td>{{ count(\App\Models\PackagePayment::where('package_id', $package->id)->get()) }}
                                            {{ translate('times') }}</td>
                                        <td>
                                            @if ($package->badge != null)
                                                <img class="img-md" src="{{ asset('profile/badge/' . $package->badge) }}"
                                                    height="50px" alt="{{ translate('badge') }}">
                                            @else
                                                <img src="{{ asset('assets/frontend/default/img/avatar-place.png') }}"
                                                    height="50px" alt="{{ translate('badge') }}">
                                            @endif
                                        </td>

                                        <td>{{ single_price($package->price) }}</td>
                                        <td>
                                            @if ($package->recommended == '1')
                                                <span
                                                    class="badge badge-inline badge-success">{{ translate('Recommended') }}</span>
                                            @elseif($package->recommended == '0')
                                                <span
                                                    class="badge badge-inline badge-secondary">{{ translate('Not Recommended') }}</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($package->photo != null)
                                                <img class="img-md" src="{{ asset('profile/badge/' . $package->photo) }}"
                                                    height="50px" alt="{{ translate('icon') }}">
                                            @else
                                                <img src="{{ asset('assets/frontend/default/img/avatar-place.png') }}"
                                                    height="50px" alt="{{ translate('icon') }}">
                                            @endif
                                        </td>

                                        <td>
                                            @if ($package->active == '1')
                                                <span
                                                    class="badge badge-inline badge-primary">{{ translate('Active') }}</span>
                                            @elseif($package->active == '0')
                                                <span
                                                    class="badge badge-inline badge-danger">{{ translate('Deactive') }}</span>
                                            @endif
                                        </td>
                                        <td class="text-right">
                                            <a href="{{ route($package->type . '_package.edit', encrypt($package->id)) }}"
                                                class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip"
                                                data-placement="top" title="Edit">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-edit-2">
                                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                    </path>
                                                </svg>
                                            </a>

                                            <a href="javascript:void(0);"
                                                data-href="{{ route('package.destroy', $package->id) }}"
                                                class="action-btn btn-delete bs-tooltip" data-toggle="tooltip"
                                                data-placement="top" title="Delete">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-trash-2">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                    </path>
                                                    <line x1="10" y1="11" x2="10" y2="17">
                                                    </line>
                                                    <line x1="14" y1="11" x2="14" y2="17">
                                                    </line>
                                                </svg>
                                            </a>
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
        function sort_clients(el) {
            $('#sort_clients').submit();
        }
    </script>
@endsection
