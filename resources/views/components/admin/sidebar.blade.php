<div class="main-menu">
    <!-- Brand Logo -->
    <div class="logo-box">
        <!-- Brand Logo Light -->
        <a class='logo-light' href='{{ route('admin.dashboard') }}'>

            <img src="{{ asset('backend/admin/dashboardAssets/images/logo-light.png') }}" alt="logo" class="logo-lg"
                height="28">
            <img src="{{ asset('backend/admin/dashboardAssets/images/logo-sm.png') }}" alt="small logo" class="logo-sm"
                height="28">

        </a>

        <!-- Brand Logo Dark -->
        <a class='logo-dark' href='{{ route('admin.dashboard') }}'>

            <img src="{{ asset('backend/admin/dashboardAssets/images/logo-dark.png') }}" alt="dark logo" class="logo-lg"
                height="28">
            <img src="{{ asset('backend/admin/dashboardAssets/images/logo-sm.png') }}" alt="small logo" class="logo-sm"
                height="28">

        </a>
    </div>

    <!--- Menu -->
    <div data-simplebar>
        <ul class="app-menu">

            <li class="menu-title">Menu</li>

            <!-- Dashboard -->
            <li class="menu-item">
                <a class='menu-link waves-effect waves-light' href='{{ route('admin.dashboard') }}'>
                    <span class="menu-icon"><i class="bx bx-home-smile"></i></span>
                    <span class="menu-text"> Dashboards </span>
                </a>
            </li>
            <li class="menu-title">User Management</li>

            <!-- Users -->
            <li class="menu-item">
                <a class='menu-link waves-effect waves-light' href='{{ route('admin.user.index') }}'>
                    <span class="menu-icon"><i class="fas fa-users"></i></span>
                    <span class="menu-text"> Users </span>
                </a>
            </li>
            
            <!-- Roles/Permissions -->
            <li class="menu-item">
                <a href="#menuUserManagementui" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="fas fa-user-shield"></i></span>
                    <span class="menu-text"> Roles/Permissions </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuUserManagementui">
                    <ul class="sub-menu">
                        <!-- Role -->
                        <li class="menu-item">
                            <a class="menu-link" href="{{ route('admin.role.index') }}">
                                <span class="menu-icon"><i class="fas fa-user-tag"></i></span>
                                <span class="menu-text">Role</span>
                            </a>
                        </li>
                        <!-- Permission -->
                        <li class="menu-item">
                            <a class="menu-link" href="{{ route('admin.permission.index') }}">
                                <span class="menu-icon"><i class="fas fa-key"></i></span>
                                <span class="menu-text">Permission</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            

            <li class="menu-title">Components</li>
            
            <!-- About -->
            <li class="menu-item">
                <a class="menu-link waves-effect waves-light" href="{{ route('admin.about.section') }}">
                    <span class="menu-icon"><i class="fas fa-id-badge"></i></span>
                    <span class="menu-text">About</span>
                </a>
            </li>
            
            <!-- Service -->
            <li class="menu-item">
                <a class="menu-link waves-effect waves-light" href="{{ route('admin.services.section') }}">
                    <span class="menu-icon"><i class="fas fa-headset"></i></span>
                    <span class="menu-text"> Services</span>
                </a>
            </li>

            <!-- Skills -->
            <li class="menu-item">
                <a class="menu-link waves-effect waves-light" href="{{ route('admin.skills.section') }}">
                    <span class="menu-icon"><i class="fas fa-graduation-cap"></i></span>
                    <span class="menu-text">Skills</span>
                </a>
            </li>

            <!-- Experience -->
            <li class="menu-item">
                <a class="menu-link waves-effect waves-light" href="{{ route('admin.experience.section') }}">
                    <span class="menu-icon"><i class="fas fa-briefcase"></i></span>
                    <span class="menu-text">Experience</span>
                </a>
            </li>

        </ul>
    </div>
</div>
