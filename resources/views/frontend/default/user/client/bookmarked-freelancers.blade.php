@extends('layouts.app')

@section('content')
    <section class="py-4 py-lg-5">
        <div class="container">
            <div class="d-flex align-items-start">
                @include('frontend.default.user.client.inc.sidebar')
                <div class="aiz-user-panel">
                    <h6 class="mb-4">{{ translate('Bookmarked Experts') }}</h6>
                    <div class="row gutters-10">
                        @forelse ($bookmarked_experts as $key => $bookmarked_expert)
                            @if ($bookmarked_expert->expert != null)
                                <div class="col-lg-4 col-md-6">
                                    <div class="card">
                                        <div class="absolute-top-right p-2">
                                            <a class="d-inline-block confirm-alert" href="javascript:void(0)"
                                                data-href="{{ route('bookmarked-experts.destroy', $bookmarked_expert->id) }}"
                                                data-toggle="tooltip" title="{{ translate('Remove from bookmark') }}"
                                                data-target="#bookmark-remove-modal">
                                                <i class="las la-bookmark la-2x"></i>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <a href="{{ route('expert.details', $bookmarked_expert->expert->user_name) }}"
                                                class="text-inherit">
                                                <div class="px-4 text-center mb-3">
                                                    <span class="avatar avatar-md mb-3">
                                                        @if ($bookmarked_expert->expert->photo != null)
                                                            <img
                                                                src="{{ asset('profile/photos/' . $bookmarked_expert->expert->photo) }}">
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
                                                            {{ formatRating(getAverageRating($bookmarked_expert->expert->id)) }}
                                                        </span>
                                                        <span>
                                                            ({{ getNumberOfReview($bookmarked_expert->expert->id) }}
                                                            {{ translate('Reviews') }})
                                                        </span>
                                                    </div>
                                                    <h4 class="h5 mb-2 fw-600">
                                                        {{ $bookmarked_expert->expert->name }}</h4>
                                                    <div class="text-center">
                                                        @foreach ($bookmarked_expert->expert->badges as $key => $user_badge)
                                                            @if ($user_badge->badge != null)
                                                                <span class="avatar avatar-square avatar-xxs"
                                                                    title="{{ $user_badge->badge->name }}"><img
                                                                        src="{{ custom_asset($user_badge->badge->icon) }}"></span>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </a>

                                            <div class="mb-4">
                                                <div class="media mb-3">
                                                    <div class="text-center text-primary mt-1 mr-3">
                                                        <i class="las la-map-marked la-2x"></i>
                                                    </div>
                                                    <div class="media-body pt-2">
                                                        @if ($bookmarked_expert->expert != null &&
                                                            $bookmarked_expert->expert->address != null &&
                                                            $bookmarked_expert->expert->address->city != null &&
                                                            $bookmarked_expert->expert->address->country != null)
                                                            <span
                                                                class="d-block font-weight-medium">{{ $bookmarked_expert->expert->address->city->name }},
                                                                {{ $bookmarked_expert->expert->address->country->name }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="media mb-3">
                                                    <div class="text-center text-primary mt-1 mr-3">
                                                        <i class="las la-briefcase la-2x"></i>
                                                    </div>
                                                    <div class="media-body pt-2">
                                                        <span
                                                            class="d-block font-weight-medium">{{ count(getCompletedProjectsByExpert($bookmarked_expert->expert_user_id)->get()) }}
                                                            {{ translate('projects completed') }}</span>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="text-center text-primary mt-1 mr-3">
                                                        <i class="las la-money-check-alt la-2x"></i>
                                                    </div>
                                                    <div class="media-body pt-2">
                                                        <span
                                                            class="d-block font-weight-medium">{{ single_price(\App\Models\MilestonePayment::where('expert_user_id', $bookmarked_expert->expert_user_id)->where('paid_status', 1)->sum('expert_profit')) }}
                                                            total earnings</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0 d-flex justify-content-between align-items-center">
                                                <div class="text-right">
                                                    <h4 class="mb-0">
                                                        {{ single_price($bookmarked_expert->expert->profile->hourly_rate) }}
                                                    </h4>
                                                    <div class="small text-secondary">
                                                        <span>{{ translate('per Hour') }}</span>
                                                    </div>
                                                </div>
                                                <div>
                                                    <a href="{{ route('expert.details', $bookmarked_expert->expert->user_name) }}"
                                                        class="btn btn-primary btn-sm">{{ translate('Hire Me') }}</a>
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

                    <div class="aiz-pagination mt-4">
                        {{ $bookmarked_experts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('modal')
    @include('frontend.default.partials.bookmark_remove_modal')
@endsection
