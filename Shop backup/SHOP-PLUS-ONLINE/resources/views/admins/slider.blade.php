<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">HOME</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo-a" aria-expanded="true" aria-controls="collapseTwo-a">
            <i class="fas fa-download"></i>
            <span>Download</span>
        </a>
        <div id="collapseTwo-a" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('export') }}">Export excel</a>
                <a class="collapse-item" href="">Import excel</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Users</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            @can('crud-user')
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="">List</a>
            </div>
            @endcan
        </div>
    </li>
    <hr class="sidebar-divider">

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fab fa-product-hunt"></i>
            <span>Products</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            @can('crud-user')
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('product.list')}}">List</a>
                <a class="collapse-item" href="{{route('product.create')}}">Create</a>
            </div>
            @endcan
        </div>
    </li>
    <hr class="sidebar-divider">


    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilitiess" aria-expanded="true" aria-controls="collapseUtilitiess">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Categories</span>
        </a>
        <div id="collapseUtilitiess" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            @can('crud-user')
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href={{route('category.list')}}>List</a>
                <a class="collapse-item" href="{{route('category.create')}}">Create</a>
            </div>
            @endcan
        </div>
    </li>



    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
