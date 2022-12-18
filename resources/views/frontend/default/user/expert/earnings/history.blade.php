@extends('layouts.app')

@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div class="layout-px-spacing">
        <div class="">
            <div class="layout-top-spacing">
            </div>
            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area">
                            <div class="layout-top-spacing ">
                                <h5 class="text-center">Total Requests</h5>
                                <hr>
                            </div>
                            <table id="individual-col-search" class="table dt-table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Project Name</th>
                                        <th>Paid Amount</th>
                                        <th>Your Earnings</th>
                                        <th>Paid at</th>
                                        <th>Admin Charge</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($milestones as $key => $milestone)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td><a href="#" class="text-secondary">{{ $milestone->project->name }}</a>
                                            </td>
                                            <td>{{ single_price($milestone->amount) }}</td>
                                            <td>{{ single_price($milestone->expert_profit) }}</td>
                                            <td>{{ $milestone->created_at }}</td>
                                            <td>{{ single_price($milestone->admin_profit) }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
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
