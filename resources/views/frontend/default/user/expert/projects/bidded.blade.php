@extends('layouts.app')

@section('content')
<div class="layout-px-spacing">
    <!-- Analytics -->
    <div class="layout-top-spacing ">
        <h5>{{ translate('Bidded Projects') }}</h5>
    </div>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
        <div class="card">
            @forelse ($bidded_projects as $key => $bidded_project)
            @if ($bidded_project->project != null)
            <div class="widget widget-five p-4">
                {{-- Bidded Projects --}}
                <div class="row">
                    <div class="col-sm-10">
                        <span class="btn btn-success p-1">{{ single_price($bidded_project->project->price) }}</span>
                    </div>
                    <div class="col-sm-2">
                        @if (\App\Models\ProjectUser::where('project_id', $bidded_project->project_id)->where('user_id', Auth::user()->id)->first() != null)
                            <span class="badge badge-success badge-inline badge-md">{{ translate('Hired You') }}</span>
                        @elseif(\App\Models\ProjectUser::where('project_id', $bidded_project->project_id)->first() != null)
                            <span class="badge badge-secondary badge-inline badge-md">{{ translate('Someone Else Hired') }}</span>
                        @else
                            <span class="badge badge-secondary badge-inline badge-md">{{ translate('Not Hired Yet') }}</span>
                        @endif
                    </div>
                </div>
                <div class="widget-content">
                    <h5>
                        <a href="{{ route('project.details', $bidded_project->project->slug) }}" class="text-inherit" target="_blank">{{ $bidded_project->project->name }}</a>
                    </h5>
                    <ul class="list-inline opacity-70 fs-12">
                        <li class="list-inline-item">
                            <i class="las la-clock opacity-40"></i>
                            <span>{{ Carbon\Carbon::parse($bidded_project->project->created_at)->diffForHumans() }}</span>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="text-inherit">
                                <i class="las la-stream opacity-40"></i>
                                <span>@if ($bidded_project->project->project_category != null) {{ $bidded_project->project->project_category->name }} @else {{ translate('Removed Category') }} @endif</span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <i class="las la-handshake"></i>
                            <span>{{ translate($bidded_project->project->type) }}</span>
                        </li>
                        <div class="text-muted lh-1-8">
                            <p>{{ $bidded_project->project->excerpt }}</p>
                        </div>
                    </ul>
                    <!-- <span>Design for my ecommerce banner and Branding. Design for my ecommerce banner and Branding
                        Design for my ecommerce banner and Branding . Design for my ecommerce banner and Branding.
                        Design for my ecommerce banner and Branding
                    </span> -->
                    @foreach (json_decode($bidded_project->project->skills) as $key => $skill_id)
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
                        <a href="{{ route('client.details', $bidded_project->project->client->user_name)}}" class="d-flex mr-3 align-items-center text-reset">
                            <div class="avatar--group">
                                <div class="avatar avatar-sm avatar-indicators avatar-online">
                                    <img alt="avatar" src="{{ asset($bidded_project->project->client->photo) }}" />
                                </div>
                                <div class="container">
                                    <div class="media-body">
                                        <h5 class="media-heading mb-1">{{ $bidded_project->project->client->name }}</h5>
                                        <span>
                                            <p class="badge badge-warning ">{{ getAverageRating($bidded_project->project->client->id) }}</p>
                                            ({{ getNumberOfReview($bidded_project->project->client->id) }} {{ translate('Reviews') }})
                                        </span>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-sm-2">
                            <div class="totalbids">
                                <span>{{ translate('Total bids') }}</span>
                                <strong class="border-right"> {{ $bidded_project->project->bids }} </strong>
                                <span> &nbsp {{ translate('My bid') }} </span>
                                <strong> {{ single_price($bidded_project->amount) }}</strong>
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
            {{ $bidded_projects->links() }}
        </div>
    </div>
</div>
@endsection