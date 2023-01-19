<!DOCTYPE html>
<html dir="ltr" lang="id">
@include('theme.head')
<body class="stretched">
	<!-- Document Wrapper ============================================= -->
	<div id="wrapper" class="clearfix">
		<!-- Header ============================================= -->
		@include('theme.header')
        <!-- #header end -->
		<!-- Content ============================================= -->
		@yield('content')
        <!-- #content end -->
		<!-- Footer ============================================= -->
		@include('theme.footer')
        <!-- #footer end -->
	</div>
    <!-- #wrapper end -->
	<!-- Go To Top ============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>
	<!-- JavaScripts============================================= -->
	@include('theme.script')
    @yield('custom_js')
	@include('theme.modal')
</body>
</html>