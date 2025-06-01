<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: #253839" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <div class="sidebar-brand-text mx-3">
            Horizon Admin
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span class="{{ request()->routeIs('dashboard') ? 'fw-bold' : '' }}">Dashboard</span>
        </a>
    </li>

    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Travel Packages -->
    <li class="nav-item {{ request()->routeIs('travel-package.*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('travel-package.index') }}">
            <i class="fas fa-fw fa-hotel"></i>
            <span class="{{ request()->routeIs('travel-package.*') ? 'fw-bold' : '' }}">Travel Packages</span>
        </a>
    </li>

    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Travel Gallery -->
    <li class="nav-item {{ request()->routeIs('gallery.*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('gallery.index') }}">
            <i class="fas fa-fw fa-images"></i>
            <span class="{{ request()->routeIs('gallery.*') ? 'fw-bold' : '' }}">Travel Gallery</span>
        </a>
    </li>

    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Transactions -->
    <li class="nav-item {{ request()->routeIs('transaction.*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('transaction.index') }}">
            <i class="fas fa-fw fa-dollar-sign"></i>
            <span class="{{ request()->routeIs('transaction.*') ? 'fw-bold' : '' }}">Transactions</span>
        </a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
