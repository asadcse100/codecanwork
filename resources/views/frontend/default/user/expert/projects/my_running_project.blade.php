@extends('layouts.app')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('templete') }}/src/assets/css/light/widgets/modules-widgets.css">
<link rel="stylesheet" type="text/css" href="{{ asset('templete') }}/src/assets/css/dark/widgets/modules-widgets.css">
@endsection
@section('content')
<div class="layout-px-spacing">
    <!-- Analytics -->
    <div class="layout-top-spacing ">
        <h5>{{ translate('Running Projects') }}</h5>
    </div>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
        <div class="card">
        @forelse ($running_projects as $key => $running_project)
            @php
                $project = \App\Models\Project::find($running_project->id);
            @endphp
            @if ($running_project != null)
            <div class="widget widget-five p-4">
                {{-- Bidded Projects --}}
                <div class="row">
                    <div class="col-sm-10">
                        <span class="btn btn-success p-1">{{ single_price($running_project->hired_at) }}</span>
                    </div>
                    <div class="col-sm-2">
                    <span class="badge badge-danger badge-inline badge-md">{{ translate('Running') }}</span>
                        
                    </div>
                </div>
                <div class="widget-content">
                    <h5>
                        <a href="{{ route('project.details', $project->slug) }}" class="text-inherit" target="_blank">{{ $project->name }}</a>
                    </h5>
                    <ul class="list-inline opacity-70 fs-12">
                        <li class="list-inline-item">
                            <i class="las la-clock opacity-40"></i>
                            <span>{{ Carbon\Carbon::parse($project->created_at)->diffForHumans() }}</span>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="text-inherit">
                                <i class="las la-stream opacity-40"></i>
                                <span>@if ($project->project_category != null) {{ $project->project_category->name }} @else {{ translate('Removed Category') }} @endif</span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <i class="las la-handshake"></i>
                            <span>{{ translate($project->type) }}</span>
                        </li>
                        <div class="text-muted lh-1-8">
                            <p>{{ $project->excerpt }}</p>
                        </div>
                    </ul>
                    @foreach (json_decode($project->skills) as $key => $skill_id)
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
                        <a href="{{ route('client.details', $project->client->user_name)}}" class="d-flex mr-3 align-items-center text-reset">
                            <div class="avatar--group">
                                <div class="avatar avatar-sm avatar-indicators avatar-online">
                                    <img alt="avatar" src="{{ asset($project->client->photo) }}" />
                                </div>
                                <div class="container">
                                    <div class="media-body">
                                        <h5 class="media-heading mb-1">{{ $project->client->name }}</h5>
                                        <span>
                                            <p class="badge badge-warning ">{{ getAverageRating($project->client->id) }}</p>
                                            ({{ getNumberOfReview($project->client->id) }} {{ translate('Reviews') }})
                                        </span>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-sm-2">
                            <div class="totalbids">
                            <a href="javascript:void(0)" onclick="milestone_payment_request_modal('{{ $project->id }}', '{{ $project->client_user_id }}')" class="btn btn-secondary btn-sm fw-500 rounded-1">Send Payment Request</a>
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
            {{ $running_projects->links() }}
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('templete') }}/src/assets/js/widgets/modules-widgets.js"></script>
@endsection