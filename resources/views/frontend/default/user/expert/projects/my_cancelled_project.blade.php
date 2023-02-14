@extends('layouts.app')

@section('content')
<div class="layout-px-spacing">
    <!-- Analytics -->
    <div class="layout-top-spacing ">
        <h5>{{ translate('Cancelled Projects') }}</h5>
    </div>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
        <div class="card">
        @forelse ($cancelled_projects as $cancelled_project_id)
        @php
            $cancelled_project = \App\Models\Project::find($cancelled_project_id->id);
        @endphp
            @if ($cancelled_project != null)
            <div class="widget widget-five p-4">
                {{-- Bidded Projects --}}
                <div class="row">
                    <div class="col-sm-10">
                        <span class="btn btn-success p-1">{{ single_price($cancelled_project->project_user->hired_at) }}</span>
                    </div>
                    <div class="col-sm-2">
                    <span class="badge badge-danger badge-inline badge-md">{{ translate('Cancellled') }}</span>
                        <span class="badge badge-warning badge-inline badge-md">
                            {{ $cancelled_project->cancel_project != null ? $cancelled_project->cancel_project->refund_percentage : 0 }}% 
                            {{ translate('Deducted') }}
                        </span>
                    </div>
                </div>
                <div class="widget-content">
                    <h5>
                        <a href="{{ route('project.details', $cancelled_project->slug) }}" class="text-inherit" target="_blank">{{ $cancelled_project->name }}</a>
                    </h5>
                    <ul class="list-inline opacity-70 fs-12">
                        <li class="list-inline-item">
                            <i class="las la-clock opacity-40"></i>
                            <span>{{ Carbon\Carbon::parse($cancelled_project->created_at)->diffForHumans() }}</span>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="text-inherit">
                                <i class="las la-stream opacity-40"></i>
                                <span>@if ($cancelled_project->project_category != null) {{ $cancelled_project->project_category->name }} @else {{ translate('Removed Category') }} @endif</span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <i class="las la-handshake"></i>
                            <span>{{ translate($cancelled_project->type) }}</span>
                        </li>
                        <div class="text-muted lh-1-8">
                            <p>{{ $cancelled_project->excerpt }}</p>
                        </div>
                    </ul>
                    <!-- <span>Design for my ecommerce banner and Branding. Design for my ecommerce banner and Branding
                        Design for my ecommerce banner and Branding . Design for my ecommerce banner and Branding.
                        Design for my ecommerce banner and Branding
                    </span> -->
                    @foreach (json_decode($cancelled_project->skills) as $key => $skill_id)
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
                        <a href="{{ route('client.details', $cancelled_project->client->user_name)}}" class="d-flex mr-3 align-items-center text-reset">
                            <div class="avatar--group">
                                <div class="avatar avatar-sm avatar-indicators avatar-online">
                                    <img alt="avatar" src="{{ asset($cancelled_project->client->photo) }}" />
                                </div>
                                <div class="container">
                                    <div class="media-body">
                                        <h5 class="media-heading mb-1">{{ $cancelled_project->client->name }}</h5>
                                        <span>
                                            <p class="badge badge-warning ">{{ getAverageRating($cancelled_project->client->id) }}</p>
                                            ({{ getNumberOfReview($cancelled_project->client->id) }} {{ translate('Reviews') }})
                                        </span>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-sm-2">
                            <div class="totalbids">
                            <span class="badge badge-inline badge-soft-secondary">
                                        {{ translate('Cancelled By') }}
                                        @if ($cancelled_project != null && $cancelled_project->cancel_by_user != null)
                                            {{ $cancelled_project->cancel_by_user->name }}
                                        @endif
                                    </span>
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
            {{ $cancelled_projects->links() }}
        </div>
    </div>
</div>
@endsection