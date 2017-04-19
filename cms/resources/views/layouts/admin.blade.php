<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->

<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>

	<meta charset="utf-8" />

	<title>Metronic | Admin @yield('title')</title>

	<meta content="width=device-width, initial-scale=1.0" name="viewport" />

	<meta content="" name="description" />

	<meta content="" name="author" />

	<!-- BEGIN GLOBAL MANDATORY STYLES -->

	<link href="{{ asset('media/css/bootstrap.min.css ') }}" rel="stylesheet" type="text/css"/>

	<link href="{{ asset('media/css/bootstrap-responsive.min.css ') }}" rel="stylesheet" type="text/css"/>

	<link href="{{ asset('media/css/font-awesome.min.css ') }}" rel="stylesheet" type="text/css"/>

	<link href="{{ asset('media/css/style-metro.css ') }}" rel="stylesheet" type="text/css"/>

	<link href="{{ asset('media/css/style.css ') }}" rel="stylesheet" type="text/css"/>

	<link href="{{ asset('media/css/style-responsive.css ') }}" rel="stylesheet" type="text/css"/>

	<link href="{{ asset('media/css/default.css ') }}" rel="stylesheet" type="text/css" id="style_color"/>

	<link href="{{ asset('media/css/uniform.default.css ') }}" rel="stylesheet" type="text/css"/>

	<link href="{{ asset('media/css/timeline.css') }}" rel="stylesheet" type="text/css"/>

	<!-- END GLOBAL MANDATORY STYLES -->

	<!-- BEGIN PAGE LEVEL STYLES -->

	<link href="{{ asset('media/css/jquery.gritter.css ') }}" rel="stylesheet" type="text/css"/>

	<link href="{{ asset('media/css/daterangepicker.css ') }}" rel="stylesheet" type="text/css" />

	<link href="{{ asset('media/css/fullcalendar.css ') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ asset('media/css/DT_bootstrap.css ') }}" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('media/css/select2_metro.css') }}" />


	<link href="{{ asset('media/css/bootstrap-fileupload.css ') }}" rel="stylesheet" type="text/css"/>


	<link href="{{ asset('media/css/profile.css ') }}" rel="stylesheet" type="text/css"/>

	<!--描述文本框-->
	<link rel="stylesheet" type="text/css" href="{{ asset('media/css/bootstrap-wysihtml5.css')}}" />


	<!--开关按钮-->
	<link rel="stylesheet" type="text/css" href="{{ asset('media/css/bootstrap-toggle-buttons.css')}}" />
	
	<link rel="stylesheet" type="text/css" href="{{ asset('media/css/select2_metro.css')}}" />

	<!-- BEGIN PAGE LEVEL STYLES -->

	<link rel="stylesheet" type="text/css" href="{{ asset('media/css/bootstrap-tree.css')}}" />

	<link rel="stylesheet" type="text/css" href="{{ asset('media/css/chosen.css')}}" />



	<!-- END PAGE LEVEL STYLES -->

	<link rel="shortcut icon" href="{{ asset('media/image/favicon.ico ')}}" />


</head>

<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class="page-header-fixed">

	<!-- BEGIN HEADER -->

	<div class="header navbar navbar-inverse navbar-fixed-top">

		<!-- BEGIN TOP NAVIGATION BAR -->

		<div class="navbar-inner">

			<div class="container-fluid">

				<!-- BEGIN LOGO -->

				<a class="brand" href="#">

				<img src="{{ asset('media/image/logo.png ') }}" alt="logo"/>

				</a>

				<!-- END LOGO -->

				<!-- BEGIN RESPONSIVE MENU TOGGLER -->

				<a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">

				<img src="{{ asset('media/image/menu-toggler.png ') }}" alt="" />

				</a>

				<!-- END RESPONSIVE MENU TOGGLER -->

				<!-- BEGIN TOP NAVIGATION MENU -->

				<ul class="nav pull-right">

					<!-- BEGIN USER LOGIN DROPDOWN -->

					<li class="dropdown user">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown">

						<img alt="" src="{{ asset('media/image/avatar1_small.jpg ') }}" />

						<span class="username">{{session('useritems.uname')}}</span>

						<i class="icon-angle-down"></i>

						</a>

						<ul class="dropdown-menu">


							<li><a href="{{route('admin.locked')}}"><i class="icon-lock"></i> 锁屏</a></li>

							<li><a href="{{route('admin.login.logout')}}"><i class="icon-key"></i> 退出 </a></li>

						</ul>

					</li>

					<!-- END USER LOGIN DROPDOWN -->

				</ul>

				<!-- END TOP NAVIGATION MENU -->

			</div>

		</div>

		<!-- END TOP NAVIGATION BAR -->

	</div>

	<!-- END HEADER -->
    

	<!-- BEGIN CONTAINER -->

	<div class="page-container">

		<!-- BEGIN SIDEBAR -->

		<div class="page-sidebar nav-collapse collapse">

			<!-- BEGIN SIDEBAR MENU -->
			<ul class="page-sidebar-menu">
			  <li>
			    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
			    <div class="sidebar-toggler hidden-phone"></div>
			    <!-- BEGIN SIDEBAR TOGGLER BUTTON --></li>
			  <li>
			    <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
			    <form class="sidebar-search">
			      <div class="input-box">
			        <a href="javascript:;" class="remove"></a>
			        <input type="text" placeholder="搜索..." />
			        <input type="button" class="submit" value=" " /></div>
			    </form>
			    <!-- END RESPONSIVE QUICK SEARCH FORM --></li>
			  <li class="start active ">
			    <a href="{{ url('admin/home') }}">
			      <i class="icon-flag"></i>
			      <span class="title">系统管理控制台</span>
			      <span class="selected"></span>
			    </a>
			  </li>
			  <li class="">
			    <a href="javascript:;">
			      <i class="icon-home"></i>
			      <span class="title">首页管理</span>
			      <span class="arrow "></span>
			    </a>
			    <ul class="sub-menu">
			      <li>
			        <a href="#">
			          <i class="icon-windows"></i>广告位置</a>
			      </li>
			      <li>
			        <a href="#">
			          <i class=" icon-glass"></i>友情链接</a>
			      </li>
			      <li>
			        <a href="#">
			          <i class="icon-signal"></i>其他</a>
			      </li>
			    </ul>
			  </li>
			  <li class="">
			    <a href="javascript:;">
			      <i class="icon-table"></i>
			      <span class="title">栏目管理</span>
			      <span class="arrow "></span>
			    </a>
			    <ul class="sub-menu">
			      <li>
			        <a href="#">栏目列表</a>
			       </li>
			      <li>
			        <a href="#">新增栏目</a>
			      </li>
			      <li>
			        <a href="#">其他</a>
			      </li>
			     
			    </ul>
			  </li>
			  <li class="">
			    <a href="javascript:;">
			      <i class="icon-briefcase"></i>
			      <span class="title">产品管理</span>
			      <span class="arrow "></span>
			    </a>
			    <ul class="sub-menu">
			      <li>
			        <a href="{{ route('admin.category.index') }}">
			          <i class="icon-time"></i>分类列表</li>
			      <li>
			        <a href="{{ route('admin.category.create') }}">
			          <i class="icon-cogs"></i>新增分类</li>
			      <li>
			        <a href="#">
			          <i class="icon-comments"></i>其他</a>
			      </li>
			    </ul>
			  </li>
			  <li class="">
			    <a href="javascript:;">
			      <i class="icon-folder-open"></i>
			      <span class="title">页面管理</span>
			      <span class="arrow "></span>
			    </a>
			    <ul class="sub-menu">
			      <li>
			        <a href="{{route('admin.page')}}">
			          <i class="icon-file-text"></i>单页面列表</a>
			      </li>
			    </ul>
			  </li>
			  <li>
			    <a href="javascript:;">
			      <i class="icon-cogs"></i>
			      <span class="title">系统设置</span>
			      <span class="arrow "></span>
			    </a>
			    <ul class="sub-menu">
			      <li>
			        <a href="javascript:;">
			          <i class="icon-list"></i>权限管理
			          <span class="arrow"></span></a>
			        <ul class="sub-menu">
			          <li>
			            <a href="javascript:;">
			              <i class="icon-user"></i>用户管理
			              <span class="arrow"></span></a>
			            <ul class="sub-menu">
			              <li>
			                <a href="{{ route('admin.admin_user.index')}}">
			                  <i class="icon-user-md"></i>用户列表</a>
			              </li>
			              <li>
			                <a href="{{ route('admin.admin_user.create')}}">
			                  <i class=" icon-plus"></i>添加用户</a>
			              </li>
			              <li>
			                <a href="#">
			                  <i class=" icon-rss"></i>其他</a>
			              </li>
			            </ul>
			          </li>
			          <li>
			        <a href="javascript:;">
			          <i class="icon-globe"></i>角色权限
			          <span class="arrow"></span></a>
			        <ul class="sub-menu">
			          <li>
			            <a href="{{route('admin.systems.permission.index')}}">
			              <i class="icon-user"></i>管理员列表</a>
			          </li>
			          <li>
			            <a href="{{route('admin.systems.permission.create')}}">
			              <i class="icon-external-link"></i>权限分配</a>
			          </li>
			          <li>
			            <a href="#">
			              <i class="icon-bell"></i>其他</a>
			          </li>
			        </ul>
			      </li>
			        </ul>
			      </li>
			      
			      <li>
			        <a href="{{url('admin/systems/web/index')}}">
			          <i class="icon-cog"></i>网站配置</a>
			      </li>
			    </ul>
			  </li>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>

		<!-- END SIDEBAR -->

		<!-- BEGIN PAGE -->

		<div class="page-content">

			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<div id="portlet-config" class="modal hide">

				<div class="modal-header">

					<button data-dismiss="modal" class="close" type="button"></button>

					<h3>Widget Settings</h3>

				</div>

				<div class="modal-body">

					Widget settings form goes here

				</div>

			</div>

			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<!-- BEGIN PAGE CONTAINER-->

			<div class="container-fluid">

				<!-- BEGIN PAGE HEADER-->



				<!-- END PAGE HEADER-->
        @section('content')
        <div class="row-fluid">

          <div class="span12">

            

            <!-- BEGIN PAGE TITLE & BREADCRUMB-->

            <h3 class="page-title">

              后台管理 <small>_</small>

            </h3>

            <ul class="breadcrumb">

              <li>

                <i class="icon-home"></i>

                <a href="#">后台首页</a>

                <i class="icon-angle-right"></i>

              </li>

              <li><a href="#">Dashboard</a></li>

              <li class="pull-right no-text-shadow">

                <div id="dashboard-report-range" class="dashboard-date-range tooltips no-tooltip-on-touch-device responsive" data-tablet="" data-desktop="tooltips" data-placement="top" data-original-title="Change dashboard date range">

                  <i class="icon-calendar"></i>

                  <span></span>

                  <i class="icon-angle-down"></i>

                </div>

              </li>

            </ul>

            <!-- END PAGE TITLE & BREADCRUMB-->

          </div>

        </div>
        @show
			</div>

			<!-- END PAGE CONTAINER-->

		</div>

		<!-- END PAGE -->

	</div>

	<!-- END CONTAINER -->

	<!-- BEGIN FOOTER -->

	<div class="footer">

		<div class="footer-inner">

			2017 &copy; Metronic by keenthemes.

		</div>

		<div class="footer-tools">

			<span class="go-top">

			<i class="icon-angle-up"></i>

			</span>

		</div>

	</div>

	<!-- END FOOTER -->

	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

	<!-- BEGIN CORE PLUGINS -->

	<script src="{{ asset('media/js/jquery-1.10.1.min.js ') }}" type="text/javascript"></script>

	<script src="{{ asset('media/js/jquery-migrate-1.2.1.min.js ') }}" type="text/javascript"></script>

	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js ') }} before bootstrap.min.js ') }} to fix bootstrap tooltip conflict with jquery ui tooltip -->

	<script src="{{ asset('media/js/jquery-ui-1.10.1.custom.min.js ') }}" type="text/javascript"></script>

	<script src="{{ asset('media/js/bootstrap.min.js ') }}" type="text/javascript"></script>

	<!--[if lt IE 9]>

	<script src="{{ asset('media/js/excanvas.min.js ') }}" type="text/javascript"></script>

	<script src="{{ asset('media/js/respond.min.js ') }}" type="text/javascript"></script>

	<![endif]-->

	<script src="{{ asset('media/js/jquery.slimscroll.min.js ') }}" type="text/javascript"></script>

	<script src="{{ asset('media/js/jquery.blockui.min.js ') }}" type="text/javascript"></script>

	<script src="{{ asset('media/js/jquery.cookie.min.js ') }}" type="text/javascript"></script>

	<script src="{{ asset('media/js/jquery.uniform.min.js ') }}" type="text/javascript" ></script>

	<!-- END CORE PLUGINS -->

	<!-- BEGIN PAGE LEVEL PLUGINS -->

	<script src="{{ asset('media/js/jquery.flot.js ') }}" type="text/javascript"></script>

	<script src="{{ asset('media/js/jquery.flot.resize.js ') }}" type="text/javascript"></script>

	<script src="{{ asset('media/js/jquery.pulsate.min.js ') }}" type="text/javascript"></script>

	<script src="{{ asset('media/js/date.js ') }}" type="text/javascript"></script>

	<script src="{{ asset('media/js/daterangepicker.js ') }}" type="text/javascript"></script>

	<script src="{{ asset('media/js/jquery.gritter.js ') }}" type="text/javascript"></script>

	<script src="{{ asset('media/js/fullcalendar.min.js ') }}" type="text/javascript"></script>

	<script src="{{ asset('media/js/jquery.easy-pie-chart.js ') }}" type="text/javascript"></script>

	<script src="{{ asset('media/js/jquery.sparkline.min.js ') }}" type="text/javascript"></script>

	<!-- END PAGE LEVEL PLUGINS -->

	<!-- BEGIN PAGE LEVEL SCRIPTS -->

	<script src="{{ asset('media/js/app.js ') }}" type="text/javascript"></script>
	
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script type="text/javascript" src="{{ asset('media/js/select2.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('media/js/jquery.dataTables.js ') }}"></script>

	<script type="text/javascript" src="{{ asset('media/js/DT_bootstrap.js ') }}"></script>



<!-- BEGIN PAGE LEVEL PLUGINS -->

	
	<script type="text/javascript" src="{{ asset('media/js/bootstrap-fileupload.js') }}"></script>

	<script type="text/javascript" src="{{ asset('media/js/chosen.jquery.min.js') }}"></script>

	<script src="{{ asset('media/js/form-validation.js') }}"></script> 

	<script src="{{ asset('media/js/table-managed.js') }}"></script>
	<script src="{{ asset('media/js/ui-tree.js') }}"></script>   
	<script src="{{ asset('media/js/bootstrap-tree.js') }}"></script>

	
	<!-- END PAGE LEVEL SCRIPTS -->  

	<script>

		jQuery(document).ready(function() {    

		   App.init(); // initlayout and core plugins
		   TableManaged.init();
		   // UITree.init();

		  

		});

	</script>
	@yield('javascript')
	<!-- END JAVASCRIPTS -->

</body>

<!-- END BODY -->

</html>