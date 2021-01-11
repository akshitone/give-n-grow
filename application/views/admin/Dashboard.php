<?php
if (!isset($this->session->userdata["loggedin"])) {
	redirect("/admin/LoginController/index");
}
?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from www.authenticgoods.co/themes/quantum-pro/demos/demo7/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Oct 2018 08:08:41 GMT -->

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>GiveNGrow | Dashboard</title>
	<!-- ================== GOOGLE FONTS ==================-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet">
	<!-- ======================= GLOBAL VENDOR STYLES ========================-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>admin_plugin/assets/css/vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>admin_plugin/assets/vendor/metismenu/dist/metisMenu.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>admin_plugin/assets/vendor/switchery-npm/index.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>admin_plugin/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
	<!-- ======================= LINE AWESOME ICONS ===========================-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>admin_plugin/assets/css/icons/line-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>admin_plugin/assets/css/icons/simple-line-icons.css">
	<!-- ======================= DRIP ICONS ===================================-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>admin_plugin/assets/css/icons/dripicons.min.css">
	<!-- ======================= MATERIAL DESIGN ICONIC FONTS =================-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>admin_plugin/assets/css/icons/material-design-iconic-font.min.css">
	<!-- ======================= PAGE VENDOR STYLES ===========================-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>admin_plugin/assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.css">
	<!-- ======================= GLOBAL COMMON STYLES ============================-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>admin_plugin/assets/css/common/main.bundle.css">
	<!-- ======================= LAYOUT TYPE ===========================-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>admin_plugin/assets/css/layouts/vertical/core/main.css">
	<!-- ======================= MENU TYPE ===========================-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>admin_plugin/assets/css/layouts/vertical/menu-type/content.css">
	<!-- ======================= THEME COLOR STYLES ===========================-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>admin_plugin/assets/css/layouts/vertical/themes/theme-i.css">
</head>

<body class="content-menu">
	<!-- CONTENT WRAPPER -->
	<div id="app">
		<?php include 'include/topbar.php'; ?>

		<?php include 'include/leftbar.php'; ?>
		<div class="content-wrapper">

			<div class="content container-fluid">
				<!--START PAGE HEADER -->
				<header class="page-header">
					<div class="d-flex align-items-center">
						<div class="mr-auto">
							<h1>Dashboard</h1>
						</div>

					</div>
				</header>
				<!--END PAGE HEADER -->
				<!--START PAGE CONTENT -->
				<section class="page-content container-fluid">
					<div class="row" align="center">
						<div class="col-12">
							<div class="card">
								<div class="row m-0 col-border-xl">
									<div class="col-md-12 col-lg-6 col-xl-4">
										<div class="card-body">
											<div class="icon-rounded icon-rounded-primary float-left m-r-20">
												<i class="icon zmdi zmdi-store zmdi-hc-fw"></i>
											</div>
											<h5 class="card-title m-b-5 counter"><?php echo $totalAgency[0]->totalagency; ?></h5>
											<h6 class="text-muted m-t-10">
												Active AGENCY
											</h6>
										</div>
									</div>
									<div class="col-md-12 col-lg-6 col-xl-4">
										<div class="card-body">
											<div class="icon-rounded icon-rounded-accent float-left m-r-20">
												<i class="icon zmdi zmdi-walk zmdi-hc-fw"></i>
											</div>
											<h5 class="card-title m-b-5 counter"><?php echo $totalFarmer[0]->totalfarmer; ?></h5>
											<h6 class="text-muted m-t-10">
												Active FARMER
											</h6>
										</div>
									</div>
									<div class="col-md-12 col-lg-6 col-xl-4">
										<div class="card-body">
											<div class="icon-rounded icon-rounded-info float-left m-r-20">
												<i class="icon zmdi zmdi-graduation-cap zmdi-hc-fw"></i>
											</div>
											<h5 class="card-title m-b-5 counter"><?php echo $totalExpert[0]->totalexpert; ?></h5>
											<h6 class="text-muted m-t-10">
												Active EXPERT
											</h6>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xl-7 col-xxl-9">
							<div class="card">
								<h5 class="card-header">
									Monthly budget
								</h5>
								<div class="card-body">
									<div id="monthly-budget">
										<div id="monthly-budget-content" style="height: 350px">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-5 col-xxl-3">
							<div class="card">
								<h5 class="card-header">Recent Notifications
								</h5>

								<div class="card-body">
									<?php
									$result = $this->db->query("select * from tbl_notification where AgencyId IS NULL and ExpertId IS NULL and FarmerId IS NULL ORDER BY NotificationDate DESC limit 6");
									$notificationData = $result->result();
									foreach ($notificationData as $item) {
										if ($item->Title == "Farmer Added") {
									?>
											<div class="timeline timeline-border">
												<div class="timeline-list timeline-border timeline-primary">
													<div class="timeline-info">
														<div class="d-inline-block"><?php echo $item->Title; ?></div>
														<small class="float-right text-muted"><?php $date = date_create($item->NotificationDate);
																								echo date_format($date, "d-M h:i:sA"); ?></small>
													</div>
												</div>
											</div>
										<?php } elseif ($item->Title == "Stock Added") {
										?>
											<div class="timeline timeline-border">
												<div class="timeline-list timeline-border timeline-accent">
													<div class="timeline-info">
														<div class="d-inline-block"><?php echo $item->Title; ?></div>
														<small class="float-right text-muted"><?php $date = date_create($item->NotificationDate);
																								echo date_format($date, "d-M h:i:sA"); ?></small>
													</div>
												</div>
											</div>
										<?php } elseif ($item->Title == "Stock Selling") {
										?>
											<div class="timeline timeline-border">
												<div class="timeline-list timeline-border timeline-success">
													<div class="timeline-info">
														<div class="d-inline-block"><?php echo $item->Title; ?></div>
														<small class="float-right text-muted"><?php $date = date_create($item->NotificationDate);
																								echo date_format($date, "d-M h:i:sA"); ?></small>
													</div>
												</div>
											</div>
										<?php } elseif ($item->Title == "Product Added") {
										?>
											<div class="timeline timeline-border">
												<div class="timeline-list timeline-border timeline-info">
													<div class="timeline-info">
														<div class="d-inline-block"><?php echo $item->Title; ?></div>
														<small class="float-right text-muted"><?php $date = date_create($item->NotificationDate);
																								echo date_format($date, "d-M h:i:sA"); ?></small>
													</div>
												</div>
											</div>
										<?php } elseif ($item->Title == "Withdraw Request") {
										?>
											<div class="timeline timeline-border">
												<div class="timeline-list timeline-border timeline-warning">
													<div class="timeline-info">
														<div class="d-inline-block"><?php echo $item->Title; ?></div>
														<small class="float-right text-muted"><?php $date = date_create($item->NotificationDate);
																								echo date_format($date, "d-M h:i:sA"); ?></small>
													</div>
												</div>
											</div>
										<?php } else { ?>
											<div class="timeline timeline-border">
												<div class="timeline-list">
													<div class="timeline-info">
														<div class="d-inline-block"><?php echo $item->Title; ?></div>
														<small class="float-right text-muted"><?php $date = date_create($item->NotificationDate);
																								echo date_format($date, "d-m-Y h:i:sA"); ?></small>
													</div>
												</div>
											</div>
									<?php }
									} ?>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="page-content container-fluid">
					<div class="row">
						<div class="col-lg-12 col-xl-12">
							<div class="card">
								<div class="card-header"><span class="m-t-10 d-inline-block">Employee Report</span>
									<ul class="nav nav-pills nav-pills-primary float-right" id="pills-demo-sales" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" id="pills-month-tab" data-toggle="tab" href="#sales-month-tab" role="tab">Purchase</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="pills-year-tab" data-toggle="tab" href="#sales-year-tab" role="tab">Selling</a>
										</li>
										<li><a href="javascript:void(0)" data-q-action="card-expand"><i class="icon dripicons-expand-2"></i></a></li>
									</ul>
								</div>
								<div class="card-body p-0">
									<div class="tab-content" id="pills-tabContent-sales">
										<div class="tab-pane fade show active" id="sales-month-tab" role="tabpanel" aria-labelledby="sales-month-tab">
											<table class="table table-striped table-bordered" style="width:100%">
												<thead>
													<tr>
														<th>Agency Name</th>
														<th>Farmer Name</th>
														<th>Product Name</th>
														<th>Purchase Date</th>
														<th>TotalPayment</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach ($purchaseData as $item) { ?>
														<tr>
															<td><a href="<?php echo base_url(); ?>index.php/admin/AgencyController/view/<?php echo str_replace("/", "-", $this->encryption->encrypt($item->AgencyId)); ?>"><?php echo $item->AgencyName; ?></a></td>
															<td><a href="<?php echo base_url(); ?>index.php/admin/FarmerController/view/<?php echo str_replace("/", "-", $this->encryption->encrypt($item->FarmerId)); ?>"><?php echo $item->FarmerName; ?></a></td>
															<td><a href="<?php echo base_url(); ?>index.php/admin/ProductController/view/<?php echo str_replace("/", "-", $this->encryption->encrypt($item->ProductId)); ?>"><?php echo $item->ProductName; ?></a></td>
															<td><?php $date = date_create($item->AddedDate);
																echo date_format($date, "d-m-Y"); ?></td>
															<td>&#8377;<?php echo $item->TotalPayment; ?></td>
														</tr>
													<?php } ?>
												</tbody>
											</table>
										</div>
										<div class="tab-pane fade" id="sales-year-tab" role="tabpanel" aria-labelledby="sales-year-tab">
											<table class="table table-striped table-bordered" style="width:100%">
												<thead>
													<tr>
														<th>Agency Name</th>
														<th>Buyer Name</th>
														<th>Product Name</th>
														<th>Sell Date</th>
														<th>TotalPayment</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach ($sellerData as $item) { ?>
														<tr>
															<td><a href="<?php echo base_url(); ?>index.php/admin/AgencyController/view/<?php echo str_replace("/", "-", $this->encryption->encrypt($item->AgencyId)); ?>"><?php echo $item->AgencyName; ?></a></td>
															<td><a href="<?php echo base_url(); ?>index.php/admin/BuyerController/view/<?php echo str_replace("/", "-", $this->encryption->encrypt($item->BuyerId)); ?>"><?php echo $item->BuyerName; ?></a></td>
															<td><a href="<?php echo base_url(); ?>index.php/admin/ProductController/view/<?php echo str_replace("/", "-", $this->encryption->encrypt($item->ProductId)); ?>"><?php echo $item->ProductName; ?></a></td>
															<td><?php $date = date_create($item->AddedDate);
																echo date_format($date, "d-m-Y"); ?></td>
															<td>&#8377;<?php echo $item->TotalPayment; ?></td>
														</tr>
													<?php } ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!--END PAGE CONTENT -->
			</div>
			<!-- SIDEBAR QUICK PANNEL WRAPPER -->
			<aside class="sidebar sidebar-right">
				<div class="sidebar-content">
					<?php include 'include/footer.php'; ?>
				</div>
			</aside>
			<!-- END SIDEBAR QUICK PANNEL WRAPPER -->
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
		<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/countup.js/dist/countUp.min.js"></script>
		<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/chart.js/dist/Chart.bundle.min.js"></script>
		<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/flot/jquery.flot.js"></script>
		<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/jquery.flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
		<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/flot/jquery.flot.resize.js"></script>
		<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/flot/jquery.flot.time.js"></script>
		<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/flot.curvedlines/curvedLines.js"></script>
		<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/datatables.net/js/jquery.dataTables.js"></script>
		<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/datatables.net/js/jquery.dataTables.js"></script>
		<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.js"></script>
		<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.js"></script>
		<!-- ================== GLOBAL APP SCRIPTS ==================-->
		<script src="<?php echo base_url(); ?>admin_plugin/assets/js/global/app.js"></script>
		<!-- ================== PAGE LEVEL SCRIPTS ==================-->
		<script src="<?php echo base_url(); ?>admin_plugin/assets/js/components/countUp-init.js"></script>
		<script src="<?php echo base_url(); ?>admin_plugin/assets/js/cards/counter-group.js"></script>
		<script src="<?php echo base_url(); ?>admin_plugin/assets/js/cards/recent-transactions.js"></script>
		<script src="<?php echo base_url(); ?>admin_plugin/assets/js/cards/monthly-budget.js"></script>
		<script src="<?php echo base_url(); ?>admin_plugin/assets/js/cards/users-chart.js"></script>
		<script src="<?php echo base_url(); ?>admin_plugin/assets/js/cards/bounce-rate-chart.js"></script>
		<script src="<?php echo base_url(); ?>admin_plugin/assets/js/cards/session-duration-chart.js"></script>




		<script>
			$(function() {
				document.onkeyup = function(e) {

					var e = e || window.event; // for IE to cover IEs window event-object
					if (e.altKey && (e.which == 65 || e.which == 97)) {
						window.location = '<?php echo base_url(); ?>index.php/admin/DashboardController/index';
						return false;
					}
				};

				var data7_1 = [
					[1, <?php $result = $this->db->query("select IFNULL(sum(TotalPayment),0) as TotalPayment from tbl_seller where DATE_FORMAT(AddedDate,'%m')='01'");
						echo $result->result()[0]->TotalPayment ?>],
					[2, <?php $result = $this->db->query("select IFNULL(sum(TotalPayment),0) as TotalPayment from tbl_seller where DATE_FORMAT(AddedDate,'%m')='02'");
						echo $result->result()[0]->TotalPayment ?>],
					[3, <?php $result = $this->db->query("select IFNULL(sum(TotalPayment),0) as TotalPayment from tbl_seller where DATE_FORMAT(AddedDate,'%m')='03'");
						echo $result->result()[0]->TotalPayment ?>],
					[4, <?php $result = $this->db->query("select IFNULL(sum(TotalPayment),0) as TotalPayment from tbl_seller where DATE_FORMAT(AddedDate,'%m')='04'");
						echo $result->result()[0]->TotalPayment ?>],
					[5, <?php $result = $this->db->query("select IFNULL(sum(TotalPayment),0) as TotalPayment from tbl_seller where DATE_FORMAT(AddedDate,'%m')='05'");
						echo $result->result()[0]->TotalPayment ?>],
					[6, <?php $result = $this->db->query("select IFNULL(sum(TotalPayment),0) as TotalPayment from tbl_seller where DATE_FORMAT(AddedDate,'%m')='06'");
						echo $result->result()[0]->TotalPayment ?>],
					[7, <?php $result = $this->db->query("select IFNULL(sum(TotalPayment),0) as TotalPayment from tbl_seller where DATE_FORMAT(AddedDate,'%m')='07'");
						echo $result->result()[0]->TotalPayment ?>],
					[8, <?php $result = $this->db->query("select IFNULL(sum(TotalPayment),0) as TotalPayment from tbl_seller where DATE_FORMAT(AddedDate,'%m')='08'");
						echo $result->result()[0]->TotalPayment ?>],
					[9, <?php $result = $this->db->query("select IFNULL(sum(TotalPayment),0) as TotalPayment from tbl_seller where DATE_FORMAT(AddedDate,'%m')='09'");
						echo $result->result()[0]->TotalPayment ?>],
					[10, <?php $result = $this->db->query("select IFNULL(sum(TotalPayment),0) as TotalPayment from tbl_seller where DATE_FORMAT(AddedDate,'%m')='10'");
							echo $result->result()[0]->TotalPayment ?>],
					[11, <?php $result = $this->db->query("select IFNULL(sum(TotalPayment),0) as TotalPayment from tbl_seller where DATE_FORMAT(AddedDate,'%m')='11'");
							echo $result->result()[0]->TotalPayment ?>],
					[12, <?php $result = $this->db->query("select IFNULL(sum(TotalPayment),0) as TotalPayment from tbl_seller where DATE_FORMAT(AddedDate,'%m')='12'");
							echo $result->result()[0]->TotalPayment ?>],
				];
				var data7_2 = [
					[1, <?php $result = $this->db->query("select IFNULL(sum(TotalPayment),0) as TotalPayment from tbl_storage where DATE_FORMAT(AddedDate,'%m')='01'");
						echo $result->result()[0]->TotalPayment ?>],
					[2, <?php $result = $this->db->query("select IFNULL(sum(TotalPayment),0) as TotalPayment from tbl_storage where DATE_FORMAT(AddedDate,'%m')='02'");
						echo $result->result()[0]->TotalPayment ?>],
					[3, <?php $result = $this->db->query("select IFNULL(sum(TotalPayment),0) as TotalPayment from tbl_storage where DATE_FORMAT(AddedDate,'%m')='03'");
						echo $result->result()[0]->TotalPayment ?>],
					[4, <?php $result = $this->db->query("select IFNULL(sum(TotalPayment),0) as TotalPayment from tbl_storage where DATE_FORMAT(AddedDate,'%m')='04'");
						echo $result->result()[0]->TotalPayment ?>],
					[5, <?php $result = $this->db->query("select IFNULL(sum(TotalPayment),0) as TotalPayment from tbl_storage where DATE_FORMAT(AddedDate,'%m')='05'");
						echo $result->result()[0]->TotalPayment ?>],
					[6, <?php $result = $this->db->query("select IFNULL(sum(TotalPayment),0) as TotalPayment from tbl_storage where DATE_FORMAT(AddedDate,'%m')='06'");
						echo $result->result()[0]->TotalPayment ?>],
					[7, <?php $result = $this->db->query("select IFNULL(sum(TotalPayment),0) as TotalPayment from tbl_storage where DATE_FORMAT(AddedDate,'%m')='07'");
						echo $result->result()[0]->TotalPayment ?>],
					[8, <?php $result = $this->db->query("select IFNULL(sum(TotalPayment),0) as TotalPayment from tbl_storage where DATE_FORMAT(AddedDate,'%m')='08'");
						echo $result->result()[0]->TotalPayment ?>],
					[9, <?php $result = $this->db->query("select IFNULL(sum(TotalPayment),0) as TotalPayment from tbl_storage where DATE_FORMAT(AddedDate,'%m')='09'");
						echo $result->result()[0]->TotalPayment ?>],
					[10, <?php $result = $this->db->query("select IFNULL(sum(TotalPayment),0) as TotalPayment from tbl_storage where DATE_FORMAT(AddedDate,'%m')='10'");
							echo $result->result()[0]->TotalPayment ?>],
					[11, <?php $result = $this->db->query("select IFNULL(sum(TotalPayment),0) as TotalPayment from tbl_storage where DATE_FORMAT(AddedDate,'%m')='11'");
							echo $result->result()[0]->TotalPayment ?>],
					[12, <?php $result = $this->db->query("select IFNULL(sum(TotalPayment),0) as TotalPayment from tbl_storage where DATE_FORMAT(AddedDate,'%m')='12'");
							echo $result->result()[0]->TotalPayment ?>],
				];

				$.plot($("#monthly-budget #monthly-budget-content"), [{
					data: data7_1,
					label: "Selling",
					points: {
						show: false
					},
					curvedLines: {
						apply: true
					},
					lines: {
						fill: true
					}
				}, {
					data: data7_2,
					label: "Purchase",
					points: {
						show: false
					},
					lines: {
						show: true
					},
					yaxis: 2
				}], {
					series: {
						lines: {
							show: true,
							fill: true
						},
						curvedLines: {
							apply: true,
							monotonicFit: true,
							active: true
						},
						points: {
							show: true,
							lineWidth: 2,
							fill: true,
							fillColor: "#ffffff",
							symbol: "circle",
							radius: 5
						},
						shadowSize: 0
					},
					grid: {
						hoverable: true,
						clickable: true,
						tickColor: "#e5ebf8",
						borderWidth: 1,
						borderColor: "#e5ebf8"
					},
					colors: [QuantumPro.APP_COLORS.accent, QuantumPro.APP_COLORS.primary],
					tooltip: true,
					tooltipOpts: {
						defaultTheme: false
					},
					xaxis: {
						ticks: [
							[1, "Jan"],
							[2, "Feb"],
							[3, "Mar"],
							[4, "Apr"],
							[5, "May"],
							[6, "Jun"],
							[7, "Jul"],
							[8, "Aug"],
							[9, "Sep"],
							[10, "Oct"],
							[11, "Nov"],
							[12, "Dec"]
						]
					},
					yaxes: [{}, {
						position: "right" /* left or right */
					}]
				});
			});
		</script>
</body>

</html>