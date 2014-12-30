<html lang="en" class="no-js"><!--<![endif]--><!-- BEGIN HEAD --><head>
	<meta charset="utf-8">
	<title>Metronic | Admin Dashboard Template</title>
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta content="320" name="MobileOptimized">
	<!-- BEGIN GLOBAL MANDATORY STYLES -->          
	<link type="text/css" rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap-rtl.min.css">
	<link type="text/css" rel="stylesheet" href="assets/plugins/uniform/css/uniform.default.css">
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL PLUGIN STYLES --> 
	<link type="text/css" rel="stylesheet" href="assets/plugins/gritter/css/jquery.gritter-rtl.css">
	<link type="text/css" rel="stylesheet" href="assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css">
	<link type="text/css" rel="stylesheet" href="assets/plugins/fullcalendar/fullcalendar/fullcalendar.css">
	<link type="text/css" rel="stylesheet" href="assets/plugins/jqvmap/jqvmap/jqvmap.css">
	<link type="text/css" rel="stylesheet" href="assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css">
	<!-- END PAGE LEVEL PLUGIN STYLES -->
	<!-- BEGIN THEME STYLES --> 
	<link type="text/css" rel="stylesheet" href="assets/css/style-metronic-rtl.css">
	<link type="text/css" rel="stylesheet" href="assets/css/style-rtl.css">
	<link type="text/css" rel="stylesheet" href="assets/css/style-responsive-rtl.css">
	<link type="text/css" rel="stylesheet" href="assets/css/plugins-rtl.css">
	<link type="text/css" rel="stylesheet" href="assets/css/pages/tasks-rtl.css">
	<link id="style_color" type="text/css" rel="stylesheet" href="assets/css/themes/light-rtl.css">
	<link type="text/css" rel="stylesheet" href="assets/css/custom-rtl.css">
	<!-- END THEME STYLES -->
	<link href="favicon.ico" rel="shortcut icon">
<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style><script>try {  for(var lastpass_iter=0; lastpass_iter &lt; document.forms.length; lastpass_iter++){    var lastpass_f = document.forms[lastpass_iter];    if(typeof(lastpass_f.lpsubmitorig)=="undefined"){      if (typeof(lastpass_f.submit) == "function") {        lastpass_f.lpsubmitorig = lastpass_f.submit;        lastpass_f.submit = function(){          var form = this;          try {            if (document.documentElement &amp;&amp; 'createEvent' in document)            {              var forms = document.getElementsByTagName('form');              for (var i=0 ; i&lt;forms.length ; ++i)                if (forms[i]==form)                {                  var element = document.createElement('lpformsubmitdataelement');                  element.setAttribute('formnum',i);                  element.setAttribute('from','submithook');                  document.documentElement.appendChild(element);                  var evt = document.createEvent('Events');                  evt.initEvent('lpformsubmit',true,false);                  element.dispatchEvent(evt);                  break;                }            }          } catch (e) {}          try {            form.lpsubmitorig();          } catch (e) {}        }      }    }  }} catch (e) {}</script></head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
	<!-- BEGIN HEADER -->   
	<div class="header navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="header-inner">
			<!-- BEGIN LOGO -->  
			
			<!-- END LOGO -->
			<!-- BEGIN RESPONSIVE MENU TOGGLER --> 
			 
			<!-- END RESPONSIVE MENU TOGGLER -->
			<!-- BEGIN TOP NAVIGATION MENU -->
			<ul class="nav navbar-nav pull-right">
				<!-- BEGIN NOTIFICATION DROPDOWN -->
				
				<!-- END NOTIFICATION DROPDOWN -->
				<!-- BEGIN INBOX DROPDOWN -->
				
				<!-- END INBOX DROPDOWN -->
				<!-- BEGIN TODO DROPDOWN -->
				
				<!-- END TODO DROPDOWN -->
				<!-- BEGIN USER LOGIN DROPDOWN -->
				<li class="dropdown user">
					<a data-close-others="true" data-hover="dropdown" data-toggle="dropdown" class="dropdown-toggle" href="#">
					<img src="assets/img/avatar1_small.jpg" alt="">
					<span class="username">Bob Nilson</span>
					<i class="icon-angle-down"></i>
					</a>
					<ul class="dropdown-menu">
						<li><a href="extra_profile.html"><i class="icon-user"></i> My Profile</a>
						</li>
						<li><a href="page_calendar.html"><i class="icon-calendar"></i> My Calendar</a>
						</li>
						<li><a href="inbox.html"><i class="icon-envelope"></i> My Inbox <span class="badge badge-danger">3</span></a>
						</li>
						<li><a href="#"><i class="icon-tasks"></i> My Tasks <span class="badge badge-success">7</span></a>
						</li>
						<li class="divider"></li>
						<li><a id="trigger_fullscreen" href="javascript:;"><i class="icon-move"></i> Full Screen</a>
						</li>
						<li><a href="extra_lock.html"><i class="icon-lock"></i> Lock Screen</a>
						</li>
						<li><a href="logout"><i class="icon-key"></i> Log Out</a>
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
	<div class="clearfix"></div>
	<!-- BEGIN CONTAINER -->
	<div class="page-container">
		<!-- BEGIN SIDEBAR -->
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->        
			<ul class="page-sidebar-menu">
				<li>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler hidden-phone"></div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
				
				
				<li class="" style="padding-top: 30px">
					<a href="javascript:;">
					<i class="icon-cogs"></i> 
					<span class="title">خودرو</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="layout_language_bar.html"> جدید </a>
						</li>
						<li>
							<a href="layout_horizontal_sidebar_menu.html"> مشاهده جدول </a>
						</li>
					</ul>
				</li>
				
				<li class="">
					<a href="javascript:;">
					<i class="icon-bookmark-empty"></i> 
					<span class="title">UI Features</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="ui_general.html">
							General</a>
						</li>
						<li>
							<a href="ui_buttons.html">
							Buttons</a>
						</li>
						<li>
							<a href="ui_typography.html">
							Typography</a>
						</li>
						<li>
							<a href="ui_modals.html">
							Modals</a>
						</li>
						<li>
                            <a href="ui_extended_modals.html">
                            Extended Modals</a>
                        </li>
						<li>
							<a href="ui_tabs_accordions_navs.html">
							Tabs, Accordions &amp; Navs</a>
						</li>
						<li>
							<a href="ui_tiles.html">
							Tiles</a>
						</li>
						<li>
							<a href="ui_toastr.html">
							<span class="badge badge-roundless badge-warning">new</span>Toastr Notifications</a>
						</li>
						<li>
							<a href="ui_tree.html">
							Tree View</a>
						</li>
						<li>
							<a href="ui_nestable.html">
							Nestable List</a>
						</li>
						<li>
							<a href="ui_ion_sliders.html">
							<span class="badge badge-roundless badge-important">new</span>Ion Range Sliders</a>
						</li>
						<li>
							<a href="ui_noui_sliders.html">
							<span class="badge badge-roundless badge-success">new</span>NoUI Range Sliders</a>
						</li>
						<li>
							<a href="ui_jqueryui_sliders.html">
							jQuery UI Sliders</a>
						</li>
						<li>
							<a href="ui_knob.html">
							Knob Circle Dials</a>
						</li>
					</ul>
				</li>
				<li class="">
					<a href="javascript:;">
					<i class="icon-table"></i> 
					<span class="title">Form Stuff</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="form_controls.html">
							Form Controls</a>
						</li>
						<li>
							<a href="form_layouts.html">
							Form Layouts</a>
						</li>
						<li>
							<a href="form_component.html">
							Form Components</a>
						</li>
						<li>
							<a href="form_editable.html">
							<span class="badge badge-roundless badge-warning">new</span>Form X-editable</a>
						</li>
						<li>
							<a href="form_wizard.html">
							Form Wizard</a>
						</li>
						<li>
							<a href="form_validation.html">
							Form Validation</a>
						</li>
						<li>
							<a href="form_image_crop.html">
							<span class="badge badge-roundless badge-important">new</span>Image Cropping</a>
						</li>
						<li>
							<a href="form_fileupload.html">
							Multiple File Upload</a>
						</li>
						<li>
							<a href="form_dropzone.html">
							Dropzone File Upload</a>
						</li>
					</ul>
				</li>
				<li class="">
					<a href="javascript:;">
					<i class="icon-sitemap"></i> 
					<span class="title">Pages</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="page_portfolio.html">
							<i class="icon-briefcase"></i>
							<span class="badge badge-warning badge-roundless">new</span>Portfolio</a>
						</li>
						<li>
							<a href="page_timeline.html">
							<i class="icon-time"></i>
							<span class="badge badge-info">4</span>Timeline</a>
						</li>
						<li>
							<a href="page_coming_soon.html">
							<i class="icon-cogs"></i>
							Coming Soon</a>
						</li>
						<li>
							<a href="page_blog.html">
							<i class="icon-comments"></i>
							Blog</a>
						</li>
						<li>
							<a href="page_blog_item.html">
							<i class="icon-font"></i>
							Blog Post</a>
						</li>
						<li>
							<a href="page_news.html">
							<i class="icon-coffee"></i>
							<span class="badge badge-success">9</span>News</a>
						</li>
						<li>
							<a href="page_news_item.html">
							<i class="icon-bell"></i>
							News View</a>
						</li>
						<li>
							<a href="page_about.html">
							<i class="icon-group"></i>
							About Us</a>
						</li>
						<li>
							<a href="page_contact.html">
							<i class="icon-envelope-alt"></i>
							Contact Us</a>
						</li>
						<li>
							<a href="page_calendar.html">
							<i class="icon-calendar"></i>
							<span class="badge badge-important">14</span>Calendar</a>
						</li>
					</ul>
				</li>
				<li class="">
					<a href="javascript:;">
					<i class="icon-gift"></i> 
					<span class="title">Extra</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="extra_profile.html">
							User Profile</a>
						</li>
						<li>
							<a href="extra_lock.html">
							Lock Screen</a>
						</li>
						<li>
							<a href="extra_faq.html">
							FAQ</a>
						</li>
						<li>
							<a href="inbox.html">
							<span class="badge badge-important">4</span>Inbox</a>
						</li>
						<li>
							<a href="extra_search.html">
							Search Results</a>
						</li>
						<li>
							<a href="extra_invoice.html">
							Invoice</a>
						</li>
						<li>
							<a href="extra_pricing_table.html">
							Pricing Tables</a>
						</li>
						<li>
							<a href="extra_404_option1.html">
							404 Page Option 1</a>
						</li>
						<li>
							<a href="extra_404_option2.html">
							404 Page Option 2</a>
						</li>
						<li>
							<a href="extra_404_option3.html">
							404 Page Option 3</a>
						</li>
						<li>
							<a href="extra_500_option1.html">
							500 Page Option 1</a>
						</li>
						<li>
							<a href="extra_500_option2.html">
							500 Page Option 2</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;" class="active">
					<i class="icon-leaf"></i> 
					<span class="title">3 Level Menu</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
							Item 1
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#">Sample Link 1</a></li>
								<li><a href="#">Sample Link 2</a></li>
								<li><a href="#">Sample Link 3</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
							Item 1
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#">Sample Link 1</a></li>
								<li><a href="#">Sample Link 1</a></li>
								<li><a href="#">Sample Link 1</a></li>
							</ul>
						</li>
						<li>
							<a href="#">
							Item 3
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-folder-open"></i> 
					<span class="title">4 Level Menu</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
							<i class="icon-cogs"></i> 
							Item 1
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="javascript:;">
									<i class="icon-user"></i>
									Sample Link 1
									<span class="arrow"></span>
									</a>
									<ul class="sub-menu">
										<li><a href="#"><i class="icon-remove"></i> Sample Link 1</a></li>
										<li><a href="#"><i class="icon-pencil"></i> Sample Link 1</a></li>
										<li><a href="#"><i class="icon-edit"></i> Sample Link 1</a></li>
									</ul>
								</li>
								<li><a href="#"><i class="icon-user"></i>  Sample Link 1</a></li>
								<li><a href="#"><i class="icon-external-link"></i>  Sample Link 2</a></li>
								<li><a href="#"><i class="icon-bell"></i>  Sample Link 3</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
							<i class="icon-globe"></i> 
							Item 2
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#"><i class="icon-user"></i>  Sample Link 1</a></li>
								<li><a href="#"><i class="icon-external-link"></i>  Sample Link 1</a></li>
								<li><a href="#"><i class="icon-bell"></i>  Sample Link 1</a></li>
							</ul>
						</li>
						<li>
							<a href="#">
							<i class="icon-folder-open"></i>
							Item 3
							</a>
						</li>
					</ul>
				</li>
				<li class="">
					<a href="javascript:;">
					<i class="icon-user"></i> 
					<span class="title">Login Options</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="login.html">
							Login Form 1</a>
						</li>
						<li>
							<a href="login_soft.html">
							Login Form 2</a>
						</li>
					</ul>
				</li>
				<li class="">
					<a href="javascript:;">
					<i class="icon-th"></i> 
					<span class="title">Data Tables</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="table_basic.html">
							Basic Tables</a>
						</li>
						<li>
							<a href="table_responsive.html">
							Responsive Tables</a>
						</li>
						<li>
							<a href="table_managed.html">
							Managed Tables</a>
						</li>
						<li>
							<a href="table_editable.html">
							Editable Tables</a>
						</li>
						<li>
							<a href="table_advanced.html">
							Advanced Tables</a>
						</li>
					</ul>
				</li>
				<li class="">
					<a href="javascript:;">
					<i class="icon-file-text"></i> 
					<span class="title">Portlets</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="portlet_general.html">
							General Portlets</a>
						</li>
						<li>
							<a href="portlet_draggable.html">
							Draggable Portlets</a>
						</li>
					</ul>
				</li>
				<li class="">
					<a href="javascript:;">
					<i class="icon-map-marker"></i> 
					<span class="title">Maps</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="maps_google.html">
							Google Maps</a>
						</li>
						<li>
							<a href="maps_vector.html">
							Vector Maps</a>
						</li>
					</ul>
				</li>
				<li class="last ">
					<a href="charts.html">
					<i class="icon-bar-chart"></i> 
					<span class="title">Visual Charts</span>
					</a>
				</li>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
		<!-- END SIDEBAR -->
		<!-- BEGIN PAGE -->
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->               
			
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN STYLE CUSTOMIZER -->
			
			<!-- END BEGIN STYLE CUSTOMIZER -->  
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
						Dashboard <small>statistics and more</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li>
							<i class="icon-home"></i>
							<a href="index.html">Home</a> 
							<i class="icon-angle-right"></i>
						</li>
						<li><a href="#">Dashboard</a></li>
						
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN DASHBOARD STATS -->
			
			<!-- END DASHBOARD STATS -->
			
			
			
			
			
			
			
			
			
			
		</div>
		<!-- END PAGE -->
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->   
	<!--[if lt IE 9]>
	<script src="assets/plugins/respond.min.js"></script>
	<script src="assets/plugins/excanvas.min.js"></script> 
	<![endif]-->   
	<script type="text/javascript" src="assets/plugins/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="assets/plugins/jquery-migrate-1.2.1.min.js"></script>   
	<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script type="text/javascript" src="assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js"></script>
	<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js"></script>
	<script type="text/javascript" src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script type="text/javascript" src="assets/plugins/jquery.blockui.min.js"></script>  
	<script type="text/javascript" src="assets/plugins/jquery.cookie.min.js"></script>
	<script type="text/javascript" src="assets/plugins/uniform/jquery.uniform.min.js"></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script type="text/javascript" src="assets/plugins/jqvmap/jqvmap/jquery.vmap.js"></script>   
	<script type="text/javascript" src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js"></script>
	<script type="text/javascript" src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js"></script>
	<script type="text/javascript" src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js"></script>
	<script type="text/javascript" src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js"></script>
	<script type="text/javascript" src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js"></script>
	<script type="text/javascript" src="assets/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js"></script>  
	<script type="text/javascript" src="assets/plugins/flot/jquery.flot.js"></script>
	<script type="text/javascript" src="assets/plugins/flot/jquery.flot.resize.js"></script>
	<script type="text/javascript" src="assets/plugins/jquery.pulsate.min.js"></script>
	<script type="text/javascript" src="assets/plugins/bootstrap-daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>     
	<script type="text/javascript" src="assets/plugins/gritter/js/jquery.gritter.js"></script>
	<!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
	<script type="text/javascript" src="assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
	<script type="text/javascript" src="assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
	<script type="text/javascript" src="assets/plugins/jquery.sparkline.min.js"></script>  
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script type="text/javascript" src="assets/scripts/app.js"></script>
	<script type="text/javascript" src="assets/scripts/index.js"></script>
	<script type="text/javascript" src="assets/scripts/tasks.js"></script>        
	<!-- END PAGE LEVEL SCRIPTS -->  
	<script>
		jQuery(document).ready(function() {    
		   App.init(); // initlayout and core plugins
		   Index.init();
		   Index.initJQVMAP(); // init index page's custom scripts
		   Index.initCalendar(); // init index page's custom scripts
		   Index.initCharts(); // init index page's custom scripts
		   Index.initChat();
		   Index.initMiniCharts();
		   Index.initDashboardDaterange();
		   Index.initIntro();
		   Tasks.initDashboardWidget();
		});
	</script>
	<!-- END JAVASCRIPTS -->


<div class="jqvmap-label"></div><div class="jqvmap-label"></div><div class="jqvmap-label"></div><div class="jqvmap-label"></div><div class="jqvmap-label"></div><div class="daterangepicker dropdown-menu opensright"><div class="calendar right"><div class="calendar-date"><table class="table-condensed"><thead><tr><th></th><th class="prev available"><i class="icon-arrow-left icon-angle-left"></i></th><th style="width: auto" colspan="5">November 2014</th><th class="next available"><i class="icon-arrow-right icon-angle-right"></i></th></tr><tr><th class="week">W</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th><th>Su</th></tr></thead><tbody><tr><td class="week">44</td><td data-title="r0c0" class="available off in-range">27</td><td data-title="r0c1" class="available off in-range">28</td><td data-title="r0c2" class="available off in-range">29</td><td data-title="r0c3" class="available off in-range">30</td><td data-title="r0c4" class="available off in-range">31</td><td data-title="r0c5" class="available in-range">1</td><td data-title="r0c6" class="available in-range">2</td></tr><tr><td class="week">45</td><td data-title="r1c0" class="available in-range">3</td><td data-title="r1c1" class="available in-range">4</td><td data-title="r1c2" class="available in-range">5</td><td data-title="r1c3" class="available in-range">6</td><td data-title="r1c4" class="available in-range">7</td><td data-title="r1c5" class="available in-range">8</td><td data-title="r1c6" class="available in-range">9</td></tr><tr><td class="week">46</td><td data-title="r2c0" class="available in-range">10</td><td data-title="r2c1" class="available in-range">11</td><td data-title="r2c2" class="available in-range">12</td><td data-title="r2c3" class="available in-range">13</td><td data-title="r2c4" class="available in-range">14</td><td data-title="r2c5" class="available in-range">15</td><td data-title="r2c6" class="available in-range">16</td></tr><tr><td class="week">47</td><td data-title="r3c0" class="available active end-date">17</td><td data-title="r3c1" class="available">18</td><td data-title="r3c2" class="available">19</td><td data-title="r3c3" class="available">20</td><td data-title="r3c4" class="available">21</td><td data-title="r3c5" class="available">22</td><td data-title="r3c6" class="available">23</td></tr><tr><td class="week">48</td><td data-title="r4c0" class="available">24</td><td data-title="r4c1" class="available">25</td><td data-title="r4c2" class="available">26</td><td data-title="r4c3" class="available">27</td><td data-title="r4c4" class="available">28</td><td data-title="r4c5" class="available">29</td><td data-title="r4c6" class="available">30</td></tr><tr><td class="week">49</td><td data-title="r5c0" class="available off">1</td><td data-title="r5c1" class="available off">2</td><td data-title="r5c2" class="available off">3</td><td data-title="r5c3" class="available off">4</td><td data-title="r5c4" class="available off">5</td><td data-title="r5c5" class="available off">6</td><td data-title="r5c6" class="available off">7</td></tr></tbody></table></div></div><div class="calendar left"><div class="calendar-date"><table class="table-condensed"><thead><tr><th></th><th class="prev available"><i class="icon-arrow-left icon-angle-left"></i></th><th style="width: auto" colspan="5">October 2014</th><th class="next available"><i class="icon-arrow-right icon-angle-right"></i></th></tr><tr><th class="week">W</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th><th>Su</th></tr></thead><tbody><tr><td class="week">40</td><td data-title="r0c0" class="available off">29</td><td data-title="r0c1" class="available off">30</td><td data-title="r0c2" class="available">1</td><td data-title="r0c3" class="available">2</td><td data-title="r0c4" class="available">3</td><td data-title="r0c5" class="available">4</td><td data-title="r0c6" class="available">5</td></tr><tr><td class="week">41</td><td data-title="r1c0" class="available">6</td><td data-title="r1c1" class="available">7</td><td data-title="r1c2" class="available">8</td><td data-title="r1c3" class="available">9</td><td data-title="r1c4" class="available">10</td><td data-title="r1c5" class="available">11</td><td data-title="r1c6" class="available">12</td></tr><tr><td class="week">42</td><td data-title="r2c0" class="available">13</td><td data-title="r2c1" class="available">14</td><td data-title="r2c2" class="available">15</td><td data-title="r2c3" class="available">16</td><td data-title="r2c4" class="available">17</td><td data-title="r2c5" class="available">18</td><td data-title="r2c6" class="available active start-date">19</td></tr><tr><td class="week">43</td><td data-title="r3c0" class="available in-range">20</td><td data-title="r3c1" class="available in-range">21</td><td data-title="r3c2" class="available in-range">22</td><td data-title="r3c3" class="available in-range">23</td><td data-title="r3c4" class="available in-range">24</td><td data-title="r3c5" class="available in-range">25</td><td data-title="r3c6" class="available in-range">26</td></tr><tr><td class="week">44</td><td data-title="r4c0" class="available in-range">27</td><td data-title="r4c1" class="available in-range">28</td><td data-title="r4c2" class="available in-range">29</td><td data-title="r4c3" class="available in-range">30</td><td data-title="r4c4" class="available in-range">31</td><td data-title="r4c5" class="available off in-range">1</td><td data-title="r4c6" class="available off in-range">2</td></tr><tr><td class="week">45</td><td data-title="r5c0" class="available off in-range">3</td><td data-title="r5c1" class="available off in-range">4</td><td data-title="r5c2" class="available off in-range">5</td><td data-title="r5c3" class="available off in-range">6</td><td data-title="r5c4" class="available off in-range">7</td><td data-title="r5c5" class="available off in-range">8</td><td data-title="r5c6" class="available off in-range">9</td></tr></tbody></table></div></div><div class="ranges"><ul><li>Today</li><li>Yesterday</li><li>Last 7 Days</li><li class="active">Last 30 Days</li><li>This Month</li><li>Last Month</li><li>Custom Range</li></ul><div class="range_inputs"><div style="float: left" class="daterangepicker_start_input"><label for="daterangepicker_start">From</label><input type="text" disabled="disabled" value="" name="daterangepicker_start" class="input-mini"></div><div style="float: left; padding-left: 11px" class="daterangepicker_end_input"><label for="daterangepicker_end">To</label><input type="text" disabled="disabled" value="" name="daterangepicker_end" class="input-mini"></div><button class="blue applyBtn btn">Apply</button>&nbsp;<button class="default cancelBtn btn">Cancel</button></div></div></div></body><!-- END BODY --></html>