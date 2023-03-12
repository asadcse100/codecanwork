@extends('admin.default.layouts.app')

@section('content')
 
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>


<div class="layout-px-spacing">
    <div class="layout-top-spacing ">
        <div class="aiz-titlebar mt-2 mb-3">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="h3">{{ translate('Website Footer') }}</h1>
                </div>
            </div>
        </div>
        <div class="row gutters-10">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h6 class="mb-0">{{ translate('About Widget') }}</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('system_configuration.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-sm-12 mb-4">
                                <div class="input-group  mb-3 required">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Footer Logo</span>
                                    <input type="file" name="footer_logo" class="form-control file-upload-input" value="{{ App\Models\SystemConfiguration::where('type', 'footer_logo')->first()->value }}">
                                </div>
                            </div>
                            <div class="col-sm-12 mb-4">
                                <div class="input-group  mb-3 required">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">About
                                        description</span>
                                    <textarea class="aiz-text-editor form-control" name="about_description_footer" data-buttons='[["font", ["bold", "underline", "italic"]],["para", ["ul", "ol"]],["view", ["undo","redo"]]]' placeholder="Type.." data-min-height="150">@php
                                                echo App\Models\SystemConfiguration::where('type', 'about_description_footer')->first()->value;
@endphp</textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-outline-primary mb-2">{{ translate('Update') }}</button>
                        </form>
                    </div>
                </div>
                <div class="layout-top-spacing">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="mb-0">{{ translate('Link Widget One') }}</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('system_configuration.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="col-sm-12 mb-4">
                                    <div class="input-group  mb-3 required">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Title</span>
                                        <input type="text" class="form-control" placeholder="Widget title" name="widget_one" value="{{ App\Models\SystemConfiguration::where('type', 'widget_one')->first()->value }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>{{ translate('Links') }}</label>
                                    <div class="w3-links-target">
                                        <input type="hidden" name="types[]" value="widget_one_labels">
                                        <input type="hidden" name="types[]" value="widget_one_links">
                                        @if(App\Models\SystemConfiguration::where('type', 'widget_one_labels')->first()->value != null)
                                        @foreach(json_decode(App\Models\SystemConfiguration::where('type', 'widget_one_labels')->first()->value, true) as $key => $value)
                                        <div class="row gutters-5">
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Label" name="widget_one_labels[]" value="{{ $value }}">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="http://" name="widget_one_links[]" value="{{ json_decode(App\Models\SystemConfiguration::where('type', 'widget_one_links')->first()->value, true)[$key] }}">
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-soft-danger" data-toggle="remove-parent" data-parent=".row">
                                                    <i class="las la-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                        @endforeach
                                        @endif
                                    </div>
                                    {{-- <button type="button" class="btn btn-soft-secondary btn-sm"
                                                data-toggle="add-more" data-content="">
                                                <div class="row gutters-5">
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Label" name="widget_one_labels[]">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="http://" name="widget_one_links[]">
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <button type="button"
                                                            class="mt-1 btn btn-icon btn-circle btn-sm btn-soft-danger"
                                                            data-toggle="remove-parent" data-parent=".row">
                                                            <i class="las la-times"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                data-target=".w3-links-target">
                                                {{ translate('Add New') }}
                                    </button> --}}
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-outline-primary mb-2">{{ translate('Update') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-6">
                <div class="card shadow-none bg-light">
                    <div class="card-header">
                        <h6 class="mb-0">Link Widget Three</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('system_configuration.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Title</label>
                                <input type="hidden" name="types[]" value="widget_three">
                                <input type="text" class="form-control" placeholder="Widget title" name="widget_three" value="For Clients">
                            </div>
                            <div class="form-group">
                                <label>Links</label>
                                <div class="w3-links-target-2">
                                    <input type="hidden" name="types[]" value="widget_three_labels">
                                    <input type="hidden" name="types[]" value="widget_three_links">
                                    <div class="row gutters-5">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Label" name="widget_three_labels[]" value="View Projects">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="http://" name="widget_three_links[]" value="http://">
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-soft-danger" data-toggle="remove-parent" data-parent=".row">
                                                <i class="las la-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row gutters-5">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Label" name="widget_three_labels[]" value="Freelancers">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="http://" name="widget_three_links[]" value="http://">
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-soft-danger" data-toggle="remove-parent" data-parent=".row">
                                                <i class="las la-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row gutters-5">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Label" name="widget_three_labels[]" value="Services">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="http://" name="widget_three_links[]" value="http://">
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-soft-danger" data-toggle="remove-parent" data-parent=".row">
                                                <i class="las la-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row gutters-5">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Label" name="widget_three_labels[]" value="All Categories">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="http://" name="widget_three_links[]" value="http://">
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-soft-danger" data-toggle="remove-parent" data-parent=".row">
                                                <i class="las la-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row gutters-5">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Label" name="widget_three_labels[]" value="Packages">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="http://" name="widget_three_links[]" value="http://">
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-soft-danger" data-toggle="remove-parent" data-parent=".row">
                                                <i class="las la-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row gutters-5">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Label" name="widget_three_labels[]" value="Profile">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="http://" name="widget_three_links[]" value="http://">
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-soft-danger" data-toggle="remove-parent" data-parent=".row">
                                                <i class="las la-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-soft-secondary btn-sm" data-toggle="add-more" data-content='<div class="row gutters-5">
										<div class="col-4">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Label" name="widget_three_labels[]">
											</div>
										</div>
										<div class="col">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="http://" name="widget_three_links[]">
											</div>
										</div>
										<div class="col-auto">
											<button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-soft-danger" data-toggle="remove-parent" data-parent=".row">
												<i class="las la-times"></i>
											</button>
										</div>
									</div>' data-target=".w3-links-target-2">
                                    Add New
                                </button>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>







                <div class="layout-top-spacing">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="mb-0">{{ translate('Social Widget') }}</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('system_configuration.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>{{ translate('Title') }}</label>
                                    <input type="hidden" name="types[]" value="social_widget_title">
                                    <input type="text" class="form-control" placeholder="Widget title" name="social_widget_title" value="{{ App\Models\SystemConfiguration::where('type', 'social_widget_title')->first()->value }}">
                                </div>

                                <div class="form-group">
                                    <label>{{ translate('Social Links') }}</label>

                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook">
                                                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                                </path>
                                            </svg></span>
                                        <input type="hidden" name="types[]" value="facebook_link">
                                        <input type="text" class="form-control" placeholder="http://" name="facebook_link" value="{{ App\Models\SystemConfiguration::where('type', 'facebook_link')->first()->value }}">
                                    </div>

                                    <div class="input-group mb-3">
                                        <span class="input-group-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter">
                                                <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                                                </path>
                                            </svg>
                                        </span>
                                        <input type="hidden" name="types[]" value="twitter_link">
                                        <input type="text" class="form-control" placeholder="http://" name="twitter_link" value="{{ App\Models\SystemConfiguration::where('type', 'twitter_link')->first()->value }}">
                                    </div>

                                    <div class="input-group mb-3">
                                        <span class="input-group-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5">
                                                </line>
                                            </svg>
                                        </span>
                                        <input type="hidden" name="types[]" value="instagram_link">
                                        <input type="text" class="form-control" placeholder="http://" name="instagram_link" value="{{ App\Models\SystemConfiguration::where('type', 'instagram_link')->first()->value }}">
                                    </div>

                                    <div class="input-group mb-3">
                                        <span class="input-group-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-youtube">
                                                <path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z">
                                                </path>
                                                <polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon>
                                            </svg>
                                        </span>
                                        <input type="hidden" name="types[]" value="youtube_link">
                                        <input type="text" class="form-control" placeholder="http://" name="youtube_link" value="{{ App\Models\SystemConfiguration::where('type', 'youtube_link')->first()->value }}">
                                    </div>

                                    <div class="input-group mb-3">
                                        <span class="input-group-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin">
                                                <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                                                </path>
                                                <rect x="2" y="9" width="4" height="12">
                                                </rect>
                                                <circle cx="4" cy="4" r="2"></circle>
                                            </svg>
                                        </span>
                                        <input type="hidden" name="types[]" value="linkedin_link">
                                        <input type="text" class="form-control" placeholder="http://" name="linkedin_link" value="{{ App\Models\SystemConfiguration::where('type', 'linkedin_link')->first()->value }}">
                                    </div>

                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-outline-primary mb-2">{{ translate('Update') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="layout-top-spacing">
            <div class="card">
                <div class="card-header">
                    <h6 class="fw-600 mb-0">{{ translate('Footer Bottom') }}</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('system_configuration.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="form-label" for="signinSrEmail">{{ translate('Show Language Switcher?') }}</label>
                            <div>
                                <label class="aiz-switch mb-0">
                                    <input type="hidden" name="types[]" value="language_switcher">
                                    <input type="checkbox" name="language_switcher" @if(App\Models\SystemConfiguration::where('type', 'language_switcher' )->first()->value == 'on') checked @endif>
                                    <span></span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>{{ translate('Copyright Text') }}</label>
                            <input type="hidden" name="types[]" value="copyright_text">
                            <textarea class="aiz-text-editor form-control" name="copyright_text" data-buttons='[["font", ["bold", "underline", "italic"]],["insert", ["link"]],["view", ["undo","redo"]]]' placeholder="Type.." data-min-height="150">
                                @php
                                    echo App\Models\SystemConfiguration::where('type', 'copyright_text')->first()->value;
                                @endphp
                            </textarea>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-outline-primary mb-2">{{ translate('Update') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection