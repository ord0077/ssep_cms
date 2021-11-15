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
                            <a>{{ __('site.complaints_in_queue') }}</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1>{{ __('site.complaints_in_queue') }}</h1>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <table id="customers" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>{{ __('site.comp_no') }}</th>
                                                <th>{{ __('site.title') }}</th>
                                                <th>{{ __('site.customer') }}</th>
                                                <th>{{ __('site.cnic') }}</th>
                                                <th>{{ __('site.mobile') }}</th>
                                                <th>{{ __('site.city') }}</th>
                                                <th>{{ __('site.type') }}</th>
                                                <th>{{ __('site.date') }}</th>
                                                <th>{{ __('site.time') }}</th>
                                                <th>{{ __('site.status') }}</th>
                                                <th>{{ __('site.action') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($complain as $complain)
                                            <tr>
                                                <td># {{ $complain->id }}</td>
                                                <td>{{ $complain->title }}</td>
                                                <td>{{ $complain->name }}</td>
                                                <td>{{ $complain->cnic }}</td>
                                                <td>{{ $complain->mobile }}</td>
                                                <td>{{ $complain->city }}</td>
                                                <td>{{ $complain->type }}</td>
                                                <td>{{ ($complain->created_at->format('d M Y')) }}</td>
                                                <td>{{ ($complain->created_at->format('h:i:s')) }}</td>
                                                <td>
                                                    <span class="badge badge-danger">{{ __('site.queued') }}</span>
                                                </td>
                                                <td style="min-width: 100px;">
                                                    <a href=""><span class="badge badge-primary"><i class="fa fa-eye" style="font-size:14px"></i></span></a>

                                                    <div class="dropdown">
                                                        <a href="#" data-toggle="dropdown" class="btn btn-outline-light btn-sm" aria-haspopup="true" aria-expanded="false" style="margin-top:-2.5px">
                                                            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href=""><i class="fa fa-pencil" style="font-size:14px"></i> {{ __('site.edit') }}</a>
                                                            <a class="dropdown-item" href=""><i class="fa fa-trash" style="font-size:14px"></i> {{ __('site.delete') }}</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>{{ __('site.comp_no') }}</th>
                                                <th>{{ __('site.title') }}</th>
                                                <th>{{ __('site.customer') }}</th>
                                                <th>{{ __('site.cnic') }}</th>
                                                <th>{{ __('site.mobile') }}</th>
                                                <th>{{ __('site.city') }}</th>
                                                <th>{{ __('site.type') }}</th>
                                                <th>{{ __('site.date') }}</th>
                                                <th>{{ __('site.time') }}</th>
                                                <th>{{ __('site.status') }}</th>
                                                <th>{{ __('site.action') }}</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('includes.footer')
        <script>
            $(document).ready(function() {
                $('#customers').dataTable({
                    "searching": true
                    , "scrollY": "400px"
                    , "scrollCollapse": true
                , });
            });

        </script>
