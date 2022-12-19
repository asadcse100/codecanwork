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
        <div class="middle-content container-xxl p-0">
            <!-- BREADCRUMB -->
<div class="page-meta">
    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
        <div class="row">
            <div class="col-md-10">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item active" aria-current="page">Experts Lists</li>
                </ol>
            </div>
            <div class="col-md-2">
              <button style="float:right" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg" class="btn btn-outline-info">Add Expert</button>
            </div>
        </div>
    </nav>
  </div>
  <!-- /BREADCRUMB -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="widget-content widget-content-area layout-top-spacing">
                        <form class="" id="sort_projects" action="" method="GET">
                            <div class="card-header row gutters-5" style="justify-content:center">
                                <div class="col-md-3 ml-auto">
                                    <select class="form-control form-control-sm aiz-selectpicker mb-2 mb-md-0" name="user_id" id="user_id"
                                        data-live-search="true" onchange="sort_projects()">
                                        <option value="">{{ translate('Filter by Client') }}</option>
                                        @foreach (App\Models\User::where('user_type', 'client')->get() as $key => $client)
                                            @if ($client->user != null)
                                                <option value="{{ $client->id }}"
                                                    @if ($client->id == $client_id) selected @endif>
                                                    {{ $client->name }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-3 ml-auto">
                                    <select class="form-control form-control-sm aiz-selectpicker mb-2 mb-md-0" name="type" id="type"
                                        onchange="sort_projects()">
                                        <option value="">{{ translate('Sort by') }}</option>
                                        <option value="created_at,asc"
                                            @isset($col_name, $query) @if ($col_name == 'created_at' && $query == 'asc') selected @endif
                                        @endisset>
                                        {{ translate('Time (Old > New)') }}</option>
                                    <option value="created_at,desc"
                                        @isset($col_name, $query) @if ($col_name == 'created_at' && $query == 'desc') selected @endif
                                    @endisset>
                                    {{ translate('Time (New > Old)') }}</option>
                                <option value="price,desc"
                                    @isset($col_name, $query) @if ($col_name == 'price' && $query == 'desc') selected @endif
                                @endisset>
                                {{ translate('Price (High > Low)') }}</option>
                            <option value="price,asc"
                                @isset($col_name, $query) @if ($col_name == 'price' && $query == 'asc') selected @endif
                            @endisset>
                            {{ translate('Price (Low > High)') }}</option>
                    </select>
                </div>

            </div>
        </form>
        <table id="all_freelancer" class="table dt-table-hover">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Package</th>
                    <th>Professional Type</th>
                    <th>Options</th>
                </tr>
            </thead>

          <div class="modal fade bd-example-modal-lg" id="bd-edit-modal-lg" aria-hidden="true"
          aria-labelledby="exampleModalToggleLabel" tabindex="-1">
          <div class="modal-dialog modal-lg">
              <div class="modal-content">
                  <div class="">
                      <!-- Start now   -->
                      <div class="row">
                          <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0">
                              <div class="widget-content widget-content-area blog-create-section">
                                <form id="add_form" class="form-horizontal  needs-validation" action="{{ route('users.store') }}"
                                method="POST" novalidate>
                                      @csrf
                                      <input type="hidden" name="id" id="id">
                                      <div class="row layout-spacing">
                                          <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
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
                                                            <div class="input-group input-group-sm  mb-3">
                                                                <span class="input-group-text"
                                                                    id="inputGroup-sizing-sm">Email
                                                                  </span>
                                                                  <input type="email"
                                                                    class="form-control"
                                                                    id="email" name="email"
                                                                    aria-label="Sizing example input"
                                                                    aria-describedby="inputGroup-sizing-sm"
                                                                    >
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 mb-2">
                                                            <div class="input-group input-group-sm  mb-3 required">
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
                                                            <div class="input-group input-group-sm mb-3 required">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Packages</span>
                                                                <select class="form-select aiz-selectpicker" name="package_id" id="package_id"
                                                                    data-live-search="true" required>
                                                                    @foreach ($packages as $package)
                                                                        <option value="{{ $package->id }}">{{ $package->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 mb-2">
                                                            <div class="row">
                                                                <div class="col-sm-1">
                                                                    <div class="input-group input-group-sm mb-3">
                                                                        <input type="checkbox" name="first_login" id="first_login">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-10">
                                                                    <span>Change Password at First Login</span>
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
                                                        <div
                                                            class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0">
                                                            <div
                                                                class="widget-content widget-content-area blog-create-section">

                                                                <h1>Show Expert Indivitual</h1>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- End new Blog  -->
                                        </div>
                                    </div>



        </table>
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

<script>

    var editor;
        function editId(vid) {
            // A reference to the editor editable element in the DOM.
            const domEditableElement = document.querySelector( '.ck-editor__editable' );
            // Get the editor instance from the editable element.
            const editorInstance = domEditableElement.ckeditorInstance;
    
                $("#id").val(vid);
                $.ajax({
                        method: "GET",
                        url: "{{ route('getFreelancer_details') }}",
                        data: {
                            id: vid
                        }
                    })
                    .done(function(msg) {
                        $('#name').val(msg.name);
                        $('#email').val(msg.email);
                        $('#phone').val(msg.phone);
                        $('#user_type').val(msg.freelancer);
                        $('#professional_type_id').val(msg.professional_type_id);
                       
                        // Use the editor instance API.
                        editorInstance.setData(msg.description );
                        console.log(msg);
                    });
            }
    
        $(document).ready(function () {
    
            $('#all_freelancer').DataTable({
                "processing": true,
                "responsive": true,
                "serverSide": true,
                "ajax":{
                         "url": "{{ route('getFreelancer') }}",
                         "dataType": "json",
                         "type": "POST",
                         "data":{ _token: "{{csrf_token()}}"}
                },
                "columns": [
                    { "data": "id" },
                    { "data": "name" },
                    { "data": "email" },
                    { "data": "phone" },
                    { "data": "user_type" },
                    { "data": "professional_type_id" },
                    {
                        'className': 'text-center',
                        "data": "options"
                    }
                ],
    
                "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
            "<'table-responsive'tr>" +
            "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [10, 20, 50],
            "pageLength": 10
    
            });
        });
    
    
        $('#all_freelancer tfoot th').each( function () {
            var title = $(this).text();
            $(this).html( '<input type="text" class="form-control" placeholder="Search '+title+'" />' );
        } );
    
    </script>



<script type="text/javascript">
    function sort_freelancers(el) {
        $('#sort_freelancers').submit();
    }
</script>
@endsection
