@extends('admin.default.layouts.app')

@section('content')

    <div class="aiz-titlebar mt-2 mb-3">
		<div class="row align-items-center">
			<div class="col-md-6">
				<h1 class="h3">{{translate('Running Projects')}}</h1>
			</div>
		</div>
	</div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <form class="" id="sort_projects" action="" method="GET">
                    <div class="card-header row gutters-5">
    					<div class="col text-center text-md-left">
    						<h5 class="mb-md-0 h6">{{translate('Running Projects')}}</h5>
    					</div>
                        <div class="col-md-3 ml-auto">
    						<select class="form-control aiz-selectpicker mb-2 mb-md-0" name="user_id" id="user_id" data-live-search="true" onchange="sort_projects()">
    							<option value="">{{ translate('Filter by Client') }}</option>
                                @foreach (App\Models\User::where('user_type', 'client')->get() as $key => $client)
                                    @if ($client != null)
                                        <option value="{{ $client->id }}" @if ($client->id == $client_id) selected @endif>{{ $client->name }}</option>
                                    @endif
                                @endforeach
    						</select>
    					</div>
    					<div class="col-md-3">
    						<div class="input-group">
    							<input type="text" class="form-control" placeholder="Type and Hit Enter" name="search" @isset($sort_search) value="{{ $sort_search }}" @endisset>
    							<div class="input-group-append">
    								<button class="btn btn-light" type="submit">
    									<i class="las la-search la-rotate-270"></i>
    								</button>
    							</div>
    						</div>
    					</div>
    				</div>
                </form>
                <div class="card-body">
                    <table class="table aiz-table mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th width="20%">{{translate('Title')}}</th>
                                <th>{{translate('Project Category')}}</th>
                                <th>{{translate('Type')}}</th>
                                <th>{{translate('Client')}}</th>
                                <th>{{translate('Expert')}}</th>
                                <th>{{translate('Price')}}</th>
                                <th>{{translate('Hired at')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($projects as $key => $project)
                                <tr>
                                    <td>{{ ($key+1) + ($projects->currentPage() - 1)*$projects->perPage() }}</td>
                                    <td><a href="{{ route('project.details', $project->slug) }}" target="_blank" class="text-reset">{{ $project->name }}</a></td>
                                    <td>{{$project->project_category->name}}</td>
                                    <td>{{$project->type}}</td>
                                    <td>
                                        @if ($project->client != null)
                                            {{$project->client->name}}
                                        @endif
                                    </td>
                                    <td>
                                        @if ($project->project_user != null && $project->project_user->user != null)
                                            {{$project->project_user->user->name}}
                                        @endif
                                    </td>
                                    <td>
                                        @if ($project->project_user != null)
                                            {{ single_price($project->project_user->hired_at) }}
                                        @endif
                                    </td>
                                    <td>
                                        @if ($project->project_user != null)
                                            {{ Carbon\Carbon::parse($project->project_user->created_at)->diffForHumans() }}
                                        @endif
                                    </td>
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
@endsection
@section('modal')
    @include('admin.default.partials.delete_modal')
@endsection
@section('script')
<script type="text/javascript">
    function sort_projects(el){
        $('#sort_projects').submit();
    }
</script>
@endsection
