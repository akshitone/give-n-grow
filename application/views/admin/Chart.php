<?php
if(!isset($this->session->userdata["loggedin"]))
{
	redirect("/admin/LoginController/index");
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.authenticgoods.co/themes/quantum-pro/demos/demo7/charts.chartjs.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Oct 2018 08:15:18 GMT -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>GiveNGrow | Chart</title>
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
								<h1 class="separator">Chart.js</h1>
								<nav class="breadcrumb-wrapper" aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="index-2.html"><i class="icon dripicons-home"></i></a></li>
										<li class="breadcrumb-item"><a href="javascript:void(0)">Charts</a></li>
										<li class="breadcrumb-item active" aria-current="page">Chart.js</li>
									</ol>
								</nav>
							</div>
						</div>
					</header>
					<section class="page-content container-fluid">
						
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
																	<?php include 'include/footer.php'; ?>
																	</div>
																</aside>
																<!-- END SIDEBAR QUICK PANNEL WRAPPER -->
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
		<script>
		// -----------------------------------------------------------------------------
// Title: Demo code for Chart.js
// Location: charts.chartjs.html
// IDs: #chartjs_lineChart,#chartjs_barChart,#chartjs_radarChart,#chartjs_polarChart,#chartjs_pieChart,#chartjs_doughnutChart
// Dependency File(s): assets/vendor/chart.js/dist/Chart.bundle.min.js
// -----------------------------------------------------------------------------

(function(window, document, $, undefined) {
	  "use strict";
	$(function() {



		if ($('#chartjs_pieChart').length) {
			var ctx = document.getElementById("chartjs_pieChart").getContext('2d');
			var myChart = new Chart(ctx, {
				type: 'pie',
				data: {
					labels: [
						<?php
						foreach($productData as $item)
						{
						?>
						"<?php echo $item->pname; ?>",
					<?php } ?>
					],
					datasets: [{
						backgroundColor: [
							<?php
						foreach($productData as $item)
						{
						?>
							"#<?php
							$randomString = md5($item->ProductId); // like "d73a6ef90dc6a ..."
							//echo $randomString;
							$r = substr($randomString,0,2); //1. and 2.
							$g = substr($randomString,2,2); //3. and 4.
							$b = substr($randomString,4,2);
							echo $r.$g.$b;
							?>",

							<?php } ?>
						],
						data: [
							<?php
						foreach($productData as $item)
						{
						?>
						
						<?php echo $item->TotalWeight; ?>,

						<?php } ?>
						]
					}]
				}
			});
		}


		if ($('#chartjs_doughnutChart').length) {
			var ctx = document.getElementById("chartjs_doughnutChart").getContext('2d');
			var myChart = new Chart(ctx, {
				type: 'doughnut',
				data: {
					labels: [
						<?php
						foreach($productData as $item)
						{
						?>
						"<?php echo $item->pname; ?>",
					<?php } ?>
					],
					datasets: [{
						backgroundColor: [
							<?php
						foreach($productData as $item)
						{
						?>
							"#<?php
							$randomString = md5($item->ProductId); // like "d73a6ef90dc6a ..."
							//echo $randomString;
							$r = substr($randomString,30,2); //1. and 2.
							$g = substr($randomString,25,2); //3. and 4.
							$b = substr($randomString,5,2);
							echo $r.$g.$b;
							?>",

							<?php } ?>
						],
						data: [
							<?php
						foreach($productData as $item)
						{
						?>
						
						<?php echo $item->TotalWeight; ?>,

						<?php } ?>
						]
					}]
				}
			});
		}


	});

})(window, document, window.jQuery);
</script>
	</body>

	
<!-- Mirrored from www.authenticgoods.co/themes/quantum-pro/demos/demo7/charts.chartjs.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Oct 2018 08:15:19 GMT -->
</html>
