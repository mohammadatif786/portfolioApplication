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

            <li class="menu-item">
                <a class='menu-link waves-effect waves-light' href='{{ route('admin.dashboard') }}'>
                    <span class="menu-icon"><i class="bx bx-home-smile"></i></span>
                    <span class="menu-text"> Dashboards </span>
                </a>
            </li>

            <li class="menu-title">Components</li>

            <li class="menu-item">
                <a href="#menuComponentsui" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"> 📄  </span>
                    <span class="menu-text"> Pages </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuComponentsui">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a class="menu-link" href="{{ route('admin.about.section') }}">
                                <span class="menu-text">About</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
