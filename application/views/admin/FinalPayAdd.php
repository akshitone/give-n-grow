<?php
if(!isset($this->session->userdata["loggedin"]))
{
	redirect("/admin/LoginController/index");
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.authenticgoods.co/themes/quantum-pro/demos/demo7/forms.form-groups.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Oct 2018 08:15:35 GMT -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>GiveNGrow | Final Payment Add</title>
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
	<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/sweetalert2/dist/sweetalert2.min.js"></script>
</head>
<body class="content-menu">
	<div id="app">
		<?php include 'include/topbar.php'; ?>
		<?php include 'include/leftbar.php'; ?>
				<div class="content container-fluid">
					<header class="page-header">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h1 class="separator">Final Payment Inputs</h1>
								<nav class="breadcrumb-wrapper" aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="index-2.html"><i class="icon dripicons-home"></i></a></li>
										<li class="breadcrumb-item"><a href="javascript:void(0)">Forms</a></li>
										<li class="breadcrumb-item active" aria-current="page">Final Payment Inputs</li>
									</ol>
								</nav>
							</div>
						</div>
					</header>
					<section class="page-content container-fluid">
						<div class="row">
							<div class="col">
								<div class="card">
									<div class="card-body">
										<form method="post" id="FinalPaymentForm" action="<?php echo base_url(); ?>index.php/admin/FinalPayController/insertData" class="form-horizontal">
											<?php
												if(isset($_REQUEST["btnsubmit"]))
												{
													if($this->session->flashdata("add"))
													{
														$msg = $this->session->flashdata("add");
														echo "<script>swal({
																position: 'center',
																type: 'success',
																title: '$msg',
																showConfirmButton: false,
																timer: 1500
															  })</script>";
													}
												}
											?>
											<div class="form-body">
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Request Id</label>
													<div class="col-md-5">
								<?php
									foreach($withdrawreqFarmerData as $item)
									{
								?>
														<input id="txtrequestid" type="text" name="txtrequestid" placeholder="Enter Amount" class="form-control input-rounded" autocomplete="family-name" readonly="readonly" value="<?php echo $item->RequestId; ?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Amount</label>
													<div class="col-md-5">
														<input type="text" id="txtamt" name="txtamt" value="<?php echo $item->Amount; ?>" placeholder="Withdraw amount" class="form-control input-rounded" readonly="readonly" autocomplete="family-name">
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Remark</label>
													<div class="col-md-5">
														<textarea id="txtremark" name="txtremark" readonly="readonly" placeholder="Enter Remark" class="form-control input-rounded"><?php echo $item->Remark; ?></textarea>
								<?php } ?>
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Transaction No.</label>
													<div class="col-md-5">
														<input type="text" id="txttransactionno" name="txttransactionno" placeholder="Transaction no." class="form-control input-rounded" autocomplete="family-name">
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Payment Type</label>
													<div class="col-md-5">
														<select id="txtpaymenttype" name="txtpaymenttype" class="form-control input-rounded">
															<option>Select Type</option>
															<option value="Cheque">Cheque</option>
															<option value="RTGS">RTGS</option>
															<option value="NEFT">NEFT</option>
														</select>
													</div>
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
									</div>
								</div>
							</div>	
						</form>
					</div>
					</section>
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
		<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/modernizr/modernizr.custom.js"></script>
		<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/jquery/dist/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>validation/jquery.validate.js"></script>
		<script src="<?php echo base_url(); ?>validation/additional-methods.min.js"></script>
		<script>

			$("#FinalPaymentForm").validate({
                
				rules: {
					txtrequestid:{min:1},
					txtamt: "required",
					txtremark: "required",
					txttransactionno: "required"
				},
				messages: {
					txtrequestid: {min:"Request Id is required"},
					txtamt: "Amount is required",
					txtremark: "Enter Remark",
					txttransactionno: "Transaction number is required",
					txtpaymenttype: {min:"Enter Payment type"}
				}
			});

		
		$("#btninsert").on("click", function() {
                    if (!$("#FinalPaymentForm").valid()) {
                        return false;
                    }
                });


		</script>
</body>
</html>
