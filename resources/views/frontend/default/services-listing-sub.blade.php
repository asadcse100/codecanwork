@extends('layouts.app')

@section('content')
    <section class="py-5 py-lg-5">
        <div class="layout-px-spacing">
            <div class="">
                @if ($keyword != null)
                    <div class="row">
                        <div class="col-xl-8 offset-xl-2 text-center">
                            <h1 class="h5 mt-3 mt-lg-0 mb-5 fw-400">{{ translate('Total') }} <span
                                    class="fw-600">{{ $total }}</span> {{ translate('Expert found for') }} <span
                                    class="fw-600">{{ $keyword }}</span></h1>
                        </div>
                    </div>
                @endif
                <div class="row gutters-10 mt-1">
                    <div class="col-xl-3 col-lg-4">
                        <div class="aiz-filter-sidebar collapse-sidebar-wrap sidebar-lg">
                            <div class="card rounded-0 rounded-lg collapse-sidebar c-scrollbar-light">
                                <div class="card-header">
                                    <h5 class="mb-0 h6">{{ translate('Filter By') }}</h5>
                                </div>
                                <div class="card-body">
                                    <h6 class="separator text-left mb-4 fs-12 text-uppercase text-secondary">
                                        <span class="pr-3">{{ translate('Categories') }}</span>
                                    </h6>
                                    <div class="list-group">
                                        @if (!empty($product_categories))
                                            @foreach ($product_categories as $category)
                                                <a href="{{ Route('filter_category', $category->id) }}"
                                                    class="list-group-item list-group-item-action">{{ $category->name }}</a>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="overlay overlay-fixed dark c-pointer" data-toggle="class-toggle"
                                data-target=".aiz-filter-sidebar" data-same=".filter-sidebar-thumb"></div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8">
                        <div class="">
                            <input type="hidden" name="type" value="expert">
                            <div class="">
                                {{-- <div class="d-flex align-items-center">
                                    <button class="btn btn-sm btn-icon btn-soft-secondary d-lg-none flex-shrink-0 mr-2"
                                        data-toggle="class-toggle" data-target=".aiz-filter-sidebar" type="button">
                                        <i class="las la-filter"></i>
                                    </button>
                                    <input type="text" class="form-control form-control-sm" placeholder="Search Keyword"
                                        name="keyword" value="{{ $keyword }}">
                                </div> --}}
                            </div>
                            <div class="row gutters-10">
                                <div class="card-body p-0">
                                    <div class="faq container">
                                        <div class="row">
                                            @foreach ($services as $service)
                                                <div class="col-sm-3 mb-4">
                                                    <div class="card">
                                                        <a href="{{ route('service.show', $service->slug) }}">
                                                            @if (!empty($service->image))
                                                                <img src="{{ asset('storage/uploads/services/' . $service->image) }}"
                                                                    class="card-img-top"
                                                                    alt="{{ asset($service->slug) }}" style="height: 150px;">
                                                            @else
                                                                <img src="{{ asset('templete') }}/src/assets/img/dummy-post-horisontal.jpg"
                                                                    alt="Team Image" style="height: 150px;">
                                                            @endif
                                                        </a>
                                                        <div class="card-body">
                                                            <div class="media  mb-0 ">
                                                                @if (!empty(Auth::user()->photo))
                                                                    <img src="{{ asset('profile/photos/' . Auth::user()->photo) }}"
                                                                        class="card-media-image me-3"
                                                                        alt="{{ Auth::user()->photo }}">
                                                                @else
                                                                    <img src="{{ asset('assets/frontend/default/img/avatar-place.png') }}"
                                                                        class="card-media-image me-3" alt="">
                                                                @endif
                                                                <a
                                                                    href="{{ route('expert.details', $service->user->user_name) }}">
                                                                    <div class="media-body">
                                                                        <h5 class="media-heading mt-1">
                                                                            {{ $service->user->name }}</h5>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <p class="card-title"> <a
                                                                    href="{{ route('expert.details', $service->user->user_name) }}"
                                                                    class="text-dark"></a>
                                                            </p>
                                                          <hr>
                                                            <a href="{{ route('service.show', $service->slug) }}"
                                                                class="text-dark">
                                                                <p class="card-title">
                                                                    {{ \Illuminate\Support\Str::limit($service->title, 28, $end = '..') }}
                                                                </p>
                                                            </a>
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
        </div>
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
