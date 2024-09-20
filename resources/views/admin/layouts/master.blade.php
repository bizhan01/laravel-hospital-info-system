<!DOCTYPE html>
<html lang="en" dir="rtl">
	
<head>
		<!-- Meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Title --> 
		<title>hospital manager</title>

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('vendor/bootstrap4-rtl/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/themify-icons/themify-icons.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/animate.css/animate.min.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/jscrollpane/jquery.jscrollpane.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/waves/waves.min.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/switchery/dist/switchery.min.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/morris/morris.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/jvectormap/jquery-jvectormap-2.0.3.css') }}">
		
		<link rel="stylesheet" href="{{ asset('vendor/dropify/dist/css/dropify.min.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/DataTables/css/dataTables.bootstrap4.min.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/DataTables/Responsive/css/responsive.bootstrap4.min.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/DataTables/Buttons/css/buttons.dataTables.min.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/DataTables/Buttons/css/buttons.bootstrap4.min.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/toastr/toastr.min.css') }}">

		<link rel="stylesheet" href="{{ asset('vendor/select2/dist/css/select2.min.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/multi-select/css/multi-select.css') }}">
		<link rel="stylesheet" href="{{ asset('vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css') }}">

		<!-- Neptune CSS -->
		<link rel="stylesheet" href="{{ asset('css/core.css') }}">
		<link rel="stylesheet" href="{{ asset('css/my_style.css') }}">

	</head>
	<body class="fixed-sidebar fixed-header skin-default">
		<div class="wrapper">

			<!-- Preloader -->
			<div class="preloader"></div>

			<!-- Sidebar -->
			@include('admin.layouts.sidebar')

			<!-- Header -->
			@include('admin.layouts.header')
            
            <!-- Content -->	
			<div class="site-content" >
                @yield('content')
			</div>

           <!-- Footer -->
			@include('admin.layouts.footer')

		</div>

		<!-- Vendor JS -->
		<script type="text/javascript" src="{{ asset('vendor/jquery/jquery-1.12.3.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendor/tether/js/tether.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendor/bootstrap4-rtl/js/bootstrap.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendor/detectmobilebrowser/detectmobilebrowser.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendor/jscrollpane/jquery.mousewheel.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendor/jscrollpane/mwheelIntent.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendor/jscrollpane/jquery.jscrollpane.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendor/jquery-fullscreen-plugin/jquery.fullscreen-min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendor/waves/waves.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendor/switchery/dist/switchery.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendor/DataTables/js/jquery.dataTables.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendor/DataTables/js/dataTables.bootstrap4.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendor/DataTables/Responsive/js/dataTables.responsive.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendor/DataTables/Responsive/js/responsive.bootstrap4.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendor/DataTables/Buttons/js/dataTables.buttons.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendor/DataTables/Buttons/js/buttons.bootstrap4.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendor/DataTables/JSZip/jszip.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendor/DataTables/pdfmake/build/pdfmake.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendor/DataTables/pdfmake/build/vfs_fonts.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendor/DataTables/Buttons/js/buttons.html5.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendor/DataTables/Buttons/js/buttons.print.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendor/DataTables/Buttons/js/buttons.colVis.min.js') }}"></script>

		<script type="text/javascript" src="{{ asset('vendor/dropify/dist/js/dropify.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendor/bootstrap-inputmask/bootstrap-inputmask.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendor/sweetalert2/sweetalert2.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendor/toastr/toastr.min.js') }}"></script>
		
		<script type="text/javascript" src="{{ asset('vendor/select2/dist/js/select2.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendor/multi-select/js/jquery.multi-select.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendor/bootstrap-maxlength/src/bootstrap-maxlength.js') }}"></script>


		<!-- Neptune JS -->
		<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/demo.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/tables-datatable.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/forms-upload.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/ui-modal.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/ui-notifications.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/forms-plugins.js') }}"></script>

	</body>

</html>