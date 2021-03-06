<!-- begin::footer -->
<footer>
    <div class="container-fluid">
        <div>{{ __('site.powered_by') }} <a href="https://orangeroomdigital.com/">{{ __('site.orange_room_digital') }}</a></div>
    </div>
</footer>
<!-- end::footer -->

</div>
<!-- end::main content -->

</div>

<!-- Plugin scripts -->
<script src="{{ asset('vendors/bundle.js') }}"></script>

<!-- Chartjs -->
<script src="{{ asset('vendors/charts/chartjs/chart.min.js') }}"></script>

<!-- Circle progress -->
<script src="{{ asset('vendors/circle-progress/circle-progress.min.js') }}"></script>

<!-- Dashboard scripts -->
<script src="{{ asset('assets/js/examples/dashboard.js') }}"></script>
<div class="colors"> <!-- To use theme colors with Javascript -->
    <div class="bg-primary"></div>
    <div class="bg-primary-bright"></div>
    <div class="bg-secondary"></div>
    <div class="bg-secondary-bright"></div>
    <div class="bg-info"></div>
    <div class="bg-info-bright"></div>
    <div class="bg-success"></div>
    <div class="bg-success-bright"></div>
    <div class="bg-danger"></div>
    <div class="bg-danger-bright"></div>
    <div class="bg-warning"></div>
    <div class="bg-warning-bright"></div>
</div>

<!-- App scripts -->
<script src="{{ asset('assets/js/app.min.js') }}"></script>

<!-- DataTable -->
<script src="{{ asset('vendors/dataTable/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendors/dataTable/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('vendors/dataTable/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/js/examples/datatable.js') }}"></script>

<!-- Prism -->
<script src="{{ asset('vendors/prism/prism.js') }}"></script>

<!-- Peity -->
<script src="{{ asset('vendors/charts/peity/jquery.peity.min.js') }}"></script>
<script src="{{ asset('assets/js/examples/charts/peity.js') }}"></script>

</body>
</html>
