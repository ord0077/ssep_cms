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
                            <div class="card card-body" onClick="location.href='{{ route('complaints-queued') }}'" style="cursor:pointer">
                                <h3 class="mb-3">
                                    {{ $queuecomplains->count() }}
                                    <small>{{ __('site.new_complaints') }}</small>
                                </h3>
                                <div class="progress mb-2" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar"
                                    style="width: {{ $queuecomplains->count() }}%;"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-body" onClick="location.href='{{ route('complaints-processing') }}'" style="cursor:pointer">
                                <h3 class="mb-3">
                                    {{ $processcomplains->count() }}
                                    <small>{{ __('site.complaints_process') }}</small>
                                </h3>
                                <div class="progress mb-2" style="height: 5px">
                                    <div class="progress-bar bg-success" role="progressbar"
                                    style="width: {{ $processcomplains->count() }}%;"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-body" onClick="location.href='{{ route('complaints-resolved') }}'" style="cursor:pointer">
                                <h4 class="mb-3">
                                    {{ $resolvedcomplains->count() }}
                                    <small>{{ __('site.complaints_resolved') }}</small>
                                </h4>
                                <div class="progress mb-2" style="height: 5px">
                                    <div class="progress-bar bg-info" role="progressbar"
                                    style="width: {{ $resolvedcomplains->count() }}%;"
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
                                                <div class="card-body text-center" onClick="location.href='{{ route('inquiries-completed') }}'" style="cursor:pointer">
                                                    <h2 class="font-weight-bold">{{ $resolvedinquiries->count() }}</h2>
                                                    <div>{{ __('site.completed') }}</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-12">
                                            <div class="card bg-success-bright text-success">
                                                <div class="card-body text-center" onClick="location.href='{{ route('inquiries-processing') }}'" style="cursor:pointer">
                                                    <h2 class="font-weight-bold">{{ $processinquiries->count() }}</h2>
                                                    <div>{{ __('site.in_process') }}</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-12">
                                            <div class="card bg-danger-bright text-danger">
                                                <div class="card-body text-center" onClick="location.href='{{ route('inquiries-queued') }}'" style="cursor:pointer">
                                                    <h2 class="font-weight-bold">{{ $queueinquiries->count() }}</h2>
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
                            <div class="card card-body" onClick="location.href='{{ route('missed-calls') }}'" style="cursor:pointer">
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
                            <div class="card card-body" onClick="location.href='{{ route('received-calls') }}'" style="cursor:pointer">
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
                                            <a href="{{ route('complaints-queued') }}" class="mr-3">
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
                                                    <th>{{ __('site.cnic') }}</th>
                                                    <th>{{ __('site.mobile') }}</th>
                                                    <th>{{ __('site.city') }}</th>
                                                    <th>{{ __('site.type') }}</th>
                                                    <th>{{ __('site.date') }}</th>
                                                    <th>{{ __('site.time') }}</th>
                                                    <th>{{ __('site.status') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($queuedcomplains as $queuedcomplain)
                                                <tr>
                                                    <td># {{ ($queuedcomplain->id) }}</td>
                                                    <td>{{ ($queuedcomplain->title) }}</td>
                                                    <td>{{ ($queuedcomplain->name) }}</td>
                                                    <td>{{ ($queuedcomplain->cnic) }}</td>
                                                    <td>{{ ($queuedcomplain->mobile) }}</td>
                                                    <td>{{ ($queuedcomplain->city) }}</td>
                                                    <td>{{ ($queuedcomplain->type) }}</td>
                                                    <td>{{ ($queuedcomplain->created_at->format('d M Y')) }}</td>
                                                    <td>{{ ($queuedcomplain->created_at->format('h:i:s')) }}</td>
                                                    <td>
                                                        <span class="badge badge-danger">{{ __('site.queued') }}</span>
                                                    </td>
                                                </tr>
                                                @endforeach
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
                                            <a href="{{ route('inquiries-queued') }}" class="mr-3">
                                                <span class="badge badge-primary">{{ __('site.view_more') }}</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped mb-0">
                                            <thead>
                                                <tr>
                                                    <th>{{ __('site.inq_no') }}</th>
                                                    <th>{{ __('site.title') }}</th>
                                                    <th>{{ __('site.customer') }}</th>
                                                    <th>{{ __('site.cnic') }}</th>
                                                    <th>{{ __('site.mobile') }}</th>
                                                    <th>{{ __('site.city') }}</th>
                                                    <th>{{ __('site.type') }}</th>
                                                    <th>{{ __('site.date') }}</th>
                                                    <th>{{ __('site.time') }}</th>
                                                    <th>{{ __('site.status') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($queuedinquiries as $queuedinquiry)
                                                <tr>
                                                    <td># {{ ($queuedinquiry->id) }}</td>
                                                    <td>{{ ($queuedinquiry->title) }}</td>
                                                    <td>{{ ($queuedinquiry->name) }}</td>
                                                    <td>{{ ($queuedinquiry->cnic) }}</td>
                                                    <td>{{ ($queuedinquiry->mobile) }}</td>
                                                    <td>{{ ($queuedinquiry->city) }}</td>
                                                    <td>{{ ($queuedinquiry->type) }}</td>
                                                    <td>{{ ($queuedinquiry->created_at->format('d M Y')) }}</td>
                                                    <td>{{ ($queuedinquiry->created_at->format('h:i:s')) }}</td>
                                                    <td>
                                                        <span class="badge badge-danger">{{ __('site.queued') }}</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            @endforeach
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
