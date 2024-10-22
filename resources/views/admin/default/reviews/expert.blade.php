@extends('admin.default.layouts.app')

@section('content')
<!--  BEGIN CONTENT AREA  -->
<div class="layout-px-spacing">
    <div class="row layout-spacing">
        <div class="col-lg-12">
            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area layout-top-spacing">
                    <div class="layout-top-spacing ">
                        <h5 class="text-center">{{ translate('Expert Reviews by Clients') }}</h5>
                        <hr>
                    </div>
                    <form class="" id="sort_projects" action="" method="GET">
                        <div class="card-header row gutters-5" style="justify-content:center">
                            <div class="col-md-3 ml-auto">
                                <select class="form-control form-control-sm aiz-selectpicker mb-2 mb-md-0" name="user_id" id="user_id" data-live-search="true" onchange="sort_projects()">
                                    <option value="">{{ translate('Filter by Client') }}</option>
                                    @foreach (App\Models\User::where('user_type', 'client')->get() as $key => $client)
                                    @if ($client->user != null)
                                    <option value="{{ $client->id }}" @if ($client->id == $client_id) selected @endif>
                                        {{ $client->name }}
                                    </option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3 ml-auto">
                                <select class="form-control form-control-sm  aiz-selectpicker mb-2 mb-md-0" name="type" id="type" onchange="sort_projects()">
                                    <option value="">{{ translate('Sort by') }}</option>
                                    <option value="created_at,asc" @isset($col_name, $query) @if ($col_name=='created_at' && $query=='asc' ) selected @endif @endisset>
                                        {{ translate('Time (Old > New)') }}
                                    </option>
                                    <option value="created_at,desc" @isset($col_name, $query) @if ($col_name=='created_at' && $query=='desc' ) selected @endif @endisset>
                                        {{ translate('Time (New > Old)') }}
                                    </option>
                                    <option value="price,desc" @isset($col_name, $query) @if ($col_name=='price' && $query=='desc' ) selected @endif @endisset>
                                        {{ translate('Price (High > Low)') }}
                                    </option>
                                    <option value="price,asc" @isset($col_name, $query) @if ($col_name=='price' && $query=='asc' ) selected @endif @endisset>
                                        {{ translate('Price (Low > High)') }}
                                    </option>
                                </select>
                            </div>

                        </div>
                    </form>
                    <table id="individual-col-search" class="table dt-table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Expert</th>
                                <th>Client</th>
                                <th>Project</th>
                                <th>Rating</th>
                                <th>Comment</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reviews as $key => $review)
                            <tr>
                                <td>{{ $key + 1 + ($reviews->currentPage() - 1) * $reviews->perPage() }}</td>
                                <td>
                                    @if ($review->reviewed != null)
                                    {{ $review->reviewed->name }}
                                    @endif
                                </td>
                                <td>
                                    @if ($review->reviewer != null)
                                    {{ $review->reviewer->name }}
                                    @endif
                                </td>
                                <td>
                                    @if ($review->project != null)
                                    {{ $review->project->name }}
                                    @endif
                                </td>
                                <td>
                                    <span class="rating rating-sm">
                                        {{ renderStarRating($review->rating) }}
                                    </span>
                                </td>
                                <td>{{ $review->review }}</td>
                                <td class="text-right">
                                    <label class="aiz-switch aiz-switch-success mb-0">
                                        <input type="checkbox" value="{{ $review->id }}" onchange="update_review_published(this)" @if ($review->published) checked @endif>
                                        <span></span>
                                    </label>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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
    function sort_clients(el) {
        $('#sort_clients').submit();
    }
</script>
@endsection