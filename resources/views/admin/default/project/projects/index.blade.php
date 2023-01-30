@extends('admin.default.layouts.app')

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">
        <div class="statbox widget box box-shadow">
        <div class="widget-content widget-content-area layout-top-spacing">
            <div class="card-header">
                <h1 class="mb-0 h6">{{ translate('All Projects') }}</h1>
            </div>
            <form class="" id="sort_projects" action="" method="GET">
                <div class="card-header row gutters-5" style="justify-content:center">
                    {{-- <div class="col-md-3  text-md-left">
                            <h5 class="mb-md-0 h6">{{ translate('All Projects') }}</h5>
                        </div> --}}

                    <div class="col-md-3 ml-auto">
                        <select class="form-control form-control-sm aiz-selectpicker mb-2 mb-md-0" name="user_id"
                            id="user_id" data-live-search="true" onchange="sort_projects()">
                            <option value="">{{ translate('Filter by Client') }}</option>
                            @foreach (App\Models\User::where('user_type', 'client')->get() as $key => $client)
                                {{-- @if ($client->user != null) --}}
                                <option value="{{ $client->id }}" @if ($client->id == $client_id) selected @endif>
                                    {{ $client->name }}
                                </option>
                                {{-- @endif --}}
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
            </form>

        <div class="row">
            <div class="col-lg-12">
                <table id="individual-col-search" class="table dt-table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>{{ translate('Title') }}</th>
                            <th>{{ translate('Project Category') }}</th>
                            <th>{{ translate('Type') }}</th>
                            <th>{{ translate('Client') }}</th>
                            <th>{{ translate('Budget') }}</th>
                            @if (\App\Models\SystemConfiguration::where('type', 'project_approval')->first()->value == 1)
                                <th data-breakpoints="md">{{ translate('Approval') }}</th>
                            @endif
                            <th>Posted at</th>
                            <th class="text-center dt-no-sorting">{{ translate('Options') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $key => $project)
                            <tr>
                                <td class="text-center">
                                    {{ $key + 1 + ($projects->currentPage() - 1) * $projects->perPage() }}
                                </td>
                                <td><a href="{{ route('project.details', $project->slug) }}" target="_blank"
                                        class="text-reset">{{ $project->name }}</a></td>

                                <td>
                                    @if ($project->project_category != null)
                                        {{ $project->project_category->name }}
                                    @endif
                                </td>
                                <td>{{ $project->type }}</td>

                                <td>
                                    @if ($project->client != null)
                                        {{ $project->client->name }}
                                    @endif
                                </td>
                                <td>{{ single_price($project->price) }}</td>
                                @if (\App\Models\SystemConfiguration::where('type', 'project_approval')->first()->value == 1)
                                    <td>
                                        <label class="aiz-switch aiz-switch-success mb-0">
                                            <input type="checkbox" id="project_approval.{{ $key }}"
                                                onchange="project_approval(this)" value="{{ $project->id }}"
                                                @if ($project->project_approval == 1) checked @endif>
                                            <span></span>
                                        </label>
                                    </td>
                                @endif
                                <td>{{ Carbon\Carbon::parse($project->created_at)->diffForHumans() }}</td>

                                <td>
                                    <a href="#"
                                        data-href="{{ route('delete_project_by_admin', encrypt($project->id)) }}"
                                        title="Delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-trash-2 table-cancel">
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
