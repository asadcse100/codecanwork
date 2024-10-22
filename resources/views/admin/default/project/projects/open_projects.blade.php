@extends('admin.default.layouts.app')

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">
        <div class="col-md-3 layout-top-spacing">
            <h6>{{ translate('Open Projects') }}</h6>
        </div>
        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="widget-content widget-content-area layout-top-spacing">
                    <form class="" id="sort_projects" action="" method="GET">
                        <div class="card-header row gutters-5" style="justify-content:center">
                            <div class="col-md-3 ml-auto">
                                <select class="form-control form-control-sm aiz-selectpicker mb-2 mb-md-0" name="user_id"
                                    id="user_id" data-live-search="true" onchange="sort_projects()">
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
                                <select class="form-control form-control-sm aiz-selectpicker mb-2 mb-md-0" name="type"
                                    id="type" onchange="sort_projects()">
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
                                <th width="20%">{{ translate('Title') }}</th>
                                <th data-breakpoints="md">{{ translate('Project Category') }}</th>
                                <th data-breakpoints="md">{{ translate('Type') }}</th>
                                <th data-breakpoints="md">{{ translate('Client Name') }}</th>
                                <th>{{ translate('Price') }}</th>
                                <th>{{ translate('Posted at') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $key => $project)
                                <tr>
                                    <td>{{ $key + 1 + ($projects->currentPage() - 1) * $projects->perPage() }}</td>
                                    <td><a href="{{ route('project.details', $project->slug) }}" target="_blank"
                                            class="text-reset">{{ $project->name }}</a></td>
                                    <td>
                                        @if ($project->project_category != null)
                                            {{ $project->project_category->name }}
                                        @endif
                                    </td>
                                    <td>{{ translate($project->type) }}</td>
                                    <td>
                                        @if ($project->client != null)
                                            {{ $project->client->name }}
                                        @endif
                                    </td>
                                    <td>{{ single_price($project->price) }}</td>
                                    <td>{{ Carbon\Carbon::parse($project->created_at)->diffForHumans() }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="aiz-pagination aiz-pagination-center">
                        {{ $projects->appends(request()->input())->links() }}
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
