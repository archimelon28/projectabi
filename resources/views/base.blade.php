<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SIPAA</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
  <link href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendors/css/vendor.bundle.addons.css')}}" rel="stylesheet">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}">
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html">
          <img src="{!! asset('assets/images/logo.svg') !!}" alt="logo" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="index.html">
          <img src="{!! asset('assets/images/logo-mini.svg') !!}" alt="logo" />
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell"></i>
              <span class="count">4</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <a class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">You have 4 new notifications
                </p>
                <span class="badge badge-pill badge-warning float-right">View all</span>
              </a>
              <div class="dropdown-divider"></div>
            </div>
          </li>
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">Halo</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item p-0">
                <div class="d-flex border-bottom">
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                    <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                  </div>
                </div>
              </a>
              <a class="dropdown-item mt-2">
                Kelola Profil
              </a>
              <a class="dropdown-item">
                Ganti Password
              </a>
              <a class="dropdown-item">
                Lihat Status
              </a>
              
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="text-wrapper">
                  <p class="profile-name">{{Session::get('name')}} </p>
                  <div>
                    <small class="designation text-muted">{{Session::get('nama_roles')}} </small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
              <a href="/update_profil/{{(Session::get('user'))}}"  title="">
                <button class="btn btn-success btn-block">
                  Kelola Profil
                </button>
              </a>
            </div>
          </li>
          @php if (Session::get('roles') == 1)
          {
          @endphp
          <li class="nav-item">
            <a class="nav-link" href="/">
              <i class></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('permohonan.index')}}">
              <i class=""></i>
              <span class="menu-title">Permohonan</span>
            </a>
          </li>
          @php } if (Session::get('roles') == 2)
          { 
          @endphp
          <li class="nav-item">
            <a class="nav-link" href="/">
              <i class></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('mahasiswa.index')}} ">
              <i class=""></i>
              <span class="menu-title">Mahasiswa</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('sdm.index')}} ">
              <i class=""></i>
              <span class="menu-title">SDM</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('prodi.index')}} ">
              <i class=""></i>
              <span class="menu-title">Prodi</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('surat.index')}} ">
              <i class=""></i>
              <span class="menu-title">Surat</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('permohonan.index')}}">
              <i class=""></i>
              <span class="menu-title">Permohonan</span>
            </a>
          </li>
          @php 
          } if (Session::get('roles') == 3)
          { 
          @endphp
          <li class="nav-item">
            <a class="nav-link" href="/">
              <i class></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('permohonan.index')}}">
              <i class=""></i>
              <span class="menu-title">Permohonan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('mahasiswa.index')}} ">
              <i class=""></i>
              <span class="menu-title">Mahasiswa</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('surat.index')}} ">
              <i class=""></i>
              <span class="menu-title">Surat</span>
            </a>
          </li>
          @php } if (Session::get('roles') == 4)
          { 
          @endphp
          <li class="nav-item">
            <a class="nav-link" href="/">
              <i class></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('permohonan.index')}}">
              <i class=""></i>
              <span class="menu-title">Permohonan</span>
            </a>
          </li>
          @php } @endphp
          <li class="nav-item">
            <a class="nav-link" href="{{route('logout')}}">
              <i class=""></i>
              <span class="menu-title">Logout</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
              <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
              <i class="mdi mdi-heart text-danger"></i>
            </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{!! asset('assets/vendors/js/vendor.bundle.base.js') !!}"></script>
  <script src="{!! asset('assets/vendors/js/vendor.bundle.addons.js') !!}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{!! asset('assets/js/off-canvas.js') !!}"></script>
  <script src="{!! asset('assets/js/misc.js') !!}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{!! asset('assets/js/dashboard.js') !!}"></script>
  <!-- End custom js for this page-->
</body>

</html>