<?php
if (!isset($this->session->userdata["loggedin"])) {
	redirect("/admin/LoginController/index");
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.authenticgoods.co/themes/quantum-pro/demos/demo7/tables.data.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Oct 2018 08:16:01 GMT -->

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>GiveNGrow | Farmer Table</title>
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
	<!-- ======================= SWEET ALERT ===========================-->
	<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/sweetalert2/dist/sweetalert2.min.js"></script>

	<script type="text/javascript">
		function showdeletealert() {
			swal(
				'Deleted!',
				'Your data has been deleted.',
				'success'
			)
		}
	</script>
</head>

<body class="content-menu">
	<div id="app">
		<?php include 'include/topbar.php'; ?>
		<?php include 'include/leftbar.php'; ?>
		<div class="content container-fluid">
			<header class="page-header">
				<div class="d-flex align-items-center">
					<div class="mr-auto">
						<h1 class="separator">Farmer Data</h1>
						<nav class="breadcrumb-wrapper" aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index-2.html"><i class="icon dripicons-home"></i></a></li>
								<li class="breadcrumb-item"><a href="javascript:void(0)">Tables</a></li>
								<li class="breadcrumb-item active" aria-current="page">Farmer Data</li>
							</ol>
						</nav>
					</div>
				</div>
			</header>
			<?php
			if ($this->session->flashdata("delete")) {
				echo '<script type="text/javascript">' . 'showdeletealert();' . '</script>';
			}
			?>
			<section class="page-content container-fluid">
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-body">
								<table id="bs4-table" class="table table-striped table-bordered" style="width:100%">
									<thead>
										<tr>
											<th>Sr.No.</th>
											<th>BarCode</th>
											<th>FarmerName</th>
											<th>FarmerIcon</th>
											<th>Contact</th>
											<th>Registration Date</th>
											<th>Farmer Code</th>
											<th>Status</th>
											<th>Storage</th>
											<th>View</th>
											<th>Edit</th>
											<th>Delete</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$c = 1;
										foreach ($farmerData as $item) { ?>
											<tr>
												<td><?php echo $c; ?></td>
												<td><img src='https://barcode.tec-it.com/barcode.ashx?data=<?php echo $item->FarmerCode; ?>&code=Code128&multiplebarcodes=false&translate-esc=false&unit=Fit&dpi=96&imagetype=Gif&rotation=0&color=%23000000&bgcolor=%23ffffff&qunit=Mm&quiet=0' alt='Barcode Generator TEC-IT'/ width="70"></td>
												<td><?php echo $item->FarmerName; ?></td>
												<td><img src="<?php echo base_url(); ?>/uploads/farmer/<?php echo $item->FarmerIcon; ?>" style="height:75px; width:75px;" class="w-75 rounded-circle" /></td>
												<td><?php echo $item->FarmerContact; ?></td>
												<td><?php $date = date_create($item->RegistrationDate);
													echo date_format($date, "d-m-Y");
													?></td>
												<td><?php echo $item->FarmerCode; ?></td>
												<td><?php
													if ($item->Status == "Y") { ?>
														<a href="<?php echo base_url(); ?>index.php/admin/FarmerController/UpdateToNo/<?php echo str_replace("/", "-", $this->encryption->encrypt($item->FarmerId)); ?>"> <span class="badge badge-success">Approve</span></a>
													<?php
													} else if ($item->Status == "N") { ?>
														<a href="<?php echo base_url(); ?>index.php/admin/FarmerController/checkFarmer/<?php echo str_replace("/", "-", $this->encryption->encrypt($item->FarmerId)); ?>"><span class="badge badge-danger">Pending</span></a>
													<?php
													} else { ?>
														<span class="badge badge-danger">Rejected</span>
													<?php } ?>
												</td>
												<td><a href="<?php echo base_url(); ?>index.php/admin/FarmerController/viewCalender/<?php echo str_replace("/", "-", $this->encryption->encrypt($item->FarmerId)); ?>" class="btn btn-primary btn-rounded btn-floating btn-outline">Storage</a></td>
												<td><a href="<?php echo base_url(); ?>index.php/admin/FarmerController/view/<?php echo str_replace("/", "-", $this->encryption->encrypt($item->FarmerId)); ?>" class="btn btn-info btn-rounded btn-floating btn-outline">View</a></td>
												<td><a href="<?php echo base_url(); ?>index.php/admin/FarmerController/update/<?php echo str_replace("/", "-", $this->encryption->encrypt($item->FarmerId)); ?>" class="btn btn-warning btn-rounded btn-floating btn-outline">Edit</a></td>
												<td><a href="<?php echo base_url(); ?>index.php/admin/FarmerController/delete/<?php echo str_replace("/", "-", $this->encryption->encrypt($item->FarmerId)); ?>" class="btn btn-danger btn-rounded btn-floating btn-outline">Delete</a></td>
											</tr>
										<?php $c++;
										} ?>
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

		<!-- ================== GLOBAL APP SCRIPTS ==================-->
		<script src="<?php echo base_url(); ?>admin_plugin/assets/js/global/app.js"></script>
		<!-- ================== PAGE LEVEL COMPONENT SCRIPTS ==================-->
		<script src="<?php echo base_url(); ?>admin_plugin/assets/js/components/sweetalert2.js"></script>
		<script src="<?php echo base_url(); ?>admin_plugin/assets/js/components/datatables-init.js"></script>

</body>

</html>