<!-- Top Bar Start -->
<div class="topbar">

<!-- LOGO -->
<div class="topbar-left">
    <a href="{{ route('dashboard.index') }}" class="logo">
        <span>
            <img src="{{ asset('assets/images/logo.png') }}" alt="" height="24">
        </span>
        <i>
            <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="22">
        </i>
    </a>
</div>

<nav class="navbar-custom">

    <ul class="navbar-right d-flex list-inline float-right mb-0">
        <li class="dropdown notification-list">
            <div class="dropdown notification-list nav-pro-img">
                <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="assets/images/users/user-4.jpg" alt="user" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <a class="dropdown-item text-danger" href="#"><i class="mdi mdi-power text-danger"></i> Logout</a>
                </div>                                                                    
            </div>
        </li>

    </ul>

</nav>

</div>
<!-- Top Bar End -->