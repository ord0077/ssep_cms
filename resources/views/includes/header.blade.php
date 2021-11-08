<!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ __('site.ssep_agent_dashboard') }}</title>

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

                    <!-- begin::navigation-toggler -->
<!--                     <li class="nav-item navigation-toggler">
                        <a href="#" class="nav-link" title="Hide navigation">
                            <i data-feather="arrow-left"></i>
                        </a>
                    </li> -->
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

                    <!-- begin::header search -->
<!--                     <li class="nav-item">
                        <a href="#" class="nav-link" title="Search" data-toggle="dropdown">
                            <i data-feather="search"></i>
                        </a>
                        <div class="dropdown-menu p-2 dropdown-menu-right">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <div class="input-group-prepend">
                                        <button class="btn" type="button">
                                            <i data-feather="search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li> -->
                    <!-- end::header search -->

                    <!-- begin::header minimize/maximize -->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" title="Fullscreen" data-toggle="fullscreen">
                            <i class="maximize" data-feather="maximize"></i>
                            <i class="minimize" data-feather="minimize"></i>
                        </a>
                    </li>
                    <!-- end::header minimize/maximize -->

                    <!-- begin::header notification dropdown -->
<!--                     <li class="nav-item dropdown">
                        <a href="#" class="nav-link nav-link-notify" title="Notifications" data-toggle="dropdown">
                            <i data-feather="bell"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                            <div class="p-4 text-center d-flex justify-content-between"
                            data-backround-image="assets/media/image/image1.jpg">
                            <h6 class="mb-0">Notifications</h6>
                            <small class="font-size-11 opacity-7">1 unread notifications</small>
                        </div>
                        <div>
                            <ul class="list-group list-group-flush">
                                <li>
                                    <a href="#" class="list-group-item d-flex hide-show-toggler">
                                        <div>
                                            <figure class="avatar avatar-sm m-r-15">
                                                <span class="avatar-title bg-success-bright text-success rounded-circle">
                                                    <i class="ti-user"></i>
                                                </span>
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                New customer registered
                                                <i title="Mark as read" data-toggle="tooltip"
                                                class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
                                            </p>
                                            <span class="text-muted small">20 min ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="text-divider small pb-2 pl-3 pt-3">
                                    <span>Old notifications</span>
                                </li>
                                <li>
                                    <a href="#" class="list-group-item d-flex hide-show-toggler">
                                        <div>
                                            <figure class="avatar avatar-sm m-r-15">
                                                <span class="avatar-title bg-warning-bright text-warning rounded-circle">
                                                    <i class="ti-package"></i>
                                                </span>
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                New Order Recieved
                                                <i title="Mark as unread" data-toggle="tooltip"
                                                class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                            </p>
                                            <span class="text-muted small">45 sec ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                    class="list-group-item d-flex align-items-center hide-show-toggler">
                                    <div>
                                        <figure class="avatar avatar-sm m-r-15">
                                            <span class="avatar-title bg-danger-bright text-danger rounded-circle">
                                                <i class="ti-server"></i>
                                            </span>
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 line-height-20 d-flex justify-content-between">
                                            Server Limit Reached!
                                            <i title="Mark as unread" data-toggle="tooltip"
                                            class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                        </p>
                                        <span class="text-muted small">55 sec ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                class="list-group-item d-flex align-items-center hide-show-toggler">
                                <div>
                                    <figure class="avatar avatar-sm m-r-15">
                                        <span class="avatar-title bg-info-bright text-info rounded-circle">
                                            <i class="ti-layers"></i>
                                        </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 line-height-20 d-flex justify-content-between">
                                        Apps are ready for update
                                        <i title="Mark as unread" data-toggle="tooltip"
                                        class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                    </p>
                                    <span class="text-muted small">Yesterday</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="p-2 text-right">
                    <ul class="list-inline small">
                        <li class="list-inline-item">
                            <a href="#">Mark All Read</a>
                        </li>
                    </ul>
                </div>
            </div>
        </li> -->
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
