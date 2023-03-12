@extends('layouts.app')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('templete') }}/src/assets/css/light/widgets/modules-widgets.css">
<link rel="stylesheet" type="text/css" href="{{ asset('templete') }}/src/assets/css/dark/widgets/modules-widgets.css">
@endsection
@section('content')
<div class="layout-px-spacing">
    <!-- Analytics -->
    <div class="layout-top-spacing">
        <h5>{{ translate('Project Proposals') }}</h5>
    </div>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-top-spacing">
        <!-- <div class="card"> -->
        @forelse ($private_projects as $key => $private_project)
        @if ($private_project->project != null)
        <div class="widget widget-five p-4">
            {{-- Bidded Projects --}}
            <div class="row">
                <div class="col-sm-10 mb-2">
                    <span class="btn btn-outline-success p-1">{{ single_price($private_project->project->price) }}</span>
                </div>
                <div class="col-sm-2">
                    <span class="btn btn-outline-dark p-1">{{ translate('Pending') }}</span>
                </div>
            </div>
            <div class="widget-content">
                <h5><a href="{{ route('project.details', $private_project->project->slug) }}" class="text-inherit" target="_blank" style="color:aqua">{{ $private_project->project->name }}</a></h5>
                <ul class="list-inline opacity-70 fs-12">
                    <li class="list-inline-item">
                        <i class="las la-clock opacity-40"></i>
                        <span>{{ Carbon\Carbon::parse($private_project->created_at)->diffForHumans() }}</span>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-inherit">
                            <i class="las la-stream opacity-40"></i>
                            <span>@if ($private_project->project->project_category != null) {{ $private_project->project->project_category->name }} @else {{ translate('Removed Category') }} @endif</span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <i class="las la-handshake"></i>
                        <span>{{ $private_project->project->type }}</span>
                    </li>
                    <div class="text-muted lh-1-8">
                        <p>{{ $private_project->project->excerpt }}</p>
                    </div>
                </ul>
                @foreach (json_decode($private_project->project->skills) as $key => $skill_id)
                @php
                $skill = \App\Models\Skill::find($skill_id);
                @endphp
                @if ($skill != null)
                <span class="btn btn-light-info">{{ $skill->name }}</span>
                @endif
                @endforeach
                <hr>
                <div class="row">
                    <div class="col-sm-10">
                        <a href="{{ route('client.details', $private_project->client->user_name) }}" class="d-flex mr-3 align-items-center text-reset">
                            <div class="avatar--group">
                                <div class="avatar avatar-sm avatar-indicators avatar-online">
                                    <img alt="avatar" src="{{ asset($private_project->client->photo) }}" />
                                </div>
                                <div class="container">
                                    <div class="media-body">
                                        <h5 class="media-heading mb-1">{{ $private_project->client->name }}</h5>
                                        <span>
                                            <p class="badge badge-warning ">{{ getAverageRating($private_project->client->id) }}</p>
                                            ({{ getNumberOfReview($private_project->client->id) }} {{ translate('Reviews') }})
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <div class="totalbids">
                            <a href="{{ route('hiring.reject', encrypt($private_project->id)) }}" class="btn btn-danger btn-sm rounded-1">{{ translate('Reject') }}</a>
                            <a href="javascript:void(0)" class="btn btn-success btn-sm rounded-1" onclick="hiring_modal('{{ $private_project->project->name }}',{{ $private_project->project->price }}, {{ $private_project->project->id }}, {{ Auth::user()->id }})">{{ translate('Accpet') }}</a>
                            <a href="{{ route('all.messages') }}" class="btn btn-primary btn-sm rounded-1">{{ translate('Chat With Client') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Bidded Projects --}}
        </div>




        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 layout-top-spacing">
            <div class="widget widget-five">
                <div class="widget-heading">
                    <a href="javascript:void(0)" class="task-info">
                        <div class="usr-avatar">
                            <span>FD</span>
                        </div>
                        <div class="w-title">
                            <h5>Figma Design</h5>
                            <span>Design Project</span>
                        </div>
                    </a>

                    <div class="task-action">
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" id="taskaction" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="19" cy="12" r="1"></circle>
                                    <circle cx="5" cy="12" r="1"></circle>
                                </svg>
                            </a>
                            <div class="dropdown-menu left" aria-labelledby="taskaction" style="will-change: transform;">
                                <a class="dropdown-item" href="javascript:void(0);">View Project</a>
                                <a class="dropdown-item" href="javascript:void(0);">Edit Project</a>
                                <a class="dropdown-item" href="javascript:void(0);">Mark as Done</a>
                            </div>
                        </div>
                    </div>
                </div><hr>

                <div class="widget-content">
                    <h5><a href="{{ route('project.details', $private_project->project->slug) }}" class="text-inherit" target="_blank">{{ $private_project->project->name }}</a></h5>
                    <ul class="list-inline opacity-70 fs-12">
                        <li class="list-inline-item">
                            <i class="las la-clock opacity-40"></i>
                            <span>{{ Carbon\Carbon::parse($private_project->created_at)->diffForHumans() }}</span>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="text-inherit">
                                <i class="las la-stream opacity-40"></i>
                                <span>@if ($private_project->project->project_category != null) {{ $private_project->project->project_category->name }} @else {{ translate('Removed Category') }} @endif</span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <i class="las la-handshake"></i>
                            <span>{{ $private_project->project->type }}</span>
                        </li>
                        <div class="text-muted lh-1-8 layout-top-spacing">
                            <p>{{ $private_project->project->excerpt }}</p>
                        </div>
                    </ul>
                    <!-- <div class="progress-data"> -->
                        <!-- <div class="progress-info">
                            <div class="task-count"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square">
                                    <polyline points="9 11 12 14 22 4"></polyline>
                                    <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                </svg>
                                <p>5 Tasks</p> class="layout-top-spacing"
                            </div>
                            <div class="progress-stats">
                                <p>86.2%</p>
                            </div>
                        </div> -->
                        <!-- <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 65%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div> -->
                    <!-- </div> -->

                    <div class="meta-info">
                        <div class="due-time">
                            <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg> 3 Days Left</p>
                        </div>

                        <div class="avatar--group">
                            <div class="avatar translateY-axis more-group">
                                <span class="avatar-title">+6</span>
                            </div>
                            <div class="avatar translateY-axis">
                                <img alt="avatar" src="{{ asset('templete') }}/src/assets/img/profile-8.jpeg" />
                            </div>
                            <div class="avatar translateY-axis">
                                <img alt="avatar" src="{{ asset('templete') }}/src/assets/img/profile-12.jpeg" />
                            </div>
                            <div class="avatar translateY-axis">
                                <img alt="avatar" src="{{ asset('templete') }}/src/assets/img/profile-19.jpeg" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        @endif
        @empty
        <div class="card overflow-hidden rounded-2 border-gray-light">
            <div class="card-body text-center">
                <i class="las la-frown la-4x mb-4 opacity-40"></i>
                <h4>{{ translate('Nothing Found') }}</h4>
            </div>
        </div>
        @endforelse
        <!-- </div> -->
        <div class="aiz-pagination aiz-pagination-center">
            {{ $private_projects->links() }}
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
    function hiring_modal(project_name, project_price, project_id, user_id) {
        $('input[name=project_name]').val(project_name);
        $('input[name=amount]').val(project_price);
        $('input[name=project_id]').val(project_id);
        $('input[name=user_id]').val(user_id);
        $('#hiring_modal').modal('show');
    }
</script>
@endsection

@section('modal')
<div class="modal fade" id="hiring_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ translate('Confirm Hiring') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body" id="hiring_modal_body">
                <form class="form-horizontal" action="{{ route('hiring_confirmation_store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="user_id" value="" required>
                    <input type="hidden" name="project_id" value="" required>

                    <div class="form-group">
                        <label class="form-label">
                            {{translate('Project')}}
                            <span class="text-danger">*</span>
                        </label>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-sm" name="project_name" value="" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">
                            {{translate('Amount')}}
                            <span class="text-danger">*</span>
                        </label>
                        <div class="form-group">
                            <input type="number" class="form-control form-control-sm" name="amount" value="" min="1" step="0.01" required>
                        </div>
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-sm btn-primary transition-3d-hover mr-1 rounded-1">{{ translate('Confirm') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('templete') }}/src/assets/js/widgets/modules-widgets.js"></script>
@endsection