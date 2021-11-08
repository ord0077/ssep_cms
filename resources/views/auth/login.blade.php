<!DOCTYPE html>
<html>
<head>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="form-membership">
    <main class="login-form">
        <div class="form-wrapper">

            <!-- logo -->
            <div id="logo">
                <img class="logo" src="assets/media/image/logo.png" alt="image">
                <img class="logo-dark" src="assets/media/image/logo-dark.html" alt="image">
            </div>
            <!-- ./ logo -->

            <h5>{{ __('site.login') }}</h5>

            <!-- form -->
            <form method="POST" action="{{ route('login.custom') }}">
                @csrf
                <div class="form-group">
                    <input type="text" placeholder="{{ __('site.login') }}" id="email" class="form-control" name="email" required
                    autofocus>
                    @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <input type="password" placeholder="{{ __('site.password') }}" id="password" class="form-control" name="password" required>
                    @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="form-group d-flex justify-space-between">
                    <div class="custom-control custom-checkbox" style="padding-left: 0;">
                        <label>
                            <input type="checkbox" name="remember"> {{ __('site.remember_me') }}
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">{{ __('site.login') }}</button>
            </form>
            <!-- ./ form -->

        </div>
    </main>
<!--     <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header text-center">{{ __('site.login') }}</h3>
                        <div class="card-body">
                            <form method="POST" action="{{ route('login.custom') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="{{ __('site.login') }}" id="email" class="form-control" name="email" required
                                    autofocus>
                                    @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <input type="password" placeholder="{{ __('site.password') }}" id="password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> {{ __('site.remember_me') }}
                                        </label>
                                    </div>
                                </div>

                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">{{ __('site.login') }}</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main> -->
</body>

</html>
