@extends(Auth::guest() ? 'layouts.appindex' : 'layouts.app')

@section('css')
    <style>
        .team-9 {
            padding: 20px;
            margin-bottom: 30px;
            border-radius: 5px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: transform 0.6s;
            transform-style: preserve-3d;
        }

        .team-9 .team-img {
            position: relative;
            font-size: 0;
            text-align: center;
            margin-bottom: 30px;
        }

        .team-9 .team-img img {
            width: 100%;
            height: auto;
            border-radius: 100%;
        }

        .team-9 .team-content {
            text-align: center;
        }

        .team-9 .team-content h2 {
            font-size: 25px;
            font-weight: 700;
            letter-spacing: 2px;
            margin-bottom: 5px;
        }

        .team-9 .team-content h3 {
            font-size: 16px;
            font-weight: 400;
            margin-bottom: 0;
        }
    </style>
@endsection

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing mb-5">
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <!-- BREADCRUMB -->
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item active" aria-current="page">Service</li>
                    </ol>
                </nav>
            </div>

            <!-- /BREADCRUMB -->
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="col-sm-12">
                        <div class="input-group">
                            <div class="card-body">
                                @if (isset($skills))
                                    @foreach ($skills as $key => $skill)
                                        @if ($key % 8 == 1)
                                            <a href="javascript:skill_click({{ "'" . $skill->name . "'" }});"
                                                id="{{ $skill->name }}"
                                                class="btn btn-outline-warning mb-1 py-0">{{ $skill->name }}</a>
                                        @elseif ($key % 8 == 2)
                                            <a href="javascript:skill_click({{ "'" . $skill->name . "'" }});"
                                                id="{{ $skill->name }}"
                                                class="btn btn-outline-primary mb-1 py-0">{{ $skill->name }}</a>
                                        @elseif ($key % 8 == 3)
                                            <a href="javascript:skill_click({{ "'" . $skill->name . "'" }});"
                                                id="{{ $skill->name }}"
                                                class="btn btn-outline-secondary mb-1 py-0">{{ $skill->name }}</a>
                                        @elseif ($key % 8 == 4)
                                            <a href="javascript:skill_click({{ "'" . $skill->name . "'" }});"
                                                id="{{ $skill->name }}"
                                                class="btn btn-outline-success mb-1 py-0">{{ $skill->name }}</a>
                                        @elseif ($key % 8 == 5)
                                            <a href="javascript:skill_click({{ "'" . $skill->name . "'" }});"
                                                id="{{ $skill->name }}"
                                                class="btn btn-outline-danger mb-1 py-0">{{ $skill->name }}</a>
                                        @elseif ($key % 8 == 6)
                                            <a href="javascript:skill_click({{ "'" . $skill->name . "'" }});"
                                                id="{{ $skill->name }}"
                                                class="btn btn-outline-info mb-1 py-0">{{ $skill->name }}</a>
                                        @elseif ($key % 8 == 7)
                                            <a href="javascript:skill_click({{ "'" . $skill->name . "'" }});"
                                                id="{{ $skill->name }}"
                                                class="btn btn-outline-info mb-1 py-0">{{ $skill->name }}</a>
                                        @elseif ($key % 8 == 8)
                                            <a href="javascript:skill_click({{ "'" . $skill->name . "'" }});"
                                                id="{{ $skill->name }}"
                                                class="btn btn-outline-dark mb-1 py-0">{{ $skill->name }}</a>
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>


                    <form action="#" method="GET" name="share_matter" id="share_matter">
                        <div class="row">

                            <input type="hidden" name="skill" id="skill" value="-1">
                            <input type="hidden" name="sub_category_id" value="-1">
                            <div class="col-sm-2 mb-2">
                                <div class="input-group mb-3">
                                    <select class="form-select aiz-selectpicker form-select-sm" name="service_or_provider">
                                        <option value="service">Services</option>
                                        <option value="service_provider">Service Provider</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-secondary p-1">Show</button>
                            </div>

                            <div class="col-sm-2 mb-2">
                                <div class="form-check form-switch form-check-inline">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="flexSwitchCheckChecked" data-switch="no">
                                    <label class="form-check-label"
                                        for="flexSwitchCheckChecked">{{ __('Internal') }}</label>
                                </div>
                            </div>

                            <div class="col-sm-2 mb-2">
                                <div class="form-check form-switch form-check-inline">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="flexSwitchCheckChecked" data-switch="no">
                                    <label class="form-check-label"
                                        for="flexSwitchCheckChecked">{{ __('External') }}</label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row">
                @if (isset($services))
                    @forelse ($services as $service)
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-3">
                            <div class="card">
                                <a class="card style-6" href="{{ route('service.show', $service->slug) }}">
                                    @if (!empty($service->image))
                                        <img src="{{ asset('storage/uploads/services/' . $service->image) }}"
                                            class="card-img-top ser-img" height="200" alt="{{ asset($service->slug) }}">
                                    @else
                                        <img src="{{ asset('templete') }}/src/assets/img/dummy-post-horisontal.jpg"
                                            alt="Team Image" style="height: 200px;">
                                    @endif
                                </a>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-12 mb-4">
                                            <a href="{{ route('expert.details', $service->user->user_name) }}">
                                                <div class="media">
                                                    @if (!empty($service->user->photo))
                                                        <img src="{{ asset('profile/photos/' . $service->user->photo) }}"
                                                            class="card-media-image me-3"
                                                            alt="{{ $service->user->photo }}"
                                                            style="height: 45px; width: 45px">
                                                    @else
                                                        <img src="{{ asset('assets/frontend/default/img/avatar-place.png') }}"
                                                            class="card-media-image me-3" alt="">
                                                    @endif
                                                    <div class="media-body">
                                                        <p class="media-heading mt-3">
                                                            {{ $service->user->name }}</p>
                                                    </div>
                                                </div>

                                            </a>
                                        </div>
                                        <div class="col-12 text-center">
                                            <div class="pricing d-flex">
                                                <a href="{{ route('service.show', $service->slug) }}" class="text-dark">
                                                    <p class="card-title" style="text-align: justify">
                                                        {{ \Illuminate\Support\Str::limit($service->title, 50, $end = '...') }}
                                                    </p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h4>No Service found or select from "I Need"</h4>
                    @endforelse

                    {{ $services->links('pagination::bootstrap-5') }}
                @endif

                @if (isset($user_profile))
                    @forelse ($user_profile as $profile)
                        <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
                            <div class="team-9 card">
                                <div class="team-img">
                                    <a href="{{ route('expert.details', $profile->user->user_name) }}">
                                        @if (!empty($profile->user->photo))
                                            <img src="{{ asset('profile/photos/' . $profile->user->photo) }}"
                                                class="card-img-top" alt="{{ asset($profile->user->photo) }}"
                                                style="height: 150px; width:150px">
                                        @else
                                            <img src="{{ asset('templete') }}/src/assets/img/dummy-post-horisontal.jpg"
                                                alt="Team Image" style="height: 150px; width:150px">
                                        @endif
                                    </a>
                                </div>
                                <div class="team-content">
                                    <h5 style="font-weight: bold">{{ $profile->user->name }}</h5>
                                    <h6 class="text-success">{{ $profile->ProfessionalType->name }}</h6>
                                    <p>Hourly Rate: &#2547 {{ $profile->hourly_rate }}</p>
                                    <a href="{{ route('expert.details', $profile->user->user_name) }}">
                                        <button class="text-center btn btn-info btn sm">Get More</button>
                                    </a>
                                </div>
                            </div>

                        </div>

                    @empty
                        <h4>No Service found or select from "I Need"</h4>
                    @endforelse
                    {{ $user_profile->links('pagination::bootstrap-5') }}
                @endif
            </div>
        </div>
    </div>
@endsection

@section('script')
    <!--  END CONTENT AREA  -->

    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script type="text/javascript">
        function get_category_by_subcategory() {
            var category_id = $('#category_id').val();
            console.log(category_id);
            $.post('{{ route('get_category.subcategory') }}', {
                _token: '{{ csrf_token() }}',
                category_id: category_id
            }, function(data) {
                $('#sub_category_id option').remove();

                $('#sub_category_id').append($('<option>', {
                    value: -1,
                    text: 'Select'
                }));

                $('#sub_category_id').append($('<option>', {
                    value: -2,
                    text: 'All'
                }));
                for (var i = 0; i < data.length; i++) {
                    $('#sub_category_id').append($('<option>', {
                        value: data[i].id,
                        text: data[i].title
                    }));
                }
                $("#sub_category_id > option").each(function() {
                    if (this.value == '') {
                        $("#sub_category_id").val(this.value).change();
                    }
                });

            });
        }

        $(document).ready(function() {
            get_category_by_subcategory();

        });

        $('#category_id').on('change', function() {
            get_category_by_subcategory();
        });

        function skill_click(id) {

            $('#skill').val(id);
            console.log(id, $('#skill').val());
            $('#share_matter').submit();

        }
    </script>
@endsection
