@extends(Auth::guest() ? 'layouts.appindex' : 'layouts.app')

@section('content')
    <section class="py-4 py-lg-5">
        <div class="container">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                @if ($keyword != null)
                    <div class="row">
                        <div class="col-xl-8 offset-xl-2 text-center">
                            <h1 class="h5 mt-3 mt-lg-0 mb-5 fw-400">{{ translate('Total') }} <span
                                    class="fw-600">{{ $total }}</span>
                                {{ translate('experts found for') }}
                                <span class="fw-600">{{ $keyword }}</span>
                            </h1>
                        </div>
                    </div>
                @endif
                <form id="expert-filter-form" action="" method="GET">
                    <div class="row gutters-10">
                        <div class="col-xl-3 col-lg-4">
                            <div class="aiz-filter-sidebar collapse-sidebar-wrap sidebar-lg z-1035">
                                <div class="card rounded-0 rounded-lg collapse-sidebar c-scrollbar-light">
                                    <div class="card-header">
                                        <h5 class="mb-0 h6">{{ translate('Filter By') }}</h5>
                                        <button class="btn btn-sm p-2 d-lg-none filter-sidebar-thumb"
                                            data-toggle="class-toggle" data-target=".aiz-filter-sidebar" type="button">
                                            <i class="las la-times la-2x"></i>
                                        </button>
                                    </div>
                                    <div class="card-body">
                                        {{-- <div class="mb-5">
                                    <h6 class="separator text-left mb-3 fs-12 text-uppercase text-secondary">
                                        <span class="bg-white pr-3">{{ translate('Online Status') }}</span>
                                    </h6>
                                    <div class="aiz-radio-list">
                                        <label class="aiz-radio">
                                            <input type="radio" name="status" onchange="applyFilter()" @if ($status == 'on')
                                                checked
                                            @endif> {{ translate('Any status') }}
                                            <span class="aiz-square-check"></span>
                                            <span class="float-right text-secondary fs-12"></span>
                                        </label>
                                        <label class="aiz-radio">
                                            <input type="radio" checked="checked" name="status" onchange="applyFilter()" @if ($status == 'any')
                                                checked
                                            @endif> {{ translate('Online Only') }}
                                            <span class="aiz-square-check"></span>
                                            <span class="float-right text-secondary fs-12"></span>
                                        </label>
                                    </div>
                                </div> --}}
                                <!-- Categories -->
                                    <h6 class="text-left mb-3 fs-14 fw-700">
                                        <span class="bg-white pr-3">{{ translate('Categories') }}</span>
                                    </h6> 
                                    <div class="mb-5">
                                        <select class="select2 form-control aiz-selectpicker rounded-1" name="category_id" onchange="applyFilter()" data-toggle="select2" data-live-search="true">  
                                            <option value="">{{ translate('All Categories') }}</option> 
                                            @foreach(\App\Models\ProjectCategory::all() as $category)
                                                <option value="{{ $category->slug }}" @if (isset($_GET['category_id']) && $_GET['category_id'] == $category->slug ) selected @endif>
                                                {{$category->name}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!-- Countries -->
                                    <h6 class="text-left mb-3 fs-14 fw-700">
                                        <span class="bg-white pr-3">{{ translate('Countries') }}</span>
                                    </h6> 
                                    <div class="mb-5">
                                        <select class="select2 form-control aiz-selectpicker rounded-1" name="country_id" onchange="applyFilter()" data-toggle="select2" data-live-search="true">  
                                            <option value="">{{ translate('All Countries') }}</option> 
                                            @foreach (\App\Models\Country::all() as $key => $country)
                                                <option value="{{ $country->id }}"  @if (isset($country_id) && $country_id == $country->id ) selected @endif>{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!-- Hourly Rate -->
                                    <input type="hidden" name="min_price" value="">
                                    <input type="hidden" name="max_price" value="">
                                    <h6 class="text-left mb-3 fs-14 fw-700">
                                        <span class="bg-white pr-3">{{ translate('Hourly Rate') }}</span>
                                    </h6>
                                    <div class="aiz-range-slider mb-5 px-3" >
                                        <div id="input-slider-range"
                                            data-range-value-min="@if(\App\Models\UserProfile::count() < 1) 0 @else {{ \App\Models\UserProfile::min('hourly_rate') }} @endif"
                                            data-range-value-max="@if(\App\Models\UserProfile::count() < 1) 0 @else {{ \App\Models\UserProfile::max('hourly_rate') }} @endif"
                                        ></div>

                                        <div class="row mt-2">
                                            <div class="col-6">
                                                <span class="range-slider-value value-low fs-14 fw-600 opacity-70"
                                                    @if (isset($min_price))
                                                        data-range-value-low="{{ $min_price }}"
                                                    @elseif(count($experts) > 1 && $experts->min('hourly_rate') > 0)
                                                        data-range-value-low="{{ $experts->min('hourly_rate') }}"
                                                    @else
                                                        data-range-value-low="0"
                                                    @endif
                                                    id="input-slider-range-value-low"
                                                ></span>
                                            </div>
                                            <div class="col-6 text-right">
                                                <span class="range-slider-value value-high fs-14 fw-600 opacity-70"
                                                    @if (isset($max_price))
                                                        data-range-value-high="{{ $max_price }}"
                                                    @elseif(count($experts) > 1 && $experts->max('hourly_rate') > 0)
                                                        data-range-value-high="{{ $experts->max('hourly_rate') }}"
                                                    @else
                                                        data-range-value-high="0"
                                                    @endif
                                                    id="input-slider-range-value-high"
                                                ></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Rating -->
                                        <h6 class="separator text-left mb-3 fs-12 text-uppercase text-secondary">
                                            <span class="pr-3">{{ translate('Rating') }}</span>
                                        </h6>
                                        <div class="aiz-radio-list">
                                            <label class="aiz-radio">
                                                <input type="radio" name="rating" value="" onchange="applyFilter()"
                                                    @if ($rating == '') checked @endif>
                                                {{ translate('Any rating') }}
                                                <span class="aiz-rounded-check"></span>
                                                <span class="float-right text-secondary fs-12"></span>
                                            </label>
                                            <br>
                                            <label class="aiz-radio">
                                                <input type="radio" name="rating" value="4+" onchange="applyFilter()"
                                                    @if ($rating == '4+') checked @endif>
                                                {{ translate('4 star +') }}
                                                <span class="aiz-rounded-check"></span>
                                                <span class="float-right text-secondary fs-12"></span>
                                            </label>
                                            <br>
                                            <label class="aiz-radio">
                                                <input type="radio" name="rating" value="3-4" onchange="applyFilter()"
                                                    @if ($rating == '3-4') checked @endif>
                                                {{ translate('3 to 4 star') }}
                                                <span class="aiz-rounded-check"></span>
                                                <span class="float-right text-secondary fs-12"></span>
                                            </label>
                                            <br>
                                            <label class="aiz-radio">
                                                <input type="radio" name="rating" value="2-3" onchange="applyFilter()"
                                                    @if ($rating == '2-3') checked @endif>
                                                {{ translate('2 to 3 star') }}
                                                <span class="aiz-rounded-check"></span>
                                                <span class="float-right text-secondary fs-12"></span>
                                            </label>
                                            <br>
                                            <label class="aiz-radio">
                                                <input type="radio" name="rating" value="1-2" onchange="applyFilter()"
                                                    @if ($rating == '1-2') checked @endif>
                                                {{ translate('1 to 2 star') }}
                                                <span class="aiz-rounded-check"></span>
                                                <span class="float-right text-secondary fs-12"></span>
                                            </label>
                                            <br>
                                            <label class="aiz-radio">
                                                <input type="radio" name="rating" value="0-1" onchange="applyFilter()"
                                                    @if ($rating == '0-1') checked @endif>
                                                {{ translate('0 to 1 star') }}
                                                <span class="aiz-rounded-check"></span>
                                                <span class="float-right text-secondary fs-12"></span>
                                            </label>
                                        </div>
                                        <!-- Skills -->
                                        <div class="pt-3 d-none">
                                            <h6 class="text-left mb-3 fs-14 fw-700">
                                                <span class="bg-white pr-3">{{ translate('Skills') }}</span>
                                            </h6>
                                            <div class="">
                                                <select class="select2 form-control aiz-selectpicker" multiple="multiple" name="skill_ids[]"  onchange="applyFilter()"  data-toggle="select2" data-placeholder="Choose ..." data-live-search="true"> 
                                                    @foreach(\App\Models\Skill::all() as $skill)
                                                        <option value="{{$skill->id}}" @if (in_array($skill->id, $skill_ids)) selected @endif>
                                                        {{$skill->name}}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay overlay-fixed dark c-pointer" data-toggle="class-toggle"
                                    data-target=".aiz-filter-sidebar" data-same=".filter-sidebar-thumb"></div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-8">
                            <div class=" mb-lg-0">
                                <input type="hidden" name="type" value="expert">
                                <div class="card-header">
                                    <div class="d-flex align-items-center w-100">
                                        <button class="btn btn-sm btn-icon btn-soft-secondary d-lg-none flex-shrink-0 mr-2" data-toggle="class-toggle" data-target=".aiz-filter-sidebar" type="button">
                                            <i class="las la-filter"></i>
                                        </button>
                                        <div class="input-group rounded-2">
                                            <input type="text" class="form-control rounded-2 rounded-right-0 border-right-0" placeholder="{{ translate('Search Keyword') }}" name="keyword" value="{{ $keyword }}">
                                            <div class="input-group-prepend rounded-2">
                                                <span class="input-group-text bg-transparent border-left-0 rounded-right" style="border-bottom-right-radius: 1rem !important; border-top-right-radius: 1rem !important;">
                                                    <i class="las la-search"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    @foreach ($experts as $key => $expert)
                                        <div class="card">
                                            @if ($expert->user != null)
                                                <a href="{{ route('expert.details', $expert->user->user_name) }}"
                                                    class="d-block d-xl-flex card-project text-inherit px-3 py-4">
                                                    <span class="avatar flex-shrink-0 mr-4">
                                                        @if ($expert->user->photo != null)
                                                            {{-- <img src="{{ asset('profile/photos/' . $expert->user->photo) }}"
                                                                            alt="{{ $expert->user->name }}"> --}}
                                                            @if (Cache::has('user-is-online-' . $expert->user->id))
                                                                <div
                                                                    class="avatar avatar-lg avatar-indicators avatar-online">
                                                                    <img src="{{ asset('profile/photos/' . $expert->user->photo) }}"
                                                                        alt="{{ $expert->user->name }}"
                                                                        class="rounded-circle">
                                                                </div>
                                                            @else
                                                                <div
                                                                    class="avatar avatar-lg avatar-indicators avatar-offline">
                                                                    <img src="{{ asset('profile/photos/' . $expert->user->photo) }}"
                                                                        alt="{{ $expert->user->name }}"
                                                                        class="rounded-circle">
                                                                </div>
                                                            @endif
                                                        @else
                                                            @if (Cache::has('user-is-online-' . $expert->user->id))
                                                                <div
                                                                    class="avatar avatar-lg avatar-indicators avatar-online">
                                                                    <img alt="avatar"
                                                                        src="{{ asset('assets/frontend/default/img/avatar-place.png') }}"
                                                                        alt="{{ $expert->user->name }}"
                                                                        class="rounded-circle" />
                                                                </div>
                                                            @else
                                                                <div
                                                                    class="avatar avatar-lg avatar-indicators avatar-offline">
                                                                    <img alt="avatar"
                                                                        src="{{ asset('assets/frontend/default/img/avatar-place.png') }}"
                                                                        alt="{{ $expert->user->name }}"
                                                                        class="rounded-circle" />
                                                                </div>
                                                            @endif
                                                        @endif
                                                    </span>
                                                    <div class="container flex-grow-1">
                                                        <h5 class="fw-600 mb-1">{{ $expert->user->name }}
                                                        </h5>
                                                        @if ($expert->specialistAt != null)
                                                            <p class="opacity-50">
                                                                {{ $expert->specialistAt->name }}
                                                            </p>
                                                        @endif
                                                        <div class="text-muted lh-1-8">
                                                            <p class="text-truncate-3">{{ $expert->bio }}
                                                            </p>
                                                        </div>
                                                        <div class="d-flex text-secondary fs-12 mb-3">
                                                            <div class="mr-2">
                                                                <span class="bg-rating rounded text-white px-1 mr-1 fs-10">
                                                                    {{ formatRating(getAverageRating($expert->user->id)) }}
                                                                </span>
                                                                <span class="rating rating-sm">
                                                                    {{ renderStarRating(getAverageRating($expert->user->id)) }}
                                                                </span>
                                                                <span>
                                                                    ({{ count($expert->user->reviews) }}
                                                                    {{ translate('Reviews') }})
                                                                </span>
                                                            </div>
                                                            @if ($expert->user->address->city_id != null && $expert->user->address->country_id != null)
                                                                <div>
                                                                    <i class="las la-map-marker opacity-50"></i>
                                                                    <span>{{ $expert->user->address->city->name }},
                                                                        {{ $expert->user->address->country->name }}</span>
                                                                </div>
                                                            @endif
                                                        </div>
                                                        @if ($expert->skills != null)
                                                            <div>
                                                                @foreach (json_decode($expert->skills) as $key => $skill_id)
                                                                    @php
                                                                        $skill = \App\Models\Skill::find($skill_id->value);
                                                                    @endphp
                                                                    @if ($skill != null)
                                                                        <span class="btn btn-light btn-xs mb-1">{{ $skill->name }}</span>
                                                                    @endif
                                                                @endforeach

                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="flex-shrink-0 pt-4 pt-xl-0 pl-xl-5 d-flex flex-row flex-xl-column justify-content-between align-items-center">
                                                        <div class="text-right">
                                                            <h4 class="mb-0">
                                                                {{ single_price($expert->hourly_rate) }}
                                                            </h4>
                                                            <div class="mt-xl-2 small text-secondary">
                                                                <span>{{ translate('per Hour') }}</span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <span
                                                                class="btn btn-primary btn-sm">{{ translate('Hire Me') }}</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            @endif
                                        </div>
                                        <br>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script type="text/javascript">
        function applyFilter() {
            $('#expert-filter-form').submit();
        }
    </script>
@endsection
