<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Job Portal Admin Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/dropzone.css') }}">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto mr-5">
        <li class="nav-item">
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf

                <button type="submit" class="btn btn-secondary float-right">Logout</button>
            </form>
        </li>
      </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('admin/dashboard')}}" class="brand-link">
      <img src="{{ asset('images/logo03.png') }}" alt="Job Logo" class="brand-image img-rounded elevation-3">
      <span class="brand-text font-weight-light">Job Portal System</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          @if(isset(Auth::user()->photo))
            <img src="{{ asset('storage/user-photos/'.Auth::user()->photo) }}" class="img-circle elevation-2" alt="User Image">
          @else
            <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
          @endif
        </div>
        <div class="info">
            @auth
                <a href="{{url('admin/'.Auth::user()->id.'/edit')}}" class="d-block">{{Auth::user()->name}}</a>
            @endauth
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            
          <li class="nav-item">
            <a href="{{url('admin/users')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
               User
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/companies')}}" class="nav-link">
              <i class="nav-icon fas fa-building"></i>
              <p>
               Company
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/categories')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Categroy
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/jobs')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Job
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/contacts')}}" class="nav-link">
              <i class="nav-icon fas fa-id-badge"></i>
              <p>
               Contact
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/roles')}}" class="nav-link">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
               Role
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <div class="content py-5">
        @yield('admin-content')
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>
<!-- drop zone -->
<script src="{{ asset('js/dropzone.js')}}"></script>
<!-- chart js -->
<script src="{{ asset('js/chart.min.js') }}"></script>
<!-- custom js -->
<script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>