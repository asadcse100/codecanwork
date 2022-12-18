@extends('layouts.app')

@section('content')

    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">
        <div class="">
            <div class="layout-top-spacing">
            </div>
            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area">
                    <div class="layout-top-spacing ">
                        <h5 class="text-center">Completed Projects</h5>
                        <hr>
                    </div>

                    <div class="">
                        @forelse ($completed_projects as $key => $completed_project)
                            @php
                                $project = \App\Models\Project::find($completed_project->id);
                            @endphp
                            <div class="card project-card">
                                <div class="card-header border-bottom-0">
                                    <div>
                                        <span
                                            class="badge badge-primary badge-inline badge-md">{{ single_price($project->project_user->hired_at) }}</span>
                                    </div>
                                    <div>
                                        <span
                                            class="badge badge-success badge-inline badge-md">{{ translate('Completed') }}</span>
                                    </div>
                                </div>
                                <div class="card-body pt-1">
                                    <h5 class="h6 fw-600 lh-1-5">
                                        <a href="{{ route('project.details', $project->slug) }}" class="text-inherit"
                                            target="_blank">{{ $project->name }}</a>
                                    </h5>
                                    <ul class="list-inline opacity-70 fs-12">
                                        <li class="list-inline-item">
                                            <i class="las la-clock opacity-40"></i>
                                            <span>{{ Carbon\Carbon::parse($project->created_at)->diffForHumans() }}</span>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="" target="_blank" class="text-inherit">
                                                <i class="las la-stream opacity-40"></i>
                                                <span>
                                                    @if ($project->project_category != null)
                                                        {{ $project->project_category->name }}
                                                    @else
                                                        {{ translate('Removed Category') }}
                                                    @endif
                                                </span>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="las la-handshake"></i>
                                            <span>{{ $project->type }}</span>
                                        </li>
                                    </ul>
                                    <div class="text-muted lh-1-8">
                                        <p>{{ $project->excerpt }}</p>
                                    </div>
                                    <div>
                                        @foreach (json_decode($project->skills) as $key => $skill_id)
                                            @php
                                                $skill = \App\Models\Skill::find($skill_id);
                                            @endphp
                                            @if ($skill != null)
                                                <span class="btn btn-light btn-xs mb-1">{{ $skill->name }}</span>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex align-items-center">
                                        <a href="{{ route('client.details', $project->client->user_name) }}"
                                            class="d-flex mr-3 align-items-center text-reset">
                                            <span class="avatar avatar-xs overflow-hidden">
                                                <img class="img-fluid rounded-circle"
                                                    src="{{ asset('profile/photos/' . $project->client->photo) }}">

                                            </span>
                                            <div class="pl-2">
                                                <h4 class="fs-14 mb-1">{{ $project->client->name }}</h4>
                                                <div class="">
                                                    <span class="bg-rating rounded text-white px-1 mr-1 fs-10">
                                                        {{ getAverageRating($project->client->id) }}
                                                    </span>
                                                    <span class="opacity-50">
                                                        ({{ getNumberOfReview($project->client->id) }}
                                                        {{ translate('Reviews') }})
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    @if (\App\Models\Review::where('project_id', $project->id)->where('reviewer_user_id', Auth::user()->id)->first() == null)
                                        <button type="button" onclick="showRatingModal({{ $project->id }})"
                                            class="btn btn-secondary btn-sm fw-500">{{ translate('Rate This Client') }}</button>
                                    @else
                                        <span
                                            class="badge badge-inline badge-soft-secondary">{{ translate('You Already rated this client') }}</span>
                                    @endif
                                </div>
                            </div>
                        @empty
                            <div class="card">
                                <div class="card-body text-center">
                                    <i class="las la-frown la-4x mb-4 opacity-40"></i>
                                    <h4>{{ translate('Nothing Found') }}</h4>
                                </div>
                            </div>
                        @endforelse
                    </div>

                </div>
            </div>
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
