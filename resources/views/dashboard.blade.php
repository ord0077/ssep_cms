@include('includes.header')
<div id="main">
    @include('includes.sidebar')

    <!-- begin::main content -->
    <div class="main-content">
        <div class="page-header">
            <div class="container-fluid d-sm-flex justify-content-between">
                <h4>{{ __('site.cms') }}</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a>{{ __('site.dashboard') }}</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1>{{ __('site.complaints') }}</h1>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-body" onClick="location.href='complaints-queued.php'" style="cursor:pointer">
                                <h3 class="mb-3">
                                    32
                                    <small>{{ __('site.new_complaints') }}</small>
                                </h3>
                                <div class="progress mb-2" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar"
                                    style="width: 20%;"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-body" onClick="location.href='complaints-processing.php'" style="cursor:pointer">
                                <h3 class="mb-3">
                                    70
                                    <small>{{ __('site.complaints_process') }}</small>
                                </h3>
                                <div class="progress mb-2" style="height: 5px">
                                    <div class="progress-bar bg-success" role="progressbar"
                                    style="width: 10%;"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-body" onClick="location.href='complaints-resolved.php'" style="cursor:pointer">
                                <h4 class="mb-3">
                                    125
                                    <small>{{ __('site.complaints_resolved') }}</small>
                                </h4>
                                <div class="progress mb-2" style="height: 5px">
                                    <div class="progress-bar bg-info" role="progressbar"
                                    style="width: 40%;"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-8 col-md-12">
                            <div class="card" style="padding-bottom: 6px;">
                                <div class="card-body">
                                    <h1>{{ __('site.inquiries') }}</h1>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12">
                                            <div class="card bg-primary-bright text-primary">
                                                <div class="card-body text-center" onClick="location.href='inquiries-completed.php'" style="cursor:pointer">
                                                    <h2 class="font-weight-bold">12</h2>
                                                    <div>{{ __('site.completed') }}</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-12">
                                            <div class="card bg-success-bright text-success">
                                                <div class="card-body text-center" onClick="location.href='inquiries-processing.php'" style="cursor:pointer">
                                                    <h2 class="font-weight-bold">16</h2>
                                                    <div>{{ __('site.in_process') }}</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-12">
                                            <div class="card bg-danger-bright text-danger">
                                                <div class="card-body text-center" onClick="location.href='inquiries-queued.php'" style="cursor:pointer">
                                                    <h2 class="font-weight-bold">3</h2>
                                                    <div>{{ __('site.queued') }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="card card-body" onClick="location.href='missed-calls.php'" style="cursor:pointer">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h6 class="card-title mb-3">{{ __('site.missed_calls') }}</h6>
                                        <div class="d-flex d-sm-block d-lg-flex align-items-end">
                                            <h2 class="mb-0 mr-2 font-weight-bold">25</h2>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="avatar avatar-lg">
                                            <div class="avatar-title bg-danger-bright text-danger rounded-circle">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-body" onClick="location.href='received-calls.php'" style="cursor:pointer">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h6 class="card-title mb-3">{{ __('site.received_calls') }}</h6>
                                        <div class="d-flex d-sm-block d-lg-flex align-items-end">
                                            <h2 class="mb-0 mr-2 font-weight-bold">76</h2>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="avatar avatar-lg">
                                            <div class="avatar-title bg-warning-bright text-warning rounded-circle">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="card-title">{{ __('site.recent_complaints') }}</h6>
                                        <div>
                                            <a href="complaints-queued.php" class="mr-3">
                                                <span class="badge badge-primary">{{ __('site.view_more') }}</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped mb-0">
                                            <thead>
                                                <tr>
                                                    <th class="text-left">{{ __('site.complaint') }}</th>
                                                    <th>{{ __('site.title') }}</th>
                                                    <th>{{ __('site.customer') }}</th>
                                                    <th>{{ __('site.date') }}</th>
                                                    <th>{{ __('site.status') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="#">#3132</a>
                                                    </td>
                                                    <td>
                                                        <a href="#">Power Down</a>
                                                    </td>
                                                    <td>
                                                        <a href="#">Qaiser Sherazi</a>
                                                    </td>
                                                    <td>20 October 2021</td>
                                                    <td>
                                                        <span class="badge badge-success">Resolved</span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <a href="#">#3133</a>
                                                    </td>
                                                    <td>
                                                        <a href="#">Shortage</a>
                                                    </td>
                                                    <td>
                                                        <a href="#">Daniyal Ali</a>
                                                    </td>
                                                    <td>20 October 2021</td>
                                                    <td>
                                                        <span class="badge badge-danger">Queued</span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <a href="#">#3134</a>
                                                    </td>
                                                    <td>
                                                        <a href="#">Shot Circuit</a>
                                                    </td>
                                                    <td>
                                                        <a href="#">Muhammad Saad</a>
                                                    </td>
                                                    <td>1 October 2021</td>
                                                    <td>
                                                        <span class="badge badge-warning">Process</span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <a href="#">#3135</a>
                                                    </td>
                                                    <td>
                                                        <a href="#">System Maintenance</a>
                                                    </td>
                                                    <td>
                                                        <a href="#">Ahsan Afaq</a>
                                                    </td>
                                                    <td>3 August 2021</td>
                                                    <td>
                                                        <span class="badge badge-warning">Process</span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <a href="#">#3136</a>
                                                    </td>
                                                    <td>
                                                        <a href="#">Low Voltage</a>
                                                    </td>
                                                    <td>
                                                        <a href="#">Muhammad Shaheer</a>
                                                    </td>
                                                    <td>22 April 2019</td>
                                                    <td>
                                                        <span class="badge badge-danger">Queued</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="card-title">{{ __('site.recent_inquiries') }}</h6>
                                        <div>
                                            <a href="inquiries-queued.php" class="mr-3">
                                                <span class="badge badge-primary">{{ __('site.view_more') }}</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped mb-0">
                                            <thead>
                                                <tr>
                                                    <th class="text-left">{{ __('site.inquiry') }}</th>
                                                    <th>{{ __('site.title') }}</th>
                                                    <th>{{ __('site.contact_name') }}</th>
                                                    <th>{{ __('site.date') }}</th>
                                                    <th>{{ __('site.status') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="#">#3132</a>
                                                    </td>
                                                    <td>
                                                        <a href="#">Hotel Backup</a>
                                                    </td>
                                                    <td>
                                                        <a href="#">Qaiser Sherazi</a>
                                                    </td>
                                                    <td>20 October 2021</td>
                                                    <td>
                                                        <span class="badge badge-success">Completed</span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <a href="#">#3133</a>
                                                    </td>
                                                    <td>
                                                        <a href="#">System Upgrade</a>
                                                    </td>
                                                    <td>
                                                        <a href="#">Daniyal Ali</a>
                                                    </td>
                                                    <td>20 October 2021</td>
                                                    <td>
                                                        <span class="badge badge-danger">Queued</span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <a href="#">#3134</a>
                                                    </td>
                                                    <td>
                                                        <a href="#">Additional Battries</a>
                                                    </td>
                                                    <td>
                                                        <a href="#">Muhammad Saad</a>
                                                    </td>
                                                    <td>1 October 2021</td>
                                                    <td>
                                                        <span class="badge badge-warning">Process</span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <a href="#">#3135</a>
                                                    </td>
                                                    <td>
                                                        <a href="#">High Power</a>
                                                    </td>
                                                    <td>
                                                        <a href="#">Ahsan Afaq</a>
                                                    </td>
                                                    <td>3 August 2021</td>
                                                    <td>
                                                        <span class="badge badge-warning">Process</span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <a href="#">#3136</a>
                                                    </td>
                                                    <td>
                                                        <a href="#">24/7 Backup</a>
                                                    </td>
                                                    <td>
                                                        <a href="#">Muhammad Shaheer</a>
                                                    </td>
                                                    <td>22 April 2019</td>
                                                    <td>
                                                        <span class="badge badge-danger">Queued</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        @include('includes/footer')
