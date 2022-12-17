<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3 fw-bold" href="{{route('dashboard')}}">Dashboard</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <div class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0"></div>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li>
                    <a 
                    class="dropdown-item" 
                    href="{{route('profile.view')}}">Profile
                    </a>
                </li>
                <li><a class="dropdown-item" href="{{route('media.view')}}">Media</a></li>
                <li><a class="dropdown-item" href="{{route('settings.edit')}}">Settings</a></li>
                <li><a class="dropdown-item" href="{{route('cv.create')}}">Upload CV</a></li>
                <li><a class="dropdown-item" href="{{route('profile.edit.password')}}">Change Password</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button 
                        type="button" 
                        class="dropdown-item"
                        onclick="event.preventDefault(); this.closest('form').submit();"
                        >
                            <i class="fa-solid fa-right-from-bracket"></i>
                            &ensp;Logout
                        </button>
                    </form>
                </li>
            </ul>
        </li>
    </ul>
</nav>