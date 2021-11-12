<!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ __('site.ssep_agent_dashboard') }}</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/media/image/favicon.png') }}"/>

        <!-- Plugin styles -->
        <link rel="stylesheet" href="{{ asset('vendors/bundle.css')}}" type="text/css">

        <!-- App styles -->
        <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}" type="text/css">

        <!-- DataTable -->
        <link rel="stylesheet" href="{{ asset('vendors/dataTable/dataTables.min.css') }}" type="text/css">

        <!-- Prism -->
        <link rel="stylesheet" href="{{ asset('vendors/prism/prism.css') }}" type="text/css">

        <!-- Vmap -->
        <link rel="stylesheet" href="{{asset('vendors/vmap/jqvmap.min.css')}}">
    </head>
    <style type="text/css">
        #toast-container{
            left: 50%;
        }

        #toast-container>div{
            min-width: 300px;
            width: auto;
        }
    </style>
    <body>

        <!-- begin::preloader-->
        <div class="preloader">
            <div class="preloader-icon"></div>
        </div>
        <!-- end::preloader -->

        <!-- begin::header -->
        <div class="header">
            @if(session()->has('message'))
            <div id="toast-container">
                <div class="toast toast-success toast-top-center toast-title" id="successMessage">
                    {{ session()->get('message') }}
                </div>
            </div>
            @endif
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
                        <a class="nav-link" data-toggle="dropdown" aria-expanded="false">
                            <figure class="avatar avatar-sm">
                                <img src="{{ asset('assets/media/image/user/calling-avatar.jpg') }}" class="rounded-circle" alt="avatar">
                            </figure>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="{{ route('signout') }}" data-toggle="tooltip" data-placement="right" title="Logout">
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
    </div>
    <!-- end::header -->
    <script type="text/javascript">
        setTimeout(function() {
            $('#successMessage').slideUp('fast');
        }, 3000); // <-- time in milliseconds

    </script>
