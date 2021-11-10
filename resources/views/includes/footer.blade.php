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
<script src="vendors/bundle.js"></script>

<!-- Chartjs -->
<script src="vendors/charts/chartjs/chart.min.js"></script>

<!-- Circle progress -->
<script src="vendors/circle-progress/circle-progress.min.js"></script>

<!-- Dashboard scripts -->
<script src="assets/js/examples/dashboard.js"></script>
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

<!-- Plugin scripts -->
<script src="vendors/bundle.js"></script>

<!-- App scripts -->
<script src="assets/js/app.min.js"></script>

<!-- DataTable -->
<script src="vendors/dataTable/jquery.dataTables.min.js"></script>
<script src="vendors/dataTable/dataTables.bootstrap4.min.js"></script>
<script src="vendors/dataTable/dataTables.responsive.min.js"></script>
<script src="assets/js/examples/datatable.js"></script>

<!-- Prism -->
<script src="vendors/prism/prism.js"></script>

<!-- Active Nav -->
<script>
    $(document).ready(function(){
        $('.side_navi li a').removeClass('active');
        var current = location.pathname.split("/")[2];
        $('.side_navi li a').each(function(){
            var $this = $(this);
            if($this.attr('href') == current){
              $this.addClass('active');
          }
      });
    });
</script>
</body>
</html>
