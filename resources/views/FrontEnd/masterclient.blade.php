<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Agence de voyage </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('assets/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" />
    @yield('styles')
</head>

<body>
    <div class="container-scroller">
        <div class="row p-0 m-0 proBanner" id="proBanner">
            <!-- <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
               </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div> -->
        </div>
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar" style="background-color:#FFF; color:black;padding-top:9%;">
            <div class="sidebar-brand-wrapper  d-lig-flex align-items-center justify-content-center fixed-top" style="background-color:#fff;padding-top:1% ; height:129px ;">
                <center> <a>
                        <img src="{{asset('assets/images/kayan.png')}}" alt="logo" width="90px" height="80px">
                    </a></center>
                <a class="sidebar-brand brand-logo-mini" href="#"><img src="{{asset('assets/images/kayan.png')}}" width="90px" height="80px" alt="logo" /></a>
            </div>
            <ul class="nav" style="padding:5%;">
                <li class="nav-item profile">
                </li>
                <li class="nav-item nav-category">
                    <span class="nav-link">Navigation</span>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{ route('profile.index')}}">
                        <span class="menu-icon">
                            <i class="mdi mdi-account"></i>
                        </span>
                        <span class="menu-title">Profile</span>
                    </a>
                </li>
                <!-- <li class="nav-item menu-items">
                    <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <span class="menu-icon">
                            <i class="mdi mdi-home-city-outline"></i>
                        </span>

                        <span class="menu-title">Hôtels et Chambres</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                @can('hotel-list') <a class="nav-item" style="color:grey;" href="{{ route('hotels.index')}}">Hôtels</a> @endcan</li>
                            <li class="nav-item"> @can('chambre-list')<a class="nav-item" style="color:grey;" href="{{ route('chambre.index')}}">Chambre</a>@endcan</li>
                        </ul>
                    </div>
                </li> -->
                <!-- <li class="nav-item menu-items">
          @can('hotel-list')
          <a class="nav-link" href="{{ route('hotels.index')}}">

            <span class="menu-icon">
              <i class="mdi mdi-home-city-outline"></i>
            </span>
            <span class="menu-title">Hôtels et Chambres</span>
          </a>
          @endcan
        </li> -->
                <!-- <li class="nav-item menu-items">
                    <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <span class="menu-icon">
                            <i class="mdi mdi-airplane"></i>
                        </span>

                        <span class="menu-title">Voyage</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                @can('omra-list') <a class="nav-item" style="color:grey;" href="{{ route('omra.index')}}">OMRA</a> @endcan</li>
                            <li class="nav-item"> @can('voyage-list')<a class="nav-item" style="color:grey;" href="{{ route('voyage.index')}}">Voyage organisé</a>@endcan</li>
                            <li class="nav-item"> @can('vol-list')<a class="nav-item" style="color:grey;" href="{{ route('vol.index')}}">Vol et companie</a>@endcan</li>
                        </ul>
                    </div>
                </li> -->
                <!-- <li class="nav-item menu-items">
                    @can('circuit-list')
                    <a class="nav-link" href="{{ route('circuit.index')}}">
                        <span class="menu-icon">
                            <i class="mdi mdi-map-marker-path"></i>
                        </span>
                        <span class="menu-title">Favo</span>
                    </a>
                    @endcan
                </li> -->
                <li class="nav-item menu-items">

                    <a class="nav-link" href="{{ route('favoris.index')}}">
                        <span class="menu-icon">
                            <i class="mdi mdi-star"></i>
                        </span>
                        <span class="menu-title">Favoris</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <!-- ('suggestion-list') -->
                    <a class="nav-link" href="{{ route('reservation.index')}}">
                        <span class="menu-icon">
                            <i class="mdi mdi-comment"></i>
                        </span>
                        <span class="menu-title">Réservation</span>
                    </a>
                    <!-- -->
                </li>
                <!-- <li class="nav-item menu-items">
                    @can('user-list')
                    <a class="nav-link" href="{{ route('users.index') }}">
                        <span class="menu-icon">
                            <i class="mdi mdi-account"></i>
                        </span>
                        <span class="menu-title">Agent</span>
                    </a>
                    @endcan
                </li> -->
                <!-- <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-account"></i>
              </span>
              <span class="menu-title">Utilisateur</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                 <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li> -->
                <!-- <li class="nav-item"> <a class="nav-link" href="{{ route('login') }}"> Connexion </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('register') }}"> Inscription </a></li>
              </ul>
            </div> -->
                <!-- </li> -->

                <!-- <li class="nav-item menu-items">
                    @can('role-list')
                    <a class="nav-link" href="{{ route('roles.index') }}">
                        <span class="menu-icon">
                            <i class="mdi mdi-account"></i>
                        </span>
                        <span class="menu-title">Rôle</span>
                    </a>
                    @endcan
                </li> -->
                <!-- <li class="nav-item menu-items">
                    @can('permission-list')
                    <a class="nav-link" href="{{ route('permission.index') }}">
                        <span class="menu-icon">
                            <i class="mdi mdi-account"></i>
                        </span>
                        <span class="menu-title">Permission</span>
                    </a>
                    @endcan
                </li> -->
                <!-- <a class="nav-link" href="http://www.bootstrapdash.com/demo/corona-free/jquery/documentation/documentation.html">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Documentation</span>
            </a> -->

            </ul>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <nav class="navbar p-0 fixed-top d-flex flex-row">
                <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
                </div>
                <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch" style="background-color:#F3F8FB;">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>
                    <ul class="navbar-nav w-100">
                        <li class="nav-item w-100">
                            <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                                <input type="text" class="form-control" placeholder="Search products" style="background-color:beige;">
                            </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item dropdown d-none d-lg-block">
                        </li>
                        <li class="nav-item nav-settings d-none d-lg-block">

                        <li class="nav-item dropdown border-left">


                        </li>
                        <li class="nav-item dropdown border-left" style="margin-bottom: -8%;">


                        <a href="{{route('client.interface')}}"><i class=" mdi mdi-earth" style="font-size: 37px;color:black;"></i></a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                                <div class="navbar-profile">
                                    <img class="img-xs rounded-circle" src="{{asset('assets/images/faces/users.png')}}" alt="">
                                    <p class="mb-0 d-none d-sm-block navbar-profile-name" style="color:black;"> {{ Auth::user()->name }}</p>
                                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown" style="background-color:white;">
                                <h6 class="p-3 mb-0" style="color:grey;"><a href="{{route('profile.index')}}">Profile<a></h6>
                                <div class="dropdown-divider"></div>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-logout text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1" style="color:grey;">Quitter</p>
                                    </div>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                        <span class="mdi mdi-format-line-spacing"></span>
                    </button>
                </div>
            </nav>
            <!-- partial -->


            <div class="main-panel">
                <div class="content-wrapper" style="background-color:beige;">

                    @yield('content')
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer" style="background-color:beige;">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">


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
    <script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
    <script src="{{asset('assets/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
    <script src="{{asset('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('assets/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.cookie.js" type="text/javascript')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('assets/js/misc.js')}}"></script>
    <script src="{{asset('assets/js/settings.js')}}"></script>
    <script src="{{asset('assets/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('assets/js/dashboard.js')}}"></script>
    <!-- End custom js for this page -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>