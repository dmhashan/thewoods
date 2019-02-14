<!DOCTYPE html>
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    @include('includes.head')
</head>
<body class="header-light navbar-light navbar-fixed with-topbar withAnimation">
	@include('includes.header')

	<section class="call-box bg3">
	    @yield('content')
	</section>
	@include('includes.footer')
	@include('includes.foot')
</div>
</body>