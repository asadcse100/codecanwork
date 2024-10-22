 @extends('admin.default.layouts.app')
 @section('css')
     <style>
         .form-horizontal .required .input-group-text:after {
             content: "*";
             color: red;
         }

         .ck-editor__editable[role="textbox"] {
             /* editing area */
             min-height: 250px;
         }

         .ck-content .image {
             /* block images */
             max-width: 80%;
             margin: 20px auto;
         }
     </style>
 @endsection
 @section('content')
     <!--  BEGIN CONTENT AREA  -->
     <div class="layout-px-spacing">
             <!-- BREADCRUMB -->
             <div class="page-meta">
                 <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                     <div class="row">
                         <div class="col-md-10">
                             <ol class="breadcrumb">
                                 <li class="breadcrumb-item active" aria-current="page">Experts Lists</li>
                             </ol>
                         </div>
                         <div class="col-md-2">
                             <button style="float:right" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg"
                                 class="btn btn-outline-info">Add Expert</button>
                         </div>
                     </div>
                 </nav>
             </div>
             <!-- /BREADCRUMB -->
             <div class="row">
                 <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">
                     <div class="widget-content widget-content-area layout-top-spacing">
                         <form class="" id="sort_projects" action="" method="GET">
                             <div class="card-header row gutters-5" style="justify-content:center">
                                 <div class="col-md-3 ml-auto">
                                     <select class="form-control form-control-sm aiz-selectpicker mb-2 mb-md-0"
                                         name="type" id="type" onchange="sort_experts()">
                                         <option value="">{{ translate('Sort by') }}</option>
                                         <option value="created_at,asc"
                                             @isset($col_name, $query) @if ($col_name == 'created_at' && $query == 'asc') selected @endif @endisset>
                                             {{ translate('Time (Old > New)') }}</option>
                                         <option value="created_at,desc"
                                             @isset($col_name, $query) @if ($col_name == 'created_at' && $query == 'desc') selected @endif @endisset>
                                             {{ translate('Time (New > Old)') }}</option>
                                         <option value="balance,desc"
                                             @isset($col_name, $query) @if ($col_name == 'balance' && $query == 'desc') selected @endif @endisset>
                                             {{ translate('Balance (High > Low)') }}</option>
                                         <option value="balance,asc"
                                             @isset($col_name, $query) @if ($col_name == 'balance' && $query == 'asc') selected @endif @endisset>
                                             {{ translate('Balance (Low > High)') }}</option>
                                     </select>
                                 </div>
                             </div>
                         </form>
                         <table id="individual-col-search" class="table dt-table-hover">
                             <thead>
                                 <tr>
                                     <th>#</th>
                                     <th>{{ translate('Name') }}</th>
                                     <th data-breakpoints="md">{{ translate('Email') }}</th>
                                     <th data-breakpoints="md">{{ translate('Package') }}</th>
                                     <th data-breakpoints="md">{{ translate('Verification Status') }}</th>
                                     <th data-breakpoints="md">{{ translate('Balance') }}</th>
                                     <th class="text-right">{{ translate('Options') }}</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 @foreach ($experts as $key => $expert)
                                     <tr>
                                         <td>{{ $key + 1 + ($experts->currentPage() - 1) * $experts->perPage() }}</td>
                                         @if ($expert->user != null)
                                             <td>
                                                 {{ $expert->user->name }}
                                             </td>
                                             <td>
                                                 {{ $expert->user->email }}
                                             </td>
                                         @else
                                             <td>
                                                 {{ translate('Not Found') }}
                                             </td>
                                             <td>
                                                 {{ translate('Not Found') }}
                                             </td>
                                         @endif
                                         <td>
                                             @if ($expert->user->userPackage != null && $expert->user->userPackage->package != null)
                                                 {{ $expert->user->userPackage->package->name }}
                                             @else
                                                 {{ translate('Package Removed') }}
                                             @endif
                                         </td>
                                         @php
                                             $verification = \App\Models\Verification::where('user_id', $expert->user_id)->first();
                                         @endphp
                                         <td>
                                             @if ($verification != null && $verification->verified != 0)
                                                 <span
                                                     class="badge badge-inline badge-success">{{ translate('Verified') }}</span>
                                             @elseif ($verification != null && $verification->verified == 0)
                                                 <span
                                                     class="badge badge-inline badge-primary">{{ translate('New Request') }}</span>
                                             @else
                                                 <span
                                                     class="badge badge-inline badge-danger">{{ translate('Not Recieved Yet') }}</span>
                                             @endif
                                         </td>
                                         <td>
                                             {{ single_price($expert->balance) }}
                                         </td>
                                         <td class="text-right">
                                             @if ($expert->user != null)
                                                 <a href="#" title="{{ translate('Add Wallet Balance') }}"
                                                     onclick="show_wallet_modal({{ $expert->user->id }})">

                                                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="feather feather-plus-circle">
                                                         <circle cx="12" cy="12" r="10"></circle>
                                                         <line x1="12" y1="8" x2="12" y2="16">
                                                         </line>
                                                         <line x1="8" y1="12" x2="16" y2="12">
                                                         </line>
                                                     </svg>
                                                 </a>

                                                 <a href="{{ route('expert_info_show', $expert->user->user_name) }}"
                                                     title="{{ translate('View Details') }}">
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="feather feather-eye">
                                                         <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                         <circle cx="12" cy="12" r="3"></circle>
                                                     </svg>
                                                 </a>
                                             @endif
                                             @if ($expert->user->banned)
                                                 <a href="javascript:void(0)"
                                                     data-href="{{ route('user.ban', $expert->user->id) }}"
                                                     data-target="#unban-modal" title="{{ translate('Unban') }}">

                                                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="feather feather-slash">
                                                         <circle cx="12" cy="12" r="10"></circle>
                                                         <line x1="4.93" y1="4.93" x2="19.07"
                                                             y2="19.07">
                                                         </line>
                                                     </svg>
                                                 </a>
                                             @else
                                                 <a href="{{ route('experts_clients.login', encrypt($expert->user->id)) }}"
                                                     title="{{ translate('Login as expert') }}">

                                                     <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                         height="24" viewBox="0 0 24 24" fill="none"
                                                         stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                         stroke-linejoin="round" class="feather feather-power">
                                                         <path d="M18.36 6.64a9 9 0 1 1-12.73 0"></path>
                                                         <line x1="12" y1="2" x2="12"
                                                             y2="12"></line>
                                                     </svg>
                                                 </a>
                                                 <a href="javascript:void(0)"
                                                     data-href="{{ route('user.ban', $expert->user->id) }}"
                                                     data-target="#ban-modal" title="{{ translate('Ban') }}">
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                         height="24" viewBox="0 0 24 24" fill="none"
                                                         stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                         stroke-linejoin="round" class="feather feather-slash">
                                                         <circle cx="12" cy="12" r="10"></circle>
                                                         <line x1="4.93" y1="4.93" x2="19.07"
                                                             y2="19.07"></line>
                                                     </svg>
                                                 </a>
                                             @endif
                                         </td>
                                     </tr>
                                 @endforeach
                             </tbody>
                         </table>


                         <div class="modal fade bd-example-modal-lg" id="bd-edit-modal-lg" aria-hidden="true"
                             aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                             <div class="modal-dialog modal-lg">
                                 <div class="modal-content">
                                     <div class="">
                                         <!-- Start now   -->
                                         <div class="row">
                                             <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0">
                                                 <div class="widget-content widget-content-area blog-create-section">
                                                     <form id="add_form" class="form-horizontal  needs-validation"
                                                         action="{{ route('users.store') }}" method="POST" novalidate>
                                                         @csrf
                                                         <input type="hidden" name="id" id="id">
                                                         <div class="row layout-spacing">
                                                             <div
                                                                 class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                                 <div class="widget-content widget-content-area blog-create-section">
                                                                     <div class="card">
                                                                         <div class="card-header">
                                                                             <h5>Add User</h5>
                                                                         </div>
                                                                         <div class="row layout-top-spacing p-4">
                                                                             <div class="col-sm-6 mb-2">
                                                                                 <div class="input-group input-group-sm  mb-3 required">
                                                                                     <span class="input-group-text"
                                                                                         id="inputGroup-sizing-sm">Name
                                                                                     </span>
                                                                                     <input type="text"
                                                                                         class="form-control"
                                                                                         id="name" name="name"
                                                                                         aria-label="Sizing example input"
                                                                                         aria-describedby="inputGroup-sizing-sm"
                                                                                         required>
                                                                                 </div>
                                                                             </div>
                                                                             <div class="col-sm-6 mb-2">
                                                                                 <div class="input-group input-group-sm  mb-3 required">
                                                                                     <span class="input-group-text"
                                                                                         id="inputGroup-sizing-sm">Phone
                                                                                     </span>
                                                                                     <input type="number"
                                                                                         class="form-control"
                                                                                         id="phone" name="phone"
                                                                                         aria-label="Sizing example input"
                                                                                         aria-describedby="inputGroup-sizing-sm"
                                                                                         required>
                                                                                 </div>
                                                                             </div>
                                                                             <div class="col-sm-6 mb-2">
                                                                                 <div
                                                                                     class="input-group input-group-sm  mb-3">
                                                                                     <span class="input-group-text"
                                                                                         id="inputGroup-sizing-sm">Email
                                                                                     </span>
                                                                                     <input type="email"
                                                                                         class="form-control"
                                                                                         id="email" name="email"
                                                                                         aria-label="Sizing example input"
                                                                                         aria-describedby="inputGroup-sizing-sm">
                                                                                 </div>
                                                                             </div>
                                                                             <div class="col-sm-6 mb-2">
                                                                                 <div
                                                                                     class="input-group input-group-sm  mb-3 required">
                                                                                     <span class="input-group-text"
                                                                                         id="inputGroup-sizing-sm">Password
                                                                                     </span>
                                                                                     <input type="text"
                                                                                         class="form-control"
                                                                                         id="password" name="password"
                                                                                         aria-label="Sizing example input"
                                                                                         aria-describedby="inputGroup-sizing-sm"
                                                                                         required>
                                                                                 </div>
                                                                             </div>

                                                                             <div class="col-sm-6 mb-2">
                                                                                 <div
                                                                                     class="input-group input-group-sm mb-3 required">
                                                                                     <span class="input-group-text"
                                                                                         id="inputGroup-sizing-sm">Packages</span>
                                                                                     <select
                                                                                         class="form-select aiz-selectpicker"
                                                                                         name="package_id" id="package_id"
                                                                                         data-live-search="true" required>
                                                                                         @foreach ($packages as $package)
                                                                                             <option
                                                                                                 value="{{ $package->id }}">
                                                                                                 {{ $package->name }}
                                                                                             </option>
                                                                                         @endforeach
                                                                                     </select>
                                                                                 </div>
                                                                             </div>
                                                                             <div class="col-sm-6 mb-2">
                                                                                 <div class="row">
                                                                                     <div class="col-sm-1">
                                                                                         <div
                                                                                             class="input-group input-group-sm mb-3">
                                                                                             <input type="checkbox"
                                                                                                 name="first_login"
                                                                                                 id="first_login">
                                                                                         </div>
                                                                                     </div>
                                                                                     <div class="col-sm-10">
                                                                                         <span>Change Password at First
                                                                                             Login</span>
                                                                                     </div>
                                                                                 </div>
                                                                             </div>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                         <div class="modal-footer">
                                                             <span type="button" data-bs-dismiss="modal"
                                                                 class="badge outline-badge-danger mb-2 me-4">Close</span>
                                                             <button type="submit"
                                                                 class="badge outline-badge-success mb-2 me-4">Save</button>
                                                         </div>
                                                 </div>
                                                 </form>
                                             </div>
                                         </div>
                                     </div>
                                 </div>

                             </div>
                             <!-- End new Blog  -->
                         </div>
                         <div class="modal fade bd-example-modal-lg" id="bd-edit-modal-lg" aria-hidden="true"
                             aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                             <div class="modal-dialog modal-lg">
                                 <div class="modal-content">
                                     <div class="">
                                         <!-- Start now   -->
                                         <div class="row">
                                             <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0">
                                                 <div class="widget-content widget-content-area blog-create-section">

                                                     <h1>Show Expert Indivitual</h1>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>

                                 </div>
                                 <!-- End new Blog  -->
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
     @include('admin.default.partials.ban_modal')
     @include('admin.default.partials.unban_modal')
     @include('admin.default.partials.wallet_recharge_admin')
 @endsection
 @section('script')
     <script type="text/javascript">
         function sort_experts(el) {
             $('#sort_experts').submit();
         }

         function show_wallet_modal(user_id) {
             $('#wallet_user_id').val(user_id);
             $('#wallet_modal_admin').modal('show');
         }
     </script>
 @endsection
