@extends('layouts.app')

@section('content')
<div class="layout-px-spacing">
    <!-- Analytics -->
    <div class="layout-top-spacing ">
        <h5>{{ translate('Project Proposals') }}</h5>
    </div>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
        <div class="card">
        @forelse ($private_projects as $key => $private_project)
            @if ($private_project->project != null)
            <div class="widget widget-five p-4">
                {{-- Bidded Projects --}}
                <div class="row">
                    <div class="col-sm-10">
                        <span class="btn btn-success p-1">{{ single_price($private_project->project->price) }}</span>
                    </div>
                    <div class="col-sm-2">
                    <span class="badge badge-danger badge-inline badge-md">{{ translate('Pending') }}</span>
                        
                    </div>
                </div>
                <div class="widget-content">
                    <h5>
                        <a href="{{ route('project.details', $private_project->project->slug) }}" class="text-inherit" target="_blank">{{ $private_project->project->name }}</a>
                    </h5>
                    <ul class="list-inline opacity-70 fs-12">
                        <li class="list-inline-item">
                            <i class="las la-clock opacity-40"></i>
                            <span>{{ Carbon\Carbon::parse($private_project->created_at)->diffForHumans() }}</span>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="text-inherit">
                                <i class="las la-stream opacity-40"></i>
                                <span>@if ($private_project->project->project_category != null) {{ $private_project->project->project_category->name }} @else {{ translate('Removed Category') }} @endif</span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <i class="las la-handshake"></i>
                            <span>{{ $private_project->project->type }}</span>
                        </li>
                        <div class="text-muted lh-1-8">
                            <p>{{ $private_project->project->excerpt }}</p>
                        </div>
                    </ul>
                    @foreach (json_decode($private_project->project->skills) as $key => $skill_id)
                        @php
                            $skill = \App\Models\Skill::find($skill_id);
                        @endphp
                        @if ($skill != null)
                            <span class="btn btn-light-info">{{ $skill->name }}</span>
                        @endif
                    @endforeach
                    <hr>
                    <div class="row">
                        <div class="col-sm-10">
                        <a href="{{ route('client.details', $private_project->client->user_name) }}" class="d-flex mr-3 align-items-center text-reset">
                            <div class="avatar--group">
                                <div class="avatar avatar-sm avatar-indicators avatar-online">
                                    <img alt="avatar" src="{{ asset($private_project->client->photo) }}" />
                                </div>
                                <div class="container">
                                    <div class="media-body">
                                        <h5 class="media-heading mb-1">{{ $private_project->client->name }}</h5>
                                        <span>
                                            <p class="badge badge-warning ">{{ getAverageRating($private_project->client->id) }}</p>
                                            ({{ getNumberOfReview($private_project->client->id) }} {{ translate('Reviews') }})
                                        </span>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-sm-2">
                            <div class="totalbids">
                                <a href="{{ route('hiring.reject', encrypt($private_project->id)) }}" class="btn btn-danger btn-sm rounded-1">{{ translate('Reject') }}</a>
                                <a href="javascript:void(0)" class="btn btn-success btn-sm rounded-1" onclick="hiring_modal('{{ $private_project->project->name }}',{{ $private_project->project->price }}, {{ $private_project->project->id }}, {{ Auth::user()->id }})">{{ translate('Accpet') }}</a>
                                <a href="{{ route('all.messages') }}" class="btn btn-primary btn-sm rounded-1">{{ translate('Chat With Client') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End Bidded Projects --}}
            </div>
            @endif
            @empty
            <div class="card overflow-hidden rounded-2 border-gray-light">
                <div class="card-body text-center">
                    <i class="las la-frown la-4x mb-4 opacity-40"></i>
                    <h4>{{ translate('Nothing Found') }}</h4>
                </div>
            </div>
            @endforelse
        </div>
        <div class="aiz-pagination aiz-pagination-center">
            {{ $private_projects->links() }}
        </div>
    </div>
</div>
@endsection
@section('script')
    <script type="text/javascript">
        function hiring_modal(project_name,project_price, project_id, user_id){
            $('input[name=project_name]').val(project_name);
            $('input[name=amount]').val(project_price);
            $('input[name=project_id]').val(project_id);
            $('input[name=user_id]').val(user_id);
            $('#hiring_modal').modal('show');
        }
    </script>
@endsection

@section('modal')
<div class="modal fade" id="hiring_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ translate('Confirm Hiring') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body" id="hiring_modal_body">
                <form class="form-horizontal" action="{{ route('hiring_confirmation_store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="user_id" value="" required>
                    <input type="hidden" name="project_id" value="" required>

                    <div class="form-group">
                        <label class="form-label">
                            {{translate('Project')}}
                            <span class="text-danger">*</span>
                        </label>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-sm" name="project_name" value="" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">
                            {{translate('Amount')}}
                            <span class="text-danger">*</span>
                        </label>
                        <div class="form-group">
                            <input type="number" class="form-control form-control-sm" name="amount" value="" min="1" step="0.01" required>
                        </div>
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-sm btn-primary transition-3d-hover mr-1 rounded-1">{{ translate('Confirm') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
