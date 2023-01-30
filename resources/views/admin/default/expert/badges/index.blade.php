@extends('admin.default.layouts.app')

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing layout-top-spacing">
        <div class="row">
            <div class="col-lg-7">
                <div class="card">
                    <div class="card-header">
                        <h6>{{ translate('Badges list') }}</h6>
                    </div>
                    <div class="card-body">
                        <table id="individual-col-search" class="table dt-table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{ translate('Title') }}</th>
                                    <th>{{ translate('Type') }}</th>
                                    <th>{{ translate('Min number') }}</th>
                                    <th>{{ translate('Icon') }}</th>
                                    <th class="text-right">{{ translate('Options') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($badges as $key => $badge)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $badge->name }}</td>
                                        <td class="text-capitalize">{{ str_replace('_', ' ', $badge->type) }}</td>
                                        <td>
                                            @if ($badge->type == 'project_badge')
                                                {{ $badge->value }} {{ translate('Projects') }}
                                            @elseif($badge->type == 'earning_badge')
                                                {{ single_price($badge->value) }} {{ translate('Earnings') }}
                                            @else
                                                {{ $badge->value }} {{ translate('Days') }}
                                            @endif
                                        </td>
                                        <td>
                                            <span class="avatar avatar-square avatar-xs">
                                                @if ($badge->icon != null)
                                                    <img class="img-md"
                                                        src="{{ asset('profile/badge/' . $badge->icon) }}"
                                                        height="40px" alt="{{ translate('icon') }}">
                                                @else
                                                    <img src="{{ asset('assets/frontend/default/img/avatar-place.png') }}"
                                                        height="40px" alt="{{ translate('icon') }}">
                                                @endif
                                            </span>
                                        </td>
                                        <td class="text-center">
                                            <div class="dropdown">
                                                <a class="dropdown-toggle" href="#" role="button"
                                                    id="dropdownMenuLink2" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="true">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-more-horizontal">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="19" cy="12" r="1"></circle>
                                                        <circle cx="5" cy="12" r="1"></circle>
                                                    </svg>
                                                </a>
                                                <div class="dropdown-menu my-5" aria-labelledby="dropdownMenuLink20">


                                                    <a href="{{ route('badges.edit', encrypt($badge->id)) }}"
                                                        class="dropdown-item">Edit</a>



                                                    <a class="dropdown-item"
                                                        href="{{ route('badges.destroy', $badge->id) }}"
                                                        onclick="deleteFn()">Delete</a>

                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="aiz-pagination aiz-pagination-center">
                            {{ $badges->links() }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-header">
                        <h1 class="mb-0 h6">{{ translate('Add New Badge') }}</h1>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" action="{{ route('badges.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-sm-12 mb-4">
                                <div class="input-group  mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Title</span>
                                    <input type="text" id="name" name="name" required
                                        placeholder="{{ translate('Eg. Completed 100+ projects') }}"
                                        class="form-control" required>
                                </div>
                            </div>
                            <input type="hidden" name="role_id" value="expert">
                            <div class="col-sm-12 mb-4">
                                <div class="input-group  mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Badge Type</span>
                                    <select class="select2 form-select aiz-selectpicker" name="type" id="type"
                                        data-show="selectShow" data-target=".min-num-type"
                                        data-placeholder="Choose ...">
                                        <option value="project_badge">{{ translate('Project Badge') }}</option>
                                        <option value="earning_badge">{{ translate('Earning Badge') }}</option>
                                        <option value="membership_badge">{{ translate('Membership Badge') }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 mb-4">
                                <div class="input-group  mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Min number of</span>
                                    <input type="number" id="value" name="value" min="0" step="1"
                                        placeholder="{{ translate('Eg. 100') }}" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-sm-12 mb-4">
                                <div class="input-group  mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Badge Icon</span>
                                    <input class="form-control file-upload-input" name="icon" type="file"
                                        id="formFile">
                                </div>
                            </div>
                            <div class="form-group mb-0 text-right">
                                <button type="submit" class="btn btn-outline-success btn-sm mb-2 me-4">Add New
                                    Badge</button>
                            </div>
                        </form>

                    </div> <!-- end card-body -->
                </div> <!-- end card-->
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
        function sort_experts(el) {
            $('#sort_experts').submit();
        }
    </script>
@endsection
