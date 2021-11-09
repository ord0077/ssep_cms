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
                            <a href="#">{{ __('site.customers') }}</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1>{{ __('site.customers') }}</h1>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <table id="customers" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>{{ __('site.name') }}</th>
                                                <th>{{ __('site.mobile') }}</th>
                                                <th>{{ __('site.cnic') }}</th>
                                                <th>{{ __('site.postal_address') }}</th>
                                                <th>{{ __('site.city_district') }}</th>
                                                <th>{{ __('site.status') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Hasan Khan</td>
                                                <td>03362051663</td>
                                                <td>42501-8596477-8</td>
                                                <td>ABC Street DHA</td>
                                                <td>Karachi</td>
                                                <td>Active</td>
                                            </tr>
                                            <tr>
                                                <td>Muhammad Saad</td>
                                                <td>03457859547</td>
                                                <td>42101-8574698-9</td>
                                                <td>XYZ Street Azizabad</td>
                                                <td>Karachi</td>
                                                <td>Inactive</td>
                                            </tr>
                                            <tr>
                                                <td>Qaiser Sherazi</td>
                                                <td>03365423142</td>
                                                <td>42501-7487458-8</td>
                                                <td>ABC Street Qrangi Town</td>
                                                <td>Karachi</td>
                                                <td>Active</td>
                                            </tr>
                                            <tr>
                                                <td>Daniyal Ali</td>
                                                <td>03455896124</td>
                                                <td>42101-8741698-9</td>
                                                <td>XYZ Street Gulshan-e-Iqbal</td>
                                                <td>Karachi</td>
                                                <td>Inactive</td>
                                            </tr>
                                            <tr>
                                                <td>Muhammad Shaheer</td>
                                                <td>03472905710</td>
                                                <td>42501-8652327-8</td>
                                                <td>ABC Street Surjani Town</td>
                                                <td>Karachi</td>
                                                <td>Active</td>
                                            </tr>
                                            <tr>
                                                <td>Hasan Khan</td>
                                                <td>03362051663</td>
                                                <td>42501-8596477-8</td>
                                                <td>ABC Street DHA</td>
                                                <td>Karachi</td>
                                                <td>Active</td>
                                            </tr>
                                            <tr>
                                                <td>Muhammad Saad</td>
                                                <td>03457859547</td>
                                                <td>42101-8574698-9</td>
                                                <td>XYZ Street Azizabad</td>
                                                <td>Karachi</td>
                                                <td>Inactive</td>
                                            </tr>
                                            <tr>
                                                <td>Qaiser Sherazi</td>
                                                <td>03365423142</td>
                                                <td>42501-7487458-8</td>
                                                <td>ABC Street Qrangi Town</td>
                                                <td>Karachi</td>
                                                <td>Active</td>
                                            </tr>
                                            <tr>
                                                <td>Daniyal Ali</td>
                                                <td>03455896124</td>
                                                <td>42101-8741698-9</td>
                                                <td>XYZ Street Gulshan-e-Iqbal</td>
                                                <td>Karachi</td>
                                                <td>Inactive</td>
                                            </tr>
                                            <tr>
                                                <td>Muhammad Shaheer</td>
                                                <td>03472905710</td>
                                                <td>42501-8652327-8</td>
                                                <td>ABC Street Surjani Town</td>
                                                <td>Karachi</td>
                                                <td>Active</td>
                                            </tr>
                                            <tr>
                                                <td>Hasan Khan</td>
                                                <td>03362051663</td>
                                                <td>42501-8596477-8</td>
                                                <td>ABC Street DHA</td>
                                                <td>Karachi</td>
                                                <td>Active</td>
                                            </tr>
                                            <tr>
                                                <td>Muhammad Saad</td>
                                                <td>03457859547</td>
                                                <td>42101-8574698-9</td>
                                                <td>XYZ Street Azizabad</td>
                                                <td>Karachi</td>
                                                <td>Inactive</td>
                                            </tr>
                                            <tr>
                                                <td>Qaiser Sherazi</td>
                                                <td>03365423142</td>
                                                <td>42501-7487458-8</td>
                                                <td>ABC Street Qrangi Town</td>
                                                <td>Karachi</td>
                                                <td>Active</td>
                                            </tr>
                                            <tr>
                                                <td>Daniyal Ali</td>
                                                <td>03455896124</td>
                                                <td>42101-8741698-9</td>
                                                <td>XYZ Street Gulshan-e-Iqbal</td>
                                                <td>Karachi</td>
                                                <td>Inactive</td>
                                            </tr>
                                            <tr>
                                                <td>Muhammad Shaheer</td>
                                                <td>03472905710</td>
                                                <td>42501-8652327-8</td>
                                                <td>ABC Street Surjani Town</td>
                                                <td>Karachi</td>
                                                <td>Active</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Mobile</th>
                                                <th>CNIC</th>
                                                <th>Postal Address</th>
                                                <th>City / District</th>
                                                <th>Status</th>
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
        @include('includes.footer')?>
        <script>
            $(document).ready(function (){
                $('#customers').dataTable( {
                  "searching": true,
                  "scrollY": "400px",
                  "scrollCollapse": true,
              });
            });
        </script>
