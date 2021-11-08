<!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>SSEP - Agent Dashboard</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="assets/media/image/favicon.png"/>

        <!-- Plugin styles -->
        <link rel="stylesheet" href="vendors/bundle.css" type="text/css">

        <!-- App styles -->
        <link rel="stylesheet" href="assets/css/app.min.css" type="text/css">

        <!-- DataTable -->
        <link rel="stylesheet" href="vendors/dataTable/dataTables.min.css" type="text/css">

        <!-- Prism -->
        <link rel="stylesheet" href="vendors/prism/prism.css" type="text/css">
    </head>
    <body>

        <!-- begin::preloader-->
        <div class="preloader">
            <div class="preloader-icon"></div>
        </div>
        <!-- end::preloader -->

        <!-- begin::header -->
        <div class="header">

            <div>
                <ul class="navbar-nav">
                    <li class="nav-item navigation-toggler mobile-toggler">
                        <a href="#" class="nav-link" title="Show navigation">
                            <i data-feather="menu"></i>
                        </a>
                    </li>
                    <!-- end::navigation-toggler -->
                </ul>
            </div>

            <div>
                <ul class="navbar-nav">
                    <!-- begin::header minimize/maximize -->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" title="Fullscreen" data-toggle="fullscreen">
                            <i class="maximize" data-feather="maximize"></i>
                            <i class="minimize" data-feather="minimize"></i>
                        </a>
                    </li>
                    <!-- end::header minimize/maximize -->


                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown" aria-expanded="false">
                            <figure class="avatar avatar-sm">
                                <img src="assets/media/image/user/calling-avatar.jpg" class="rounded-circle" alt="avatar">
                            </figure>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" data-toggle="tooltip" data-placement="right" title="Logout">
                            <i data-feather="log-out"></i>
                        </a>
                    </li>
                    <!-- end::header notification dropdown -->
                </ul>

                <!-- begin::mobile header toggler -->
                <ul class="navbar-nav d-flex align-items-center">
                    <li class="nav-item header-toggler">
                        <a href="#" class="nav-link">
                            <i data-feather="arrow-down"></i>
                        </a>
                    </li>
                </ul>
                <!-- end::mobile header toggler -->
            </div>

        </div>
<!-- end::header -->