@extends('layouts.app')

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">
        <div class="">
            <!-- BREADCRUMB -->
            <div class="page-meta layout-top-spacing">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <div class="row">
                        <div class="col-md-10">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Expert</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Service</li>
                            </ol>
                        </div>
                        <div class="col-md-2">
                            <a href="{{ route('service.create') }}" class="btn btn-primary mb-2 me-4">Add
                                Service</a>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- /BREADCRUMB -->
            <div class="widget-content">
                <div class="row layout-spacing">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="row gutters-10">

                            <div class="row">
                                @foreach ($services as $service)
                                    <div class="col-sm-3 mb-4">
                                        <div class="card">
                                            <a href="{{ route('service.show', $service->slug) }}">
                                                @if (!empty($service->image))
                                                    <img src="{{ asset('storage/uploads/services/' . $service->image) }}"
                                                        class="card-img-top" height="200" alt="{{ $service->slug }}.">
                                                @else
                                                    <img src="{{ asset('assets/frontend/default/img/avatar-place.png') }}"
                                                        class="card-media-image me-3" alt="">
                                                @endif
                                            </a>
                                            <div class="media mt-4 mb-0 pt-1 container">
                                                @if (!empty(Auth::user()->photo))
                                                    <img src="{{ asset('profile/photos/' . Auth::user()->photo) }}"
                                                        class="card-media-image me-3" alt="{{ Auth::user()->photo }}">
                                                @else
                                                    <img src="{{ asset('assets/frontend/default/img/avatar-place.png') }}"
                                                        class="card-media-image me-3" alt="">
                                                @endif
                                                <a href="{{ route('expert.details', $service->user->user_name) }}">
                                                    <div class="media-body">
                                                        <h4 class="media-heading mt-3">
                                                            {{ Auth::user()->name }}
                                                        </h4>
                                                    </div>
                                                </a>
                                            </div>

                                            <a href="{{ route('service.show', $service->slug) }}">
                                                <div class="card-body px-0 pb-0 ">
                                                    <p class="card-title mb-3 container">
                                                        {{ \Illuminate\Support\Str::limit($service->title, 40, $end = '...') }}
                                                    </p>
                                                </div>
                                            </a>

                                            <div class="container text-center">
                                                <span type="button" data-bs-dismiss="modal"
                                                    class="badge outline-badge-primary mb-2 me-4"> <a
                                                        href="{{ route('service.edit', $service->slug) }}">Edit</a></span>

                                                <span type="button" data-bs-dismiss="modal"
                                                    class="badge outline-badge-danger mb-2 me-4"> <a
                                                        href="{{ route('service.destroy', $service->slug) }}">Delete</a></span>
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

    <!--  END CONTENT AREA  -->
@endsection

@section('modal')
    @include('admin.default.partials.delete_modal')
@endsection
