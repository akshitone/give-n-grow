<?php
if (!isset($this->session->userdata["agencyloggedin"])) {
	redirect("/agency/AgencyLoginController/index");
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.authenticgoods.co/themes/quantum-pro/demos/demo7/tables.data.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Oct 2018 08:16:01 GMT -->

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>GiveNGrow | Purchase Table</title>
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
	<!-- ======================= PAGE LEVEL VENDOR STYLES ============================-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>admin_plugin/assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.css">
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
	<!-- CONTENT WRAPPER -->
	<div id="app">
		<?php include 'include/topbar.php'; ?>

		<?php include 'include/leftbar.php'; ?>
		<div class="content container-fluid">
			<header class="page-header">
				<div class="d-flex align-items-center">
					<div class="mr-auto">
						<h1 class="separator">Storage Data</h1>
						<nav class="breadcrumb-wrapper" aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index-2.html"><i class="icon dripicons-home"></i></a></li>
								<li class="breadcrumb-item"><a href="javascript:void(0)">Tables</a></li>
								<li class="breadcrumb-item active" aria-current="page">Storage Data</li>
							</ol>
						</nav>
					</div>
					<ul class="actions top-right">
						<li class="dropdown">
							<a href="javascript:void(0)" class="btn btn-fab" data-toggle="dropdown" aria-expanded="false">
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
				<div class="card">
					<h5 class="card-header">Bootstrap Date Picker</h5>
					<div class="card-body">
						<form class="picker-form">
							<div class="form-group row">
								<label class="col-form-label col-lg-3">Start Date</label>
								<div class="col-md-3">
									<input type="date" name="txtstartdate" class="form-control input-rounded" placeholder="dd/mm/yyyy">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-form-label col-lg-3">End Date</label>
								<div class="col-md-3">
									<input type="date" name="txtenddate" class="form-control input-rounded" placeholder="dd/mm/yyyy">
								</div>
							</div>
					</div>
					<div class="card-footer bg-light">
						<div class="form-actions">
							<div class="row">
								<div class="col-md-12">
									<div class="row">
										<div class="offset-sm-3 col-md-5">
											<button type="submit" name="btnsubmit" class="btn btn-success btn-rounded btn-floating">Submit</button>
											<button class="btn btn-secondary clear-form btn-rounded btn-outline">Cancel</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					</form>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-body">
								<table id="bs4-table" class="table table-striped table-bordered" style="width:100%">
									<thead>
										<tr>
											<th>StorageId</th>
											<th>Agency Name</th>
											<th>Farmer Name</th>
											<th>Product Name</th>
											<th>ProductPrice</th>
											<th>AddedDate</th>
											<th>ProductType</th>
											<th>Weight</th>
											<th>TotalPayment</th>
											<th>Status</th>
											<th>Delete</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($storageData as $item) { ?>
											<tr>
												<td><?php echo $item->StorageId; ?></td>
												<td><?php echo $item->AgencyName; ?></td>
												<td><?php echo $item->FarmerName; ?></td>
												<td><?php echo $item->ProductName; ?></td>
												<td><?php echo $item->ProductPrice; ?></td>
												<td><?php echo $item->AddedDate; ?></td>
												<td><?php echo $item->ProductType; ?></td>
												<td><?php echo $item->Weight; ?></td>
												<td><?php echo $item->TotalPayment; ?></td>
												<td><?php
													if ($item->Status == "Y") { ?>
														<span class="badge badge-success">Approve</span>
													<?php
													} else { ?>
														<span class="badge badge-danger">Pending</span>
													<?php
													}
													?></td>
												<td><a href="<?php echo base_url(); ?>index.php/agency/StorageController/delete/<?php echo str_replace("/", "-", $this->encryption->encrypt($item->StorageId)); ?>" class="btn btn-danger btn-rounded btn-floating btn-outline">Delete</a></td>
											</tr>
										<?php } ?>
									</tbody>
									<tfoot>

									</tfoot>
								</table>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
</body>

</html>