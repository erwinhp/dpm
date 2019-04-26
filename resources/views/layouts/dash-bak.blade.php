<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="icon" href="{{URL::to('/')}}/pln.png">
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="{{URL::to('/')}}/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/libs/css/style.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>RECAP AP2T</title>

</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
            <div class="dashboard-header">
              <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
              <a class="navbar-brand" href="{{URL::to('/')}}">REKAP DPM</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <!--<span class="navbar-toggler-icon"></span>-->
              </button>
            </div>
              </nav>
      </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
           <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="{{URL::to('/')}}/home">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                          <?php
                          /*
                            <li class="nav-item ">
                                <a class="nav-link active" href="{{URL::to('/')}}/home" data-toggle="" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-home"></i>Beranda <span class="badge badge-success">6</span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{URL::to('/')}}/admin/chart" data-toggle="" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fas fa-fw fa-chart-pie"></i>  Chart</a>
                             </li>
                           <li class="nav-item ">
                               <a class="nav-link" href="{{URL::to('/')}}/admin/user" data-toggle="" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fas fa-user mr-2"></i>  Pengguna</a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link" href="{{URL::to('/')}}/req" data-toggle="" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fas fa-info-circle"></i>  Request</a>
                             </li>
                             */
                             ?>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Tabel</a>
                                <div id="submenu-5" class="collapse submenu" style="">
                                    <ul class="nav flex-column">

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{URL::to('/')}}/iexcel">Input Excel</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{URL::to('/')}}/ijam">Filter Jam</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>


                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                      @yield('content')
                    <!-- ============================================================== -->
                  </div>

                  </div>
                </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <!-- Footer -->
            <footer class="page-footer font-small mdb-color darken-3 pt-4">

                <!-- Footer Elements -->
                <div class="container">

                  <!--Grid row-->
                  <div class="row d-flex justify-content-center">

                    <!--Grid column-->
                    <div class="col-md-6">

                      <!-- Video -->
                      <div class="embed-responsive embed-responsive-16by9 mb-4">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vlDzYIIOYmM" allowfullscreen></iframe>
                      </div>

                    </div>
                    <!--Grid column-->
                  </div>
                       <!--Grid row-->

                     </div>
                     <!-- Footer Elements -->

                     <!-- Copyright -->
                     <div class="footer-copyright text-center py-3">© 2019 Copyright:
                       Erwin
                     </div>
                     <!-- Copyright -->

                   </footer>
                   <!-- Footer -->

            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->


    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->

    <!-- jquery 3.3.1 -->
    <script src="{{URL::to('/')}}/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="{{URL::to('/')}}/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>

    <!-- slimscroll js -->
    <script src="{{URL::to('/')}}/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="{{URL::to('/')}}/assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="{{URL::to('/')}}/assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="{{URL::to('/')}}/assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="{{URL::to('/')}}/assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="{{URL::to('/')}}/assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="{{URL::to('/')}}/assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="{{URL::to('/')}}/assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="{{URL::to('/')}}/assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="{{URL::to('/')}}/assets/libs/js/dashboard-ecommerce.js"></script>
    <script src="{{URL::to('/')}}/assets/libs/js/dashboard-ecommerce.js"></script>
    <script src="{{URL::to('/')}}/asset/js/main.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>



</body>
</html>
