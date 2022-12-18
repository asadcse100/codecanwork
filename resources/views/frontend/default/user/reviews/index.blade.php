@extends('layouts.app')

@section('css')
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ asset('templete') }}/src/plugins/src/autocomplete/css/autoComplete.02.css" rel="stylesheet"
        type="text/css" />

    <link href="{{ asset('templete') }}/src/plugins/css/light/autocomplete/css/custom-autoComplete.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('templete') }}/src/plugins/css/dark/autocomplete/css/custom-autoComplete.css" rel="stylesheet"
        type="text/css" />

    <link href="{{ asset('templete') }}/src/assets/css/light/pages/knowledge_base.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('templete') }}/src/assets/css/dark/pages/knowledge_base.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
@endsection

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">
        <div class="">
            <div class="col-md-3   layout-top-spacing">
                <h5 class="mb-md-0 h6">{{ translate('Reviews') }}</h5>
            </div>
            <div class="widget-content widget-content-area layout-top-spacing">

                <table id="individual-col-search" class="table dt-table-hover">
                    <thead>
                        <tr>
                            <th data-breakpoints="">#</th>
                            <th data-breakpoints="">Project Name</th>
                            <th data-breakpoints="">Reviewer Name</th>
                            <th data-breakpoints="md">Reviews</th>
                            <th data-breakpoints="md">Rating</th>
                            <th data-breakpoints="md">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reviews as $key => $review)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                @if ($review->project != null)
                                    <td>
                                        {{ $review->project->name }}
                                    </td>
                                @else
                                    <td>
                                        {{ translate('Not Found') }}
                                    </td>
                                @endif
                                @if ($review->reviewer != null)
                                    <td>
                                        {{ $review->reviewer->name }}
                                    </td>
                                @else
                                    <td>
                                        {{ translate('Not Found') }}
                                    </td>
                                @endif
                                <td>{{ $review->review }}</td>
                                <td>
                                    <span class="rating rating-sm">
                                        {{ renderStarRating($review->rating) }}
                                    </span>
                                </td>
                                <td>
                                    @if ($review->published == 1)
                                        <span class="badge badge-inline badge-success">{{ translate('Published') }}</span>
                                    @else
                                        <span class="badge badge-inline badge-success">{{ translate('Hidden') }}</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $reviews->links() }}

            </div>
        </div>
    </div>
    <!--  END CONTENT AREA  -->
@endsection
@section('modal')
    <!-- cancel Modal -->
    <div class="modal fade" id="cancel-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title h6">{{ translate('Cancel Confirmation') }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body text-center">
                    <p class="lead">{{ translate('Are you sure to cancel this?') }}</p>
                    <button type="button" class="btn btn-link mt-2"
                        data-dismiss="modal">{{ translate('Cancel') }}</button>
                    <a id="cancel-link" class="btn btn-primary mt-2">{{ translate('Confirm') }}</a>
                </div>
            </div>
        </div>
    </div>

    @include('admin.default.partials.delete_modal')
@endsection
@section('script')
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('templete') }}/src/plugins/src/table/datatable/datatables.js"></script>
    <script src="{{ asset('templete') }}/src/plugins/src/table/datatable/button-ext/dataTables.buttons.min.js"></script>
    <script src="{{ asset('templete') }}/src/plugins/src/table/datatable/button-ext/jszip.min.js"></script>
    <script src="{{ asset('templete') }}/src/plugins/src/table/datatable/button-ext/buttons.html5.min.js"></script>
    <script src="{{ asset('templete') }}/src/plugins/src/table/datatable/button-ext/buttons.print.min.js"></script>
    <script src="{{ asset('templete') }}/src/plugins/src/table/datatable/custom_miscellaneous.js"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    {{-- <script src="{{ asset('templete') }}/src/plugins/src/autocomplete/autoComplete.min.js"></script>
<script src="{{ asset('templete') }}/src/assets/js/pages/knowledge-base.js"></script> --}}
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
@endsection
