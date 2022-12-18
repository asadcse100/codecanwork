@extends('admin.default.layouts.app')

@section('css')
    <!-- BEGIN PAGE LEVEL STYLES -->

    <!-- END PAGE LEVEL STYLES -->
@endsection

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">
        <div class="">
            <div class="col-md-3   layout-top-spacing">
                <h5 class="mb-md-0 h6">{{ translate('Service Payments') }}</h5>
            </div>

            <div class="col-lg-12">
                <div class="widget-content widget-content-area layout-top-spacing">
                    <form class="" id="sort_projects" action="" method="GET">
                        <div class="card-header row gutters-5" style="justify-content:center">
                            <div class="col-md-3 ml-auto">
                                <select class="form-control aiz-selectpicker mb-2 mb-md-0" name="user_id" id="user_id"
                                    data-live-search="true" onchange="sort_projects()">
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
                                <select class="form-control aiz-selectpicker mb-2 mb-md-0" name="type" id="type"
                                    onchange="sort_projects()">
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
                <th>#</th>
                <th>{{ translate('Service Title') }}</th>
                <th>{{ translate('Service Owner') }}</th>
                <th>{{ translate('Starts At') }}</th>
                <th>{{ translate('Service Created At') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $key => $service)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td><a target="_blank"
                            href="{{ route('service.show', $service->slug) }}">{{ $service->title }}</a>
                    </td>
                    <td><a target="_blank"
                            href="{{ route('expert.details', $service->user->user_name) }}">{{ $service->user->name }}</a>
                    </td>
                    <td> </td>
                    <td>{{ $service->created_at }}</td>
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
@endsection
