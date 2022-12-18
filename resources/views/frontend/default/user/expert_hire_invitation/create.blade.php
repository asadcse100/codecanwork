@extends('layouts.app')

@section('content')
    {{-- <div class="h-250px">
    @if ($expert->cover_photo != null)
        <img src="{{ custom_asset($expert->cover_photo) }}" alt="{{ $expert->name }}"class="img-fit h-250px">
    @else
        <img src="{{ asset('assets/frontend/default/img/cover-place.jpg') }}" alt="{{ $expert->name }}"class="img-fit h-250px">
    @endif
</div> --}}
    <div class="mt-4">
        <div class="container">

            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center d-block d-md-flex">
                        <div class="mr-5 text-center text-md-left mb-4 mb-md-0">
                            <span class="avatar avatar-xxl">
                                @if ($expert->photo != null)
                                    <img src=" {{ asset('profile/photos/' . $expert->photo) }}">
                                @else
                                    <img src="{{ asset('assets/frontend/default/img/avatar-place.png') }}"
                                        class="rounded-circle">
                                @endif
                                @if (Cache::has('user-is-online-' . $expert->id))
                                    <span class="badge badge-dot badge-circle badge-success badge-status badge-md"></span>
                                @else
                                    <span class="badge badge-dot badge-circle badge-secondary badge-status badge-md"></span>
                                @endif
                            </span>
                        </div>
                        <div class="media-body d-lg-flex justify-content-between align-items-center">
                            <div class="mr-3 mb-4 mb-lg-0 text-center text-md-left">
                                <h1 class="h5 mb-1 fw-700">{{ $expert->name }}</h1>
                                <p class="opacity-60">{{ $expert->profile->specialist }}</p>

                                <div
                                    class="d-flex justify-content-center justify-content-md-between text-secondary fs-12 mb-3">
                                    <div class="mr-2">
                                        <span class="bg-rating rounded text-white px-1 mr-1 fs-10">
                                            {{ formatRating(getAverageRating($expert->id)) }}
                                        </span>
                                        <span class="rating rating-sm">
                                            {{ renderStarRating(getAverageRating($expert->id)) }}
                                        </span>
                                        <span>
                                            ({{ getNumberOfReview($expert->id) }} Reviews)
                                        </span>
                                    </div>
                                    <div>
                                        <i class="las la-map-marker opacity-50"></i>
                                        @if ($expert->address != null && $expert->address->city != null && $expert->address->country != null)
                                            <span>{{ $expert->address->city->name }},
                                                {{ $expert->address->country->name }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="text-lg-right d-flex justify-content-between align-items-end d-lg-block">
                                <div class="mb-lg-4">
                                    <h4 class="mb-0">{{ single_price($expert->profile->hourly_rate) }}</h4>
                                    <div class="small text-secondary">
                                        <span>per Hour</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="card mt-4">
                <div class="container">


                    <div class="card-body">
                        <h2 class="h5 mb-0">{{ translate('Send invitation for a private project') }}</h2>
                        <hr>

                        <form class="form-horizontal" action="{{ route('invition_for_hire_expert_sent') }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="expert_id" value="{{ $expert->id }}">
                            <div class="row">
                                <div class="col-sm-6 mt-3">
                                    <div class="form-group">
                                        <label class="form-label">
                                            Project title
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="form-group">
                                            <input type="text" class="form-control " name="name"
                                                placeholder="Enter project title" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-3">
                                    <div class="form-group">
                                        <div class="form-label mb-2">
                                            Project type
                                            <span class="text-danger">*</span>
                                        </div>
                                        @if ($client_package->fixed_limit > 0)
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="projectTypeFixed" name="projectType"
                                                    class="custom-control-input" value="Fixed" checked>
                                                <label class="custom-control-label" for="projectTypeFixed">Fixed</label>
                                            </div>
                                        @else
                                            <div class="alert alert-info custom-control-inline mb-1" role="alert">
                                                {{ translate('Your fixed type project post limit is over.') }}
                                            </div>
                                        @endif
                                        @if ($client_package->long_term_limit > 0)
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="projectTypeLong" name="projectType"
                                                    class="custom-control-input" value="Long Term">
                                                <label class="custom-control-label" for="projectTypeLong">Long term</label>
                                            </div>
                                        @else
                                            <div class="alert alert-info custom-control-inline mb-1" role="alert">
                                                {{ translate('Your long term project post limit is over.') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-sm-6 mt-3">
                                    <div class="form-group">
                                        <label class="form-label">
                                            Project budget offer
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="form-group">
                                            <input type="number" min="0" step="0.01" class="form-control "
                                                name="price" placeholder="Enter project budget" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-3">
                                    <div class="form-group">
                                        <label>
                                            Project category
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-control aiz-selectpicker" data-live-search="true"
                                            id="category_id" name="category_id" required>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-8 mt-3">
                                    <div class="form-group">
                                        <label>
                                            Project summary
                                            <span class="text-danger">*</span>
                                        </label>
                                        <textarea class="form-control" rows="3" name="excerpt" required></textarea>
                                    </div>
                                </div>

                                <div class="form-group u-summernote-editor mt-3">
                                    <label>
                                        Project Details
                                        <span class="text-danger">*</span>
                                    </label>
                                    <textarea class="form-control aiz-text-editor" data-height="300" rows="3" name="description" required
                                        data-toolbar='[
                                    ["style", ["style"]],
                                    ["font", ["bold", "underline", "clear"]],
                                    ["fontsize", ["fontsize"]],
                                    ["para", ["ul", "ol", "paragraph"]]
                                ]'>
                                </textarea>
                                </div>
                                <div class="col-sm-6 mt-3">

                                    <div class="form-group multiple-file-upload">
                                        <label class="form-label" for="signinSrEmail">File attachment</label>
                                        <input type="file" class="filepond file-upload-multiple" name="attachment"
                                            multiple data-allow-reorder="true" data-max-file-size="3MB"
                                            data-max-files="50">
                                    </div>

                                </div>

                                <div class="col-sm-8 mt-3">
                                    @if ($client_package->long_term_limit > 0 || $client_package->fixed_limit > 0)
                                        <button type="submit" class="btn btn-primary transition-3d-hover mr-1">Send
                                            Invitation</button>
                                    @else
                                        <div class="alert alert-info custom-control-inline mb-0" role="alert">
                                            {{ translate('Upgrade your Package.') }} <a
                                                href="{{ Route('select_package') }}"
                                                class="btn btn-success btn-sm p-2">Upgrade</a>
                                        </div>
                                    @endif
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- End Content Section -->
@endsection
