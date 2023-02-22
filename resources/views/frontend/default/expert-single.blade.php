@extends(Auth::guest() ? 'layouts.appindex' : 'layouts.app')
@section('css')
    <style>
        div#social-links {
            margin: 0 auto;
            max-width: 500px;
        }

        div#social-links ul li {
            display: inline-block;
        }

        div#social-links ul li a {
            padding: 0px;
            margin: 1px;
            font-size: 40px;
            color: #0f6da3;
        }

        .upper img {
            width: 100%;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;

        }

        .user {
            position: relative;
        }

        .profile {
            position: absolute;
            top: -100px;
            height: 90px;
            width: 90px;
            border-radius: 100%;
            padding: 15px;
        }
        .avatar-xl {
            width: 6rem;
            height: 6rem;
        }
    </style>
@endsection
@section('content')

    <div class="layout-px-spacing layout-top-spacing">
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">

            <div class="row gutters-10">
                <div class="col-xxl-9 col-lg-8 order-1 order-lg-0">
                <div class="card">
                    <div class="upper">
                        <img src="{{ asset('assets/frontend/default/img/cover-place.jpg') }}" class="img-fluid" width="100%">
                    </div>

                    <div class="user">
                        <div class="profile">
                                @if (Cache::has('user-is-online-' . $expert->id))
                                    <div class="avatar avatar-xl avatar-indicators avatar-online">
                                        <img src="@if($expert->photo != null){{ asset('profile/photos/' . $expert->photo) }} @else {{ asset('assets/frontend/default/img/avatar-place.png') }} @endif" class="rounded-circle">
                                    </div>
                                @else
                                    <div class="avatar avatar-xl avatar-indicators avatar-offline">
                                        <img src="@if($expert->photo != null){{ asset('profile/photos/' . $expert->photo) }} @else {{ asset('assets/frontend/default/img/avatar-place.png') }} @endif" class="rounded-circle">
                                    </div>
                                @endif
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                {{-- {{ dd($expert->service_payments) }} --}}
                                <h4><b>{{ $expert->name }}</b></h4>
                                {{-- <span class="text-muted d-block mb-2">Los Angles</span> --}}
                                    @if ($expert->address != null && $expert->address->city != null && $expert->address->country != null)
                                        <span class="text-muted d-block mb-2">{{ $expert->address->city->name }},
                                            {{ $expert->address->country->name }}</span>
                                    @endif
                                @if (!empty(getAverageRating($expert->id)))
                                    <span class="bg-rating rounded text-white px-1 mr-1 fs-10">
                                        {{ formatRating(getAverageRating($expert->id)) }}
                                    </span>
                                @else
                                    <span class="bg-secondary rounded text-white px-1 mr-1 fs-10">
                                        {{ formatRating(getAverageRating($expert->id)) }}
                                    </span>
                                @endif
                                <span class="rating rating-sm">
                                    {{ renderStarRating(getAverageRating($expert->id)) }}
                                </span>
                                <span>
                                    ({{ getNumberOfReview($expert->id) }} {{ translate('Reviews') }})
                                </span><br>
                                {{ $expert->profile->headline }}
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex justify-content-between mt-4 px-4">
                                    <div class="stats">
                                        <h5><b>{{ $complete_work }}</b></h5>
                                        <span>Total Works</span>
                                    </div>
                                    <div class="stats">
                                        <h5><b>{{ single_price($expert->profile->hourly_rate) }}/<abbr style="text-decoration: none;" title="Hourly Rate or Consultant Fee">{{ translate('Hr or Cf') }}</abbr></b></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card my-2">
                    <div class="card-header">
                        <h4 class="h6 fw-600 mb-0">{{ $expert->name }}'s {{ translate('Bio') }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="opacity-70 lh-1-8 fs-15">{{ $expert->profile->bio }}</div>
                    </div>
                </div>

                    <div class="card my-2">
                        <div class="card-header">
                            <h4 class="h6 fw-600 mb-0">{{ $expert->name }}'s {{ translate('Services') }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @foreach ($expert->services as $service)
                                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-sm-6">
                                        <div class="card border-dark">
                                            <a href="{{ route('service.show', $service->slug) }}">
                                                @if (!empty($service->image))
                                                    <img src="{{ asset('storage/uploads/services/' . $service->image) }}"
                                                        class="card-img-top" alt="{{ $service->slug }}" height="160">
                                                @else
                                                    <img class="card-img-top"
                                                        src="{{ asset('assets/frontend/default/img/hotel/room/3.jpg') }}">
                                                @endif
                                            </a>
                                            <div class="card-body">

                                                <a href="{{ route('service.show', $service->slug) }}" class="text-dark">
                                                    <p class="card-title">
                                                        {{ \Illuminate\Support\Str::words($service->title, 7, $end = '...') }}
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="card-footer justify-content-between">
                                                <span>Starting at
                                                    @if (isset($service->service_packages))
                                                        {{ single_price($service->service_packages[0]->service_price) }}
                                                    @endif
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="card my-2">
                        <div class="card-header">
                            <h4 class="h6 fw-600 mb-0">{{ $expert->name }}'s {{ translate('Portfolio') }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="row gutters-10">
                                @foreach ($expert->userPortfolios as $key => $portfolio)
                                        <div class="col-xxl-3 col-xl-4 col-lg-4 col-sm-6">
                                        <a class="card border-dark mb-3 shadow-none hov-overlay overflow-hidden">
                                            @if (!empty($portfolio->photo))
                                                <img class="card-img-top"
                                                    src=" {{ asset('profile/portfolios/' . $portfolio->photo) }}"
                                                    alt="Image Description">
                                            @else
                                                <img src="{{ asset('assets/frontend/default/img/hotel/room/3.jpg') }}">
                                            @endif
                                            <div class="absolute-full overlay c-pointer" data-toggle="modal"
                                                data-target="#portfolio-modal-{{ $key }}">
                                                <span class="absolute-center">
                                                    <i class="las la-eye text-white la-2x"></i>
                                                </span>
                                            </div>
                                            <div class="card-body">
                                                <h2 class="h6 mb-0 text-truncate">{{ $portfolio->name }}</h2>
                                                <small class="text-secondary">{{ $portfolio->type }}</small>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="modal fade" id="portfolio-modal-{{ $key }}">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-zoom modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title h6">{{ $portfolio->name }}</h5>
                                                    <button type="button" class="close" data-dismiss="modal">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-7">
                                                            @if (!empty($portfolio->photo))
                                                                <img class="img-fluid mb-3"
                                                                    src="{{ asset('profile/portfolios/' . $portfolio->photo) }}"
                                                                    alt="{{ $portfolio->name }}">
                                                            @else
                                                                <img
                                                                    src="{{ asset('assets/frontend/default/img/hotel/room/3.jpg') }}">
                                                            @endif
                                                        </div>
                                                        <div class="col-md-5">
                                                            <h3 class="h5 mb-3">{{ translate('About the project') }}</h3>
                                                            <div class="text-muted">
                                                                {{ $portfolio->description }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="card my-2">
                        <div class="card-header">
                            <h4 class="h6 fw-600 mb-0">{{ $expert->name }}'s {{ translate('Reviews') }}</h4>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-4">{{ translate('Showing') }}
                                {{ getNumberOfReview($expert->id) }} {{ translate('reviews') }}</p>
                            <div class="mb-4">
                                <ul class="list-group list-group-flush">
                                    @foreach (\App\Models\Review::where('published', 1)->where('reviewed_user_id', $expert->id)->get() as $key => $review)
                                        <li>
                                            <div class="media">
                                                <div class="mr-3">
                                                    <span class="avatar avatar-md m-3">
                                                        <img src="{{ asset('profile/photos/' . \App\Models\User::find($review->reviewer_user_id)->photo) }}"
                                                            class="rounded-circle">
                                                    </span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                                        <div>
                                                            @if ($review->project)
                                                                <h4 class="fw-600 fs-14 mb-1 lh-1-6">
                                                                    {{ $review->project->name }}</h4>
                                                            @else
                                                                <h4 class="fw-600 fs-14 mb-1 lh-1-6">
                                                                    {{ translate('N/A') }}</h4>
                                                            @endif
                                                            <div class="">
                                                                <span class="bg-rating rounded text-white px-1 mr-1 fs-10">
                                                                    {{ $review->rating }}
                                                                </span>
                                                                <span class="rating rating-sm">
                                                                    {{ renderStarRating($review->rating) }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="flex-shrink-0 ml-4">
                                                            <span
                                                                class="text-muted ml-2">{{ Carbon\Carbon::parse($review->created_at)->toFormattedDateString() }}</span>
                                                        </div>
                                                    </div>
                                                    <p class="font-italic">
                                                        "{{ $review->review }}"
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card my-2">
                        <div class="card-header">
                            <h4 class="h6 fw-600 mb-0">{{ $expert->name }}'s {{ translate('Experiences') }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="row gutters-10">
                                @foreach ($expert->workExperiences as $key => $experience)
                                    <div class="col-lg-4">
                                        <div class="card border-dark">
                                            <div class="my-3 p-3">
                                                <h4 class="fw-600 fs-14 mb-1">{{ $experience->designation }}</h4>
                                                <div class="list-unstyled text-secondary mb-0">
                                                    <div>
                                                        <h6><a class="text-primary"
                                                                href="{{ $experience->company_website }}"
                                                                target="_blank">{{ $experience->company_name }}</a>
                                                        </h6>
                                                    </div>
                                                    @if ($experience->present == '1')
                                                        <div>
                                                            {{ Carbon\Carbon::parse($experience->start)->toFormattedDateString() }}
                                                            - {{ translate('Present') }}</div>
                                                    @else
                                                        <div>
                                                            {{ Carbon\Carbon::parse($experience->start)->toFormattedDateString() }}
                                                            -
                                                            {{ Carbon\Carbon::parse($experience->end)->toFormattedDateString() }}
                                                        </div>
                                                    @endif
                                                    <div class="small">{{ $experience->location }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="card my-2">
                        <div class="card-header">
                            <h4 class="h6 fw-600 mb-0">{{ $expert->name }}'s {{ translate('Education') }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="row gutters-10">
                                @foreach ($expert->education_details as $key => $education)
                                    <div class="col-lg-4">
                                        <div class="card border-dark">
                                            <div class="my-3 p-3">
                                                <h4 class="fw-600 mb-1 fs-15">{{ $education->degree }}</h4>
                                                <div class="list-unstyled text-secondary mb-0">
                                                    <div>
                                                        <h6 class="mb-0 text-muted">{{ $education->school_name }},
                                                            {{ $education->country->name }}</h6>
                                                    </div>
                                                    <div class="small">{{ $education->passing_year }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            @if ($expert->badges != null)
                                <div class="mb-5">
                                    <h6 class="separator text-left mb-4 fw-600"><span
                                            class="pr-3">{{ translate('Badges') }}</span></h6>
                                    <div class="">
                                        @foreach ($expert->badges as $key => $user_badge)
                                            @if ($user_badge->badge != null)
                                                <span class="avatar avatar-square avatar-xxs"
                                                    title="{{ $user_badge->badge->name }}"><img
                                                        src="{{ asset('profile/badge/' . $user_badge->badge->icon) }}"></span>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                            <div class="mb-5">
                                <h6 class="separator text-left mb-4 fw-600"><span
                                        class="pr-3">{{ translate('Skills') }}</span></h6>
                                <div>
                                    @if ($expert->profile->skills != null)
                                        @foreach (json_decode($expert->profile->skills, true) as $key => $skill_id)
                                            @php
                                                $skills = \App\Models\Skill::find($skill_id);
                                            @endphp
                                            @if ($skills)
                                                @foreach ($skills as $skill)
                                                    <div class="btn-group" role="group"
                                                        aria-label="Default button group">
                                                        <button type="button"
                                                            class="btn btn-outline-dark btn-sm p-1 m-1">{{ $skill->name }}</button>
                                                    </div>
                                                @endforeach
                                                {{-- <span class="btn btn-outline btn-xs mb-1">{{ $skill->name }}</span> --}}
                                            @endif
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                            <h6 class="separator text-left fw-600"><span
                                    class="pr-3">{{ translate('Verifications') }}</span></h6>
                            <div>
                                <ul class="list-unstyled">
                                    @php
                                        $verification = \App\Models\Verification::where('user_id', $expert->id)
                                            ->where('type', 'identity_verification')
                                            ->first();
                                    @endphp
                                    @if ($verification == null || !$verification->verified)
                                        <li class="d-flex align-items-center mb-3">
                                            <i class="las la-user text-secondary la-2x mr-2"></i>
                                            <span class="fs-13">{{ translate('Identity Verification') }}</span>
                                            <i class="las la-ellipsis-h text-secondary la-2x ml-auto"></i>
                                        </li>
                                    @else
                                        <li class="d-flex align-items-center mb-3">
                                            <i class="las la-user text-success la-2x mr-2"></i>
                                            <span class="fs-13">{{ translate('Identity Verified') }}</span>
                                            <i class="las la-check text-success la-2x ml-auto"></i>
                                        </li>
                                    @endif
                                    @if ($expert->email_verified_at == null)
                                        <li class="d-flex align-items-center mb-3">
                                            <i class="las la-envelope text-secondary la-2x mr-2"></i>
                                            <span class="fs-13">{{ translate('Email Verification') }}</span>
                                            <i class="las la-ellipsis-h text-secondary la-2x ml-auto"></i>
                                        </li>
                                    @else
                                        <li class="d-flex align-items-center mb-3">
                                            <i class="las la-envelope text-success la-2x mr-2"></i>
                                            <span class="fs-13">{{ translate('Email Verified') }}</span>
                                            <i class="las la-check text-success la-2x ml-auto"></i>
                                        </li>
                                    @endif
                                </ul>

                                <h6>{{ translate('Share Profile') }}</h6>
                                {!! $share !!}
                            </div>
                            <div class="my-2">
                                @if (Auth::check() &&
                                        ($bookmarked_expert = \App\Models\BookmarkedExpert::where('user_id', auth()->user()->id)->where('expert_user_id', $expert->id)->first()) != null)
                                    <a class="btn btn-block btn-primary confirm-alert" href="javascript:void(0)"
                                        data-href="{{ route('bookmarked-experts.destroy', $bookmarked_expert->id) }}"
                                        data-target="#bookmark-remove-modal">
                                        <i class="las la-bookmark"></i>
                                        <span>{{ translate('Remove Bookmark') }}</span>
                                    </a>
                                @else
                                    <a class="btn btn-block btn-outline-primary"
                                        href="{{ route('bookmarked-experts.store', encrypt($expert->id)) }}">
                                        <i class="las la-bookmark"></i>
                                        <span>{{ translate('Bookmark Expert') }}</span>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
@section('modal')
    @include('frontend.default.partials.bookmark_remove_modal')
@endsection
