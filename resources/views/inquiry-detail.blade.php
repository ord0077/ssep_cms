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
                            <a>Inquiry Detail</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        {{-- @dd($inquiry) --}}
        <div class="container-fluid">
            <h1>Inquiry Detail</h1>
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <dl class="row">
                                      <dt class="col-sm-2">Inquiry #</dt>
                                      <dd class="col-sm-10">#1</dd>

                                      <dt class="col-sm-2">Customer</dt>
                                      <dd class="col-sm-10">Summer Stevenson</dd>

                                      <dt class="col-sm-2">Mobile</dt>
                                      <dd class="col-sm-10">03000000000</dd>

                                      <dt class="col-sm-2">CNIC</dt>
                                      <dd class="col-sm-10">42521-7458745-7</dd>

                                      <dt class="col-sm-2">Postal Address</dt>
                                      <dd class="col-sm-10">ABC Street Karachi</dd>

                                      <dt class="col-sm-2">City</dt>
                                      <dd class="col-sm-10">Karachi</dd>

                                      <dt class="col-sm-2">Inquiry Title</dt>
                                      <dd class="col-sm-10">Veniam maxime iure</dd>

                                      <dt class="col-sm-2">Type</dt>
                                      <dd class="col-sm-10">Hardware Information</dd>

                                      <dt class="col-sm-2">Inquiry Details</dt>
                                      <dd class="col-sm-10">Get quotation for a solar powered office.</dd>

                                      <dt class="col-sm-2">Date</dt>
                                      <dd class="col-sm-10">02 Nov 2021</dd>

                                      <dt class="col-sm-2">Time</dt>
                                      <dd class="col-sm-10">09:20 pm</dd>

                                      <dt class="col-sm-2">Status</dt>
                                      <dd class="col-sm-10"><span class="badge badge-danger">queued</span></dd>
                                  </dl>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div>
                                    <h3>Change Status</h3>
                                    <button type="button" class="btn btn-outline-warning">Move to Process &nbsp; <i class="fa fa-arrow-circle-right" style="font-size: 20px;"></i></button>
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
