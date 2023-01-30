@extends('admin.default.layouts.app')
@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">
        <div class="row">
            <div class="col-lg-7">
                <div class="statbox widget box box-shadow">
                    <div class="widget-content widget-content-area layout-top-spacing">
                        <div class="card-header">
                            <h5 class="mb-0 h6">{{ translate('All Categories') }}</h5>
                        </div>
                        <div class="card-body">
                            <table class="table aiz-table mb-0">
                                <thead>
                                    <tr>
                                        <th>{{ translate('ID') }}</th>
                                        <th>{{ translate('Name') }}</th>
                                        <th>{{ translate('Parent') }}</th>
                                        <th>{{ translate('Icon') }}</th>
                                        <th class="text-right">{{ translate('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($project_categories as $key => $project_category)
                                        <tr>
                                            <td>{{ $key + 1 + ($project_categories->currentPage() - 1) * $project_categories->perPage() }}
                                            </td>
                                            <td>{{ $project_category->name }}</td>
                                            @php
                                                $parent = \App\Models\ProjectCategory::where('id', $project_category->parent_id)->first();
                                            @endphp
                                            <td>
                                                @if ($parent != null)
                                                    {{ $parent->name }}
                                                @else
                                                    {{ translate('No Parent') }}
                                                @endif
                                            </td>
                                            <td>
                                                <span class="avatar avatar-square avatar-xs">
                                                    @if (!empty($project_category->photo))
                                                        <img src="{{ asset('profile/category/' . $project_category->photo) }}"
                                                            class="card-img-top" alt="Category"
                                                            style="height: 40px; width:40px;">
                                                    @else
                                                        <img src="{{ asset('templete') }}/src/assets/img/default.png"
                                                            alt="Team Image" style="height: 40px; width:40px;">
                                                    @endif
                                                </span>
                                            </td>


                                            {{-- <td cla
                                                ss="text-right">
                                                @can('project cat edit')
                                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm"
                                                        href="{{ route('project-categories.edit', encrypt($project_category->id)) }}"
                                                        title="{{ translate('Edit') }}">
                                                        <i class="las la-edit"></i>
                                                    </a>
                                                @endcan
                                                @can('project cat delete')
                                                    <a href="#"
                                                        class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                                        data-href="{{ route('project-categories.destroy', encrypt($project_category->id)) }}"title="{{ translate('Delete') }}">
                                                        <i class="las la-trash"></i>
                                                    </a>
                                                @endcan
                                            </td> --}}
                                            <td class="text-right">
                                                <a href="{{ route('project-categories.edit', encrypt($project_category->id)) }}"
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
                                                <a href="{{ route('project-categories.destroy', encrypt($project_category->id)) }}"
                                                    class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip"
                                                    data-placement="top" title="Edit">
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
                                                {{-- <a href="javascript:void(0);"
                                                    data-href="{{ route('project-categories.destroy', encrypt($project_category->id)) }}"title="{{ translate('Delete') }}">
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
                                                </a> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                {{ $project_categories->links() }}
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="widget-content widget-content-area layout-top-spacing">
                        <div class="card-header">
                            <h5 class="mb-0 h6">{{ translate('Add New Category') }}</h5>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" action="{{ route('project-categories.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                {{-- <div class="form-group mb-3">
                                    <label for="name">{{ translate('Name') }}</label>
                                    <input type="text" id="name" name="name"
                                        placeholder="{{ translate('Category Name') }}" class="form-control" required>
                                </div> --}}
                                <div class="col-sm-12 mb-4">
                                    <div class="input-group mb-3 required">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"
                                            for="validationCustom01">Name</span>
                                        <input type="text" id="name" name="name"
                                            placeholder="{{ translate('Category Name') }}"
                                            class="form-control form-control-sm" required>
                                        <div class="invalid-feedback">
                                            Please fill the Category Name.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 mb-4">
                                    <div class="input-group mb-3 required">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"
                                            for="validationCustom01">Parent</span>
                                        <select class="form-select form-control-sm aiz-selectpicker" name="parent_id"
                                            data-toggle="select2" data-placeholder="Choose ..." data-live-search="true">
                                            <option value="0">{{ translate('No Parent') }}</option>
                                            @foreach (\App\Models\ProjectCategory::all() as $project_cat)
                                                <option value="{{ $project_cat->id }}">{{ $project_cat->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <input class="form-control file-upload-input" type="file" name="photo"
                                        id="formFile">
                                </div>
                                @can('project cat create')
                                    <div class="form-group mb-3 text-right">
                                        <button type="submit"
                                            class="btn btn-outline-success p-1">{{ translate('Save New Category') }}</button>
                                    </div>
                                @endcan
                            </form>
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
