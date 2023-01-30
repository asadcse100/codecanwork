@extends('admin.default.layouts.app')

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing layout-top-spacing">
        <div class="">

            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area">
                            <div class="layout-top-spacing ">
                                <h5 class="mb-md-0 h6">{{ translate('Chat Lists') }}</h5>
                                <hr>
                            </div>
                            <table id="individual-col-search" class="table dt-table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ translate('Client') }}</th>
                                        <th>{{ translate('Freelancer') }}</th>
                                        <!-- <th data-breakpoints="md">{{ translate('Chat Status') }}</th> -->
                                        <!-- <th data-breakpoints="md">{{ translate('Blocked by') }}</th> -->
                                        <th data-breakpoints="md">{{ translate('Chat Started') }}</th>
                                        <th class="text-right">{{ translate('Options') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($chat_threads as $key => $chat_thread)
                                        <tr>
                                            <td>{{ $key + 1 + ($chat_threads->currentPage() - 1) * $chat_threads->perPage() }}
                                            </td>
                                            @if ($chat_thread->sender != null)
                                                <td>
                                                    {{ $chat_thread->sender->name }}
                                                </td>
                                            @else
                                                <td>
                                                    {{ translate('Not Found') }}
                                                </td>
                                            @endif

                                            @if ($chat_thread->receiver != null)
                                                <td>
                                                    {{ $chat_thread->receiver->name }}
                                                </td>
                                            @else
                                                <td>
                                                    {{ translate('Not Found') }}
                                                </td>
                                            @endif
                                            <!-- @if ($chat_thread->active != 0)
    <td>
                                                <span class="badge badge-primary badge-inline">{{ translate('Active') }}</span>
                                            </td>
@else
    <td>
                                                <span class="badge badge-danger badge-inline">{{ translate('Blocked') }}</span>
                                            </td>
    @endif -->
                                            <!-- @if ($chat_thread->blocked_by_user != null)
    <td>
                                                {{ $chat_thread->blocked_by->name }}
                                            </td>
@else
    <td>
                                                <span class="badge badge-secondary badge-inline">{{ translate('Running') }}</span>
                                            </td>
    @endif -->
                                            <td>
                                                {{ $chat_thread->created_at }}
                                            </td>
                                            <td class="text-right">
                                                @can('single user chat details')
                                                    <a href="{{ route('chat_details_for_admin', encrypt($chat_thread->id)) }}"
                                                        title="{{ translate('Edit') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-eye">
                                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                            <circle cx="12" cy="12" r="3"></circle>
                                                        </svg>
                                                    </a>
                                                @endcan
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            <div class="aiz-pagination aiz-pagination-center">
                                {{ $chat_threads->appends(request()->input())->links() }}
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
