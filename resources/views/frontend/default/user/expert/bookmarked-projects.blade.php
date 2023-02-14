@extends('layouts.app')

@section('css')
    <link href="{{ asset('templete') }}/src/assets/css/light/components/list-group.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('templete') }}/src/assets/css/light/widgets/modules-widgets.css">

    <link href="{{ asset('templete') }}/src/assets/css/dark/components/list-group.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('templete') }}/src/assets/css/dark/widgets/modules-widgets.css">
@endsection

@section('content')
    <div class="layout-px-spacing">
            <div class="row layout-top-spacing">
            <h5 class="mb-4 fs-16 fw-700">{{ translate('Bookmarked Projects') }}</h5>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-card-one">
                    @forelse ($bookmarked_projects as $key => $bookmarked_project)
                        @if (($project = $bookmarked_project->project) != null)
                        <div class="widget-content">
                            <div class="media">
                                <div class="w-img">
                                    <img src="{{ asset('/profile/photos/3.webp') }}" alt="avatar">
                                </div>
                                <div class="media-body">
                                    <h6>{{ $project->client->user_name }}</h6>
                                    <p class="meta-date-time">Monday</p>
                                </div>
                                <div>
                                {{ translate('Budget') }} <br>
                                    <h4>{{ single_price($project->price) }}</h4>
                                </div>
                            </div>

                            <div class="p-3">
                            <h4><a href="{{ route('project.details', $project->slug) }}" class="text-inherit" target="_blank" tabindex="0">{{ $project->name }}</a></h4>
                            <ul class="list-inline opacity-70 fs-12">
                                            <li class="list-inline-item">
                                                <i class="las la-clock opacity-40"></i>
                                                <span>{{ Carbon::parse($project->created_at)->diffForHumans() }}</span>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="" target="_blank" class="text-inherit" tabindex="0">
                                                    <i class="las la-stream opacity-40"></i>
                                                    <span>{{ $project->project_category->name }} </span>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="las la-handshake"></i>
                                                <span>{{ translate($project->type) }}</span>
                                            </li>
                                        </ul>
                            "Duis aute irure dolor" in reprehenderit in voluptate velit esse cillum "dolore eu fugiat"
                                nulla pariatur. Excepteur sint occaecat cupidatat non proident.
                            </div>
                            
                            <div class="w-action">                            
                                <div class="card-like">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-up">
                                        <path
                                            d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                        </path>
                                    </svg>
                                    <span>551 Likes</span>
                                </div>
                                <div class="read-more">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                    width="32" height="32"
                                    viewBox="0 0 32 32">
                                    <path d="M 7 5 L 7 28 L 8.59375 26.8125 L 16 21.25 L 23.40625 26.8125 L 25 28 L 25 5 Z M 9 7 L 23 7 L 23 24 L 16.59375 19.1875 L 16 18.75 L 15.40625 19.1875 L 9 24 Z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        @endif
                        @empty
                        <div class="card flex-grow-1 rounded-2 border-gray-light">
                            <div class="card-body text-center">
                                <i class="las la-frown la-4x mb-4 opacity-40"></i>
                                <h4>{{ translate('Nothing Found') }}</h4>
                            </div>
                        </div>
                    @endforelse
                    </div>
                    <div class="aiz-pagination mt-4">
                    {{ $bookmarked_projects->links() }}
                </div>
                </div>
            </div>
        </div>
@endsection
@section('modal')
    @include('frontend.default.partials.bookmark_remove_modal')
@endsection
