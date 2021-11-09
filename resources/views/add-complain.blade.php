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
                            <a href="#">{{ __('site.add_complain') }}</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                   <h1>{{ __('site.register_new_complaint') }}</h1>
                   <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form class="needs-validation" novalidate autocomplete="off">
                                  <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                      <label for="validationCustom01">{{ __('site.enter_cnic_or_phone') }}</label>
                                      <input type="text" class="form-control" id="validationCustom01" placeholder="{{ __('site.cnic_or_phone') }}" value="" required>
                                      <div class="valid-feedback">
                                        {{ __('site.looks_good') }}
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">{{ __('site.get_details') }}</button>
                        </form>
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
            <div class="row">
                <div class="col-md-12">
                    <h1>{{ __('site.complaint_form') }}</h1>
                    <form class="needs-validation" novalidate autocomplete="off">
                      <div class="form-row">
                        <div class="col-md-4 mb-3">
                          <label for="validationCustom01">{{ __('site.name') }}</label>
                          <input type="text" class="form-control" id="validationCustom01" placeholder="{{ __('site.name') }}" value="" required>
                          <div class="valid-feedback">
                            {{ __('site.looks_good') }}
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="validationCustom02">{{ __('site.mobile') }}</label>
                      <input type="number" class="form-control" id="validationCustom02" placeholder="{{ __('site.mobile') }}" value="" required>
                      <div class="valid-feedback">
                        {{ __('site.looks_good') }}
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationCustom02">{{ __('site.cnic') }}</label>
                  <input type="number" class="form-control" id="validationCustom02" placeholder="{{ __('site.cnic') }}" value="" required>
                  <div class="valid-feedback">
                    {{ __('site.looks_good') }}
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-8 mb-3">
              <label for="validationCustom03">{{ __('site.postal_address') }}</label>
              <input type="text" class="form-control" id="validationCustom03" placeholder="{{ __('site.postal_address') }}" required>
              <div class="invalid-feedback">
                {{ __('site.provide_valid_address') }}
            </div>
        </div>
        <div class="col-md-4 mb-3">
          <label for="validationCustom03">{{ __('site.city') }}</label>
          <input type="text" class="form-control" id="validationCustom03" placeholder="{{ __('site.city') }}" required>
          <div class="invalid-feedback">
            {{ __('site.provide_valid_city') }}
        </div>
    </div>
    <div class="col-md-12 mb-3">
      <label for="validationCustom05">{{ __('site.complaint_title') }}</label>
      <input type="text" class="form-control" id="validationCustom05" placeholder="{{ __('site.complaint_title') }}" required>
      <div class="invalid-feedback">
        {{ __('site.provide_valid_title') }}
    </div>
</div>
<div class="col-md-12 mb-3">
  <label for="exampleFormControlSelect1">{{ __('site.complaint_type') }}</label>
  <select class="form-control" id="exampleFormControlSelect1">
    <option>{{ __('site.select') }}</option>
    <option>{{ __('site.hardware_complaint') }}</option>
    <option>{{ __('site.power_complaint') }}</option>
    <option>{{ __('site.other') }}</option>
</select>
<div class="invalid-feedback">
    {{ __('site.provide_valid_title') }}
</div>
</div>
<div class="col-md-12 mb-3">
  <label for="validationCustom05">{{ __('site.complaint_details') }}</label>
  <textarea class="form-control" id="validationCustom05" placeholder="{{ __('site.complaint_details') }}" required style="min-height: 200px;"></textarea>
  <div class="invalid-feedback">
    {{ __('site.provide_valid_details') }}
</div>
</div>
</div>
<button class="btn btn-primary" type="submit">{{ __('site.submit_form') }}</button>
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
