
    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-image">
                    <img src="/images/prof.png" width="200" height="200" class="img-circle" id="sidebar-image">
                    <span class="col-md-offset-2">Learned Words: 100</span>
                </li>
                <li><a href="#">Words</a></li>
                <li><a href="#">Categories</a></li>
                <li><a href="#">Users</a></li>
                <li><a href="{{ route('roles') }}">Roles</a></li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">
                    <i class="glyphicon glyphicon-menu-hamburger"></i>
                </a>
                @yield('content')
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
