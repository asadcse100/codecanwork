@extends('admin.default.layouts.app')

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">
        <div class="layout-top-spacing">
            <div class="row">
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="mb-0 h6">{{ translate('Skill list') }}</h1>
                        </div>
                        <div class="card-body">
                            <table id="skills_data" class="table dt-table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ translate('Skill') }}</th>
                                        <th class="text-right">{{ translate('Options') }}</th>
                                    </tr>
                                </thead>
                            </table>

                            <div class="modal fade bd-example-modal-lg" id="bd-edit-modal-lg" aria-hidden="true"
                                aria-labelledby="exampleModalToggleLabel" tabindex="-1">

                            </div>
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
                                <input type="hidden" name="id" id="id">
                                @csrf

                                <div class="col-sm-12 mb-4">
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Professional Types</span>

                                        <select name="profe_id" id="profe_id" class="from-select">
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
    <script>
        var editor;

        function editId(vid) {
            // A reference to the editor editable element in the DOM.
            const domEditableElement = document.querySelector('.ck-editor__editable');
            // Get the editor instance from the editable element.
            const editorInstance = domEditableElement.ckeditorInstance;
            $("#id").val(vid);
            $.ajax({
                    method: "GET",
                    url: "{{ route('getSkills_details') }}",
                    data: {
                        id: vid
                    }
                })
                .done(function(msg) {
                    $('#name').val(msg.name);
                    // $('#profe_id').val(msg.profe_id);
                    // Use the editor instance API. for the ckeditor
                    editorInstance.setData(msg.short_description);
                    console.log(msg);
                });

        }
        $(document).ready(function() {
            $('#skills_data').DataTable({
                "processing": true,
                "responsive": true,
                "serverSide": true,
                "ajax": {
                    "url": "{{ route('getSkills') }}",
                    "dataType": "json",
                    "type": "POST",
                    "data": {
                        _token: "{{ csrf_token() }}"
                    }
                },
                "columns": [{
                        "data": "id"
                    },
                    {
                        "data": "name"
                    },
                    // { "data": "profe_id" },
                    {
                        'className': 'text-center',
                        "data": "options"
                    }
                ],

                "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
                    "<'table-responsive'tr>" +
                    "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
                "oLanguage": {
                    "oPaginate": {
                        "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                        "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                    },
                    "sInfo": "Showing page _PAGE_ of _PAGES_",
                    "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                    "sSearchPlaceholder": "Search...",
                    "sLengthMenu": "Results :  _MENU_",
                },
                "stripeClasses": [],
                "lengthMenu": [20, 50, 100],
                "pageLength": 20

            });
        });


        $('#skills_data tfoot th').each(function() {
            var title = $(this).text();
            $(this).html('<input type="text" class="form-control" placeholder="Search ' + title + '" />');
        });

        function sort_freelancers(el) {
            $('#sort_freelancers').submit();
        }
    </script>
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
