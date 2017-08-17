@extends('layouts.main')

@section('content')

    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-image">
                    <img src="/prof.png" width="200" height="200" class="img-circle" id="sidebar-image">
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle"><i class="glyphicon glyphicon-menu-hamburger"></i></a>
                <h1>Dashboard</h1>
                @include('dashboard.content')
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
@endsection
