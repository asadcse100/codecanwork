@extends('admin.default.layouts.app')

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">
            <div class="layout-top-spacing">
            </div>

            <div class="aiz-titlebar text-left mt-2 mb-3">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1 class="h3">{{ translate('All Blog Categories') }}</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-header d-block d-md-flex">
                            <h5 class="mb-0 h6">{{ translate('Blog Categories') }}</h5>
                        </div>
                        <div class="card-header d-block d-md-flex">
                            <form class="col-sm-12" id="sort_categories" action="" method="GET">
                                <div class="box-inline pad-rgt pull-right">
                                    <div class="" style="min-width: 150px;">
                                        <input type="text" class="form-control" id="search"
                                            name="search"@isset($sort_search) value="{{ $sort_search }}" @endisset
                                            placeholder="{{ translate('Type name & Enter') }}">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-body">
                            <table class="table aiz-table mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ translate('Name') }}</th>
                                        <th class="text-right">{{ translate('Options') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $key => $category)
                                        <tr>
                                            <td>{{ $key + 1 + ($categories->currentPage() - 1) * $categories->perPage() }}
                                            </td>
                                            <td>{{ $category->category_name }}</td>
                                            <td class="text-right">
                                                <a href="{{ url('admin/blog-category/' . $category->id . '/edit') }}"
                                                    class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip"
                                                    data-placement="top" title="Edit">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-edit-2">
                                                        <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                        </path>
                                                    </svg>
                                                </a>

                                                <a href="javascript:void(0);"
                                                    data-href="{{ route('blog-category.destroy', $category->id) }}"
                                                    class="action-btn btn-delete bs-tooltip" data-toggle="tooltip"
                                                    data-placement="top" title="Delete">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-trash-2">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path
                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                        </path>
                                                        <line x1="10" y1="11" x2="10" y2="17">
                                                        </line>
                                                        <line x1="14" y1="11" x2="14" y2="17">
                                                        </line>
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="aiz-pagination">
                                {{ $categories->links() }}
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0 h6">{{ translate('Add New Category') }}</h5>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" method="POST" action="{{ route('blog-category.store') }}">
                                @csrf
                                <div class="col-sm-12 mb-4">
                                    <div class="input-group  mb-3 required">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"
                                            for="validationCustom02">Name</span>
                                        <input type="text" id="category_name" name="category_name"
                                            placeholder="{{ translate('Category Name') }}" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group mb-3 text-right">
                                    <button type="submit" class="btn btn-outline-success mb-2 me-4">Save</button>

                                </div>
                            </form>

                        </div>
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
@section('script')
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    
    <!-- END PAGE LEVEL SCRIPTS -->
@endsection
