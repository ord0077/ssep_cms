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
                            <a>{{ __('site.inquiry_detail') }}}</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        {{-- @dd($inquiry) --}}
        <div class="container-fluid">
            <h1>{{ __('site.inquiry_detail') }}</h1>
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <dl class="row">
                                      <dt class="col-sm-2">{{ __('site.inquiriess') }}</dt>
                                      <dd class="col-sm-10">#  {{ $inquirydetail->id }}</dd>

                                      <dt class="col-sm-2">{{ __('site.customer') }}</dt>
                                      <dd class="col-sm-10">{{ $inquirydetail->name }}</dd>

                                      <dt class="col-sm-2">{{ __('site.mobile') }}</dt>
                                      <dd class="col-sm-10">{{ $inquirydetail->mobile }}</dd>

                                      <dt class="col-sm-2">{{ __('site.cnic') }}</dt>
                                      <dd class="col-sm-10">{{ $inquirydetail->cnic }}</dd>

                                      <dt class="col-sm-2">{{ __('site.postal_address') }}</dt>
                                      <dd class="col-sm-10">{{ $inquirydetail->postal_address }}</dd>

                                      <dt class="col-sm-2">{{ __('site.city') }}</dt>
                                      <dd class="col-sm-10">{{ $inquirydetail->city }}</dd>

                                      <dt class="col-sm-2">{{ __('site.inquiry_title') }}</dt>
                                      <dd class="col-sm-10">{{ $inquirydetail->title }}</dd>

                                      <dt class="col-sm-2">{{ __('site.type') }}</dt>
                                      <dd class="col-sm-10">{{ $inquirydetail->type }}</dd>

                                      <dt class="col-sm-2">{{ __('site.inquiry_details') }}</dt>
                                      <dd class="col-sm-10">{{ $inquirydetail->details }}</dd>

                                      <dt class="col-sm-2">{{ __('site.date') }}</dt>
                                      <dd class="col-sm-10">{{ ($inquirydetail->created_at->format('d M Y')) }}</dd>

                                      <dt class="col-sm-2">{{ __('site.time') }}</dt>
                                      <dd class="col-sm-10">{{ ($inquirydetail->created_at->format('h:i:s')) }}</dd>

                                      <dt class="col-sm-2">{{ __('site.status') }}</dt>
                                      <dd class="col-sm-10"><span class="badge badge-danger">{{ __('site.queued') }}</span></dd>
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
