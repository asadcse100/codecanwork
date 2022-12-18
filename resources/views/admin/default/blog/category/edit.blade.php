@extends('admin.default.layouts.app')

@section('css')
    <!-- BEGIN PAGE LEVEL STYLES -->

    <!-- END PAGE LEVEL STYLES -->
@endsection

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-top-spacing">
        <div class="middle-content container-xxl p-0">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0 h6">{{ translate('Edit Blog Category Information') }}</h5>
                        </div>
                        <div class="card-body">
                            <form id="add_form" class="form-horizontal"
                                action="{{ route('blog-category.update', $cateogry->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="col-sm-12 mb-4">
                                    <div class="input-group  mb-3 required">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"
                                            for="validationCustom02">Name</span>
                                        <input type="text" id="category_name" name="category_name"
                                            value="{{ $cateogry->category_name }}" class="form-control" required>
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
