<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->

<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>

	<meta charset="utf-8" />

	<title>Metronic | Admin 后台@yield('title')</title>

	<meta content="width=device-width, initial-scale=1.0" name="viewport" />

	<meta content="" name="description" />

	<meta content="" name="author" />
<!-- BEGIN GLOBAL MANDATORY STYLES -->

	<link href="{{ asset('media/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>

	<link href="{{ asset('media/css/bootstrap-responsive.min.css')}}" rel="stylesheet" type="text/css"/>

	<link href="{{ asset('media/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>

	<link href="{{ asset('media/css/style-metro.css')}}" rel="stylesheet" type="text/css"/>

	<link href="{{ asset('media/css/style.css')}}" rel="stylesheet" type="text/css"/>

	<link href="{{ asset('media/css/style-responsive.css')}}" rel="stylesheet" type="text/css"/>

	<link href="{{ asset('media/css/default.css')}}" rel="stylesheet" type="text/css" id="style_color"/>

	<link href="{{ asset('media/css/uniform.default.css')}}" rel="stylesheet" type="text/css"/>

	<!-- END GLOBAL MANDATORY STYLES -->

	<!-- BEGIN PAGE LEVEL STYLES -->

	<link href="{{ asset('media/css/lock.css')}}" rel="stylesheet" type="text/css"/>

	<!-- END PAGE LEVEL STYLES -->

	<link rel="shortcut icon" href="{{ asset('media/image/favicon.ico')}}" />


</head>

<!-- END HEAD -->

<!-- BEGIN BODY -->

<body>
	@section('content')
	
	@show
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

	<!-- BEGIN CORE PLUGINS -->
	
    	<script src="{{ asset('media/js/jquery-1.10.1.min.js')}}" type="text/javascript"></script>

	<script src="{{ asset('media/js/jquery-migrate-1.2.1.min.js')}}" type="text/javascript"></script>

	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->

	<script src="{{ asset('media/js/jquery-ui-1.10.1.custom.min.js')}}" type="text/javascript"></script>      

	<script src="{{ asset('media/js/bootstrap.min.js')}}" type="text/javascript"></script>

	<!--[if lt IE 9]>

	<script src="{{ asset('media/js/excanvas.min.js')}}"></script>

	<script src="{{ asset('media/js/respond.min.js')}}"></script>  

	<![endif]-->   

	<script src="{{ asset('media/js/jquery.slimscroll.min.js')}}" type="text/javascript"></script>

	<script src="{{ asset('media/js/jquery.blockui.min.js')}}" type="text/javascript"></script>  

	<script src="{{ asset('media/js/jquery.cookie.min.js')}}" type="text/javascript"></script>

	<script src="{{ asset('media/js/jquery.uniform.min.js')}}" type="text/javascript" ></script>

	<!-- END CORE PLUGINS -->

	<!-- BEGIN PAGE LEVEL PLUGINS -->

	<script src="{{ asset('media/js/jquery.backstretch.min.js')}}" type="text/javascript"></script>

	<!-- END PAGE LEVEL PLUGINS -->   

	<script src="{{ asset('media/js/app.js')}}"></script>  

	<script src="{{ asset('media/js/lock.js')}}"></script> 

	<script>

		jQuery(document).ready(function() {    

		   App.init();

		   Lock.init();

		});

	</script>

	<!-- END JAVASCRIPTS -->

</body>

</html>