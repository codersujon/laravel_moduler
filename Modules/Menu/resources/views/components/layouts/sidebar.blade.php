<!-- Sidenav Menu Start -->
<div class="sidenav-menu">

    <!-- Brand Logo -->
    <a href="index.html" class="logo">
        <span class="logo-light">
            <span class="logo-lg"><img src="{{ asset('backend')}}/assets/images/logo.png" alt="logo"></span>
            <span class="logo-sm"><img src="{{ asset('backend')}}/assets/images/logo-sm.png" alt="small logo"></span>
        </span>

        <span class="logo-dark">
            <span class="logo-lg"><img src="{{ asset('backend')}}/assets/images/logo-dark.png" alt="dark logo"></span>
            <span class="logo-sm"><img src="{{ asset('backend')}}/assets/images/logo-sm.png" alt="small logo"></span>
        </span>
    </a>

    <!-- Sidebar Hover Menu Toggle Button -->
    <button class="button-sm-hover">
        <i class="ti ti-circle align-middle"></i>
    </button>

    <!-- Full Sidebar Menu Close Button -->
    <button class="button-close-fullsidebar">
        <i class="ti ti-x align-middle"></i>
    </button>

    <div data-simplebar>

        <!--- Sidenav Menu -->
        <ul class="side-nav">
            <li class="side-nav-title">Dash</li>
            <li class="side-nav-title mt-2">Apps & Pages</li>

            @foreach ($sidebars as $item)
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarHospital{{ $loop->iteration }}" aria-expanded="false"
                    aria-controls="sidebarHospital" class="side-nav-link">
                    <span class="menu-icon"><i class="{{ $item->icon }}"></i></span>
                    <span class="menu-text">{{ $item->title }}</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarHospital{{ $loop->iteration }}">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="apps-hospital-doctors.html" class="side-nav-link">
                                <span class="menu-text">Doctors</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="apps-hospital-doctor-details.html" class="side-nav-link">
                                <span class="menu-text">Doctor Details</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="apps-hospital-add-doctors.html" class="side-nav-link">
                                <span class="menu-text">Add Doctors</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="apps-hospital-patients.html" class="side-nav-link">
                                <span class="menu-text">Patients</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="apps-hospital-patient-details.html" class="side-nav-link">
                                <span class="menu-text">Patient Details</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="apps-hospital-add-patients.html" class="side-nav-link">
                                <span class="menu-text">Add Patients</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="apps-hospital-appointments.html" class="side-nav-link">
                                <span class="menu-text">Appointments</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="apps-hospital-payments.html" class="side-nav-link">
                                <span class="menu-text">Payments</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="apps-hospital-departments.html" class="side-nav-link">
                                <span class="menu-text">Departments</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="apps-hospital-reviews.html" class="side-nav-link">
                                <span class="menu-text">Reviews</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="apps-hospital-contacts.html" class="side-nav-link">
                                <span class="menu-text">Hospital Contacts</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="apps-hospital-staffs.html" class="side-nav-link">
                                <span class="menu-text">Staffs</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            @endforeach
        </ul>

        <div class="clearfix"></div>
    </div>
</div>
<!-- Sidenav Menu End -->
