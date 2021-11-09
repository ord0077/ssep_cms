<?php include('includes/inc.header.php')?>
<div id="main">
    <?php include('includes/inc.sidebar.php')?>

    <!-- begin::main content -->
    <div class="main-content">
        <div class="page-header">
            <div class="container-fluid d-sm-flex justify-content-between">
                <h4>Complaint Management System</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a>Missed Calls</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1>Missed Calls</h1>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <table id="customers" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Call ID</th>
                                                <th>Phone Number</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#2133</td>
                                                <td>03362051663</td>
                                                <td>02 October 2021</td>
                                                <td>02:38 pm</td>
                                                <td>
                                                    <span class="badge badge-danger">Action</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>#2133</td>
                                                <td>03362051663</td>
                                                <td>02 October 2021</td>
                                                <td>02:38 pm</td>
                                                <td>
                                                    <span class="badge badge-danger">Action</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>#2133</td>
                                                <td>03362051663</td>
                                                <td>02 October 2021</td>
                                                <td>02:38 pm</td>
                                                <td>
                                                    <span class="badge badge-danger">Action</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>#2133</td>
                                                <td>03362051663</td>
                                                <td>02 October 2021</td>
                                                <td>02:38 pm</td>
                                                <td>
                                                    <span class="badge badge-danger">Action</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>#2133</td>
                                                <td>03362051663</td>
                                                <td>02 October 2021</td>
                                                <td>02:38 pm</td>
                                                <td>
                                                    <span class="badge badge-danger">Action</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>#2133</td>
                                                <td>03362051663</td>
                                                <td>02 October 2021</td>
                                                <td>02:38 pm</td>
                                                <td>
                                                    <span class="badge badge-danger">Action</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>#2133</td>
                                                <td>03362051663</td>
                                                <td>02 October 2021</td>
                                                <td>02:38 pm</td>
                                                <td>
                                                    <span class="badge badge-danger">Action</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>#2133</td>
                                                <td>03362051663</td>
                                                <td>02 October 2021</td>
                                                <td>02:38 pm</td>
                                                <td>
                                                    <span class="badge badge-danger">Action</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>#2133</td>
                                                <td>03362051663</td>
                                                <td>02 October 2021</td>
                                                <td>02:38 pm</td>
                                                <td>
                                                    <span class="badge badge-danger">Action</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>#2133</td>
                                                <td>03362051663</td>
                                                <td>02 October 2021</td>
                                                <td>02:38 pm</td>
                                                <td>
                                                    <span class="badge badge-danger">Action</span>
                                                </td>
                                            </tr>

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Call ID</th>
                                                <th>Phone Number</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>Action</th>
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
        <?php include('includes/inc.footer.php')?>
        <script>
            $(document).ready(function (){
                $('#customers').dataTable( {
                  "searching": true,
                  "scrollY": "400px",
                  "scrollCollapse": true,
              });
            });
        </script>