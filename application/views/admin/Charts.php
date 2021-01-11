<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.authenticgoods.co/themes/quantum-pro/demos/demo7/charts.chartjs.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Oct 2018 08:15:18 GMT -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Admin | Charts</title>
	<!-- ================== GOOGLE FONTS ==================-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet">
	<!-- ======================= GLOBAL VENDOR STYLES ========================-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>admin_plugin/assets/css/vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>admin_plugin/assets/vendor/metismenu/dist/metisMenu.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>admin_plugin/assets/vendor/switchery-npm/index.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>admin_plugin/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
	<!-- ======================= LINE AWESOME ICONS ===========================-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>admin_plugin/assets/css/icons/line-awesome.min.css">
	<!-- ======================= DRIP ICONS ===================================-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>admin_plugin/assets/css/icons/dripicons.min.css">
	<!-- ======================= MATERIAL DESIGN ICONIC FONTS =================-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>admin_plugin/assets/css/icons/material-design-iconic-font.min.css">
	<!-- ======================= GLOBAL COMMON STYLES ============================-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>admin_plugin/assets/css/common/main.bundle.css">
	<!-- ======================= LAYOUT TYPE ===========================-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>admin_plugin/assets/css/layouts/vertical/core/main.css">
	<!-- ======================= MENU TYPE ===========================================-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>admin_plugin/assets/css/layouts/vertical/menu-type/content.css">
	<!-- ======================= THEME COLOR STYLES ===========================-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>admin_plugin/assets/css/layouts/vertical/themes/theme-i.css">
</head>

<body class="content-menu">
	<!-- CONTENT WRAPPER -->
	<div id="app">
	<?php include 'include/topbar.php'; ?>
		
		<?php include 'include/leftbar.php'; ?>
	<div class="content container-fluid">
					<header class="page-header">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h1 class="separator">Charts</h1>
								<nav class="breadcrumb-wrapper" aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="index-2.html"><i class="icon dripicons-home"></i></a></li>
										<li class="breadcrumb-item"><a href="javascript:void(0)">Charts</a></li>
										<li class="breadcrumb-item active" aria-current="page">Chart</li>
									</ol>
								</nav>
							</div>
							<ul class="actions top-right">
								<li class="dropdown">
									<a href="javascript:void(0)" data-toggle="dropdown" aria-expanded="false">
										<i class="la la-ellipsis-h"></i>
									</a>
									<div class="dropdown-menu dropdown-icon-menu dropdown-menu-right">
										<div class="dropdown-header">
											Quick Actions
										</div>
										<a href="#" class="dropdown-item">
											<i class="icon dripicons-clockwise"></i> Refresh
										</a>
										<a href="#" class="dropdown-item">
											<i class="icon dripicons-gear"></i> Manage Widgets
										</a>
										<a href="#" class="dropdown-item">
											<i class="icon dripicons-cloud-download"></i> Export
										</a>
										<a href="#" class="dropdown-item">
											<i class="icon dripicons-help"></i> Support
										</a>
									</div>
								</li>
							</ul>
						</div>
					</header>
					<section class="page-content container-fluid">
						<div class="row">
							<div class="col">
								<div class="card">
									<h5 class="card-header">Line Chart</h5>
									<div class="card-body">
										<canvas id="chartjs_lineChart"></canvas>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="card">
									<h5 class="card-header">Bar Chart</h5>
									<div class="card-body">
										<canvas id="chartjs_barChart"></canvas>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<div class="card">
									<h5 class="card-header">Radar Chart</h5>
									<div class="card-body">
										<canvas id="chartjs_radarChart"></canvas>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="card">
									<h5 class="card-header">Polar Chart</h5>
									<div class="card-body">
										<canvas id="chartjs_polarChart"></canvas>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<div class="card">
									<h5 class="card-header">Pie Chart</h5>
									<div class="card-body">
										<canvas id="chartjs_pieChart"></canvas>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="card">
									<h5 class="card-header">Doughnut Chart</h5>
									<div class="card-body">
										<canvas id="chartjs_doughnutChart"></canvas>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
				<!-- SIDEBAR QUICK PANNEL WRAPPER -->
				<aside class="sidebar sidebar-right">
					<div class="sidebar-content">
						<div class="tab-panel m-b-30" id="sidebar-tabs">
							<ul class="nav nav-tabs primary-tabs">
								<li class="nav-item" role="presentation"><a href="#sidebar-settings" class="nav-link active show" data-toggle="tab" aria-expanded="true">Settings</a></li>
								<li class="nav-item" role="presentation"><a href="#sidebar-contact" class="nav-link" data-toggle="tab" aria-expanded="true">Contacts</a></li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane fadeIn active" id="sidebar-settings">
									<div class="sidebar-settings-wrapper">
										<h5 class="m-t-30 m-b-20">Colors with dark sidebar</h5>
										<div class="row m-0">
											<div class="col-6 col-md-3 p-5 m-b-10">
												<div class="color-option-check">
													<h6 class="title text-center">theme-a.css</h6><label data-load-css="<?php echo base_url(); ?>admin_plugin/assets/css/layouts/vertical/themes/theme-a.css">
														<input type="radio" name="setting-theme" checked="checked">
														<span class="icon-check dark"></span>
														<span class="split">
															<span class="color bg-menu-dark"></span>
															<span class="color bg-theme-a"></span>
														</span>
													</label>
												</div>
											</div>
											<div class="col-6 col-md-3 p-5 m-b-10">
												<div class="color-option-check">
													<h6 class="title text-center">theme-b.css</h6><label data-load-css="<?php echo base_url(); ?>admin_plugin/assets/css/layouts/vertical/themes/theme-b.css">
														<input type="radio" name="setting-theme">
														<span class="icon-check"></span>
														<span class="split">
															<span class="color bg-menu-dark"></span>
															<span class="color bg-theme-b"></span>
														</span>
													</label>
												</div>
											</div>
											<div class="col-6 col-md-3 p-5 m-b-10">
												<div class="color-option-check">
													<h6 class="title text-center">theme-c.css</h6><label data-load-css="<?php echo base_url(); ?>admin_plugin/assets/css/layouts/vertical/themes/theme-c.css">
														<input type="radio" name="setting-theme">
														<span class="icon-check"></span>
														<span class="split">
															<span class="color bg-menu-dark"></span>
															<span class="color bg-theme-c"></span>
														</span>
													</label>
												</div>
											</div>
											<div class="col-6 col-md-3 p-5 m-b-10">
												<div class="color-option-check">
													<h6 class="title text-center">theme-d.css</h6><label data-load-css="<?php echo base_url(); ?>admin_plugin/assets/css/layouts/vertical/themes/theme-d.css">
														<input type="radio" name="setting-theme">
														<span class="icon-check"></span>
														<span class="split">
															<span class="color bg-menu-dark"></span>
															<span class="color bg-theme-d"></span>
														</span>
													</label>
												</div>
											</div>
											<div class="col-6 col-md-3 p-5 m-b-10">
												<div class="color-option-check">
													<h6 class="title text-center">theme-e.css</h6><label data-load-css="<?php echo base_url(); ?>admin_plugin/assets/css/layouts/vertical/themes/theme-e.css">
														<input type="radio" name="setting-theme">
														<span class="icon-check"></span>
														<span class="split">
															<span class="color bg-menu-dark"></span>
															<span class="color bg-theme-e"></span>
														</span>
													</label>
												</div>
											</div>
											<div class="col-6 col-md-3 p-5 m-b-10">
												<div class="color-option-check">
													<h6 class="title text-center">theme-f.css</h6><label data-load-css="<?php echo base_url(); ?>admin_plugin/assets/css/layouts/vertical/themes/theme-f.css">
														<input type="radio" name="setting-theme">
														<span class="icon-check"></span>
														<span class="split">
															<span class="color bg-menu-dark"></span>
															<span class="color bg-theme-f"></span>
														</span>
													</label>
												</div>
											</div>
											<div class="col-6 col-md-3 p-5 m-b-10">
												<div class="color-option-check">
													<h6 class="title text-center">theme-g.css</h6><label data-load-css="<?php echo base_url(); ?>admin_plugin/assets/css/layouts/vertical/themes/theme-g.css">
														<input type="radio" name="setting-theme">
														<span class="icon-check"></span>
														<span class="split">
															<span class="color bg-menu-dark"></span>
															<span class="color bg-theme-g"></span>
														</span>
													</label>
												</div>
											</div>
											<div class="col-6 col-md-3 p-5 m-b-10">
												<div class="color-option-check">
													<h6 class="title text-center">theme-h.css</h6><label data-load-css="<?php echo base_url(); ?>admin_plugin/assets/css/layouts/vertical/themes/theme-h.css">
														<input type="radio" name="setting-theme">
														<span class="icon-check"></span>
														<span class="split">
															<span class="color bg-menu-dark"></span>
															<span class="color bg-theme-h"></span>
														</span>
													</label>
												</div>
											</div>
										</div>
										<h5 class="m-t-30 m-b-20">Colors with light sidebar</h5>
										<div class="row m-0">
											<div class="col-6 col-md-3 p-5 m-b-10">
												<div class="color-option-check">
													<h6 class="title text-center">theme-i.css</h6><label data-load-css="<?php echo base_url(); ?>admin_plugin/assets/css/layouts/vertical/themes/theme-i.css">
														<input type="radio" name="setting-theme">
														<span class="icon-check"></span>
														<span class="split">
															<span class="color bg-menu-light"></span>
															<span class="color bg-menu-dark"></span>
														</span>
													</label>
												</div>
											</div>
											<div class="col-6 col-md-3 p-5 m-b-10">
												<div class="color-option-check">
													<h6 class="title text-center">theme-j.css</h6><label data-load-css="<?php echo base_url(); ?>admin_plugin/assets/css/layouts/vertical/themes/theme-j.css">
														<input type="radio" name="setting-theme">
														<span class="icon-check"></span>
														<span class="split">
															<span class="color bg-menu-light"></span>
															<span class="color bg-theme-j"></span>
														</span>
													</label>
												</div>
											</div>
											<div class="col-6 col-md-3 p-5 m-b-10">
												<div class="color-option-check">
													<h6 class="title text-center">theme-k.css</h6><label data-load-css="<?php echo base_url(); ?>admin_plugin/assets/css/layouts/vertical/themes/theme-k.css">
														<input type="radio" name="setting-theme">
														<span class="icon-check"></span>
														<span class="split">
															<span class="color bg-menu-light"></span>
															<span class="color bg-theme-k"></span>
														</span>
													</label>
												</div>
											</div>
											<div class="col-6 col-md-3 p-5 m-b-10">
												<div class="color-option-check">
													<h6 class="title text-center">theme-l.css</h6><label data-load-css="<?php echo base_url(); ?>admin_plugin/assets/css/layouts/vertical/themes/theme-l.css">
														<input type="radio" name="setting-theme">
														<span class="icon-check"></span>
														<span class="split">
															<span class="color bg-menu-light"></span>
															<span class="color bg-theme-l"></span>
														</span>
													</label>
												</div>
											</div>
											<div class="col-6 col-md-3 p-5 m-b-10">
												<div class="color-option-check">
													<h6 class="title text-center">theme-m.css</h6><label data-load-css="<?php echo base_url(); ?>admin_plugin/assets/css/layouts/vertical/themes/theme-m.css">
														<input type="radio" name="setting-theme">
														<span class="icon-check"></span>
														<span class="split">
															<span class="color bg-menu-light"></span>
															<span class="color bg-theme-m"></span>
														</span>
													</label>
												</div>
											</div>
											<div class="col-6 col-md-3 p-5 m-b-10">
												<div class="color-option-check">
													<h6 class="title text-center">theme-n.css</h6><label data-load-css="<?php echo base_url(); ?>admin_plugin/assets/css/layouts/vertical/themes/theme-n.css">
														<input type="radio" name="setting-theme">
														<span class="icon-check"></span>
														<span class="split">
															<span class="color bg-menu-light"></span>
															<span class="color bg-theme-n"></span>
														</span>
													</label>
												</div>
											</div>
											<div class="col-6 col-md-3 p-5 m-b-10">
												<div class="color-option-check">
													<h6 class="title text-center">theme-o.css</h6><label data-load-css="<?php echo base_url(); ?>admin_plugin/assets/css/layouts/vertical/themes/theme-o.css">
														<input type="radio" name="setting-theme">
														<span class="icon-check"></span>
														<span class="split">
															<span class="color bg-menu-light"></span>
															<span class="color bg-theme-o"></span>
														</span>
													</label>
												</div>
											</div>
											<div class="col-6 col-md-3 p-5 m-b-10">
												<div class="color-option-check">
													<h6 class="title text-center">theme-p.css</h6><label data-load-css="<?php echo base_url(); ?>admin_plugin/assets/css/layouts/vertical/themes/theme-p.css">
														<input type="radio" name="setting-theme" />
														<span class="icon-check"></span>
														<span class="split">
															<span class="color bg-menu-light"></span>
															<span class="color bg-theme-p"></span>
														</span>
													</label>
												</div>
											</div>
										</div>
									</div>
									<div>
										<h5 class="m-t-30 m-b-20">Layouts</h5>
										<ul class="list-reset">
											<li>
												<div class="custom-control custom-radio radio-primary form-check">
													<input type="radio" id="layoutStatic" name="layoutMode" class="custom-control-input" checked="checked" value="">
													<label class="custom-control-label" for="layoutStatic">Static Layout</label>
												</div>
											</li>
											<li>
												<div class="custom-control custom-radio radio-primary form-check">
													<input type="radio" id="layoutFixed" name="layoutMode" class="custom-control-input" value="layout-fixed">
													<label class="custom-control-label" for="layoutFixed">Fixed Layout</label>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<div class="tab-pane" id="sidebar-contact">
									<!--START SEARCH WRAPPER -->
									<div class="search-wrapper m-b-30">
										<button type="submit" class="search-button-submit"><i class="icon dripicons-search site-search-icon"></i></button>
										<input type="text" class="form-control search-input no-focus-border" placeholder="Search contacts...">
										<a href="javascript:void(0)" class="close-search-button" data-q-action="close-site-search">
											<i class="icon dripicons-cross site-search-close-icon"></i>
										</a>
									</div>
									<!--END START SEARCH WRAPPER -->
									<!--START RIGHT SIDEBAR CONTACT LIST -->
									<div class="qt-scroll" data-scroll="minimal-dark">
										<div class="list-view-group-header">a</div>
										<ul class="list-group p-0">
											<li class="list-group-item" data-chat="open" data-chat-name="John Smith">
												<span class="float-left"><img src="<?php echo base_url(); ?>admin_plugin/assets/img/avatars/01.jpg" alt="" class="rounded-circle max-w-50 m-r-10"></span>
												<i class="badge mini success status"></i>
												<div class="list-group-item-body">
													<div class="list-group-item-heading">Abby Pugh</div>
													<div class="list-group-item-text">New York, NY</div>
												</div>
											</li>
											<li class="list-group-item" data-chat="open" data-chat-name="Allison Grayce">
												<span class="float-left"><img src="<?php echo base_url(); ?>admin_plugin/assets/img/avatars/06.jpg" alt="" class="rounded-circle max-w-50 m-r-10"></span>
												<i class="badge mini success status"></i>
												<div class="list-group-item-body">
													<div class="list-group-item-heading">Allison Selleck</div>
													<div class="list-group-item-text">Seattle, WA</div>
												</div>
											</li>
										</ul>
										<div class="list-view-group-header">b</div>
										<ul class="list-group p-0">
											<li class="list-group-item" data-chat="open" data-chat-name="Ashley Ford">
												<span class="float-left"><img src="<?php echo base_url(); ?>admin_plugin/assets/img/avatars/07.jpg" alt="" class="rounded-circle max-w-50 m-r-10"></span>
												<i class="badge mini success status"></i>
												<div class="list-group-item-body">
													<div class="list-group-item-heading">Bently Hinton</div>
													<div class="list-group-item-text">Denver, CO</div>
												</div>
											</li>
											<li class="list-group-item" data-chat="open" data-chat-name="Johanna Kollmann">
												<span class="float-left"><img src="<?php echo base_url(); ?>admin_plugin/assets/img/avatars/11.jpg" alt="" class="rounded-circle max-w-50 m-r-10"></span>
												<i class="badge mini success status"></i>
												<div class="list-group-item-body">
													<div class="list-group-item-heading">Brad Friedman </div>
													<div class="list-group-item-text">Palo Alto, Ca</div>
												</div>
											</li>
											<li class="list-group-item" data-chat="open" data-chat-name="John Smith">
												<span class="float-left"><img src="<?php echo base_url(); ?>admin_plugin/assets/img/avatars/02.jpg" alt="" class="rounded-circle max-w-50 m-r-10"></span>
												<i class="badge mini success status"></i>
												<div class="list-group-item-body">
													<div class="list-group-item-heading">Boston Nather</div>
													<div class="list-group-item-text">New York, NY</div>
												</div>
											</li>
											<li class="list-group-item" data-chat="open" data-chat-name="Allison Grayce">
												<span class="float-left"><img src="<?php echo base_url(); ?>admin_plugin/assets/img/avatars/16.jpg" alt="" class="rounded-circle max-w-50 m-r-10"></span>
												<i class="badge mini success status"></i>
												<div class="list-group-item-body">
													<div class="list-group-item-heading">Brayan Bunnell</div>
													<div class="list-group-item-text">Seattle, WA</div>
												</div>
											</li>
										</ul>
										<div class="list-view-group-header">c</div>
										<ul class="list-group p-0">
											<li class="list-group-item" data-chat="open" data-chat-name="Ashley Ford">
												<span class="float-left"><img src="<?php echo base_url(); ?>admin_plugin/assets/img/avatars/08.jpg" alt="" class="rounded-circle max-w-50 m-r-10"></span>
												<i class="badge mini success status"></i>
												<div class="list-group-item-body">
													<div class="list-group-item-heading">Carter Titchen</div>
													<div class="list-group-item-text">Denver, CO</div>
												</div>
											</li>
											<li class="list-group-item" data-chat="open" data-chat-name="Johanna Kollmann">
												<span class="float-left"><img src="<?php echo base_url(); ?>admin_plugin/assets/img/avatars/13.jpg" alt="" class="rounded-circle max-w-50 m-r-10"></span>
												<i class="badge mini success status"></i>
												<div class="list-group-item-body">
													<div class="list-group-item-heading">Carla Fraser </div>
													<div class="list-group-item-text">Palo Alto, Ca</div>
												</div>
											</li>
										</ul>
										<div class="list-view-group-header">d</div>
										<ul class="list-group p-0">
											<li class="list-group-item" data-chat="open" data-chat-name="John Smith">
												<span class="float-left"><img src="<?php echo base_url(); ?>admin_plugin/assets/img/avatars/03.jpg" alt="" class="rounded-circle max-w-50 m-r-10"></span>
												<i class="badge mini success status"></i>
												<div class="list-group-item-body">
													<div class="list-group-item-heading">David Petrie</div>
													<div class="list-group-item-text">New York, NY</div>
												</div>
											</li>
										</ul>
										<div class="list-view-group-header">e</div>
										<ul class="list-group p-0">
											<li class="list-group-item" data-chat="open" data-chat-name="Allison Grayce">
												<span class="float-left"><img src="<?php echo base_url(); ?>admin_plugin/assets/img/avatars/12.jpg" alt="" class="rounded-circle max-w-50 m-r-10"></span>
												<i class="badge mini success status"></i>
												<div class="list-group-item-body">
													<div class="list-group-item-heading">Ellie Sweetser</div>
													<div class="list-group-item-text">Seattle, WA</div>
												</div>
											</li>
											<li class="list-group-item" data-chat="open" data-chat-name="Ashley Ford">
												<span class="float-left"><img src="<?php echo base_url(); ?>admin_plugin/assets/img/avatars/09.jpg" alt="" class="rounded-circle max-w-50 m-r-10"></span>
												<i class="badge mini success status"></i>
												<div class="list-group-item-body">
													<div class="list-group-item-heading">Eric Eskridge</div>
													<div class="list-group-item-text">Denver, CO</div>
												</div>
											</li>
										</ul>
										<div class="list-view-group-header">f</div>
										<ul class="list-group p-0">
											<li class="list-group-item" data-chat="open" data-chat-name="John Smith">
												<span class="float-left"><img src="<?php echo base_url(); ?>admin_plugin/assets/img/avatars/04.jpg" alt="" class="rounded-circle max-w-50 m-r-10"></span>
												<i class="badge mini success status"></i>
												<div class="list-group-item-body">
													<div class="list-group-item-heading">Farrah Yulikova</div>
													<div class="list-group-item-text">New York, NY</div>
												</div>
											</li>
											<li class="list-group-item" data-chat="open" data-chat-name="Allison Grayce">
												<span class="float-left"><img src="<?php echo base_url(); ?>admin_plugin/assets/img/avatars/05.jpg" alt="" class="rounded-circle max-w-50 m-r-10"></span>
												<i class="badge mini success status"></i>
												<div class="list-group-item-body">
													<div class="list-group-item-heading">Florence Buren</div>
													<div class="list-group-item-text">Seattle, WA</div>
												</div>
											</li>
											<li class="list-group-item" data-chat="open" data-chat-name="Johanna Kollmann">
												<span class="float-left"><img src="<?php echo base_url(); ?>admin_plugin/assets/img/avatars/14.jpg" alt="" class="rounded-circle max-w-50 m-r-10"></span>
												<i class="badge mini success status"></i>
												<div class="list-group-item-body">
													<div class="list-group-item-heading">Francesca Koehn </div>
													<div class="list-group-item-text">Palo Alto, Ca</div>
												</div>
											</li>
										</ul>
										<div class="list-view-group-header">g</div>
										<ul class="list-group p-0">
											<li class="list-group-item" data-chat="open" data-chat-name="Ashley Ford">
												<span class="float-left"><img src="<?php echo base_url(); ?>admin_plugin/assets/img/avatars/10.jpg" alt="" class="rounded-circle max-w-50 m-r-10"></span>
												<i class="badge mini success status"></i>
												<div class="list-group-item-body">
													<div class="list-group-item-heading">Glynn Slade</div>
													<div class="list-group-item-text">Denver, CO</div>
												</div>
											</li>
										</ul>
										<div class="list-view-group-header">h</div>
										<ul class="list-group p-0">
											<li class="list-group-item" data-chat="open" data-chat-name="Johanna Kollmann">
												<span class="float-left"><img src="<?php echo base_url(); ?>admin_plugin/assets/img/avatars/14.jpg" alt="" class="rounded-circle max-w-50 m-r-10"></span>
												<i class="badge mini success status"></i>
												<div class="list-group-item-body">
													<div class="list-group-item-heading">Haley Molaroni </div>
													<div class="list-group-item-text">Palo Alto, Ca</div>
												</div>
											</li>
										</ul>
										<div class="list-view-group-header">i</div>
										<ul class="list-group p-0">
											<li class="list-group-item" data-chat="open" data-chat-name="John Smith">
												<span class="float-left"><img src="<?php echo base_url(); ?>admin_plugin/assets/img/avatars/07.jpg" alt="" class="rounded-circle max-w-50 m-r-10"></span>
												<i class="badge mini success status"></i>
												<div class="list-group-item-body">
													<div class="list-group-item-heading">Isaac Seldin</div>
													<div class="list-group-item-text">New York, NY</div>
												</div>
											</li>
											<li class="list-group-item" data-chat="open" data-chat-name="Allison Grayce">
												<span class="float-left"><img src="<?php echo base_url(); ?>admin_plugin/assets/img/avatars/13.jpg" alt="" class="rounded-circle max-w-50 m-r-10"></span>
												<i class="badge mini success status"></i>
												<div class="list-group-item-body">
													<div class="list-group-item-heading">Ivy Dancelli</div>
													<div class="list-group-item-text">Seattle, WA</div>
												</div>
											</li>
										</ul>
										<div class="list-view-group-header">j</div>
										<ul class="list-group p-0">
											<li class="list-group-item" data-chat="open" data-chat-name="Ashley Ford">
												<span class="float-left"><img src="<?php echo base_url(); ?>admin_plugin/assets/img/avatars/18.jpg" alt="" class="rounded-circle max-w-50 m-r-10"></span>
												<i class="badge mini success status"></i>
												<div class="list-group-item-body">
													<div class="list-group-item-heading">Jax Scharf</div>
													<div class="list-group-item-text">Denver, CO</div>
												</div>
											</li>
											<li class="list-group-item" data-chat="open" data-chat-name="Johanna Kollmann">
												<span class="float-left"><img src="<?php echo base_url(); ?>admin_plugin/assets/img/avatars/17.jpg" alt="" class="rounded-circle max-w-50 m-r-10"></span>
												<i class="badge mini success status"></i>
												<div class="list-group-item-body">
													<div class="list-group-item-heading">Jen Pritsinas </div>
													<div class="list-group-item-text">Palo Alto, Ca</div>
												</div>
											</li>
										</ul>
										<div class="list-view-group-header">m</div>
										<ul class="list-group p-0">
											<li class="list-group-item" data-chat="open" data-chat-name="Ashley Ford">
												<span class="float-left"><img src="<?php echo base_url(); ?>admin_plugin/assets/img/avatars/20.jpg" alt="" class="rounded-circle max-w-50 m-r-10"></span>
												<i class="badge mini success status"></i>
												<div class="list-group-item-body">
													<div class="list-group-item-heading">Marco Heginbotham</div>
													<div class="list-group-item-text">Denver, CO</div>
												</div>
											</li>
											<li class="list-group-item" data-chat="open" data-chat-name="Johanna Kollmann">
												<span class="float-left"><img src="<?php echo base_url(); ?>admin_plugin/assets/img/avatars/21.jpg" alt="" class="rounded-circle max-w-50 m-r-10"></span>
												<i class="badge mini success status"></i>
												<div class="list-group-item-body">
													<div class="list-group-item-heading">Marisa Gelber </div>
													<div class="list-group-item-text">Palo Alto, Ca</div>
												</div>
											</li>
										</ul>
										<div class="list-view-group-header">p</div>
										<ul class="list-group p-0">
											<li class="list-group-item" data-chat="open" data-chat-name="Ashley Ford">
												<span class="float-left"><img src="<?php echo base_url(); ?>admin_plugin/assets/img/avatars/22.jpg" alt="" class="rounded-circle max-w-50 m-r-10"></span>
												<i class="badge mini success status"></i>
												<div class="list-group-item-body">
													<div class="list-group-item-heading">Penny Withka</div>
													<div class="list-group-item-text">Denver, CO</div>
												</div>
											</li>
											<li class="list-group-item" data-chat="open" data-chat-name="Johanna Kollmann">
												<span class="float-left"><img src="<?php echo base_url(); ?>admin_plugin/assets/img/avatars/23.jpg" alt="" class="rounded-circle max-w-50 m-r-10"></span>
												<i class="badge mini success status"></i>
												<div class="list-group-item-body">
													<div class="list-group-item-heading">Pixie Clayborne </div>
													<div class="list-group-item-text">Palo Alto, Ca</div>
												</div>
											</li>
										</ul>
										<div class="list-view-group-header">s</div>
										<ul class="list-group p-0">
											<li class="list-group-item" data-chat="open" data-chat-name="Ashley Ford">
												<span class="float-left"><img src="<?php echo base_url(); ?>admin_plugin/assets/img/avatars/25.jpg" alt="" class="rounded-circle max-w-50 m-r-10"></span>
												<i class="badge mini success status"></i>
												<div class="list-group-item-body">
													<div class="list-group-item-heading">Sheldon Luntz</div>
													<div class="list-group-item-text">Denver, CO</div>
												</div>
											</li>
											<li class="list-group-item" data-chat="open" data-chat-name="Johanna Kollmann">
												<span class="float-left"><img src="<?php echo base_url(); ?>admin_plugin/assets/img/avatars/26.jpg" alt="" class="rounded-circle max-w-50 m-r-10"></span>
												<i class="badge mini success status"></i>
												<div class="list-group-item-body">
													<div class="list-group-item-heading">Sam Kendall </div>
													<div class="list-group-item-text">Palo Alto, Ca</div>
												</div>
											</li>
										</ul>
										<div class="list-view-group-header">z</div>
										<ul class="list-group p-0">
											<li class="list-group-item" data-chat="open" data-chat-name="Ashley Ford">
												<span class="float-left"><img src="<?php echo base_url(); ?>admin_plugin/assets/img/avatars/27.jpg" alt="" class="rounded-circle max-w-50 m-r-10"></span>
												<i class="badge mini success status"></i>
												<div class="list-group-item-body">
													<div class="list-group-item-heading">Zack Mohanram</div>
													<div class="list-group-item-text">Denver, CO</div>
												</div>
											</li>
										</ul>
									</div>
									<!--END RIGHT SIDEBAR CONTACT LIST -->
								</div>
							</div>
						</div>
					</div>
				</aside>
				<!-- END SIDEBAR QUICK PANNEL WRAPPER -->
			</div>
		</div>
		<!-- END CONTENT WRAPPER -->

		<!-- ================== GLOBAL VENDOR SCRIPTS ==================-->
		<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/modernizr/modernizr.custom.js"></script>
		<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/jquery/dist/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
		<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/js-storage/js.storage.js"></script>
		<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/js-cookie/src/js.cookie.js"></script>
		<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/pace/pace.js"></script>
		<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/metismenu/dist/metisMenu.js"></script>
		<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/switchery-npm/index.js"></script>
		<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
		<!-- ================== PAGE LEVEL VENDOR SCRIPTS ==================-->
		<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/chart.js/dist/Chart.bundle.min.js"></script>
		<!-- ================== GLOBAL APP SCRIPTS ==================-->
		<script src="<?php echo base_url(); ?>admin_plugin/assets/js/global/app.js"></script>
		<!-- ================== PAGE LEVEL SCRIPTS ==================-->
		<script src="<?php echo base_url(); ?>admin_plugin/assets/js/charts/chartjs-init.js"></script>
	</body>

	
<!-- Mirrored from www.authenticgoods.co/themes/quantum-pro/demos/demo7/charts.chartjs.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Oct 2018 08:15:19 GMT -->
</html>
