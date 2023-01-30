@extends('admin.default.layouts.app')

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing layout-top-spacing">
            <div class="aiz-titlebar mt-2 mb-3">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1 class="h3">{{ translate('Website Pages') }}</h1>
                    </div>
                    <div class="col-md-6 text-md-center">
                        <a href="{{ route('custom-pages.create') }}"
                            class="btn btn-outline-primary mb-2 me-4">{{ translate('Add New Page') }}</a>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="widget-content widget-content-area">
                    <div class="card-body">
                        <table id="individual-col-search" class="table dt-table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{ translate('Name') }}</th>
                                    <th data-breakpoints="md">{{ translate('URL') }}</th>
                                    <th class="text-right">{{ translate('Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (\App\Models\Page::all() as $key => $page)
                                    <tr>

                                        <td>{{ $key + 1 }}</td>
                                        <td><a href="{{ route('website.home') }}"
                                                class="text-reset">{{ translate('Home Page') }}</a>
                                        </td>
                                        <td>{{ route('home') }}</td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="dropdown-toggle" href="#" role="button"
                                                    id="dropdownMenuLink2" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-more-horizontal">
                                                        <circle cx="12" cy="12" r="1">
                                                        </circle>
                                                        <circle cx="19" cy="12" r="1">
                                                        </circle>
                                                        <circle cx="5" cy="12" r="1">
                                                        </circle>
                                                    </svg>
                                                </a>
                                                <div class="dropdown-menu my-5" aria-labelledby="dropdownMenuLink20">

                                                    <a href="{{ route('custom-pages.edit', $page->slug) }}"
                                                        class="dropdown-item">Edit</a>

                                                    <a class="dropdown-item"
                                                        href="{{ route('custom-pages.destroy', $page->id) }}"
                                                        onclick="deleteFn()">Delete</a>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    <!--  END CONTENT AREA  -->
@endsection
@section('modal')
    @include('admin.default.partials.delete_modal')
@endsection
