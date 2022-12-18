@extends('layouts.app')
@section('css')
    <link href="{{ asset('templete') }}/src/assets/css/dark/users/user-profile.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('templete') }}/src/assets/css/light/users/user-profile.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css" integrity="sha384-X8QTME3FCg1DLb58++lPvsjbQoCT9bp3MsUU3grbIny/3ZwUJkRNO8NPW6zqzuW9" crossorigin="anonymous">
    <style>
        .profilediv {
            margin: 50px 20px 30px 20px;
        }

        @media (max-width: 952px) {
            .profilediv {
                margin: 50px 20px 30px 20px;
            }
        }
    </style>
@endsection
@section('content')
    <div class="profilediv">
        <div class="layout-px-spacing">
            <div class="">
                <div class="row layout-spacing">
                    <!-- Content -->
                    <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 layout-top-spacing">
                        <div class="user-profile">
                            <div class="widget-content widget-content-area" style="padding:20px">
                                <div class="d-flex justify-content-between">
                                    <h3 class="">Profile</h3>
                                    <a href="{{ route('user.profile') }}" class="mt-2 edit-profile">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                                            <path d="M12 20h9"></path>
                                            <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                        </svg></a>
                                </div>
                                <div class="text-center user-info">
                                    <div class="avatar avatar-xl avatar-indicators avatar-online mb-0">

                                        @if (!empty(Auth::user()->photo))
                                            <img src="{{ asset('profile/photos/' . Auth::user()->photo) }}"
                                                class="rounded-circle">
                                        @else
                                            <img src="{{ asset('assets/frontend/default/img/avatar-place.png') }}"
                                                class="rounded-circle">
                                        @endif
                                    </div>
                                    {{--  <img
                                src="../src/assets/img/profile-3.jpeg"
                                alt="avatar"
                            /> --}}
                                    <p class="">
                                        @if (!empty(Auth::user()->name))
                                            {{ Auth::user()->name }}
                                        @endif
                                    </p>
                                </div>
                                <div class="user-info-list">
                                    <div class="">
                                        <ul class="contacts-block list-unstyled">
                                            <li class="contacts-block__item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-book me-3">
                                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                                <line x1="16" y1="2" x2="16" y2="6">
                                                </line>
                                                <line x1="8" y1="2" x2="8" y2="6">
                                                </line>
                                                <line x1="3" y1="10" x2="21" y2="10">
                                                </line>
                                            </svg>

                                                @if (isset($user_profile->skills) )

                                                    @foreach (json_decode($user_profile->skills, true) as $key => $skill_id)
                                                        {{--  @php
                                                            $skills = \App\Models\Skill::find($skill_id);
                                                        @endphp  --}}
                                                        {{--  @if ($skills)
                                                            @foreach ($skills as $skill)  --}}
                                                            {{--  {{ dd(json_decode($user_profile->skills, true),$skill_id,$skill_id['name'])}}  --}}
                                                                <div class="btn-group" role="group"
                                                                    aria-label="Default button group">
                                                                    <button type="button"
                                                                        class="btn btn-outline-dark btn-sm p-1">{{ $skill_id['name'] }}</button>
                                                                </div>
                                                                {{--  @endforeach  --}}
                                                            {{-- <span class="btn btn-outline btn-xs mb-1">{{ $skill->name }}</span> --}}
                                                        {{--  @endif--}}
                                                    @endforeach
                                                @endif

                                            </li>

    <li class="contacts-block__item">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
        class="feather feather-map-pin me-3">
        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
        <circle cx="12" cy="10" r="3"></circle>
    </svg>Bangladesh
    </li>
    <li class="contacts-block__item">
        <a href="mailto:example@mail.com"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="feather feather-mail me-3">
                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                </path>
                <polyline points="22,6 12,13 2,6"></polyline>
            </svg>
            @if (!empty(Auth::user()->email))
                {{ Auth::user()->email }}
            @endif
        </a>
    </li>
    <li class="contacts-block__item">
        <a href="tel:123-456-7890">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-phone me-3">
                <path
                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                </path>
            </svg>
            @if (!empty(Auth::user()->phone))
                {{ Auth::user()->phone }}
            @endif
        </a>

    </li>
    </ul>

    <ul class="list-inline mt-4">
        <li class="list-inline-item mb-0">
            <a class="btn btn-info btn-icon btn-rounded" href="javascript:void(0);">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-twitter">
                    <path
                        d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                    </path>
                </svg>
            </a>
        </li>
        <li class="list-inline-item mb-0">
            <a class="btn btn-danger btn-icon btn-rounded" href="javascript:void(0);">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-dribbble">
                    <circle cx="12" cy="12" r="10"></circle>
                    <path
                        d="M8.56 2.75c4.37 6.03 6.02 9.42 8.03 17.72m2.54-15.38c-3.72 4.35-8.94 5.66-16.88 5.85m19.5 1.9c-3.5-.93-6.63-.82-8.94 0-2.58.92-5.01 2.86-7.44 6.32">
                    </path>
                </svg>
            </a>
        </li>
        <li class="list-inline-item mb-0">
            <a class="btn btn-dark btn-icon btn-rounded" href="javascript:void(0);">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-github">
                    <path
                        d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22">
                    </path>
                </svg>
            </a>
        </li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>

    <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 layout-top-spacing">
        <div class="usr-tasks">
            <div class="widget-content widget-content-area" style="padding:20px">
                <h3 class="">Bio</h3>
                <div class="bio">
                    <p rows="10" name="bio">{{ $user_profile->bio }}</p>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="row layout-spacing">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 layout-top-spacing">
            <div class="summary layout-spacing">
                <div class="widget-content widget-content-area" style="padding:20px">
                    <h3 class="">Work Experience</h3>
                    <div class="order-summary">
                        <hr>
                        <div class="my-3">
                            <div class="row gutters-10">
                                @foreach ($user_profile->user->workExperiences as $key => $work_experience)
                                    <div class="col-md-4 p-2">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <h4 class="h6 mb-1">
                                                            {{ $work_experience->designation }}</h4>
                                                        <ul class="list-unstyled text-secondary mb-0">
                                                            <li class="text-primary">
                                                                {{ $work_experience->company_name }}
                                                            </li>
                                                            @if ($work_experience->present == '1')
                                                                <li>{{ Carbon\Carbon::parse($work_experience->start)->toFormattedDateString() }}
                                                                    - {{ translate('Present') }}</li>
                                                            @else
                                                                <li>{{ Carbon\Carbon::parse($work_experience->start)->toFormattedDateString() }}
                                                                    -
                                                                    {{ Carbon\Carbon::parse($work_experience->end)->toFormattedDateString() }}
                                                                </li>
                                                            @endif
                                                            <li>{{ $work_experience->location }}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 layout-top-spacing">
            <div class="pro-plan layout-spacing">
                <div class="widget">
                    <div class="widget-content widget-content-area" style="padding:20px">
                        <h3>Education</h3>
                    </div>
                    <div class="widget-content">
                        <hr>
                        <div class="my-3">
                            <div class="row gutters-10">
                                @foreach ($user_profile->user->education_details as $key => $education)
                                    <div class="col-md-4 p-2">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <h4 class="h6 mb-1">
                                                            {{ $education->degree }}</h4>
                                                        <ul class="list-unstyled text-secondary mb-0">
                                                            <li>{{ translate('School Name') }}:
                                                                {{ $education->school_name }}</li>
                                                            <li>{{ translate('Pasing Year') }}:
                                                                {{ $education->passing_year }}</li>
                                                            <li>{{ translate('Country') }}:
                                                                {{ $education->country->name }}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 layout-top-spacing">
            <div class="widget-content widget-content-area" style="padding:20px">
                <h3 class="">Portfolios</h3>
                <hr>
                <div class="my-3">
                    <div class="row gutters-10">
                        @foreach ($user_profile->user->userPortfolios as $key => $portfolio)
                            <div class="col-xxl-4 col-lg-4 col-sm-6 p-2">
                                <div class="widget-content widget-content-area br-8">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <img class="img-fit mw-100"
                                                    src="{{ asset('profile/portfolios/' . $portfolio->photo) }}"
                                                    height="240">
                                                <div class="card-body border-top p-3">
                                                    <h2 class="h6 text-truncate">
                                                        {{ $portfolio->name }}</h2>
                                                    <small class="d-block text-secondary">{{ $portfolio->type }}</small>
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
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection
