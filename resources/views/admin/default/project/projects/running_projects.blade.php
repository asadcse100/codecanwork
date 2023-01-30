@extends('admin.default.layouts.app')

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">
            <div class="col-md-3 layout-top-spacing">
                <h6>{{ translate('Running Projects') }}</h6>
            </div>

            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
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
                        </div>
                    </form>
                    <table id="individual-col-search" class="table dt-table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Title</th>
                                <th>Project Category</th>
                                <th>Type</th>
                                <th>Client</th>
                                <th>Expert</th>
                                <th>Price</th>
                                <th>Posted at</th>
                                <th class="text-center dt-no-sorting">Hired at</th>
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
                                    @if ($project->project_category != null)
                                        <td>
                                            {{ $project->project_category->name }}
                                        </td>
                                    @endif
                                    <td>{{ $project->type }}</td>
                                    @if ($project->client != null)
                                        <td>
                                            {{ $project->client->name }}
                                        </td>
                                    @endif
                                    @if ($project->project_user != null && $project->project_user->user != null)
                                        <td>
                                            {{ $project->project_user->user->name }}
                                        </td>
                                    @endif
                                    @if ($project->project_user != null)
                                        <td>
                                            {{ single_price($project->project_user->hired_at) }}
                                        </td>
                                    @endif
                                    @if ($project->project_user != null)
                                        <td>
                                            {{ Carbon\Carbon::parse($project->project_user->created_at)->diffForHumans() }}
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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
    </script>
@endsection
