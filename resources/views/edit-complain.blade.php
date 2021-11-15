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
                            <a>{{ __('site.edit_complain') }}</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1>{{ __('site.edit_complain') }}</h1>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="needs-validation" method="POST" action="{{ route('updatecomplain', $complaindetail->id) }}" novalidate autocomplete="off">
                                        {{csrf_field()}}
                                        <input type="hidden" name="id" value="{{$complaindetail->id}}">
                                        <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom01">{{ __('site.name') }}</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="name" placeholder="{{ __('site.name') }}" value="{{old('name', isset($complaindetail) ? $complaindetail->name : null)}}" required>
                                                <div class="valid-feedback">
                                                    {{ __('site.looks_good') }}
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom02">{{ __('site.mobile') }}</label>
                                                <input type="number" class="form-control" id="validationCustom02" name="mobile" placeholder="{{ __('site.mobile') }}" value="{{old('mobile', isset($complaindetail) ? $complaindetail->mobile : null)}}" required>
                                                <div class="valid-feedback">
                                                    {{ __('site.looks_good') }}
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom02">{{ __('site.cnic') }}</label>
                                                <input type="number" class="form-control" id="validationCustom02" name="cnic" placeholder="{{ __('site.cnic') }}" value="{{old('cnic', isset($complaindetail) ? $complaindetail->cnic : null)}}" required>
                                                <div class="valid-feedback">
                                                    {{ __('site.looks_good') }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-8 mb-3">
                                                <label for="validationCustom03">{{ __('site.postal_address') }}</label>
                                                <input type="text" class="form-control" id="validationCustom03" name="postal_address" placeholder="{{ __('site.postal_address') }}"  value="{{old('postal_address', isset($complaindetail) ? $complaindetail->postal_address : null)}}" required>
                                                <div class="invalid-feedback">
                                                    {{ __('site.provide_valid_address') }}
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom03">{{ __('site.city') }}</label>
                                                <input type="text" class="form-control" id="validationCustom03" name="city" placeholder="{{ __('site.city') }}" value="{{old('city', isset($complaindetail) ? $complaindetail->city : null)}}" required>
                                                <div class="invalid-feedback">
                                                    {{ __('site.provide_valid_city') }}
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="validationCustom05">{{ __('site.complaint_title') }}</label>
                                                <input type="text" class="form-control" id="validationCustom05" name="title" placeholder="{{ __('site.inquiry_title') }}" value="{{old('title', isset($complaindetail) ? $complaindetail->title : null)}}" required>
                                                <div class="invalid-feedback">
                                                    {{ __('site.provide_valid_title') }}
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="exampleFormControlSelect1">{{ __('site.complaint_type') }}</label>
                                                <select class="form-control" name="type" id="exampleFormControlSelect1">
                                                    <option value="{{ __('site.hardware_inquiry') }}" @if(isset($complaindetail) && $complaindetail->type == 'Hardware Inquiry') {{'selected'}} @endif>{{ __('site.hardware_inquiry') }}</option>
                                                    <option value="{{ __('site.power_inquiry')}}" @if(isset($complaindetail) && $complaindetail->type == 'Power Inquiry') {{'selected'}} @endif>{{ __('site.power_inquiry') }}</option>
                                                    <option value="{{ __('site.other') }}" @if(isset($complaindetail) && $complaindetail->type == 'Other') {{'selected'}} @endif>{{ __('site.other') }}</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    {{ __('site.provide_valid_title') }}
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="validationCustom05">{{ __('site.complaint_details') }}</label>
                                                <textarea class="form-control" id="validationCustom05" name="details" placeholder="{{ __('site.inquiry_details') }}" required style="min-height: 200px;">{{old('details', isset($complaindetail) ? $complaindetail->details : null)}}</textarea>
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
            $(document).ready(function() {
                $('#customers').dataTable({
                    "searching": true
                    , "scrollY": "400px"
                    , "scrollCollapse": true
                , });
            });

        </script>

