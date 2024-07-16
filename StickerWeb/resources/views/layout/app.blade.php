<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	@stack('title')

	<link rel="shortcut icon" href="{{ asset('dist/images/favicon.ico') }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- START: Template CSS -->
	<link rel="stylesheet" href="{{ asset('dist/vendors/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('dist/vendors/jquery-ui/jquery-ui.min.css') }}">
	<link rel="stylesheet" href="{{ asset('dist/vendors/jquery-ui/jquery-ui.theme.min.css') }}">
	<link rel="stylesheet" href="{{ asset('dist/vendors/simple-line-icons/css/simple-line-icons.css') }}">
	<link rel="stylesheet" href="{{ asset('dist/vendors/flags-icon/css/flag-icon.min.css') }}">
	<link rel="stylesheet" href="{{ asset('dist/vendors/flag-select/css/flags.css') }}">
	<!-- END: Template CSS -->

	<!-- START: Page CSS-->

	<!-- END: Page CSS-->

	<!-- START: Page CSS -->
	<link rel="stylesheet" href="{{ asset('dist/vendors/chartjs/Chart.min.css') }}">
	<link rel="stylesheet" href="{{ asset('dist/vendors/morris/morris.css') }}">
	<link rel="stylesheet" href="{{ asset('dist/vendors/weather-icons/css/pe-icon-set-weather.min.css') }}">
	<link rel="stylesheet" href="{{ asset('dist/vendors/starrr/starrr.css') }}">
	<link rel="stylesheet" href="{{ asset('dist/vendors/fontawesome/css/all.min.css') }}">
	<link rel="stylesheet" href="{{ asset('dist/vendors/ionicons/css/ionicons.min.css') }}">
	<link rel="stylesheet" href="{{ asset('dist/vendors/jquery-jvectormap/jquery-jvectormap-2.0.3.css') }}">
	<!-- END: Page CSS -->
	<link rel="stylesheet" href="{{ asset('dist/vendors/select2/css/select2.min.css') }}">
	<link rel="stylesheet" href="{{ asset('dist/vendors/select2/css/select2-bootstrap.min.css') }}">

	<!-- START: Page CSS-->
	<link rel="stylesheet" href="{{ asset('dist/vendors/bootstrap4-toggle/css/bootstrap4-toggle.min.css') }}" />
	<!-- END: Page CSS-->

	<!-- START: Page CSS-->
	<link rel="stylesheet" href="{{ asset('dist/vendors/datatable/css/dataTables.bootstrap4.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('dist/vendors/datatable/buttons/css/buttons.bootstrap4.min.css') }}" />

      <!-- START: Page CSS-->
      <link rel="stylesheet" href="{{ asset('vendors/social-button/bootstrap-social.css') }}"/>
      <!-- END: Page CSS-->
	<!-- START: Custom CSS -->
	<link rel="stylesheet" href="{{ asset('dist/css/main.css') }}">
	<!-- END: Custom CSS -->
</head>

<body id="main-container" class="default">
	<!-- START: Pre Loader -->
	<div class="se-pre-con">
		<img src="{{ asset('dist/images/logo.png') }}" alt="logo" width="23" class="img-fluid">
	</div>
	<!-- END: Pre Loader -->

	<!-- START: Header -->
	@include('layout.top')
	@include('layout.side')
	<!-- END: Header -->

	<main>
		@yield('content')
	</main>


	<!-- START: Back to top -->
	<a href="#" class="scrollup text-center">
		<i class="icon-arrow-up"></i>
	</a>
	<!-- END: Back to top -->

	<!-- START: Template JS -->
	<script src="{{ asset('dist/vendors/jquery/jquery-3.3.1.min.js') }}"></script>
	<script src="{{ asset('dist/vendors/jquery-ui/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('dist/vendors/moment/moment.js') }}"></script>
	<script src="{{ asset('dist/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('dist/vendors/slimscroll/jquery.slimscroll.min.js') }}"></script>
	<script src="{{ asset('dist/vendors/flag-select/js/jquery.flagstrap.min.js') }}"></script>
	<!-- END: Template JS -->

	<!-- START: APP JS -->
	<script src="{{ asset('dist/js/app.js') }}"></script>

	<!-- END: APP JS -->

	<!-- START: Page Vendor JS -->
	<script src="{{ asset('dist/vendors/raphael/raphael.min.js') }}"></script>
	<script src="{{ asset('dist/vendors/morris/morris.min.js') }}"></script>
	<script src="{{ asset('dist/vendors/chartjs/Chart.min.js') }}"></script>
	<script src="{{ asset('dist/vendors/starrr/starrr.js') }}"></script>
	<script src="{{ asset('dist/vendors/jquery-flot/jquery.canvaswrapper.js') }}"></script>
	<script src="{{ asset('dist/vendors/jquery-flot/jquery.colorhelpers.js') }}"></script>
	<script src="{{ asset('dist/vendors/jquery-flot/jquery.flot.js') }}"></script>
	<script src="{{ asset('dist/vendors/jquery-flot/jquery.flot.saturated.js') }}"></script>
	<script src="{{ asset('dist/vendors/jquery-flot/jquery.flot.browser.js') }}"></script>
	<script src="{{ asset('dist/vendors/jquery-flot/jquery.flot.drawSeries.js') }}"></script>
	<script src="{{ asset('dist/vendors/jquery-flot/jquery.flot.uiConstants.js') }}"></script>
	<script src="{{ asset('dist/vendors/jquery-flot/jquery.flot.legend.js') }}"></script>
	<script src="{{ asset('dist/vendors/jquery-flot/jquery.flot.pie.js') }}"></script>
	<script src="{{ asset('dist/vendors/chartjs/Chart.min.js') }}"></script>
	<script src="{{ asset('dist/vendors/jquery-jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
	<script src="{{ asset('dist/vendors/jquery-jvectormap/jquery-jvectormap-world-mill.js') }}"></script>
	<script src="{{ asset('dist/vendors/jquery-jvectormap/jquery-jvectormap-de-merc.js') }}"></script>
	<script src="{{ asset('dist/vendors/jquery-jvectormap/jquery-jvectormap-us-aea.js') }}"></script>
	<!-- END: Page Vendor JS -->

	<!-- START: Page Vendor JS-->
	<script src="{{ asset('dist/vendors/datatable/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('dist/vendors/datatable/js/dataTables.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('dist/vendors/datatable/jszip/jszip.min.js') }}"></script>
	<script src="{{ asset('dist/vendors/datatable/pdfmake/pdfmake.min.js') }}"></script>
	<script src="{{ asset('dist/vendors/datatable/pdfmake/vfs_fonts.js') }}"></script>
	<script src="{{ asset('dist/vendors/datatable/buttons/js/dataTables.buttons.min.js') }}"></script>
	<script src="{{ asset('dist/vendors/datatable/buttons/js/buttons.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('dist/vendors/datatable/buttons/js/buttons.colVis.min.js') }}"></script>
	<script src="{{ asset('dist/vendors/datatable/buttons/js/buttons.flash.min.js') }}"></script>
	<script src="{{ asset('dist/vendors/datatable/buttons/js/buttons.html5.min.js') }}"></script>
	<script src="{{ asset('dist/vendors/datatable/buttons/js/buttons.print.min.js') }}"></script>
	<!-- END: Page Vendor JS-->

	<!-- START: Page Vendor JS-->
	<script src="{{ asset('dist/vendors/select2/js/select2.full.min.js') }}"></script>
	<!-- END: Page Vendor JS-->

	<!-- START: Page Script JS-->
	<script src="{{ asset('dist/js/select2.script.js') }}"></script>

	<!-- END: Page Script JS-->

	<!-- START: Page Script JS-->
	<script src="{{ asset('dist/js/datatable.script.js') }}"></script>
	<!-- END: Page Script JS-->

	<!-- START: Page JS -->
	<script src="{{ asset('dist/js/home.script.js') }}"></script>
	<!-- END: Page JS -->
	<!-- START: Page Vendor JS-->
	<script src="{{ asset('dist/vendors/bootstrap4-toggle/js/bootstrap4-toggle.min.js') }}"></script>
	<!-- END: Page Vendor JS-->

</body>
</html>
