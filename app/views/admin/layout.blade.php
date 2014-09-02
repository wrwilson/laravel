<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.1.1
Version: 2.0.2
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Metronic | Form Stuff - Form Controls</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="{{ URL::asset('admin_assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ URL::asset('admin_assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ URL::asset('admin_assets/plugins/uniform/css/uniform.default.css') }}" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="{{ URL::asset('admin_assets/css/style-metronic.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ URL::asset('admin_assets/css/style.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ URL::asset('admin_assets/css/style-responsive.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ URL::asset('admin_assets/css/plugins.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ URL::asset('admin_assets/css/themes/default.css') }}" rel="stylesheet" type="text/css" id="style_color"/>
<link href="{{ URL::asset('admin_assets/css/custom.css') }}" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('admin_assets/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('admin_assets/plugins/bootstrap-fileinput/bootstrap-fileinput.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('admin_assets/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('admin_assets/plugins/jquery-tags-input/jquery.tagsinput.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('admin_assets/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('admin_assets/plugins/typeahead/typeahead.css') }}">
<link href="{{ URL::asset('plugins/rateit/src/rateit.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('admin_assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('admin_assets/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css') }}">
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="{{ URL::asset('admin_assets/favicon.ico') }}"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-fixed-top">
	<!-- BEGIN TOP NAVIGATION BAR -->
	<div class="header-inner">
		<!-- BEGIN LOGO -->
		<a class="navbar-brand" href="index.html">
			<img src="{{ URL::asset('admin_assets/img/logo.png') }}" alt="logo" class="img-responsive"/>
		</a>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<img src="{{ URL::asset('admin_assets/img/menu-toggler.png') }}" alt=""/>
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<ul class="nav navbar-nav pull-right">

			<!-- BEGIN USER LOGIN DROPDOWN -->
			<li class="dropdown user">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<img alt="" src="{{ URL::asset('admin_assets/img/avatar1_small.jpg') }}"/>
					<span class="username">
						 {{ Auth::user()->name }}
					</span>
					<i class="fa fa-angle-down"></i>
				</a>
				<ul class="dropdown-menu">
					<li>
						<a href="{{ URL::to('registration')}}">
							<i class="fa fa-user"></i> My Profile
						</a>
					</li>
					<li>
						<a href="page_calendar.html">
							<i class="fa fa-calendar"></i> My Calendar
						</a>
					</li>
					<li>
						<a href="inbox.html">
							<i class="fa fa-envelope"></i> My Inbox
							<span class="badge badge-danger">
								 3
							</span>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-tasks"></i> My Tasks
							<span class="badge badge-success">
								 7
							</span>
						</a>
					</li>
					<li class="divider">
					</li>
					<li>
						<a href="javascript:;" id="trigger_fullscreen">
							<i class="fa fa-arrows"></i> Full Screen
						</a>
					</li>
					<li>
						<a href="extra_lock.html">
							<i class="fa fa-lock"></i> Lock Screen
						</a>
					</li>
					<li>
						<a href="{{ URL::to('logout') }}">
							<i class="fa fa-key"></i> Log Out
						</a>
					</li>
				</ul>
			</li>
			<!-- END USER LOGIN DROPDOWN -->
		</ul>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200">
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler hidden-phone">
					</div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>

				{{ HTML::nav_link('admin/dashboard', 'Dashboard', 'fa fa-home') }}
				
				<li>
					<a href="javascript:;">
						<i class="fa fa-table"></i>
						<span class="title">
							Website Data
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						{{ HTML::nav_link('admin/suppliers', 'Suppliers') }}
						{{ HTML::nav_link('admin/products', 'Products') }}
						{{ HTML::nav_link('admin/categories', 'Categories') }}
					</ul>
				</li>
				<li>
					<a href="javascript:;">
						<i class="fa fa-envelope-o"></i>
						<span class="title">
							Email Marketing
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						{{ HTML::nav_link('admin/subscribers', 'Subscribers') }}
					</ul>
				</li>
				
				{{ HTML::nav_link('admin/users', 'Users', 'fa fa-user') }}
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	
	@yield('content')


	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="footer">
	<div class="footer-inner">
		 2014 &copy; Metronic by keenthemes.
	</div>
	<div class="footer-tools">
		<span class="go-top">
			<i class="fa fa-angle-up"></i>
		</span>
	</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="{{ URL::asset('admin_assets/plugins/respond.min.js') }}"></script>
<script src="{{ URL::asset('admin_assets/plugins/excanvas.min.js') }}"></script> 
<![endif]-->
<script src="{{ URL::asset('admin_assets/plugins/jquery-1.10.2.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('admin_assets/plugins/jquery-migrate-1.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('admin_assets/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('admin_assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('admin_assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('admin_assets/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('admin_assets/plugins/jquery.cokie.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('admin_assets/plugins/uniform/jquery.uniform.min.js') }}" type="text/javascript"></script>
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="{{ URL::asset('admin_assets/plugins/fuelux/js/spinner.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin_assets/plugins/bootstrap-fileinput/bootstrap-fileinput.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin_assets/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin_assets/plugins/jquery.input-ip-address-control-1.0.min.js') }}"></script>
<script src="{{ URL::asset('admin_assets/plugins/jquery.pwstrength.bootstrap/src/pwstrength.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('admin_assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('admin_assets/plugins/jquery-tags-input/jquery.tagsinput.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('admin_assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('admin_assets/plugins/bootstrap-touchspin/bootstrap.touchspin.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('admin_assets/plugins/typeahead/handlebars.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('admin_assets/plugins/typeahead/typeahead.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('plugins/rateit/src/jquery.rateit.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ URL::asset('admin_assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin_assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js') }}"></script>
<script src="{{ URL::asset('admin_assets/plugins/bootstrap-markdown/lib/markdown.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('admin_assets/plugins/bootstrap-markdown/js/bootstrap-markdown.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- END CORE PLUGINS -->
<script src="{{ URL::asset('admin_assets/scripts/core/app.js') }}"></script>
<script src="{{ URL::asset('admin_assets/scripts/custom/components-form-tools.js') }}"></script>
<script src="{{ URL::asset('admin_assets/scripts/custom/components-editors.js') }}"></script>
<script>
jQuery(document).ready(function() {   
   // initiate layout and plugins
   App.init();
   ComponentsFormTools.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>