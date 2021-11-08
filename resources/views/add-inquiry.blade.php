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
                            <a href="#">Add Inquiry</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1>Submit New Inquiry</h1>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="needs-validation" novalidate autocomplete="off">
                                      <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                          <label for="validationCustom01">Name</label>
                                          <input type="text" class="form-control" id="validationCustom01" placeholder="Name" value="" required>
                                          <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                      <label for="validationCustom02">Mobile</label>
                                      <input type="number" class="form-control" id="validationCustom02" placeholder="Mobile" value="" required>
                                      <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                  <label for="validationCustom02">CNIC</label>
                                  <input type="number" class="form-control" id="validationCustom02" placeholder="CNIC" value="" required>
                                  <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-8 mb-3">
                              <label for="validationCustom03">Postal Address</label>
                              <input type="text" class="form-control" id="validationCustom03" placeholder="Postal Address" required>
                              <div class="invalid-feedback">
                                Please provide a valid address.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                          <label for="validationCustom03">City</label>
                          <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
                          <div class="invalid-feedback">
                            Please provide a valid city.
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                      <label for="validationCustom05">Inquiry Title</label>
                      <input type="text" class="form-control" id="validationCustom05" placeholder="Inquiry Title" required>
                      <div class="invalid-feedback">
                        Please provide a valid title.
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                  <label for="exampleFormControlSelect1">Inquiry Type</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>Select</option>
                    <option>Hardware Inquiry</option>
                    <option>Power Inquiry</option>
                    <option>Other</option>
                </select>
                <div class="invalid-feedback">
                    Please provide a valid title.
                </div>
            </div>
            <div class="col-md-12 mb-3">
              <label for="validationCustom05">Inquiry Details</label>
              <textarea class="form-control" id="validationCustom05" placeholder="Inquiry Details" required style="min-height: 200px;"></textarea>
              <div class="invalid-feedback">
                Please provide a valid details.
            </div>
        </div>
    </div>
    <button class="btn btn-primary" type="submit">Submit form</button>
</form>
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