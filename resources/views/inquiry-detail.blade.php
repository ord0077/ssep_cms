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
                                      <dt class="col-sm-3">{{ __('site.inquiriess') }}</dt>
                                      <dd class="col-sm-9">#  {{ $inquirydetail->id }}</dd>

                                      <dt class="col-sm-3">{{ __('site.customer') }}</dt>
                                      <dd class="col-sm-9">{{ $inquirydetail->name }}</dd>

                                      <dt class="col-sm-3">{{ __('site.mobile') }}</dt>
                                      <dd class="col-sm-9">{{ $inquirydetail->mobile }}</dd>

                                      <dt class="col-sm-3">{{ __('site.cnic') }}</dt>
                                      <dd class="col-sm-9">{{ $inquirydetail->cnic }}</dd>

                                      <dt class="col-sm-3">{{ __('site.postal_address') }}</dt>
                                      <dd class="col-sm-9">{{ $inquirydetail->postal_address }}</dd>

                                      <dt class="col-sm-3">{{ __('site.city') }}</dt>
                                      <dd class="col-sm-9">{{ $inquirydetail->city }}</dd>

                                      <dt class="col-sm-3">{{ __('site.inquiry_title') }}</dt>
                                      <dd class="col-sm-9">{{ $inquirydetail->title }}</dd>

                                      <dt class="col-sm-3">{{ __('site.type') }}</dt>
                                      <dd class="col-sm-9">{{ $inquirydetail->type }}</dd>

                                      <dt class="col-sm-3">{{ __('site.inquiry_details') }}</dt>
                                      <dd class="col-sm-9">{{ $inquirydetail->details }}</dd>

                                      <dt class="col-sm-3">{{ __('site.date') }}</dt>
                                      <dd class="col-sm-9">{{ ($inquirydetail->created_at->format('d M Y')) }}</dd>

                                      <dt class="col-sm-3">{{ __('site.time') }}</dt>
                                      <dd class="col-sm-9">{{ ($inquirydetail->created_at->format('h:i:s')) }}</dd>

                                      <dt class="col-sm-3">{{ __('site.status') }}</dt>
                                      <dd class="col-sm-9"><span class="badge badge-danger">{{ __('site.queued') }}</span></dd>
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
                                    <h3>{{ __('site.change_status') }}</h3>
                                    <form class="needs-validation" method="POST" action="{{ route('updatestatus', $inquirydetail->id) }}" novalidate autocomplete="off">
                                     {{csrf_field()}}
                                    <button type="submit" class="btn btn-outline-warning">{{ __('site.move_to_process') }} &nbsp; <i class="fa fa-arrow-circle-right" style="font-size: 20px;"></i></button>
                                    </form>
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
