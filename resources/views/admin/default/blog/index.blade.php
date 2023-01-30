@extends('admin.default.layouts.app')

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">
        <!-- BREADCRUMB -->
        <div class="page-meta">
            <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                <div class="row">
                    <div class="col-md-10">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page">{{ translate('All blog posts') }}</li>
                        </ol>
                    </div>
                    <div class="col-md-2">
                        <button style="float:right" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg"
                            class="btn btn-outline-info">{{ translate('Add New Post') }}</button>
                    </div>
                </div>
            </nav>
        </div>
        <!-- /BREADCRUMB -->

        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-content widget-content-area layout-top-spacing">
                        <table id="individual-col-search" class="table dt-table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Short Description</th>
                                    <th>Status</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $key => $blog)
                                    <tr>
                                        <td>
                                            {{ $key + 1 + ($blogs->currentPage() - 1) * $blogs->perPage() }}
                                        </td>
                                        <td>
                                            {{ $blog->title }}
                                        </td>
                                        <td>
                                            @if ($blog->category != null)
                                                {{ $blog->category->category_name }}
                                            @else
                                                --
                                            @endif
                                        </td>
                                        <td>
                                            {{ $blog->short_description }}
                                        </td>
                                        <td>
                                            <label class="aiz-switch aiz-switch-success mb-0">
                                                <input type="checkbox" onchange="change_status(this)"
                                                    value="{{ $blog->id }}" <?php if ($blog->status == 1) {
                                                        echo 'checked';
                                                    } ?>>
                                                <span></span>
                                            </label>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="dropdown-toggle" href="#" role="button"
                                                    id="dropdownMenuLink2" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-more-horizontal">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="19" cy="12" r="1"></circle>
                                                        <circle cx="5" cy="12" r="1"></circle>
                                                    </svg>
                                                </a>
                                                <div class="dropdown-menu my-5" aria-labelledby="dropdownMenuLink20">

                                                    <a href="{{ route('blog.edit', $blog->id) }}"
                                                        class="dropdown-item">Edit</a>

                                                    <a class="dropdown-item" href="{{ route('blog.destroy', $blog->id) }}"
                                                        onclick="deleteFn()">Delete</a>

                                                </div>
                                            </div>
                                        </td>
                                @endforeach
                            </tbody>
                        </table>

                        {{-- Edit & create from here --}}
                        <div class="modal fade bd-example-modal-lg" id="bd-edit-modal-lg" aria-hidden="true"
                            aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <!-- Start now   -->
                                    <div class="row">
                                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0">
                                            <div class="widget-content widget-content-area blog-create-section">
                                                <form id="add_form" class="form-horizontal  needs-validation"
                                                    action="{{ route('blog.store') }}" method="POST" novalidate
                                                    onsubmit="return validateform()">
                                                    @csrf
                                                    <div class="row layout-spacing">
                                                        <div
                                                            class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0">
                                                            <div
                                                                class="widget-content widget-content-area blog-create-section">
                                                                <div class="col-md-6 layout-top-spacing p-2">
                                                                    <h4 class="mb-md-0 h6">Blog Information</h4>
                                                                </div>
                                                                <hr>
                                                                <div class="">
                                                                    <div class="row layout-top-spacing p-4">
                                                                        <div class="col-sm-6 mb-4">
                                                                            <div class="input-group mb-3 required">
                                                                                <span class="input-group-text"
                                                                                    id="inputGroup-sizing-sm"
                                                                                    for="validationCustom01">Blog
                                                                                    Title</span>
                                                                                <input type="text"
                                                                                    onkeyup="makeSlug(this.value)"
                                                                                    id="title" name="title"
                                                                                    class="form-control" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6 mb-4">
                                                                            <div class="input-group  mb-3 required">
                                                                                <span class="input-group-text"
                                                                                    id="inputGroup-sizing-sm"
                                                                                    for="validationCustom02">Category</span>
                                                                                <select class="form-select aiz-selectpicker"
                                                                                    name="category_id" id="category_id"
                                                                                    data-live-search="true"
                                                                                    title="{{ translate('Select category') }}"
                                                                                    required>
                                                                                    @foreach ($blog_categories as $category)
                                                                                        <option
                                                                                            value="{{ $category->id }}">
                                                                                            {{ $category->category_name }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6 mb-4">
                                                                            <div class="input-group  mb-3 required">
                                                                                <span class="input-group-text"
                                                                                    id="inputGroup-sizing-sm"
                                                                                    for="validationCustom02">Slug</span>
                                                                                <input type="text"
                                                                                    placeholder="{{ translate('Slug') }}"
                                                                                    name="slug" id="slug"
                                                                                    class="form-control" required>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-sm-6 mb-4">
                                                                            <div class="input-group  mb-3 required">
                                                                                <span class="input-group-text"
                                                                                    id="inputGroup-sizing-sm">Banner</span>
                                                                                <input
                                                                                    class="form-control file-upload-input"
                                                                                    type="file" name="banner"
                                                                                    id="formFile">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6 mb-4">
                                                                            <div class="input-group  mb-3 required">
                                                                                <span class="input-group-text"
                                                                                    id="inputGroup-sizing-sm">Short
                                                                                    Description</span>
                                                                                <textarea name="short_description" rows="2" class="form-control" required=""></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6 mb-4">
                                                                            <div class="input-group  mb-3 required">
                                                                                <span class="input-group-text"
                                                                                    id="inputGroup-sizing-sm">Description</span>
                                                                                <textarea name="description" rows="2" class="form-control" required=""></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6 mb-4">
                                                                            <div class="input-group  mb-3 required">
                                                                                <span class="input-group-text"
                                                                                    id="inputGroup-sizing-sm">Meta
                                                                                    Title</span>
                                                                                <input type="text" class="form-control"
                                                                                    name="meta_title">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6 mb-4">
                                                                            <div class="input-group  mb-3 required">
                                                                                <span class="input-group-text"
                                                                                    id="inputGroup-sizing-sm">Meta
                                                                                    Description</span>
                                                                                <textarea name="meta_description" rows="2" class="form-control"></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6 mb-4">
                                                                            <div class="input-group  mb-3 required">
                                                                                <span class="input-group-text"
                                                                                    id="inputGroup-sizing-sm">Meta
                                                                                    Keywords</span>
                                                                                <input type="text" class="form-control"
                                                                                    id="meta_keywords"
                                                                                    name="meta_keywords">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6 mb-4">
                                                                            <div class="input-group  mb-3 required">
                                                                                <span class="input-group-text"
                                                                                    id="inputGroup-sizing-sm">Meta
                                                                                    Image</span>
                                                                                <input
                                                                                    class="form-control file-upload-input"
                                                                                    type="file" name="meta_img"
                                                                                    id="formFile">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="col-md-12 p-2" style="text-align:right;">
                                                                    <a href="{{ route('blog.index') }}"
                                                                        class="btn btn-outline-danger mb-2 me-4">
                                                                        <span>Discard</span>
                                                                    </a>
                                                                    <button type="submit"
                                                                        class="btn btn-outline-success mb-2 me-4">Save</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- End Edit & Create this now --}}
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
    <script type="text/javascript">
        function change_status(el) {
            if (el.checked) {
                var status = 1;
            } else {
                var status = 0;
            }
            $.post('{{ route('blog.change-status') }}', {
                _token: '{{ csrf_token() }}',
                id: el.value,
                status: status
            }, function(data) {
                if (data == 1) {
                    AIZ.plugins.notify('success', 'Change blog status successfully');
                } else {
                    AIZ.plugins.notify('danger', 'Something went wrong');
                }
            });
        }

        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    </script>
@endsection
