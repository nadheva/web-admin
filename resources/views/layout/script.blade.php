<!--   Core JS Files   -->
<script src="{{asset('template/')}}/assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="{{asset('template/')}}/assets/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="{{asset('template/')}}/assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="{{asset('template/')}}/assets/js/material.min.js" type="text/javascript"></script>
<script src="{{asset('template/')}}/assets/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="{{asset('template/')}}/assets/js/jquery.validate.min.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="{{asset('template/')}}/assets/js/moment.min.js"></script>
<!--  Charts Plugin -->
<script src="{{asset('template/')}}/assets/js/chartist.min.js"></script>
<!--  Plugin for the Wizard -->
<script src="{{asset('template/')}}/assets/js/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('template/')}}/assets/js/bootstrap-notify.js"></script>
<!--   Sharrre Library    -->
<script src="{{asset('template/')}}/assets/js/jquery.sharrre.js"></script>
<!-- DateTimePicker Plugin -->
<script src="{{asset('template/')}}/assets/js/bootstrap-datetimepicker.js"></script>
<!-- Vector Map plugin -->
<script src="{{asset('template/')}}/assets/js/jquery-jvectormap.js"></script>
<!-- Sliders Plugin -->
<script src="{{asset('template/')}}/assets/js/nouislider.min.js"></script>
<!--  Google Maps Plugin    -->
<!--<script src="../assets/js/jquery.select-bootstrap.js"></script>-->
<!-- Select Plugin -->
<script src="{{asset('template/')}}/assets/js/jquery.select-bootstrap.js"></script>
<!--  DataTables.net Plugin    -->
<script src="{{asset('template/')}}/assets/js/jquery.datatables.js"></script>
<!-- Sweet Alert 2 plugin -->
<script src="{{asset('template/')}}/assets/js/sweetalert2.js"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{asset('template/')}}/assets/js/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin    -->
<script src="{{asset('template/')}}/assets/js/fullcalendar.min.js"></script>
<!-- TagsInput Plugin -->
<script src="{{asset('template/')}}/assets/js/jquery.tagsinput.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="{{asset('template/')}}/assets/js/material-dashboard.js"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('template/')}}/assets/js/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.initVectorMap();
    });
</script>

{{-- datatable  --}}
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.js"></script>

@stack('scripts')
<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 21:32:16 GMT -->