<!-- plugins:js -->
<script src="{{ asset('panel/vendors/base/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="{{ asset('panel/vendors/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('panel/vendors/datatables.net/jquery.dataTables.js') }}"></script>
<script src="{{ asset('panel/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{ asset('panel/js/off-canvas.js') }}"></script>
<script src="{{ asset('panel/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('panel/js/template.js') }}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{ asset('panel/js/dashboard.js') }}"></script>
<script src="{{ asset('panel/js/data-table.js') }}"></script>
<script src="{{ asset('panel/js/jquery.dataTables.js') }}"></script>
<script src="{{ asset('panel/js/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('panel/js/file-upload.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
$('.datepicker').datepicker();
@yield('scripts')
