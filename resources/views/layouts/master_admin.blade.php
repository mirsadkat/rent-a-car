
<!DOCTYPE html>
<html>
	@include('admin.shared.head_admin')
	<!--
	BODY TAG OPTIONS:
	=================
	Apply one or more of the following classes to get the
	desired effect
	|---------------------------------------------------------|
	| SKINS         | skin-blue                               |
	|               | skin-black                              |
	|               | skin-purple                             |
	|               | skin-yellow                             |
	|               | skin-red                                |
	|               | skin-green                              |
	|---------------------------------------------------------|
	|LAYOUT OPTIONS | fixed                                   |
	|               | layout-boxed                            |
	|               | layout-top-nav                          |
	|               | sidebar-collapse                        |
	|               | sidebar-mini                            |
	|---------------------------------------------------------|
	-->
	<body class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
			<!-- Main Header -->
			@include('admin.shared.header_admin')

			<!-- Left side column. contains the logo and sidebar -->
			@include('admin.shared.sidebar_admin')

			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				@yield('content')
				<!-- /.content -->
			</div>
			<!-- /.content-wrapper -->

			<!-- Main Footer -->
			@include('admin.shared.footer_admin')

			@include('admin.shared.script_bottom_admin')
		</div>
	</body>
</html>