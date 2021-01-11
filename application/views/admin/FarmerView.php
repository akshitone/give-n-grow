<?php
if (!isset($this->session->userdata["loggedin"])) {
	redirect("/admin/LoginController/index");
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.authenticgoods.co/themes/quantum-pro/demos/demo7/pages.profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Oct 2018 08:12:00 GMT -->

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>GiveNGrow | Farmer View</title>
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
			<section class="page-content container-fluid">
				<div class="row">
					<div class="col-xl-3 col-lg-4">
						<div class="card">
							<div class="card-body">
								<div class="profile-card text-center">
									<?php foreach ($farmerData as $item) { ?>
										<div class="thumb-xl member-thumb m-b-10 center-block">
											<img src="<?php echo base_url(); ?>/uploads/farmer/<?php echo $item->FarmerIcon; ?>" style="height:300px; width:300px;" class="rounded-circle img-thumbnail" alt="profile-image">
										</div>

										<div class="">
											<h5 class="m-b-5"><?php echo $item->FarmerName; ?></h5>
											<p class="text-muted"><?php echo $item->FarmerCode; ?></p>
										</div>
										<ul class="list-reset text-left m-t-40">

											<li style="margin-bottom:10px;" class="text-muted"><strong>Mobile:</strong><span class="m-l-15"><?php echo $item->FarmerContact; ?></span></li>
											<li style="margin-bottom:10px;" class="text-muted"><strong>Aadhar no:</strong> <span class="m-l-15"><?php echo $item->AadharNumber; ?></span></li>
											<li style="margin-bottom:10px;" class="text-muted"><strong>Status:</strong> <span class="m-l-15"><?php
																																				if ($item->Status == "Y") { ?>
														<span class="badge badge-success">Approve</span>
													<?php
																																				} else { ?>
														<span class="badge badge-danger">Pending</span>
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
									<li class="nav-item" role="presentation"><a href="#profile-qrcode" class="nav-link active show" data-toggle="tab" aria-expanded="true">Bar Code</a></li>
									<li class="nav-item" role="presentation"><a href="#profile-storage" class="nav-link" data-toggle="tab" aria-expanded="true">Storage</a></li>
									<li class="nav-item" role="presentation"><a href="#profile-wallet" class="nav-link" data-toggle="tab" aria-expanded="true">Wallet</a></li>
								</ul>
							</div>
							<div class="card-body">
								<div class="tab-content">
									<div class="tab-pane fadeIn active" id="profile-qrcode">
										<div id="printableArea">
											<div>
												<div class="row">
													<div class="col-md-3">
														<img src="<?php echo base_url(); ?>/uploads/farmer/<?php echo $item->FarmerIcon; ?>" style="height:200px; width:200px;" class="rounded-circle img-thumbnail" alt="profile-image">
													</div>
													<div class="col-md-9">
														<h4 class="m-b-5"><strong>Farmer Name: <?php echo $item->FarmerName; ?></strong></h4>
														<h4 class="m-b-5"><strong>Contact: <?php echo $item->FarmerContact; ?></strong></h4><br>
														<img src='https://barcode.tec-it.com/barcode.ashx?data=<?php echo $item->FarmerCode; ?>&code=Code128&multiplebarcodes=false&translate-esc=false&unit=Fit&dpi=96&imagetype=Gif&rotation=0&color=%23000000&bgcolor=%23ffffff&qunit=Mm&quiet=0' alt='Barcode Generator TEC-IT' />
													</div>
												</div>
											</div>
										</div>
										<div class="profile-wrapper text-right">
											<button type="button" class="btn btn-info btn-rounded btn-floating" onClick="printDiv('printableArea')">Print</button>
										</div>

									</div>
									<div class="tab-pane fadeIn" id="profile-storage">
										<div class="card">
											<div class="card-body">
												<table id="bs4-table" class="table table-striped table-bordered" style="width:100%">
													<thead>
														<tr>

															<th>Sr.No.</th>
															<th>Agency Name</th>
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
																<td><a href="<?php echo base_url(); ?>index.php/admin/AgencyController/view/<?php echo str_replace("/", "-", $this->encryption->encrypt($item->AgencyId)); ?>"><?php echo $item->AgencyName; ?></a></td>
																<td><a href="<?php echo base_url(); ?>index.php/admin/ProductController/view/<?php echo str_replace("/", "-", $this->encryption->encrypt($item->ProductId)); ?>"><?php echo $item->ProductName; ?></a></td>
																<td><?php echo $item->ProductPrice; ?></td>
																<td><?php $date = date_create($item->AddedDate);
																	echo date_format($date, "d-m-Y"); ?></td>
																<td><?php echo $item->ProductType; ?></td>
																<td><?php echo $item->Weight; ?></td>
																<td><?php echo $item->TotalPayment; ?></td>
															</tr>
														<?php $c++;
														} ?>
													</tbody>
												</table>
											</div>
										</div>

									</div>
									<div class="tab-pane fadeIn" id="profile-wallet">
										<div class="col-md-12 col-lg-6 col-xl-3">
											<div class="card bg-primary" id="totalVisitsChart">
												<div class="card-body p-0">
													<h5 class="card-title border-none text-white p-l-20 p-t-20 m-b-0">Your Balance</h5>
													<div class="tab-pane fade show active" id="total-visits-tab-1" role="tabpanel" aria-labelledby="total-visits-tab-1">
														<span class="card-title text-white font-size-40 font-w-300 p-l-20 counter" data-count="3233">&#8377;&nbsp;<?php
																																									$totalBalance = $totalstorage[0]->TotalPayment - $totalwithdraw[0]->Amount;
																																									echo $totalBalance;
																																									?>
														</span>
													</div>
													<div class="ct-chart h-10"></div>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<h2 style="margin-bottom:20px;"><strong>Storage Table</strong></h2>
												<table class="table table-striped table-bordered" style="width:100%" id="bs4-table2">
													<thead>
														<tr>
															<th>Sr.No.</th>
															<th>Agency Name</th>
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
																<td><a href="<?php echo base_url(); ?>index.php/admin/AgencyController/view/<?php echo str_replace("/", "-", $this->encryption->encrypt($item->AgencyId)); ?>"><?php echo $item->AgencyName; ?></a></td>
																<td><a href="<?php echo base_url(); ?>index.php/admin/ProductController/view/<?php echo str_replace("/", "-", $this->encryption->encrypt($item->ProductId)); ?>"><?php echo $item->ProductName; ?></a></td>
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
										<div class="card">
											<div class="card-body">
												<h2 style="margin-bottom:20px;margin-top:30px;"><strong>Wallet Table</strong></h2>
												<table class="table table-striped table-bordered" style="width:100%" id="bs4-table1">
													<thead>
														<tr>
															<th>Sr.No.</th>
															<th>Amount</th>
															<th>Requested Date</th>
															<th>Remark</th>
															<th>Status</th>
														</tr>
													</thead>
													<tbody>
														<?php
														$c = 1;
														foreach ($withdrawreqData as $item) { ?>
															<tr>
																<td><?php echo $c; ?></td>
																<td>&#8377;<?php echo $item->Amount; ?></td>
																<td><?php $date = date_create($item->RequestedDateTime);
																	echo date_format($date, "d-m-Y"); ?></td>
																<td><?php echo $item->Remark; ?></td>
																<td><?php
																	if ($item->Status == "Y") { ?>
																		<span class="badge badge-success">Approve</span>
																	<?php
																	} else { ?>
																		<span class="badge badge-danger">Pending</span>
																	<?php
																	}
																	?>
																</td>
															</tr>
														<?php $c++;
														} ?>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>

	<!-- SIDEBAR QUICK PANNEL WRAPPER -->
	<aside class="sidebar sidebar-right">
		<div class="sidebar-content">
			<?php include 'include/footer.php'; ?>
		</div>
	</aside>
	<!-- END SIDEBAR QUICK PANNEL WRAPPER -->
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
	<script>
		function printDiv(printableArea) {
			var printContents = document.getElementById(printableArea).innerHTML;
			var originalContents = document.body.innerHTML;
			document.body.innerHTML = printContents;
			window.print();
			document.body.innerHTML = originalContents;
		}
	</script>

</body>

</html>