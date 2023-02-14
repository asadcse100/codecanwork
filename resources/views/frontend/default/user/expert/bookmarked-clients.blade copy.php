@extends('layouts.app')

@section('css')
    <link href="{{ asset('templete') }}/src/assets/css/light/components/list-group.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('templete') }}/src/assets/css/light/widgets/modules-widgets.css">

    <link href="{{ asset('templete') }}/src/assets/css/dark/components/list-group.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('templete') }}/src/assets/css/dark/widgets/modules-widgets.css">
@endsection

@section('content')
    <div class="layout-px-spacing">
            <!-- BREADCRUMB -->
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <div class="row">
                        <div class="col-md-10">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">{{ translate('Following Clients') }}</li>
                            </ol>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- /BREADCRUMB -->
            <div class="widget-content">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-4 col-sm-6 mb-4">
                    <div class="row gutters-10">
                        <div class="row">
                            @forelse ($bookmarked_clients as $key => $bookmarked_client)
                                @if ($bookmarked_client->client != null)
                                    <div class="col-sm-3 mb-4">
                                        <div class="card">
                                            <div class="absolute-top-right p-2">
                                                <span class="btn btn-outline-warning btn-icon mb-2 me-4"
                                                    onclick="myFunction()">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-heart">
                                                        <path
                                                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="card-body">
                                                <a href="{{ route('client.details', $bookmarked_client->client->user_name) }}"
                                                    class="text-inherit">
                                                    <div class="px-4 text-center mb-3">
                                                        <span class="avatar avatar-xl mb-3">
                                                            @if ($bookmarked_client->client->photo != null)
                                                                <img
                                                                    src="{{ asset('profile/photos/' . $bookmarked_client->client->photo) }}">
                                                            @else
                                                                <img
                                                                    src="{{ asset('assets/frontend/default/img/avatar-place.png') }}">
                                                            @endif
                                                            <span
                                                                class="badge badge-dot badge-secondary badge-circle badge-status"></span>
                                                        </span>
                                                        <div class="text-secondary fs-10 mb-1">
                                                            <i class="las la-star text-rating"></i>
                                                            <span class="fw-600">
                                                                {{ formatRating(getAverageRating($bookmarked_client->client->id)) }}
                                                            </span>
                                                            <span>
                                                                ({{ getNumberOfReview($bookmarked_client->client->id) }}
                                                                {{ translate('Reviews') }})
                                                            </span>
                                                        </div>
                                                        <h4 class="h5 mb-2 fw-600">{{ $bookmarked_client->client->name }}
                                                        </h4>
                                                        <div class="text-center">
                                                            @foreach ($bookmarked_client->client->badges as $key => $user_badge)
                                                                @if ($user_badge->badge != null)
                                                                    <span class="avatar avatar-square avatar-xxs"
                                                                        title="{{ $user_badge->badge->name }}"><img
                                                                            src="{{ asset('profile/badge/' . $user_badge->badge->icon) }}"></span>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="">
                                                    <div class="media mb-3">
                                                        <div class="text-center text-primary mt-1 mr-3">
                                                            <i class="las la-map-marked la-2x"></i>
                                                        </div>
                                                        <div class="media-body pt-2">
                                                            @if ($bookmarked_client->client != null &&
                                                                $bookmarked_client->client->address != null &&
                                                                $bookmarked_client->client->address->city != null &&
                                                                $bookmarked_client->client->address->country != null)
                                                                <span
                                                                    class="d-block font-weight-medium">{{ $bookmarked_client->client->address->city->name }},
                                                                    {{ $bookmarked_client->client->address->country->name }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="media mb-3">
                                                        <div class="text-center text-primary mt-1 mr-3">
                                                            <i class="las la-briefcase la-2x"></i>
                                                        </div>
                                                        <div class="media-body pt-2">
                                                            <span
                                                                class="d-block font-weight-medium">{{ count($bookmarked_client->client->number_of_projects) }}
                                                                {{ translate('jobs posted') }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <div class="text-center text-primary mt-1 mr-3">
                                                            <i class="las la-money-check-alt la-2x"></i>
                                                        </div>
                                                        <div class="media-body pt-2">
                                                            <span
                                                                class="d-block font-weight-medium">{{ single_price(\App\Models\MilestonePayment::where('client_user_id', $bookmarked_client->client_user_id)->where('paid_status', 1)->sum('amount')) }}
                                                                {{ translate('total spent') }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @empty
                                <div class="card flex-grow-1">
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
            {{-- <div class="row layout-top-spacing">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-card-one">
                        <div class="widget-content">
                            <div class="media d-flex justify-content-center">
                                <div class="avatar avatar-xl">
                                    <img src="{{ asset('templete') }}/src/assets/img/team-1-2.jpg" alt="bookmsrked_client">
                                </div>
                                <div class="media-body">
                                    <h6>Jimmy Turner</h6>
                                    <p class="meta-date-time">Monday, May 18</p>
                                </div>
                                <button class="btn btn-outline-warning btn-icon mb-2 me-4" onclick="myFunction()">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                                        <path
                                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                            <p>"Duis aute irure dolor" in reprehenderit in voluptate velit esse cillum "dolore eu fugiat"
                            </p>
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
                                    <a href="javascript:void(0);">Read More <svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-chevrons-right">
                                            <polyline points="13 17 18 12 13 7"></polyline>
                                            <polyline points="6 17 11 12 6 7"></polyline>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
@endsection
<script>
    function myFunction() {
        confirm("Are you sure to unfollow?");
    }
</script>
@section('modal')
    @include('frontend.default.partials.unfollow_modal')
@endsection
