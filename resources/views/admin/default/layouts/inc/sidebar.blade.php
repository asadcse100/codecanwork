<div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar">

        <div class="navbar-nav theme-brand flex-row  text-center">
            <div class="nav-logo">
                <div class="nav-item theme-logo">
                    <img src="{{ asset('templete') }}/src/assets/img/zerop.png" class="navbar-logo" alt="logo"
                            style="height: 100px; width:auto; margin-left: 40px">
                </div>
                {{-- <div class="nav-item theme-text">
                    <a href="{{Route('admin.dashboard')}}" class="nav-link"> ZEROPLUS </a>
                </div> --}}
            </div>
            <div class="nav-item sidebar-toggle">
                <div class="btn-toggle sidebarCollapse">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-chevrons-left">
                        <polyline points="11 17 6 12 11 7"></polyline>
                        <polyline points="18 17 13 12 18 7"></polyline>
                    </svg>
                </div>
            </div>
        </div>

        <ul class="list-unstyled menu-categories" id="accordionExample">
            @can('show dashboard')
            <li class="menu active">
                <a href="{{ route('admin.dashboard') }}"  aria-expanded="true"
                    class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-home">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        <span>Dashboard</span>
                    </div>
                </a>
            </li>
            @endcan
<!-- Lawyer-->
<li class="menu">
    <a href="#LawChamber" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
        <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="feather feather-list">
                <line x1="8" y1="6" x2="21" y2="6"></line>
                <line x1="8" y1="12" x2="21" y2="12"></line>
                <line x1="8" y1="18" x2="21" y2="18"></line>
                <line x1="3" y1="6" x2="3.01" y2="6"></line>
                <line x1="3" y1="12" x2="3.01" y2="12"></line>
                <line x1="3" y1="18" x2="3.01" y2="18"></line>
            </svg>
            <span>Law Chamber</span>
        </div>
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="feather feather-chevron-right">
                <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
        </div>
    </a>
    <ul class="collapse submenu list-unstyled" id="LawChamber" data-bs-parent="#accordionExample">
        <li>
            <a href="{{Route('lawyer-act.index')}}">Acts</a>
        </li>
        <li>
            <a href="{{ Route('admin-case_stage.index') }}">Case Stage Setup</a>
        </li>
        <li>
            <a href="{{ Route('admin-case_category.index') }}"> Case Category</a>
        </li>
        <li>
            <a href="{{ Route('admin-lawyer-court.index') }}"> Court </a>
        </li>
        <li>
            <a href="{{ Route('admin-court_category.index') }}"> Court Category </a>
        </li>
    </ul>
</li>
<!-- End Lawyer-->
<!-- Doctor-->
{{-- <li class="menu">
    <a href="#DoctorChamber" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
        <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="feather feather-list">
                <line x1="8" y1="6" x2="21" y2="6"></line>
                <line x1="8" y1="12" x2="21" y2="12"></line>
                <line x1="8" y1="18" x2="21" y2="18"></line>
                <line x1="3" y1="6" x2="3.01" y2="6"></line>
                <line x1="3" y1="12" x2="3.01" y2="12"></line>
                <line x1="3" y1="18" x2="3.01" y2="18"></line>
            </svg>
            <span>Doctor Chamber</span>
        </div>
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="feather feather-chevron-right">
                <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
        </div>
    </a>
    <ul class="collapse submenu list-unstyled" id="DoctorChamber" data-bs-parent="#accordionExample">
        <li>
            <a href="{{ Route('admin_doctor_appointment.index') }}">Appointments</a>
        </li>
        <li>
            <a href="{{ Route('admin_doctor_Specialities.index') }}">Specialities</a>
        </li>
        <li>
            <a href="{{ Route('admin_doctor.index') }}">Doctor</a>
        </li>
    </ul>
</li> --}}
<!-- End doctor-->
            <!-- update by Asad package-->
            <li class="menu">
                <a href="#Employee" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="feather feather-users"
                  >
                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                    <circle cx="9" cy="7" r="4"></circle>
                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                  </svg>
                        <span>Employee</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="Employee" data-bs-parent="#accordionExample">
                    @can('Show all staffs')
                    <li>
                        <a href="{{ route('staffs.index') }}"
                            class="{{ areActiveRoutes(['roles.create', 'roles.edit']) }}"> All Staffs </a>
                    </li>
                    @endcan
                    @can('show employee roles')
                    <li>
                        <a href="{{ route('roles.index') }}"
                            class="{{ areActiveRoutes(['roles.create', 'roles.edit']) }}"> Employee Roles </a>
                    </li>
                    @endcan
                </ul>
            </li>
            <!-- End Update by Asad package-->

            <!-- update by Asad project-->
            {{-- <li class="menu">
                <a href="#project" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-list">
                            <line x1="8" y1="6" x2="21" y2="6"></line>
                            <line x1="8" y1="12" x2="21" y2="12"></line>
                            <line x1="8" y1="18" x2="21" y2="18"></line>
                            <line x1="3" y1="6" x2="3.01" y2="6"></line>
                            <line x1="3" y1="12" x2="3.01" y2="12"></line>
                            <line x1="3" y1="18" x2="3.01" y2="18"></line>
                        </svg>
                        <span>Projects</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="project" data-bs-parent="#accordionExample">

                    <li>
                        <a href="{{ route('all_projects') }}"> All Projects </a>
                    </li>
                    <li>
                        <a href="{{ route('running_projects') }}"> Running Project</a>
                    </li>
                    <li>
                        <a href="{{ route('open_projects') }}"> Open Project </a>
                    </li>
                    <li>
                        <a href="{{ route('cancelled_projects') }}"> Cancelled Project</a>
                    </li>
                    <li>
                        <a href="{{ route('cancel-project-request.index') }}"> Project Cancel Request </a>
                    </li>
                    <li>
                        <a href="{{ route('project-categories.index') }}"
                            class="{{ areActiveRoutes(['project-categories.index', 'project-categories.edit', 'project-categories.destroy']) }}">
                            Project Category </a>
                    </li>
                </ul>
            </li> --}}
            <!-- End Update by Asad project-->

            <!-- update by Asad services-->
            <li class="menu">
                <a href="#service" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="feather feather-layers"
                  >
                    <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                    <polyline points="2 17 12 22 22 17"></polyline>
                    <polyline points="2 12 12 17 22 12"></polyline>
                  </svg>
                        <span>Services</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="service" data-bs-parent="#accordionExample">
                    <li>
                        <a href="{{ route('all_services_admin') }}"> All Services </a>
                    </li>
                    <li>
                        <a href="{{ route('cancelled_services_admin') }}"> Cancelled Services </a>
                    </li>
                    <li>
                        <a href="{{ route('service_cancellation.requests') }}"> Cancellation Requests </a>
                    </li>
                </ul>
            </li>
            <!-- End Update by Asad services-->

            <!-- update by Asad bookmark_project-->
            <li class="menu">
                <a href="{{ route('verification_requests') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-message-square">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                        </svg>
                        <span>Verification</span>
                    </div>
                </a>
            </li>
            <!-- End Update by Asad bookmark_project-->

            <!-- update by Asad bookmark_project-->

            {{-- <li class="menu">
                <a href="{{ route('chat.admin.all') }}" aria-expanded="false"
                    class="dropdown-toggle {{ areActiveRoutes(['chat.admin.all', 'chat_details_for_admin']) }}">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-message-square">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                        </svg>
                        <span>Users Chats</span>
                    </div>
                </a>
            </li> --}}

            <!-- End Update by Asad bookmark_project-->

            <!-- update by Asad package-->
            <li class="menu">
                <a href="#Freelancers" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="feather feather-zap"
                  >
                    <polygon
                      points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"
                    ></polygon>
                  </svg>
                        <span>Experts</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="Freelancers" data-bs-parent="#accordionExample">
                    <li>
                        <a href="{{ route('all_freelancers') }}"
                            class="{{ areActiveRoutes(['all_freelancers', 'freelancer_info_show']) }}"> All
                            Experts </a>
                    </li>
                    <li>
                        <a href="{{ route('freelancer_package.index', 'freelancer') }}"
                            class="{{ areActiveRoutes(['freelancer_package.index', 'freelancer_package.create', 'freelancer_package.edit']) }}">
                            Expert Packages </a>
                    </li>
                    <li>
                        <a href="{{ route('skills.index') }}"
                            class="{{ areActiveRoutes(['skills.index', 'skills.edit']) }}"> Expert Skills </a>
                    </li>
                    <li>
                        <a href="{{ route('badges.index') }}"
                            class="{{ areActiveRoutes(['badges.index', 'badges.create', 'badges.edit']) }}">
                            Expert Badges </a>
                    </li>
                </ul>
            </li>
            <!-- End Update by Asad package-->

            <!-- update by Asad package-->
            {{-- <li class="menu">
                <a href="#Clients" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-list">
                            <line x1="8" y1="6" x2="21" y2="6"></line>
                            <line x1="8" y1="12" x2="21" y2="12"></line>
                            <line x1="8" y1="18" x2="21" y2="18"></line>
                            <line x1="3" y1="6" x2="3.01" y2="6"></line>
                            <line x1="3" y1="12" x2="3.01" y2="12"></line>
                            <line x1="3" y1="18" x2="3.01" y2="18"></line>
                        </svg>
                        <span>Clients</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="Clients" data-bs-parent="#accordionExample">
                    <li>
                        <a href="{{ route('all_clients') }}" class="{{ areActiveRoutes(['client_info_show']) }}">
                            All Clients </a>
                    </li>
                    <li>
                        <a href="{{ route('client_package.index', 'client') }}"
                            class="{{ areActiveRoutes(['client_package.index', 'client_package.create', 'client_package.edit']) }}">
                            Client Packages </a>
                    </li>
                    <li>
                        <a href="{{ route('client_badges_index') }}"
                            class="{{ areActiveRoutes(['client_badges_index', 'client_badges_edit']) }}"> Freelancer
                            Badges </a>
                    </li>
                </ul>
            </li> --}}
            <!-- End Update by Asad package-->

            <!-- update by Asad package-->
            <li class="menu">
                <a href="#Reviews" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="feather feather-map"
                  >
                    <polygon
                      points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"
                    ></polygon>
                    <line x1="8" y1="2" x2="8" y2="18"></line>
                    <line x1="16" y1="6" x2="16" y2="22"></line>
                  </svg>
                        <span>Reviews</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="Reviews" data-bs-parent="#accordionExample">
                    <li>
                        <a href="{{ route('reviews.freelancer') }}"
                            class="{{ areActiveRoutes(['reviews.freelancer', 'freelancer_review_details']) }}">
                            Experts Reviews </a>
                    </li>
                    <li>
                        <a href="{{ route('reviews.client') }}"
                            class="{{ areActiveRoutes(['reviews.client', 'client_review_details']) }}"> Client
                            Reviews
                        </a>
                    </li>
                </ul>
            </li>
            <!-- End Update by Asad package-->

            <!-- update by Asad package-->
            <li class="menu">
                <a href="#Accountings" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="feather feather-calendar"
                  >
                    <rect
                      x="3"
                      y="4"
                      width="18"
                      height="18"
                      rx="2"
                      ry="2"
                    ></rect>
                    <line x1="16" y1="2" x2="16" y2="6"></line>
                    <line x1="8" y1="2" x2="8" y2="6"></line>
                    <line x1="3" y1="10" x2="21" y2="10"></line>
                  </svg>
                        <span>Accountings</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="Accountings" data-bs-parent="#accordionExample">
                    {{-- <li>
                        <a href="{{ route('payment_history_for_admin') }}">
                            Project Payments </a>
                    </li> --}}
                    <li>
                        <a href="{{ route('package_payment_history_for_admin') }}"> Package Payments
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('service_payment_history_for_admin') }}"> Service Payments
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('withdraw_request.index') }}"> Expert Withdraw Requests
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('freelancer_payment.index') }}"> Expert Payouts
                        </a>
                    </li>
                </ul>
            </li>
            <!-- End Update by Asad package-->


            <!-- update by Asad package-->
            <li class="menu">
                <a href="#resources" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="feather feather-map"
                  >
                    <polygon
                      points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"
                    ></polygon>
                    <line x1="8" y1="2" x2="8" y2="18"></line>
                    <line x1="16" y1="6" x2="16" y2="22"></line>
                  </svg>
                        <span>Resources System</span>
                    </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                </a>
                <ul class="collapse submenu list-unstyled" id="resources" data-bs-parent="#accordionExample">
                    <li>
                        <a href="{{ route('resources.index') }}"
                            class="{{ areActiveRoutes(['resources.create', 'resources.edit']) }}">
                            All Resources </a>
                    </li>
                    <li>
                        <a href="{{ route('resources-category.index') }}"
                            class="{{ areActiveRoutes(['resources-category.create', 'resources-category.edit']) }}"> Categories
                        </a>
                    </li>
                </ul>
            </li>
            <!-- End Update by Asad package-->

            <!-- update by Asad package-->
            <li class="menu">
                <a href="#Website" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="feather feather-airplay"
                  >
                    <path
                      d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"
                    ></path>
                    <polygon points="12 15 17 21 7 21 12 15"></polygon>
                  </svg>
                        <span>Website</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="Website" data-bs-parent="#accordionExample">
                    <li>
                        <a href="{{ route('website.header') }}"> Header </a>
                    </li>
                    <li>
                        <a href="{{ route('website.footer') }}"> Footer </a>
                    </li>
                    <li>
                        <a href="{{ route('website.pages') }}" class="{{ areActiveRoutes(['website.home']) }}">
                            Pages </a>
                    </li>
                    <li>
                        <a href="{{ route('website.appearance') }}"> Appearance </a>
                    </li>
                </ul>
            </li>
            <!-- End Update by Asad package-->

            <!-- update by Asad setting-->
            <li class="menu">
                <a href="#setting" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="feather feather-lock"
                  >
                    <rect
                      x="3"
                      y="11"
                      width="18"
                      height="11"
                      rx="2"
                      ry="2"
                    ></rect>
                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                  </svg>
                        <span>Setting</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="setting" data-bs-parent="#accordionExample">
                    <li>
                        <a href="{{ route('general-config.index') }}"> General </a>
                    </li>
                    <li>
                        <a href="{{ route('general_configuration') }}"> Activation </a>
                    </li>
                    <li>
                        <a href="{{ route('global.referral') }}"> Referrals </a>
                    </li>
                    {{-- <li>
                        <a href="{{ route('languages.index') }}"
                            class="{{ areActiveRoutes(['languages.edit', 'languages.show']) }}"> System Languages </a>
                    </li> --}}
                    <li>
                        <a href="{{ route('currencies.index') }}"
                            class="{{ areActiveRoutes(['currencies.create', 'currencies.edit']) }}"> System Currency
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('email-config.index') }}"> Email </a>
                    </li>
                    <li>
                        <a href="{{ route('payment-config.index') }}"> Payment Gateways </a>
                    </li>
                    <li>
                        <a href="{{ route('social-media-config.index') }}"> 3rd Party API </a>
                    </li>
                    <li>
                        <a href="{{ route('freelancer_payment_settings') }}"> Expert Payment </a>
                    </li>
                </ul>
            </li>
            <!-- End Update by Asad setting-->
        </ul>

    </nav>

</div>
