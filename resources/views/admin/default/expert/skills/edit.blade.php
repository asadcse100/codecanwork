@extends('admin.default.layouts.app')

@section('css')
    <!-- BEGIN PAGE LEVEL STYLES -->

    <!-- END PAGE LEVEL STYLES -->
@endsection

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">
            <div class="col-md-3   layout-top-spacing">
                <h5 class="mb-md-0 h6">{{ translate('Edit Skill') }}</h5>
            </div>
            <div class="row layout-top-spacing">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card">
                            <div class="card-header">
                                <h1 class="mb-0 h6">{{ translate('Edit Skill') }}</h1>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal" action="{{ route('skills.update', $skill->id) }}"
                                    method="POST" enctype="multipart/form-data">
                                    <input name="_method" type="hidden" value="PATCH">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label for="name">{{ translate('Name') }}</label>
                                        <input type="text" id="name" name="name" value="{{ $skill->name }}"
                                            class="form-control" required>
                                    </div>
                                    <div class="form-group mb-3 text-right">
                                        <button type="submit"
                                            class="btn btn-primary">{{ translate('Update Skill') }}</button>
                                    </div>
                                </form>
                            </div> <!-- end card-body -->
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
