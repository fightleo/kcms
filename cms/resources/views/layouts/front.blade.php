<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->

<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>

	<meta charset="utf-8" />

	<title>Metronic | @yield('title')</title>

	<meta content="width=device-width, initial-scale=1.0" name="viewport" />

	<meta content="" name="description" />

	<meta content="" name="author" />

	<!-- BEGIN GLOBAL MANDATORY STYLES -->

	<link href="{{asset('media/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>

	<link href="{{asset('media/css/bootstrap-responsive.min.css')}}" rel="stylesheet" type="text/css"/>

	<link href="{{asset('media/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>

	<link href="{{asset('media/css/style-metro.css')}}" rel="stylesheet" type="text/css"/>

	<link href="{{asset('media/css/style.css')}}" rel="stylesheet" type="text/css"/>

	<link href="{{asset('media/css/style-responsive.css')}}" rel="stylesheet" type="text/css"/>

	<link href="{{asset('media/css/default.css')}}" rel="stylesheet" type="text/css" id="style_color"/>

	<link href="{{asset('media/css/uniform.default.css')}}" rel="stylesheet" type="text/css"/>

	<!-- END GLOBAL MANDATORY STYLES -->

	<link href="{{asset('media/css/promo.css')}}" rel="stylesheet" type="text/css"/>

	<link href="{{asset('media/css/animate.css')}}" rel="stylesheet" type="text/css"/>

	<link rel="shortcut icon" href="{{asset('media/image/favicon.ico')}}" />

</head>

<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class="page-header-fixed page-full-width">

	<!-- BEGIN HEADER -->

	<div class="header navbar navbar-inverse navbar-fixed-top">

		<!-- BEGIN TOP NAVIGATION BAR -->

		<div class="navbar-inner">

			<div class="container">

				<!-- BEGIN LOGO -->

				<a class="brand" href="#">

				<img src="{{asset('media/image/logo.png')}}" alt="logo" />

				</a>

				<!-- END LOGO -->

				<!-- BEGIN HORIZANTAL MENU -->

				<div class="navbar hor-menu hidden-phone hidden-tablet">

					<div class="navbar-inner">

						<ul class="nav">

							<li class="visible-phone visible-tablet">

								<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->

								<form class="sidebar-search">

									<div class="input-box">

										<a href="javascript:;" class="remove"></a>

										<input type="text" placeholder="搜索..." />            

										<input type="button" class="submit" value=" " />

									</div>

								</form>

								<!-- END RESPONSIVE QUICK SEARCH FORM -->

							</li>

							<li>

								<a href="#">首页</a>

							</li>

							<li  class="active">

								<a data-toggle="dropdown" class="dropdown-toggle" href="javascript:;">

								<span class="selected"></span>

								新闻

								<span class="arrow"></span>     

								</a>

								<ul class="dropdown-menu">

									<li>

										<a href="layout_horizontal_sidebar_menu.html">

										Horzontal & Sidebar Menu                     </a>

									</li>

									<li >

										<a href="layout_horizontal_menu1.html">

										Horzontal Menu 1                    </a>

									</li>

									<li >

										<a href="layout_horizontal_menu2.html">

										Horzontal Menu 2                    </a>

									</li>

									<li class="active">

										<a href="layout_promo.html">

										Promo Page                     

										</a>

									</li>

									<li >

										<a href="layout_blank_page.html">

										Blank Page                    </a>

									</li>

									<li >

										<a href="layout_email.html">

										Email Templates                     </a>

									</li>

									<li >

										<a href="layout_ajax.html">

										Content Loading via Ajax</a>

									</li>

									<li >

										<a href="layout_sidebar_closed.html">

										Sidebar Closed Page                    </a>

									</li>

									<li >

										<a href="layout_blank_page.html">

										Blank Page                    </a>

									</li>

									<li >

										<a href="layout_boxed_page.html">Boxed Page</a>

									</li>

									<li >

										<a href="layout_boxed_not_responsive.html">

										Non-Responsive Boxed Layout                     </a>

									</li>

									<li class="dropdown-submenu">

										<a tabindex="-1" href="javascript:;">

										More options

										<span class="arrow"></span>

										</a>

										<ul class="dropdown-menu">

											<li><a tabindex="-1" href="#">Second level link</a></li>

											<li class="dropdown-submenu">

												<a tabindex="-1" href="javascript:;">More options<span class="arrow"></span></a>

												<ul class="dropdown-menu">

													<li><a tabindex="-1" href="#">Third level link</a></li>

													<li><a tabindex="-1" href="#">Third level link</a></li>

													<li><a tabindex="-1" href="#">Third level link</a></li>

													<li><a tabindex="-1" href="#">Third level link</a></li>

													<li><a tabindex="-1" href="#">Third level link</a></li>

												</ul>

											</li>

											<li><a tabindex="-1" href="#">Second level link</a></li>

											<li><a tabindex="-1" href="#">Second level link</a></li>

											<li><a tabindex="-1" href="#">Second level link</a></li>

										</ul>

									</li>

								</ul>

								<b class="caret-out"></b>                        

							</li>

							<li>

								<a href="">体育</a>

							</li>

							<li>

								<a data-toggle="dropdown" class="dropdown-toggle" href="">更多

								<span class="arrow"></span>

								</a>

								<ul class="dropdown-menu">

									<li><a href="#">关于我们</a></li>

									<li><a href="#">Services</a></li>

									<li><a href="#">Pricing</a></li>

									<li><a href="#">FAQs</a></li>

									<li><a href="#">Gallery</a></li>

									<li><a href="#">Registration</a></li>

									<li><a href="#">2 Columns (Left)</a></li>

									<li><a href="#">2 Columns (Right)</a></li>

								</ul>

								<b class="caret-out"></b>                        

							</li>

							<li>

								<span class="hor-menu-search-form-toggler">&nbsp;</span>

								<div class="search-form hidden-phone hidden-tablet">

									<form class="form-search">

										<div class="input-append">

											<input type="text" placeholder="Search..." class="m-wrap">

											<button type="button" class="btn"></button>

										</div>

									</form>

								</div>

							</li>

						</ul>

					</div>

				</div>

				<!-- END HORIZANTAL MENU -->

				<!-- BEGIN RESPONSIVE MENU TOGGLER -->

				<a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">

				<img src="{{asset('media/image/menu-toggler.png')}}" alt="" />

				</a>          

				<!-- END RESPONSIVE MENU TOGGLER -->            

				<!-- BEGIN TOP NAVIGATION MENU -->              

				<ul class="nav pull-right">

					<!-- BEGIN NOTIFICATION DROPDOWN -->   

					<li class="dropdown" id="header_notification_bar">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown">

						<i class="icon-warning-sign"></i>

						<span class="badge">6</span>

						</a>

						<ul class="dropdown-menu extended notification">

							<li>

								<p>You have 14 new notifications</p>

							</li>

							<li>

								<a href="#">

								<span class="label label-success"><i class="icon-plus"></i></span>

								New user registered. 

								<span class="time">Just now</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="label label-important"><i class="icon-bolt"></i></span>

								Server #12 overloaded. 

								<span class="time">15 mins</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="label label-warning"><i class="icon-bell"></i></span>

								Server #2 not respoding.

								<span class="time">22 mins</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="label label-info"><i class="icon-bullhorn"></i></span>

								Application error.

								<span class="time">40 mins</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="label label-important"><i class="icon-bolt"></i></span>

								Database overloaded 68%. 

								<span class="time">2 hrs</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="label label-important"><i class="icon-bolt"></i></span>

								2 user IP blocked.

								<span class="time">5 hrs</span>

								</a>

							</li>

							<li class="external">

								<a href="#">See all notifications <i class="m-icon-swapright"></i></a>

							</li>

						</ul>

					</li>

					<!-- END NOTIFICATION DROPDOWN -->

					<!-- BEGIN INBOX DROPDOWN -->

					<li class="dropdown" id="header_inbox_bar">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown">

						<i class="icon-envelope"></i>

						<span class="badge">5</span>

						</a>

						<ul class="dropdown-menu extended inbox">

							<li>

								<p>You have 12 new messages</p>

							</li>

							<li>

								<a href="inbox.html?a=view">

								<span class="photo"><img src="{{asset('media/image/avatar2.jpg')}}" alt="" /></span>

								<span class="subject">

								<span class="from">Lisa Wong</span>

								<span class="time">Just Now</span>

								</span>

								<span class="message">

								Vivamus sed auctor nibh congue nibh. auctor nibh

								auctor nibh...

								</span>  

								</a>

							</li>

							<li>

								<a href="inbox.html?a=view">

								<span class="photo"><img src="{{asset('media/image/avatar3.jpg')}}" alt="" /></span>

								<span class="subject">

								<span class="from">Richard Doe</span>

								<span class="time">16 mins</span>

								</span>

								<span class="message">

								Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh

								auctor nibh...

								</span>  

								</a>

							</li>

							<li>

								<a href="inbox.html?a=view">

								<span class="photo"><img src="{{asset('media/image/avatar1.jpg')}}" alt="" /></span>

								<span class="subject">

								<span class="from">Bob Nilson</span>

								<span class="time">2 hrs</span>

								</span>

								<span class="message">

								Vivamus sed nibh auctor nibh congue nibh. auctor nibh

								auctor nibh...

								</span>  

								</a>

							</li>

							<li class="external">

								<a href="inbox.html">See all messages <i class="m-icon-swapright"></i></a>

							</li>

						</ul>

					</li>

					<!-- END INBOX DROPDOWN -->

					<!-- BEGIN TODO DROPDOWN -->

					<li class="dropdown" id="header_task_bar">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown">

						<i class="icon-tasks"></i>

						<span class="badge">5</span>

						</a>

						<ul class="dropdown-menu extended tasks">

							<li>

								<p>You have 12 pending tasks</p>

							</li>

							<li>

								<a href="#">

								<span class="task">

								<span class="desc">New release v1.2</span>

								<span class="percent">30%</span>

								</span>

								<span class="progress progress-success ">

								<span style="width: 30%;" class="bar"></span>

								</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="task">

								<span class="desc">Application deployment</span>

								<span class="percent">65%</span>

								</span>

								<span class="progress progress-danger progress-striped active">

								<span style="width: 65%;" class="bar"></span>

								</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="task">

								<span class="desc">Mobile app release</span>

								<span class="percent">98%</span>

								</span>

								<span class="progress progress-success">

								<span style="width: 98%;" class="bar"></span>

								</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="task">

								<span class="desc">Database migration</span>

								<span class="percent">10%</span>

								</span>

								<span class="progress progress-warning progress-striped">

								<span style="width: 10%;" class="bar"></span>

								</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="task">

								<span class="desc">Web server upgrade</span>

								<span class="percent">58%</span>

								</span>

								<span class="progress progress-info">

								<span style="width: 58%;" class="bar"></span>

								</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="task">

								<span class="desc">Mobile development</span>

								<span class="percent">85%</span>

								</span>

								<span class="progress progress-success">

								<span style="width: 85%;" class="bar"></span>

								</span>

								</a>

							</li>

							<li class="external">

								<a href="#">See all tasks <i class="m-icon-swapright"></i></a>

							</li>

						</ul>

					</li>

					<!-- END TODO DROPDOWN -->

					<!-- BEGIN USER LOGIN DROPDOWN -->

					<li class="dropdown user">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown">

						<img alt="" src="{{asset('media/image/avatar1_small.jpg')}}" />

						<span class="username">Bob Nilson</span>

						<i class="icon-angle-down"></i>

						</a>

						<ul class="dropdown-menu">

							<li><a href="#"><i class="icon-user"></i> 个人主页</a></li>

							<li><a href="#"><i class="icon-calendar"></i> 我的日历</a></li>

							<li><a href="#"><i class="icon-envelope"></i> 收件箱(3)</a></li>

							<li><a href="#"><i class="icon-tasks"></i> 我的任务</a></li>

							<li class="divider"></li>

							<li><a href="#"><i class="icon-lock"></i> 锁屏</a></li>

							<li><a href="#"><i class="icon-key"></i> 退出</a></li>

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
	
	<div class="page-container row-fluid">

		<!-- BEGIN EMPTY PAGE SIDEBAR -->

		<div class="page-sidebar nav-collapse collapse visible-phone visible-tablet">

			<ul class="page-sidebar-menu">

				<li class="visible-phone visible-tablet">

					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->

					<form class="sidebar-search">

						<div class="input-box">

							<a href="javascript:;" class="remove"></a>

							<input type="text" placeholder="Search..." />            

							<input type="button" class="submit" value=" " />

						</div>

					</form>

					<!-- END RESPONSIVE QUICK SEARCH FORM -->

				</li>

				<li>

					<a class="active" href="#">

					Dashboard                        

					</a>

				</li>

				<li  class="active">

					<a href="javascript:;">

					Layouts

					<span class="arrow open"></span>   

					<span class="selected"></span>   

					</a>

					<ul class="sub-menu">

						<li>

							<a href="layout_horizontal_sidebar_menu.html">

							Horzontal & Sidebar Menu                     </a>

						</li>

						<li >

							<a href="layout_horizontal_menu1.html">

							Horzontal Menu 1                    </a>

						</li>

						<li >

							<a href="layout_horizontal_menu2.html">

							Horzontal Menu 2                    </a>

						</li>

						<li >

							<a href="layout_promo.html">

							Promo Page                     

							</a>

						</li>

						<li >

							<a href="layout_email.html">

							Email Templates                     </a>

						</li>

						<li >

							<a href="layout_ajax.html">

							Content Loading via Ajax</a>

						</li>

						<li >

							<a href="layout_sidebar_closed.html">

							Sidebar Closed Page                    </a>

						</li>

						<li >

							<a href="layout_blank_page.html">

							Blank Page                    </a>

						</li>

						<li >

							<a href="layout_boxed_page.html">Boxed Page</a>

						</li>

						<li >

							<a href="layout_boxed_not_responsive.html">

							Non-Responsive Boxed Layout                     </a>

						</li>

						<li >

							<a href="layout_blank_page.html">

							Blank Page                    </a>

						</li>

						<li>

							<a href="javascript:;">

							More options

							<span class="arrow"></span>

							</a>

							<ul class="sub-menu">

								<li><a href="#">Second level link</a></li>

								<li>

									<a href="javascript:;">More options<span class="arrow"></span></a>

									<ul class="sub-menu">

										<li><a href="#">Third level link</a></li>

										<li><a href="#">Third level link</a></li>

										<li><a href="#">Third level link</a></li>

										<li><a href="#">Third level link</a></li>

										<li><a href="#">Third level link</a></li>

									</ul>

								</li>

								<li><a href="#">Second level link</a></li>

								<li><a href="#">Second level link</a></li>

								<li><a href="#">Second level link</a></li>

							</ul>

						</li>

					</ul>

				</li>

				<li>

					<a href="">Tables</a>

				</li>

				<li>

					<a href="">Extra

					<span class="arrow"></span>

					</a>

					<ul class="sub-menu">

						<li><a href="#">About Us</a></li>

						<li><a href="#">Services</a></li>

						<li><a href="#">Pricing</a></li>

						<li><a href="#">FAQs</a></li>

						<li><a href="#">Gallery</a></li>

						<li><a href="#">Registration</a></li>

						<li><a href="#">2 Columns (Left)</a></li>

						<li><a href="#">2 Columns (Right)</a></li>

					</ul>

				</li>

			</ul>

		</div>

		<!-- END EMPTY PAGE SIDEBAR -->

		<!-- BEGIN PAGE -->

		<div class="page-content no-min-height">

			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<div id="portlet-config" class="modal hide">

				<div class="modal-header">

					<button data-dismiss="modal" class="close" type="button"></button>

					<h3>portlet Settings</h3>

				</div>

				<div class="modal-body">

					<p>Here will be a configuration form</p>

				</div>

			</div>

			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<!-- BEGIN PAGE CONTAINER-->

			<div class="container-fluid promo-page">

				<!-- BEGIN PAGE CONTENT-->

				<div class="row-fluid">

					<div class="span12">
						@section('content')
						@show
						<div class="block-transparent">

							<div class="container">

								<div class="row-fluid margin-bottom-20">

									<div class="span6 margin-bottom-20">

										<h2>Metronic Viverra</h2>

										<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos <a href="#">ellentesque la vehi</a> dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>

										<p>Lunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita <a href="#">distinctio lorem ipsum dolor</a> sit amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>

									</div>

									<div class="span6 margin-bottom-20">

										<a href="#"><img src="{{asset('media/image/img3.png')}}" alt=""></a>

									</div>

								</div>

								<div class="row-fluid">

									<div class="span6">

										<a href="#"><img src="{{asset('media/image/img4.png')}}" alt=""></a>

									</div>

									<div class="span6 margin-bottom-20">

										<h2>Vero eos iusto odio..</h2>

										<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et <a href="#">quas molestias excepturi sint</a> occaecati cupiditate non provident, similique. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>

										<p>Lunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et <a href="#">quam lacus eusce condimentum </a> eleifend enim a feugiat.</p>

									</div>

								</div>

								<hr>

								<div class="row-fluid">

									<div class="span3">

										<h3><a href="#">关于我们</a></h3>

										<p>公司致力于成为拥有一流团队、业绩卓著、值得信赖与尊重，具有品牌影响力的文化产业精英.</p>

									</div>

									<div class="span3">

										<h3><a href="#">联系我们</a></h3>

										<p>
										xx省xx市xx区xx路xx号<br>
										邮递区号:xxxx<br>
										电话: xxxxxxxxxxx<br>
										传真: xxxxxxxx
										</p>

									</div>

									<div class="span3">

										<h3><a href="#">广告服务</a></h3>

										<p>人人都是投资环境,个个代表开放形象.</p>

									</div>

									<div class="span3">

										<h3><a href="#">使用须知</a></h3>

										<p>使用详情介绍</p>

									</div>

								</div>

							</div>

						</div>
						<div class="block-footer">

							<div class="container">

								<div class="row-fluid">

									<div class="span4">

										<h3>反馈建议</h3>

										<p>您好,我是产品经理,欢迎您给我们提产品的使用感受和建议.</p>

										<form class="form-search" action="#">

											<div class="input-append">

												<input type="text" class="m-wrap" placeholder="Email Address"><button type="button" class="btn blue">GO!</button>

											</div>

										</form>

									</div>

									<div class="span4">

										<h3>图片展示</h3>

										<ul class="unstyled blog-images">

											<li><a href="#"><img src="{{asset('media/image/1.jpg')}}" alt=""></a></li>

											<li><a href="#"><img src="{{asset('media/image/2.jpg')}}" alt=""></a></li>

											<li><a href="#"><img src="{{asset('media/image/3.jpg')}}" alt=""></a></li>

											<li><a href="#"><img src="{{asset('media/image/4.jpg')}}" alt=""></a></li>

											<li><a href="#"><img src="{{asset('media/image/5.jpg')}}" alt=""></a></li>

											<li><a href="#"><img src="{{asset('media/image/6.jpg')}}" alt=""></a></li>

											<li><a href="#"><img src="{{asset('media/image/8.jpg')}}" alt=""></a></li>

											<li><a href="#"><img src="{{asset('media/image/10.jpg')}}" alt=""></a></li>

											<li><a href="#"><img src="{{asset('media/image/11.jpg')}}" alt=""></a></li>

											<li><a href="#"><img src="{{asset('media/image/1.jpg')}}" alt=""></a></li>

											<li><a href="#"><img src="{{asset('media/image/2.jpg')}}" alt=""></a></li>

											<li><a href="#"><img src="{{asset('media/image/7.jpg')}}" alt=""></a></li>

										</ul>

									</div>

									<div class="span4">

										<h3>友情链接</h3>

										<ul class="social-icons">

											<li><a href="#" data-original-title="amazon" class="amazon"></a></li>

											<li><a href="#" data-original-title="behance" class="behance"></a></li>

											<li><a href="#" data-original-title="blogger" class="blogger"></a></li>

											<li><a href="#" data-original-title="deviantart" class="deviantart"></a></li>

											<li><a href="#" data-original-title="dribbble" class="dribbble"></a></li>

											<li><a href="#" data-original-title="dropbox" class="dropbox"></a></li>

											<li><a href="#" data-original-title="facebook" class="facebook"></a></li>

											<li><a href="#" data-original-title="forrst" class="forrst"></a></li>

											<li><a href="#" data-original-title="github" class="github"></a></li>

											<li><a href="#" data-original-title="Goole Plus" class="googleplus"></a></li>

											<li><a href="#" data-original-title="jolicloud" class="jolicloud"></a></li>

											<li><a href="#" data-original-title="last-fm" class="last-fm"></a></li>

											<li><a href="#" data-original-title="linkedin" class="linkedin"></a></li>

											<li><a href="#" data-original-title="picasa" class="picasa"></a></li>

											<li><a href="#" data-original-title="pintrest" class="pintrest"></a></li>

											<li><a href="#" data-original-title="rss" class="rss"></a></li>

											<li><a href="#" data-original-title="skype" class="skype"></a></li>

											<li><a href="#" data-original-title="spotify" class="spotify"></a></li>

											<li><a href="#" data-original-title="stumbleupon" class="stumbleupon"></a></li>

											<li><a href="#" data-original-title="tumblr" class="tumblr"></a></li>

											<li><a href="#" data-original-title="twitter" class="twitter"></a></li>

											<li><a href="#" data-original-title="vimeo" class="vimeo"></a></li>

											<li><a href="#" data-original-title="wordpress" class="wordpress"></a></li>

											<li><a href="#" data-original-title="xing" class="xing"></a></li>

											<li><a href="#" data-original-title="yahoo" class="yahoo"></a></li>

											<li><a href="#" data-original-title="youtube" class="youtube"></a></li>

											<li><a href="#" data-original-title="vk" class="vk"></a></li>

											<li><a href="#" data-original-title="instagram" class="instagram"></a></li>

										</ul>

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

			<!-- END PAGE CONTENT-->

		</div>

		<!-- END PAGE CONTAINER--> 

	</div>
	
	<!-- END PAGE --> 

	<!-- END CONTAINER -->

	<!-- BEGIN FOOTER1 -->

	<div class="footer">

		<div class="container">

			<div class="footer-inner">

				2017 &copy; Metronic by keenthemes.Collect from <a href="#" title="cms">CMS</a> - More Templates <a href="" title="GO">GO</a>

			</div>

			<div class="footer-tools">

				<span class="go-top">

				<i class="icon-angle-up"></i>

				</span>

			</div>

		</div>

	</div>

	<!-- END FOOTER -->

	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

	<!-- BEGIN CORE PLUGINS -->

	<script src="{{asset('media/js/jquery-1.10.1.min.js')}}" type="text/javascript"></script>

	<script src="{{asset('media/js/jquery-migrate-1.2.1.min.js')}}" type="text/javascript"></script>

	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->

	<script src="{{asset('media/js/jquery-ui-1.10.1.custom.min.js')}}" type="text/javascript"></script>      

	<script src="{{asset('media/js/bootstrap.min.js')}}" type="text/javascript"></script>

	<!--[if lt IE 9]>

	<script src="{{asset('media/js/excanvas.min.js')}}"></script>

	<script src="{{asset('media/js/respond.min.js')}}"></script>  

	<![endif]-->        

	<script src="{{asset('media/js/jquery.slimscroll.min.js')}}" type="text/javascript"></script>

	<script src="{{asset('media/js/jquery.blockui.min.js')}}" type="text/javascript"></script>  

	<script src="{{asset('media/js/jquery.cookie.min.js')}}" type="text/javascript"></script>

	<script src="{{asset('media/js/jquery.uniform.min.js')}}" type="text/javascript" ></script>

	<!-- END CORE PLUGINS -->

	<script src="{{asset('media/js/app.js')}}"></script>      

	<script>

		jQuery(document).ready(function() {    

		   App.init();

		   jQuery('#promo_carousel').carousel({

		      interval: 10000,

		      pause: 'hover'

		   });

		});

	</script>

	<!-- END JAVASCRIPTS -->

</body>

<!-- END BODY -->

</html>