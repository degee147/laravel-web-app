<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.4
Version: 4.0.2
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
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
<title>Metronic | Admin Dashboard Template</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="../../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link rel="stylesheet" type="text/css" href="../../assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css"/>
<link rel="stylesheet" type="text/css" href="../../assets/global/plugins/select2/select2.css"/>
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN PAGE STYLES -->
<!-- END PAGE STYLES -->
<!-- BEGIN THEME STYLES -->
<!-- DOC: To use 'material design' style just load 'components-md.css' stylesheet instead of 'components.css' in the below style tag -->
<link href="../../assets/global/css/components-md.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="../../assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/admin/pages/css/todo.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/admin/layout6/css/layout.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/admin/layout6/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-md page-quick-sidebar-over-content">

	<!-- BEGIN MAIN LAYOUT -->
	<!-- HEADER BEGIN -->
    <header class="page-header">
        <nav class="navbar" role="navigation">
            <div class="container-fluid">
                <div class="havbar-header">
                	<!-- BEGIN LOGO -->
                    <a id="index" class="navbar-brand" href="start">
                        <img src="../../assets/admin/layout6/img/logo.png" alt="Logo">
                    </a>
                	<!-- END LOGO -->

	                <!-- BEGIN TOPBAR ACTIONS -->
	                <div class="topbar-actions">
		                <!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
						<form class="search-form" action="extra_search.html" method="GET">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Search here" name="query">
								<span class="input-group-btn">
									<a href="javascript:;" class="btn submit"><i class="fa fa-search"></i></a>
								</span>
							</div>
						</form>
						<!-- END HEADER SEARCH BOX -->

	                	<!-- BEGIN GROUP NOTIFICATION -->
						<div class="btn-group-notification btn-group" id="header_notification_bar">
							<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
								<span class="badge">9</span>
							</button>
							<ul class="dropdown-menu-v2">
								<li class="external">
									<h3><span class="bold">12 pending</span> notifications</h3>
									<a href="#">view all</a>
								</li>
								<li>
									<ul class="dropdown-menu-list scroller" style="height: 250px; padding: 0;" data-handle-color="#637283">
										<li>
											<a href="javascript:;">
												<span class="details">
													<span class="label label-sm label-icon label-success">
														<i class="fa fa-plus"></i>
													</span>
													New user registered.
												</span>
												<span class="time">just now</span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="details">
													<span class="label label-sm label-icon label-danger">
														<i class="fa fa-bolt"></i>
													</span>
													Server #12 overloaded.
												</span>
												<span class="time">3 mins</span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="details">
													<span class="label label-sm label-icon label-warning">
														<i class="fa fa-bell-o"></i>
													</span>
													Server #2 not responding.
												</span>
												<span class="time">10 mins</span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="details">
													<span class="label label-sm label-icon label-info">
														<i class="fa fa-bullhorn"></i>
													</span>
													Application error.
												</span>
												<span class="time">14 hrs</span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="details">
													<span class="label label-sm label-icon label-danger">
														<i class="fa fa-bolt"></i>
													</span>
													Database overloaded 68%.
												</span>
												<span class="time">2 days</span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="details">
													<span class="label label-sm label-icon label-danger">
														<i class="fa fa-bolt"></i>
													</span>
												A 	user IP blocked.
											</span>
												<span class="time">3 days</span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="details">
													<span class="label label-sm label-icon label-warning">
														<i class="fa fa-bell-o"></i>
													</span>
													Storage Server #4 not responding dfdfdfd.
												</span>
												<span class="time">4 days</span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="details">
													<span class="label label-sm label-icon label-info">
														<i class="fa fa-bullhorn"></i>
													</span>
													System Error.
												</span>
												<span class="time">5 days</span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="details">
													<span class="label label-sm label-icon label-danger">
														<i class="fa fa-bolt"></i>
													</span>
													Storage server failed.
												</span>
												<span class="time">9 days</span>
											</a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
	                	<!-- END GROUP NOTIFICATION -->

	                	<!-- BEGIN USER PROFILE -->
		                <div class="btn-group-img btn-group">
							<button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
								<img src="../../assets/admin/layout5/img/avatar1.jpg" alt="">
							</button>
							<ul class="dropdown-menu-v2" role="menu">
								<li class="active">
									<a href="profile">My Profile <span class="badge badge-danger">1</span> </a>
								</li>
								<li>
									<a href="#">My Inbox <span class="badge badge-info">3</span> </a>
								</li>
								<li>
									<a href="project">My Tasks</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="lock_screen.html">Lock Screen</a>
								</li>
								<li>
									<a href="login.html">Sign Out</a>
								</li>
							</ul>
						</div>
						<!-- END USER PROFILE -->
					</div>
	                <!-- END TOPBAR ACTIONS -->
                </div>
            </div>
            <!--/container-->
        </nav>
    </header>
	<!-- HEADER END -->

	<!-- PAGE CONTENT BEGIN -->
    <div class="container-fluid">
    	<div class="page-content page-content-popup" style="background-color: #e9ecf3;">
    		<!-- BEGIN PAGE CONTENT FIXED -->
			<div class="page-content-fixed-header">
				<h2>Application</h2>

				<div class="content-header-menu">
    				<!-- BEGIN DROPDOWN AJAX MENU -->
    				<div class="dropdown-ajax-menu btn-group">
						<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							<i class="fa fa-circle"></i>
							<i class="fa fa-circle"></i>
							<i class="fa fa-circle"></i>
						</button>
						<ul class="dropdown-menu-v2">
							<li> <a href="start">Application</a> </li>
							<li> <a href="start">Reports</a> </li>
							<li> <a href="start">Templates</a> </li>
							<li> <a href="start">Settings</a> </li>
						</ul>
					</div>
    				<!-- END DROPDOWN AJAX MENU -->

    				<!-- BEGIN MENU TOGGLER -->
    				<button type="button" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
	                    <span class="toggle-icon">
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                    </span>
	                </button>
    				<!-- END MENU TOGGLER -->
    			</div>
			</div>

			<!-- BEGIN SIDEBAR -->
			<div class="page-sidebar-wrapper">
				<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
				<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
				<div class="page-sidebar navbar-collapse collapse">
					<!-- BEGIN SIDEBAR MENU -->
					<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
					<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
					<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
					<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
					<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
					<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
					<ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
						<li>
							<a href="start">
							<i class="icon-home"></i>
							<span class="title">Home</span>
							</a>
						</li>
						<li>
							<a href="index">
							<i class="icon-list"></i>
							<span class="title">Dashboard</span>
							</a>
						</li>
						<li>
							<a href="index-boxed.html">
							<i class="icon-layers"></i>
							<span class="title">Boxed Page Layout</span>
							</a>
						</li>
						<li>
							<a href="profile">
							<i class="icon-user"></i>
							<span class="title">User Profile</span>
							</a>
						</li>
						<li class="active">
							<a href="project">
							<i class="icon-check"></i>
							<span class="title">Todo</span>
							</a>
						</li>
						<li>
							<a href="timeline">
							<i class="icon-paper-plane"></i>
							<span class="title">Timeline</span>
							</a>
						</li>
						<li>
							<a href="compatibility.html">
							<i class="icon-puzzle"></i>
							<span class="title">Compatibility</span>
							</a>
						</li>
						<li>
							<a href="javascript:;">
							<i class="icon-folder"></i>
							<span class="title">Multi Level Menu</span>
							<span class="arrow "></span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="javascript:;">
									<i class="icon-settings"></i> Item 1 <span class="arrow"></span>
									</a>
									<ul class="sub-menu">
										<li>
											<a href="javascript:;">
											<i class="icon-user"></i>
											Sample Link 1 <span class="arrow"></span>
											</a>
											<ul class="sub-menu">
												<li>
													<a href="#"><i class="icon-power"></i> Sample Link 1</a>
												</li>
												<li>
													<a href="#"><i class="icon-paper-plane"></i> Sample Link 1</a>
												</li>
												<li>
													<a href="#"><i class="icon-star"></i> Sample Link 1</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="#"><i class="icon-camera"></i> Sample Link 1</a>
										</li>
										<li>
											<a href="#"><i class="icon-link"></i> Sample Link 2</a>
										</li>
										<li>
											<a href="#"><i class="icon-pointer"></i> Sample Link 3</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="javascript:;">
									<i class="icon-globe"></i> Item 2 <span class="arrow"></span>
									</a>
									<ul class="sub-menu">
										<li>
											<a href="#"><i class="icon-tag"></i> Sample Link 1</a>
										</li>
										<li>
											<a href="#"><i class="icon-pencil"></i> Sample Link 1</a>
										</li>
										<li>
											<a href="#"><i class="icon-graph"></i> Sample Link 1</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#">
									<i class="icon-bar-chart"></i>
									Item 3 </a>
								</li>
							</ul>
						</li>
					</ul>
					<!-- END SIDEBAR MENU -->
				</div>
			</div>
			<!-- END SIDEBAR -->

			<div class="page-fixed-main-content">
				<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
				<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
								<h4 class="modal-title">Modal title</h4>
							</div>
							<div class="modal-body">
								 Widget settings form goes here
							</div>
							<div class="modal-footer">
								<button type="button" class="btn blue">Save changes</button>
								<button type="button" class="btn default" data-dismiss="modal">Close</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->
				<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row">
					<div class="col-md-12">
						<!-- BEGIN TODO SIDEBAR -->
						<div class="todo-sidebar">
							<div class="portlet light">
								<div class="portlet-title">
									<div class="caption" data-toggle="collapse" data-target=".todo-project-list-content">
										<span class="caption-subject font-green-sharp bold uppercase">PROJECTS </span>
										<span class="caption-helper visible-sm-inline-block visible-xs-inline-block">click to view project list</span>
									</div>
									<div class="actions">
										<div class="btn-group">
											<a class="btn green-haze btn-circle btn-sm todo-projects-config" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
											<i class="icon-settings"></i> &nbsp; <i class="fa fa-angle-down"></i>
											</a>
											<ul class="dropdown-menu pull-right">
												<li>
													<a href="javascript:;">
													<i class="i"></i> New Project </a>
												</li>
												<li class="divider">
												</li>
												<li>
													<a href="javascript:;">
													Pending <span class="badge badge-danger">
													4 </span>
													</a>
												</li>
												<li>
													<a href="javascript:;">
													Completed <span class="badge badge-success">
													12 </span>
													</a>
												</li>
												<li>
													<a href="javascript:;">
													Overdue <span class="badge badge-warning">
													9 </span>
													</a>
												</li>
												<li class="divider">
												</li>
												<li>
													<a href="javascript:;">
													<i class="i"></i> Archived Projects </a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="portlet-body todo-project-list-content">
									<div class="todo-project-list">
										<ul class="nav nav-pills nav-stacked">
											<li>
												<a href="javascript:;">
												<span class="badge badge-success"> 6 </span> AirAsia Ads </a>
											</li>
											<li>
												<a href="javascript:;">
												<span class="badge badge-success"> 2 </span> HSBC Promo </a>
											</li>
											<li class="active">
												<a href="javascript:;">
												<span class="badge badge-success badge-active"> 3 </span> GlobalEx System </a>
											</li>
											<li>
												<a href="javascript:;">
												<span class="badge badge-default"> 14 </span> Empire City </a>
											</li>
											<li>
												<a href="javascript:;">
												<span class="badge badge-success"> 6 </span> AirAsia Ads </a>
											</li>
											<li>
												<a href="javascript:;">
												<span class="badge badge-success"> 2 </span> Loop Inc Promo </a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- END TODO SIDEBAR -->
						<!-- BEGIN TODO CONTENT -->
						<div class="todo-content">
							<div class="portlet light">
								<!-- PROJECT HEAD -->
								<div class="portlet-title">
									<div class="caption">
										<i class="icon-bar-chart font-green-sharp hide"></i>
										<span class="caption-helper">PROJECT:</span> &nbsp; <span class="caption-subject font-green-sharp bold uppercase">Tune Website</span>
									</div>
									<div class="actions">
										<div class="btn-group">
											<a class="btn green-haze btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
											MANAGE <i class="fa fa-angle-down"></i>
											</a>
											<ul class="dropdown-menu pull-right">
												<li>
													<a href="javascript:;">
													<i class="i"></i> New Task </a>
												</li>
												<li class="divider">
												</li>
												<li>
													<a href="javascript:;">
													Pending <span class="badge badge-danger">
													4 </span>
													</a>
												</li>
												<li>
													<a href="javascript:;">
													Completed <span class="badge badge-success">
													12 </span>
													</a>
												</li>
												<li>
													<a href="javascript:;">
													Overdue <span class="badge badge-warning">
													9 </span>
													</a>
												</li>
												<li class="divider">
												</li>
												<li>
													<a href="javascript:;">
													<i class="i"></i> Delete Project </a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- end PROJECT HEAD -->
								<div class="portlet-body">
									<div class="row">
										<div class="col-md-5 col-sm-4">
											<div class="scroller" style="max-height: 800px;" data-always-visible="0" data-rail-visible="0" data-handle-color="#dae3e7">
												<div class="todo-tasklist">
													<div class="todo-tasklist-item todo-tasklist-item-border-green">
														<img class="todo-userpic pull-left" src="../../assets/admin/layout4/img/avatar4.jpg" width="27px" height="27px">
														<div class="todo-tasklist-item-title">
															 Slider Redesign
														</div>
														<div class="todo-tasklist-item-text">
															 Lorem dolor sit amet ipsum dolor sit consectetuer dolore.
														</div>
														<div class="todo-tasklist-controls pull-left">
															<span class="todo-tasklist-date"><i class="fa fa-calendar"></i> 21 Sep 2014 </span>
															<span class="todo-tasklist-badge badge badge-roundless">Urgent</span>
														</div>
													</div>
													<div class="todo-tasklist-item todo-tasklist-item-border-red">
														<img class="todo-userpic pull-left" src="../../assets/admin/layout4/img/avatar5.jpg" width="27px" height="27px">
														<div class="todo-tasklist-item-title">
															 Homepage Alignments to adjust
														</div>
														<div class="todo-tasklist-item-text">
															 Lorem ipsum dolor sit amet, consectetuer dolore dolor sit amet.
														</div>
														<div class="todo-tasklist-controls pull-left">
															<span class="todo-tasklist-date"><i class="fa fa-calendar"></i> 14 Sep 2014 </span>
															<span class="todo-tasklist-badge badge badge-roundless">Important</span>
														</div>
													</div>
													<div class="todo-tasklist-item todo-tasklist-item-border-green">
														<img class="todo-userpic pull-left" src="../../assets/admin/layout4/img/avatar9.jpg" width="27px" height="27px">
														<div class="todo-tasklist-item-title">
															 Slider Redesign
														</div>
														<div class="todo-tasklist-controls pull-left">
															<span class="todo-tasklist-date"><i class="fa fa-calendar"></i> 10 Feb 2015 </span>
															<span class="todo-tasklist-badge badge badge-roundless">Important</span>&nbsp;
														</div>
													</div>
													<div class="todo-tasklist-item todo-tasklist-item-border-blue">
														<img class="todo-userpic pull-left" src="../../assets/admin/layout4/img/avatar6.jpg" width="27px" height="27px">
														<div class="todo-tasklist-item-title">
															 Contact Us Map Location changes
														</div>
														<div class="todo-tasklist-item-text">
															 Lorem ipsum amet, consectetuer dolore dolor sit amet.
														</div>
														<div class="todo-tasklist-controls pull-left">
															<span class="todo-tasklist-date"><i class="fa fa-calendar"></i> 04 Oct 2014 </span>
															<span class="todo-tasklist-badge badge badge-roundless">Postponed</span>&nbsp; <span class="todo-tasklist-badge badge badge-roundless">Test</span>
														</div>
													</div>
													<div class="todo-tasklist-item todo-tasklist-item-border-purple">
														<img class="todo-userpic pull-left" src="../../assets/admin/layout4/img/avatar7.jpg" width="27px" height="27px">
														<div class="todo-tasklist-item-title">
															 Projects list new Forms
														</div>
														<div class="todo-tasklist-item-text">
															 Lorem ipsum dolor sit amet, consectetuer dolore psum dolor sit.
														</div>
														<div class="todo-tasklist-controls pull-left">
															<span class="todo-tasklist-date"><i class="fa fa-calendar"></i> 19 Dec 2014 </span>
														</div>
													</div>
													<div class="todo-tasklist-item todo-tasklist-item-border-yellow">
														<img class="todo-userpic pull-left" src="../../assets/admin/layout4/img/avatar8.jpg" width="27px" height="27px">
														<div class="todo-tasklist-item-title">
															 New Search Keywords
														</div>
														<div class="todo-tasklist-item-text">
															 Lorem ipsum dolor sit amet, consectetuer sit amet ipsum dolor, consectetuer ipsum consectetuer sit amet dolore.
														</div>
														<div class="todo-tasklist-controls pull-left">
															<span class="todo-tasklist-date"><i class="fa fa-calendar"></i> 02 Feb 2015 </span>
															<span class="todo-tasklist-badge badge badge-roundless">Postponed</span>&nbsp;
														</div>
													</div>
													<div class="todo-tasklist-item todo-tasklist-item-border-green">
														<img class="todo-userpic pull-left" src="../../assets/admin/layout4/img/avatar9.jpg" width="27px" height="27px">
														<div class="todo-tasklist-item-title">
															 Slider Redesign
														</div>
														<div class="todo-tasklist-controls pull-left">
															<span class="todo-tasklist-date"><i class="fa fa-calendar"></i> 10 Feb 2015 </span>
															<span class="todo-tasklist-badge badge badge-roundless">Important</span>&nbsp;
														</div>
													</div>
													<div class="todo-tasklist-item todo-tasklist-item-border-red">
														<img class="todo-userpic pull-left" src="../../assets/admin/layout4/img/avatar5.jpg" width="27px" height="27px">
														<div class="todo-tasklist-item-title">
															 Homepage Alignments to adjust
														</div>
														<div class="todo-tasklist-item-text">
															 Lorem ipsum dolor sit amet, consectetuer dolore psum dolor sit.
														</div>
														<div class="todo-tasklist-controls pull-left">
															<span class="todo-tasklist-date"><i class="fa fa-calendar"></i> 14 Sep 2014 </span>
															<span class="todo-tasklist-badge badge badge-roundless">Important</span>
														</div>
													</div>
													<div class="todo-tasklist-item todo-tasklist-item-border-blue">
														<img class="todo-userpic pull-left" src="../../assets/admin/layout4/img/avatar6.jpg" width="27px" height="27px">
														<div class="todo-tasklist-item-title">
															 Contact Us Improvement
														</div>
														<div class="todo-tasklist-item-text">
															 Lorem ipsum amet, psum dolor sit consectetuer dolore.
														</div>
														<div class="todo-tasklist-controls pull-left">
															<span class="todo-tasklist-date"><i class="fa fa-calendar"></i> 21 Feb 2015 </span>
															<span class="todo-tasklist-badge badge badge-roundless">Postponed</span>&nbsp; <span class="todo-tasklist-badge badge badge-roundless">Primary</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="todo-tasklist-devider">
										</div>
										<div class="col-md-7 col-sm-8">
											<div class="scroller" style="max-height: 800px;" data-always-visible="0" data-rail-visible="0" data-handle-color="#dae3e7">
												<form action="#" class="form-horizontal">
													<!-- TASK HEAD -->
													<div class="form">
														<div class="form-group">
															<div class="col-md-8 col-sm-8">
																<div class="todo-taskbody-user">
																	<img class="todo-userpic pull-left" src="../../assets/admin/layout4/img/avatar6.jpg" width="50px" height="50px">
																	<span class="todo-username pull-left">Vanessa Bond</span>
																	<button type="button" class="todo-username-btn btn btn-circle btn-default btn-xs">&nbsp;edit&nbsp;</button>
																</div>
															</div>
															<div class="col-md-4 col-sm-4">
																<div class="todo-taskbody-date pull-right">
																	<button type="button" class="todo-username-btn btn btn-circle btn-default btn-xs">&nbsp; Complete &nbsp;</button>
																</div>
															</div>
														</div>
														<!-- END TASK HEAD -->
														<!-- TASK TITLE -->
														<div class="form-group">
															<div class="col-md-12">
																<input type="text" class="form-control todo-taskbody-tasktitle" placeholder="Task Title...">
															</div>
														</div>
														<!-- TASK DESC -->
														<div class="form-group">
															<div class="col-md-12">
																<textarea class="form-control todo-taskbody-taskdesc" rows="8" placeholder="Task Description..."></textarea>
															</div>
														</div>
														<!-- END TASK DESC -->
														<!-- TASK DUE DATE -->
														<div class="form-group">
															<div class="col-md-12">
																<div class="input-icon">
																	<i class="fa fa-calendar"></i>
																	<input type="text" class="form-control todo-taskbody-due" placeholder="Due Date...">
																</div>
															</div>
														</div>
														<!-- TASK TAGS -->
														<div class="form-group">
															<div class="col-md-12">
																<input type="text" class="form-control todo-taskbody-tags" placeholder="Tags..." value="Pending, Requested">
															</div>
														</div>
														<!-- TASK TAGS -->
														<div class="form-actions right todo-form-actions">
															<button class="btn btn-circle btn-sm green-haze">Save Changes</button>
															<button class="btn btn-circle btn-sm btn-default">Cancel</button>
														</div>
													</div>
													<div class="tabbable-line">
														<ul class="nav nav-tabs ">
															<li class="active">
																<a href="#tab_1" data-toggle="tab">
																Comments </a>
															</li>
															<li>
																<a href="#tab_2" data-toggle="tab">
																History </a>
															</li>
														</ul>
														<div class="tab-content">
															<div class="tab-pane active" id="tab_1">
																<!-- TASK COMMENTS -->
																<div class="form-group">
																	<div class="col-md-12">
																		<ul class="media-list">
																			<li class="media">
																				<a class="pull-left" href="javascript:;">
																				<img class="todo-userpic" src="../../assets/admin/layout4/img/avatar8.jpg" width="27px" height="27px">
																				</a>
																				<div class="media-body todo-comment">
																					<button type="button" class="todo-comment-btn btn btn-circle btn-default btn-xs">&nbsp; Reply &nbsp;</button>
																					<p class="todo-comment-head">
																						<span class="todo-comment-username">Christina Aguilera</span> &nbsp; <span class="todo-comment-date">17 Sep 2014 at 2:05pm</span>
																					</p>
																					<p class="todo-text-color">
																						 Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. <br>
																					</p>
																					<!-- Nested media object -->
																					<div class="media">
																						<a class="pull-left" href="javascript:;">
																						<img class="todo-userpic" src="../../assets/admin/layout4/img/avatar4.jpg" width="27px" height="27px">
																						</a>
																						<div class="media-body">
																							<p class="todo-comment-head">
																								<span class="todo-comment-username">Carles Puyol</span> &nbsp; <span class="todo-comment-date">17 Sep 2014 at 4:30pm</span>
																							</p>
																							<p class="todo-text-color">
																								 Thanks so much my dear!
																							</p>
																						</div>
																					</div>
																				</div>
																			</li>
																			<li class="media">
																				<a class="pull-left" href="javascript:;">
																				<img class="todo-userpic" src="../../assets/admin/layout4/img/avatar5.jpg" width="27px" height="27px">
																				</a>
																				<div class="media-body todo-comment">
																					<button type="button" class="todo-comment-btn btn btn-circle btn-default btn-xs">&nbsp; Reply &nbsp;</button>
																					<p class="todo-comment-head">
																						<span class="todo-comment-username">Andres Iniesta</span> &nbsp; <span class="todo-comment-date">18 Sep 2014 at 9:22am</span>
																					</p>
																					<p class="todo-text-color">
																						 Cras sit amet nibh libero, in gravida nulla. Scelerisque ante sollicitudin commodo Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. <br>
																					</p>
																				</div>
																			</li>
																			<li class="media">
																				<a class="pull-left" href="javascript:;">
																				<img class="todo-userpic" src="../../assets/admin/layout4/img/avatar6.jpg" width="27px" height="27px">
																				</a>
																				<div class="media-body todo-comment">
																					<button type="button" class="todo-comment-btn btn btn-circle btn-default btn-xs">&nbsp; Reply &nbsp;</button>
																					<p class="todo-comment-head">
																						<span class="todo-comment-username">Olivia Wilde</span> &nbsp; <span class="todo-comment-date">18 Sep 2014 at 11:50am</span>
																					</p>
																					<p class="todo-text-color">
																						 Cras sit amet nibh libero, in gravida nulla. Scelerisque ante sollicitudin commodo Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. <br>
																					</p>
																				</div>
																			</li>
																		</ul>
																	</div>
																</div>
																<!-- END TASK COMMENTS -->
																<!-- TASK COMMENT FORM -->
																<div class="form-group">
																	<div class="col-md-12">
																		<ul class="media-list">
																			<li class="media">
																				<img class="todo-userpic pull-left" src="../../assets/admin/layout4/img/avatar4.jpg" width="27px" height="27px">
																				<div class="media-body">
																					<textarea class="form-control todo-taskbody-taskdesc" rows="4" placeholder="Type comment..."></textarea>
																				</div>
																			</li>
																		</ul>
																		<button type="button" class="pull-right btn btn-sm btn-circle green-haze"> &nbsp; Submit &nbsp; </button>
																	</div>
																</div>
																<!-- END TASK COMMENT FORM -->
															</div>
															<div class="tab-pane" id="tab_2">
																<ul class="todo-task-history">
																	<li>
																		<div class="todo-task-history-date">
																			 20 Jun, 2014 at 11:35am
																		</div>
																		<div class="todo-task-history-desc">
																			 Task created
																		</div>
																	</li>
																	<li>
																		<div class="todo-task-history-date">
																			 21 Jun, 2014 at 10:35pm
																		</div>
																		<div class="todo-task-history-desc">
																			 Task category status changed to "Top Priority"
																		</div>
																	</li>
																	<li>
																		<div class="todo-task-history-date">
																			 22 Jun, 2014 at 11:35am
																		</div>
																		<div class="todo-task-history-desc">
																			 Task owner changed to "Nick Larson"
																		</div>
																	</li>
																	<li>
																		<div class="todo-task-history-date">
																			 30 Jun, 2014 at 8:09am
																		</div>
																		<div class="todo-task-history-desc">
																			 Task completed by "Nick Larson"
																		</div>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END TODO CONTENT -->
					</div>
				</div>
				<!-- END PAGE CONTENT-->
			</div>
    		<!-- END PAGE CONTENT FIXED -->

    		<!-- Copyright BEGIN -->
			<p class="copyright-v2">2015 © Metronic by keenthemes. 
	 			<a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
	 		</p>
			<!-- Copyright END -->

			<!-- BEGIN QUICK SIDEBAR TOGGLER -->
            <button type="button" class="quick-sidebar-toggler" data-toggle="collapse">
                <span class="sr-only">Toggle Quick Sidebar</span>
                <i class="icon-logout"></i>
                <div class="quick-sidebar-notification">
					<span class="badge badge-danger">7</span>
                </div>
            </button>
            <!-- END QUICK SIDEBAR TOGGLER -->

    		<!-- BEGIN QUICK SIDEBAR -->
			<a href="javascript:;" class="page-quick-sidebar-toggler"><i class="icon-login"></i></a>
			<div class="page-quick-sidebar-wrapper">
				<div class="page-quick-sidebar">
					<div class="nav-justified">
						<ul class="nav nav-tabs nav-justified">
							<li class="active">
								<a href="#quick_sidebar_tab_1" data-toggle="tab">
								Users <span class="badge badge-danger">2</span>
								</a>
							</li>
							<li>
								<a href="#quick_sidebar_tab_2" data-toggle="tab">
								Alerts <span class="badge badge-success">7</span>
								</a>
							</li>
							<li class="dropdown">
								<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
								More<i class="fa fa-angle-down"></i>
								</a>
								<ul class="dropdown-menu pull-right" role="menu">
									<li>
										<a href="#quick_sidebar_tab_3" data-toggle="tab">
										<i class="icon-bell"></i> Alerts </a>
									</li>
									<li>
										<a href="#quick_sidebar_tab_3" data-toggle="tab">
										<i class="icon-info"></i> Notifications </a>
									</li>
									<li>
										<a href="#quick_sidebar_tab_3" data-toggle="tab">
										<i class="icon-speech"></i> Activities </a>
									</li>
									<li class="divider">
									</li>
									<li>
										<a href="#quick_sidebar_tab_3" data-toggle="tab">
										<i class="icon-settings"></i> Settings </a>
									</li>
								</ul>
							</li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
								<div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">
									<h3 class="list-heading">Staff</h3>
									<ul class="media-list list-items">
										<li class="media">
											<div class="media-status">
												<span class="badge badge-success">8</span>
											</div>
											<img class="media-object" src="../../assets/admin/layout/img/avatar3.jpg" alt="...">
											<div class="media-body">
												<h4 class="media-heading">Bob Nilson</h4>
												<div class="media-heading-sub">
													 Project Manager
												</div>
											</div>
										</li>
										<li class="media">
											<img class="media-object" src="../../assets/admin/layout/img/avatar1.jpg" alt="...">
											<div class="media-body">
												<h4 class="media-heading">Nick Larson</h4>
												<div class="media-heading-sub">
													 Art Director
												</div>
											</div>
										</li>
										<li class="media">
											<div class="media-status">
												<span class="badge badge-danger">3</span>
											</div>
											<img class="media-object" src="../../assets/admin/layout/img/avatar4.jpg" alt="...">
											<div class="media-body">
												<h4 class="media-heading">Deon Hubert</h4>
												<div class="media-heading-sub">
													 CTO
												</div>
											</div>
										</li>
										<li class="media">
											<img class="media-object" src="../../assets/admin/layout/img/avatar2.jpg" alt="...">
											<div class="media-body">
												<h4 class="media-heading">Ella Wong</h4>
												<div class="media-heading-sub">
													 CEO
												</div>
											</div>
										</li>
									</ul>
									<h3 class="list-heading">Customers</h3>
									<ul class="media-list list-items">
										<li class="media">
											<div class="media-status">
												<span class="badge badge-warning">2</span>
											</div>
											<img class="media-object" src="../../assets/admin/layout/img/avatar6.jpg" alt="...">
											<div class="media-body">
												<h4 class="media-heading">Lara Kunis</h4>
												<div class="media-heading-sub">
													 CEO, Loop Inc
												</div>
												<div class="media-heading-small">
													 Last seen 03:10 AM
												</div>
											</div>
										</li>
										<li class="media">
											<div class="media-status">
												<span class="label label-sm label-success">new</span>
											</div>
											<img class="media-object" src="../../assets/admin/layout/img/avatar7.jpg" alt="...">
											<div class="media-body">
												<h4 class="media-heading">Ernie Kyllonen</h4>
												<div class="media-heading-sub">
													 Project Manager,<br>
													 SmartBizz PTL
												</div>
											</div>
										</li>
										<li class="media">
											<img class="media-object" src="../../assets/admin/layout/img/avatar8.jpg" alt="...">
											<div class="media-body">
												<h4 class="media-heading">Lisa Stone</h4>
												<div class="media-heading-sub">
													 CTO, Keort Inc
												</div>
												<div class="media-heading-small">
													 Last seen 13:10 PM
												</div>
											</div>
										</li>
										<li class="media">
											<div class="media-status">
												<span class="badge badge-success">7</span>
											</div>
											<img class="media-object" src="../../assets/admin/layout/img/avatar9.jpg" alt="...">
											<div class="media-body">
												<h4 class="media-heading">Deon Portalatin</h4>
												<div class="media-heading-sub">
													 CFO, H&amp;D LTD
												</div>
											</div>
										</li>
										<li class="media">
											<img class="media-object" src="../../assets/admin/layout/img/avatar10.jpg" alt="...">
											<div class="media-body">
												<h4 class="media-heading">Irina Savikova</h4>
												<div class="media-heading-sub">
													 CEO, Tizda Motors Inc
												</div>
											</div>
										</li>
										<li class="media">
											<div class="media-status">
												<span class="badge badge-danger">4</span>
											</div>
											<img class="media-object" src="../../assets/admin/layout/img/avatar11.jpg" alt="...">
											<div class="media-body">
												<h4 class="media-heading">Maria Gomez</h4>
												<div class="media-heading-sub">
													 Manager, Infomatic Inc
												</div>
												<div class="media-heading-small">
													 Last seen 03:10 AM
												</div>
											</div>
										</li>
									</ul>
								</div>
								<div class="page-quick-sidebar-item">
									<div class="page-quick-sidebar-chat-user">
										<div class="page-quick-sidebar-nav">
											<a href="javascript:;" class="page-quick-sidebar-back-to-list"><i class="icon-arrow-left"></i>Back</a>
										</div>
										<div class="page-quick-sidebar-chat-user-messages">
											<div class="post out">
												<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar3.jpg"/>
												<div class="message">
													<span class="arrow"></span>
													<a href="javascript:;" class="name">Bob Nilson</a>
													<span class="datetime">20:15</span>
													<span class="body">
													When could you send me the report ? </span>
												</div>
											</div>
											<div class="post in">
												<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar2.jpg"/>
												<div class="message">
													<span class="arrow"></span>
													<a href="javascript:;" class="name">Ella Wong</a>
													<span class="datetime">20:15</span>
													<span class="body">
													Its almost done. I will be sending it shortly </span>
												</div>
											</div>
											<div class="post out">
												<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar3.jpg"/>
												<div class="message">
													<span class="arrow"></span>
													<a href="javascript:;" class="name">Bob Nilson</a>
													<span class="datetime">20:15</span>
													<span class="body">
													Alright. Thanks! :) </span>
												</div>
											</div>
											<div class="post in">
												<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar2.jpg"/>
												<div class="message">
													<span class="arrow"></span>
													<a href="javascript:;" class="name">Ella Wong</a>
													<span class="datetime">20:16</span>
													<span class="body">
													You are most welcome. Sorry for the delay. </span>
												</div>
											</div>
											<div class="post out">
												<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar3.jpg"/>
												<div class="message">
													<span class="arrow"></span>
													<a href="javascript:;" class="name">Bob Nilson</a>
													<span class="datetime">20:17</span>
													<span class="body">
													No probs. Just take your time :) </span>
												</div>
											</div>
											<div class="post in">
												<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar2.jpg"/>
												<div class="message">
													<span class="arrow"></span>
													<a href="javascript:;" class="name">Ella Wong</a>
													<span class="datetime">20:40</span>
													<span class="body">
													Alright. I just emailed it to you. </span>
												</div>
											</div>
											<div class="post out">
												<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar3.jpg"/>
												<div class="message">
													<span class="arrow"></span>
													<a href="javascript:;" class="name">Bob Nilson</a>
													<span class="datetime">20:17</span>
													<span class="body">
													Great! Thanks. Will check it right away. </span>
												</div>
											</div>
											<div class="post in">
												<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar2.jpg"/>
												<div class="message">
													<span class="arrow"></span>
													<a href="javascript:;" class="name">Ella Wong</a>
													<span class="datetime">20:40</span>
													<span class="body">
													Please let me know if you have any comment. </span>
												</div>
											</div>
											<div class="post out">
												<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar3.jpg"/>
												<div class="message">
													<span class="arrow"></span>
													<a href="javascript:;" class="name">Bob Nilson</a>
													<span class="datetime">20:17</span>
													<span class="body">
													Sure. I will check and buzz you if anything needs to be corrected. </span>
												</div>
											</div>
										</div>
										<div class="page-quick-sidebar-chat-user-form">
											<div class="input-group">
												<input type="text" class="form-control" placeholder="Type a message here...">
												<div class="input-group-btn">
													<button type="button" class="btn blue"><i class="icon-paper-clip"></i></button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">
								<div class="page-quick-sidebar-alerts-list">
									<h3 class="list-heading">General</h3>
									<ul class="feeds list-items">
										<li>
											<div class="col1">
												<div class="cont">
													<div class="cont-col1">
														<div class="label label-sm label-info">
															<i class="fa fa-shopping-cart"></i>
														</div>
													</div>
													<div class="cont-col2">
														<div class="desc">
															 New order received with <span class="label label-sm label-danger">
															Reference Number: DR23923 </span>
														</div>
													</div>
												</div>
											</div>
											<div class="col2">
												<div class="date">
													 30 mins
												</div>
											</div>
										</li>
										<li>
											<div class="col1">
												<div class="cont">
													<div class="cont-col1">
														<div class="label label-sm label-success">
															<i class="fa fa-user"></i>
														</div>
													</div>
													<div class="cont-col2">
														<div class="desc">
															 You have 5 pending membership that requires a quick review.
														</div>
													</div>
												</div>
											</div>
											<div class="col2">
												<div class="date">
													 24 mins
												</div>
											</div>
										</li>
										<li>
											<div class="col1">
												<div class="cont">
													<div class="cont-col1">
														<div class="label label-sm label-danger">
															<i class="fa fa-bell-o"></i>
														</div>
													</div>
													<div class="cont-col2">
														<div class="desc">
															 Web server hardware needs to be upgraded. <span class="label label-sm label-warning">
															Overdue </span>
														</div>
													</div>
												</div>
											</div>
											<div class="col2">
												<div class="date">
													 2 hours
												</div>
											</div>
										</li>
										<li>
											<a href="javascript:;">
											<div class="col1">
												<div class="cont">
													<div class="cont-col1">
														<div class="label label-sm label-default">
															<i class="fa fa-briefcase"></i>
														</div>
													</div>
													<div class="cont-col2">
														<div class="desc">
															 IPO Report for year 2013 has been released.
														</div>
													</div>
												</div>
											</div>
											<div class="col2">
												<div class="date">
													 20 mins
												</div>
											</div>
											</a>
										</li>
									</ul>
									<h3 class="list-heading">System</h3>
									<ul class="feeds list-items">
										<li>
											<div class="col1">
												<div class="cont">
													<div class="cont-col1">
														<div class="label label-sm label-info">
															<i class="fa fa-shopping-cart"></i>
														</div>
													</div>
													<div class="cont-col2">
														<div class="desc">
															 New order received with <span class="label label-sm label-success">
															Reference Number: DR23923 </span>
														</div>
													</div>
												</div>
											</div>
											<div class="col2">
												<div class="date">
													 30 mins
												</div>
											</div>
										</li>
										<li>
											<div class="col1">
												<div class="cont">
													<div class="cont-col1">
														<div class="label label-sm label-success">
															<i class="fa fa-user"></i>
														</div>
													</div>
													<div class="cont-col2">
														<div class="desc">
															 You have 5 pending membership that requires a quick review.
														</div>
													</div>
												</div>
											</div>
											<div class="col2">
												<div class="date">
													 24 mins
												</div>
											</div>
										</li>
										<li>
											<div class="col1">
												<div class="cont">
													<div class="cont-col1">
														<div class="label label-sm label-warning">
															<i class="fa fa-bell-o"></i>
														</div>
													</div>
													<div class="cont-col2">
														<div class="desc">
															 Web server hardware needs to be upgraded. <span class="label label-sm label-default ">
															Overdue </span>
														</div>
													</div>
												</div>
											</div>
											<div class="col2">
												<div class="date">
													 2 hours
												</div>
											</div>
										</li>
										<li>
											<a href="javascript:;">
											<div class="col1">
												<div class="cont">
													<div class="cont-col1">
														<div class="label label-sm label-info">
															<i class="fa fa-briefcase"></i>
														</div>
													</div>
													<div class="cont-col2">
														<div class="desc">
															 IPO Report for year 2013 has been released.
														</div>
													</div>
												</div>
											</div>
											<div class="col2">
												<div class="date">
													 20 mins
												</div>
											</div>
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">
								<div class="page-quick-sidebar-settings-list">
									<h3 class="list-heading">General Settings</h3>
									<ul class="list-items borderless">
										<li>
											 Enable Notifications <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF">
										</li>
										<li>
											 Allow Tracking <input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF">
										</li>
										<li>
											 Log Errors <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF">
										</li>
										<li>
											 Auto Sumbit Issues <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF">
										</li>
										<li>
											 Enable SMS Alerts <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF">
										</li>
									</ul>
									<h3 class="list-heading">System Settings</h3>
									<ul class="list-items borderless">
										<li>
											 Security Level
											<select class="form-control input-inline input-sm input-small">
												<option value="1">Normal</option>
												<option value="2" selected>Medium</option>
												<option value="e">High</option>
											</select>
										</li>
										<li>
											 Failed Email Attempts <input class="form-control input-inline input-sm input-small" value="5"/>
										</li>
										<li>
											 Secondary SMTP Port <input class="form-control input-inline input-sm input-small" value="3560"/>
										</li>
										<li>
											 Notify On System Error <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF">
										</li>
										<li>
											 Notify On SMTP Error <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF">
										</li>
									</ul>
									<div class="inner-content">
										<button class="btn btn-success"><i class="icon-settings"></i> Save Changes</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END QUICK SIDEBAR -->
    	</div>
    </div>
	<!-- PAGE CONTENT END -->
    <!-- END MAIN LAYOUT -->
    <a href="#index" class="go2top"><i class="icon-arrow-up"></i></a>

<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="../../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="../../assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/select2/select2.min.js"></script>
<script src="../../assets/admin/pages/scripts/todo.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../../assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="../../assets/admin/layout6/scripts/layout.js" type="text/javascript"></script>
<script src="../../assets/admin/layout6/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="../../assets/admin/pages/scripts/tasks.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {    
   	Metronic.init(); // init metronic core componets
   	Layout.init(); // init layout
    QuickSidebar.init(); // init quick sidebar
    Todo.init(); // init todo page
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>