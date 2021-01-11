<?php
if (!isset($this->session->userdata["agencyloggedin"])) {
	redirect("/agency/AgencyLoginController/index");
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.authenticgoods.co/themes/quantum-pro/demos/demo7/pages.profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Oct 2018 08:12:00 GMT -->

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>GiveNGrow | Agency View</title>
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
	<!-- ======================= JAVA SCRIPT ===========================-->
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
	<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/datatables.net/js/jquery.dataTables.js"></script>
	<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.js"></script>
	<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/sweetalert2/dist/sweetalert2.min.js"></script>
	<!-- ================== GLOBAL APP SCRIPTS ==================-->
	<script src="<?php echo base_url(); ?>admin_plugin/assets/js/global/app.js"></script>
	<!-- ================== PAGE LEVEL COMPONENT SCRIPTS ==================-->
	<script src="<?php echo base_url(); ?>admin_plugin/assets/js/components/sweetalert2.js"></script>
	<script src="<?php echo base_url(); ?>admin_plugin/assets/js/components/datatables-init.js"></script>
</head>

<body class="content-menu">
	<div id="app">
		<?php include 'include/topbar.php'; ?>
		<?php include 'include/leftbar.php'; ?>
		<div class="content container-fluid">

			<section class="page-content container-fluid">
				<div class="row">
					<div class="col-xl-6" align="center">
						<a href="<?php echo base_url(); ?>index.php/agency/StorageController/add"><img src="<?php echo base_url(); ?>/uploads/purchase.png" width="400"></a>
					</div>
					<div class="col-xl-6" align="center">
						<a href="<?php echo base_url(); ?>index.php/agency/SellerController/add"><img src="<?php echo base_url(); ?>/uploads/sell.png" width="400"></a>
					</div>
				</div>
				<br><br>
				<div class="row">
					<div class="col-xl-3 col-lg-4">
						<div class="card">
							<div class="card-body">
								<div class="profile-card text-center">
									<?php foreach ($agencyData as $item) { ?>
										<div class="thumb-xl member-thumb m-b-10 center-block">
											<img src="<?php echo base_url(); ?>/uploads/agency/<?php echo $item->AgencyIcon; ?>" class="rounded-circle img-thumbnail" alt="profile-image">
										</div>
										<div class="">
											<h5 class="m-b-5"><?php echo $item->AgencyName; ?></h5>
											<p class="text-muted"><?php echo $item->AgencyUserName; ?></p>
										</div>
										<ul class="list-reset text-left m-t-40">

											<li style="margin-bottom:10px;" class="text-muted"><strong>Mobile:</strong><span class="m-l-15"><?php echo $item->AgencyContact; ?></span></li>
											<li style="margin-bottom:10px;" class="text-muted"><strong>Email:</strong> <span class="m-l-15"><?php echo $item->AgencyEmail; ?></span></li>
											<li class="text-muted"><strong>Active:</strong> <span class="m-l-15"><?php
																													if ($item->IsActive == "Y") { ?>
														<span class="badge badge-success">YES</span>
													<?php
																													} else { ?>
														<span class="badge badge-danger">NO</span>
													<?php
																													}
													?></span></li>
										<?php } ?>
										</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-9 col-lg-8">
						<div class="card card-tabs">
							<div class="card-header p-0 no-border">
								<ul class="nav nav-tabs primary-tabs p-l-30 m-0">
									<li class="nav-item" role="presentation"><a href="#profile-photos" class="nav-link active show" data-toggle="tab" aria-expanded="true">Purchase</a></li>
									<li class="nav-item" role="presentation"><a href="#profile-contacts" class="nav-link" data-toggle="tab" aria-expanded="true">Sell</a></li>
								</ul>
							</div>
							<div class="card-body">
								<div class="tab-content">
									<div class="tab-pane fadeIn active" id="profile-photos">
										<div class="card">
											<div class="card-body">
												<table id="bs4-table" class="table table-striped table-bordered" style="width:100%">
													<thead>
														<tr>
															<th>Sr.No.</th>
															<th>Farmer Name</th>
															<th>Product Name</th>
															<th>ProductPrice</th>
															<th>Purchase Date</th>
															<th>ProductType</th>
															<th>Weight</th>
															<th>TotalPayment</th>

														</tr>
													</thead>
													<tbody>
														<?php
														$c = 1;
														foreach ($storageData as $item) { ?>
															<tr>
																<td><?php echo $c; ?></td>
																<td><a href="<?php echo base_url(); ?>index.php/agency/FarmerController/view/<?php echo str_replace("/", "-", $this->encryption->encrypt($item->FarmerId)); ?>"><?php echo $item->FarmerName; ?></a></td>
																<td><a href="<?php echo base_url(); ?>index.php/agency/ProductController/view/<?php echo str_replace("/", "-", $this->encryption->encrypt($item->ProductId)); ?>"><?php echo $item->ProductName; ?></a></td>
																<td>&#8377;<?php echo $item->ProductPrice; ?></td>
																<td><?php $date = date_create($item->AddedDate);
																	echo date_format($date, "d-m-Y"); ?></td>
																<td><?php echo $item->ProductType; ?></td>
																<td><?php echo $item->Weight; ?></td>
																<td>&#8377;<?php echo $item->TotalPayment; ?></td>
															</tr>
														<?php $c++;
														} ?>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<div class="tab-pane fadeIn" id="profile-contacts">
										<div class="card">
											<div class="card-body">
												<table id="bs4-table1" class="table table-striped table-bordered" style="width:100%">
													<thead>
														<tr>
															<th>Sr.No.</th>
															<th>Buyer Name</th>
															<th>Product Name</th>
															<th>ProductPrice</th>
															<th>Sell Date</th>
															<th>ProductType</th>
															<th>Weight</th>
															<th>TotalPayment</th>

														</tr>
													</thead>
													<tbody>
														<?php
														$c = 1;
														foreach ($sellData as $item) { ?>
															<tr>
																<td><?php echo $c; ?></td>
																<td><a href="<?php echo base_url(); ?>index.php/agency/BuyerController/view/<?php echo str_replace("/", "-", $this->encryption->encrypt($item->BuyerId)); ?>"><?php echo $item->BuyerName; ?></a></td>
																<td><a href="<?php echo base_url(); ?>index.php/agency/ProductController/view/<?php echo str_replace("/", "-", $this->encryption->encrypt($item->ProductId)); ?>"><?php echo $item->ProductName; ?></a></td>
																<td>&#8377;<?php echo $item->ProductPrice; ?></td>
																<td><?php $date = date_create($item->AddedDate);
																	echo date_format($date, "d-m-Y"); ?></td>
																<td><?php echo $item->ProductType; ?></td>
																<td><?php echo $item->Weight; ?></td>
																<td>&#8377;<?php echo $item->TotalPayment; ?></td>
															</tr>
														<?php $c++;
														} ?>
													</tbody>
												</table>
											</div>
										</div>
									</div>

</body>

</html>