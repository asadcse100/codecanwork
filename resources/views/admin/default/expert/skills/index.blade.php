@extends('admin.default.layouts.app')

@section('css')
    <!-- BEGIN PAGE LEVEL STYLES -->

    <!-- END PAGE LEVEL STYLES -->
@endsection

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">
        <div class="">
            <div class="layout-top-spacing">
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="mb-0 h6">{{ translate('Skill list') }}</h1>
                        </div>
                        <div class="card-body">
                            <table class="table aiz-table mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ translate('Skill') }}</th>
                                        <th class="text-right">{{ translate('Options') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($skills as $key => $skill)
                                        <tr>
                                            <td>{{ $key + 1 + ($skills->currentPage() - 1) * $skills->perPage() }}</td>
                                            <td>{{ $skill->name }}</td>

                                            <td class="text-right">
                                                <a href="{{ route('skills.edit', encrypt($skill->id)) }}"
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
                                                    data-href="{{ route('skills.destroy', $skill->id) }}"
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
                            {{-- <div class="aiz-pagination aiz-pagination-center">
                                {{ $skills->links() }}
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="mb-0 h6">{{ translate(' Add New Skill') }}</h1>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" action="{{ route('skills.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="col-sm-12 mb-4">
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Professional Types</span>

                                        <select name="profe_id" class="from-select">
                                            @foreach ($category as $profe_id)
                                                <option value="{{ $profe_id->id }}">{{ $profe_id->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 mb-4">
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Skill Name</span>
                                        <input type="text" id="name" name="name"
                                            placeholder="{{ translate('Eg. skill') }}" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group mb-3 text-right">
                                    <button type="submit"
                                        class="btn btn-outline-success btn-sm mb-2 me-4">{{ translate('Add New Skill') }}</button>
                                </div>
                            </form>
                        </div> <!-- end card-body -->
                    </div> <!-- end card-->
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
    <script type="text/javascript">
        function detailsInfo(e) {
            $('#info-modal-content').html(
                '<div class="c-preloader text-center absolute-center"><i class="las la-spinner la-spin la-3x opacity-70"></i></div>'
            );
            var id = $(e).data('id')
            $('#info-modal').modal('show');
            $.post('{{ route('uploaded-files.info') }}', {
                _token: AIZ.data.csrf,
                id: id
            }, function(data) {
                $('#info-modal-content').html(data);
                // console.log(data);
            });
        }

        function copyUrl(e) {
            var url = $(e).data('url');
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val(url).select();
            try {
                document.execCommand("copy");
                AIZ.plugins.notify('success', '{{ translate('Link copied to clipboard') }}');
            } catch (err) {
                AIZ.plugins.notify('danger', '{{ translate('Oops, unable to copy') }}');
            }
            $temp.remove();
        }

        function sort_uploads(el) {
            $('#sort_uploads').submit();
        }
    </script>
@endsection
