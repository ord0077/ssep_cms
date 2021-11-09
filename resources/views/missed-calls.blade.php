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
                            <a>{{ __('site.missed_calls') }}</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1>{{ __('site.missed_calls') }}</h1>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <table id="customers" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>{{ __('site.call_id') }}</th>
                                                <th>{{ __('site.mobile') }}</th>
                                                <th>{{ __('site.date') }}</th>
                                                <th>{{ __('site.time') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#2133</td>
                                                <td>03362051663</td>
                                                <td>02 October 2021</td>
                                                <td>02:38 pm</td>
                                            </tr>

                                            <tr>
                                                <td>#2133</td>
                                                <td>03362051663</td>
                                                <td>02 October 2021</td>
                                                <td>02:38 pm</td>
                                            </tr>

                                            <tr>
                                                <td>#2133</td>
                                                <td>03362051663</td>
                                                <td>02 October 2021</td>
                                                <td>02:38 pm</td>
                                            </tr>

                                            <tr>
                                                <td>#2133</td>
                                                <td>03362051663</td>
                                                <td>02 October 2021</td>
                                                <td>02:38 pm</td>
                                            </tr>

                                            <tr>
                                                <td>#2133</td>
                                                <td>03362051663</td>
                                                <td>02 October 2021</td>
                                                <td>02:38 pm</td>
                                            </tr>

                                            <tr>
                                                <td>#2133</td>
                                                <td>03362051663</td>
                                                <td>02 October 2021</td>
                                                <td>02:38 pm</td>
                                            </tr>

                                            <tr>
                                                <td>#2133</td>
                                                <td>03362051663</td>
                                                <td>02 October 2021</td>
                                                <td>02:38 pm</td>
                                            </tr>

                                            <tr>
                                                <td>#2133</td>
                                                <td>03362051663</td>
                                                <td>02 October 2021</td>
                                                <td>02:38 pm</td>
                                            </tr>

                                            <tr>
                                                <td>#2133</td>
                                                <td>03362051663</td>
                                                <td>02 October 2021</td>
                                                <td>02:38 pm</td>
                                            </tr>

                                            <tr>
                                                <td>#2133</td>
                                                <td>03362051663</td>
                                                <td>02 October 2021</td>
                                                <td>02:38 pm</td>
                                            </tr>

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>{{ __('site.call_id') }}</th>
                                                <th>{{ __('site.mobile') }}</th>
                                                <th>{{ __('site.date') }}</th>
                                                <th>{{ __('site.time') }}</th>
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
            $(document).ready(function (){
                $('#customers').dataTable( {
                  "searching": true,
                  "scrollY": "400px",
                  "scrollCollapse": true,
              });
            });
        </script>
