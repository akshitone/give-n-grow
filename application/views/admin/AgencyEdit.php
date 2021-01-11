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
	<title>GiveNGrow | Agency Edit</title>
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
	<div id="app">
		<?php include 'include/topbar.php'; ?>
		<?php include 'include/leftbar.php'; ?>
				<div class="content container-fluid">
					<header class="page-header">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h1 class="separator">Agency Edit</h1>
								<nav class="breadcrumb-wrapper" aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="index-2.html"><i class="icon dripicons-home"></i></a></li>
										<li class="breadcrumb-item"><a href="javascript:void(0)">Forms</a></li>
										<li class="breadcrumb-item active" aria-current="page">Agency Edit</li>
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
										<form method="post" id="AgencyForm" action="<?php echo base_url(); ?>index.php/admin/AgencyController/updateData" enctype="multipart/form-data" class="form-horizontal">
										<?php foreach($agencyData as $item) { ?>
											<div class="form-body">
														<input type="hidden" name="txtagencyid" value="<?php echo $item->AgencyId; ?>"/>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Agency Name</label>
													<div class="col-md-5">
														<input type="text" id="txtagencyname" name="txtagencyname" value="<?php echo $item->AgencyName; ?>" placeholder="Agency name" class="form-control input-rounded" autocomplete="given-name">
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">AgencyIcon</label>
													<div class="col-md-5">
														<div class="custom-file">
															<input type="file" id="txtagencyicon" name="txtagencyicon" class="custom-file-input" / >
															<label class="custom-file-label" for="validatedCustomFile"><?php echo $item->AgencyIcon; ?></label>
															<div class="invalid-feedback">Example custom file feedback</div>
														</div>
													</div>
													<img src="<?php echo base_url(); ?>/uploads/agency/<?php echo $item->AgencyIcon; ?>" style="height:75px; width:75px;" class="w-75 rounded-circle"/>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Contact</label>
													<div class="col-md-5">
														<input type="text" id="txtagencycontact" name="txtagencycontact" value="<?php echo $item->AgencyContact; ?>" placeholder="Agency contact no" class="form-control input-rounded" autocomplete="family-name">
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Email</label>
													<div class="col-md-5">
														<input type="text" id="txtagencyemail" name="txtagencyemail" value="<?php echo $item->AgencyEmail; ?>" placeholder="Agency email address" class="form-control input-rounded" autocomplete="email">
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Agency Code</label>
													<div class="col-md-5">
														<input type="text" id="txtagencycode" name="txtagencycode" value="<?php echo $item->AgencyCode; ?>" placeholder="Agency code" class="form-control input-rounded" autocomplete="family-name">
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Username</label>
													<div class="col-md-5">
														<input type="text" id="txtagencyusername" name="txtagencyusername" value="<?php echo $item->AgencyUserName; ?>" placeholder="Your username" class="form-control input-rounded" autocomplete="family-name">
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Password</label>
													<div class="col-md-5">
													<input type="password" id="txtagencypassword" name="txtagencypassword" value="<?php echo $item->Password; ?>" class="form-control input-rounded" id="exampleInputPassword1" autocomplete="current-password" placeholder="Password">
													</div>
												</div>
											<?php } ?>
										</div>
										</div>
										<div class="card-footer bg-light">
											<div class="form-actions">
												<div class="row">
													<div class="col-md-12">
														<div class="row">
															<div class="offset-sm-3 col-md-5">
																<button id="btnupdate" type="submit" name="btnupdate" class="btn btn-primary btn-rounded">Update</button>
																<button type="reset" class="btn btn-secondary clear-form btn-rounded btn-outline">Cancel</button>
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
		<script src="<?php echo base_url(); ?>validation/jquery.validate.js"></script>
		<script src="<?php echo base_url(); ?>validation/additional-methods.min.js"></script>
		<script>

			$("#AgencyForm").validate({
                
				rules: {
					txtagencyname: "required",
					txtagencyicon : {
						 extension:"jpg,png,jpeg,gif"
					},
					txtagencycontact: {
									required:true,
									minlength:10,
									maxlength:10,
									number:true
					},
					txtagencyemail:{
									 required:true,
									 email:true
									},
					txtagencycode: {
									required:true,
									maxlength:10,
									number:true
					},
					txtagencyusername: "required",
					txtagencypassword: {
									required:true,
									minlength:6,
									maxlength:15
					}
				},
				messages: {
					txtagencyname: "Agency Name is required",
					txtagencyicon : {
						 extension:"select image file extension like jpg,png,jpeg,gif"
					},
					txtagencycontact: { 
							required:"Contact Number is required",
							minlength:"Contact Number must be 10 digit",
							maxlength:"Contact Number must be 10 digit",
							number: "Contact Number must be digit"
					},
					txtagencyemail:{
									 required:"Email is required",
									 email:"Enter valid email"
									},
					txtagencycode: { 
							required:"Agency Code is required",
							maxlength:"Agency Code maximum length 10",
							number: "Agency Code must be digit"
					},
					txtagencyusername: "UserName is required",
					txtagencypassword: { 
							required:"Password is required",
							minlength:"Password minimum length 6",
							maxlength:"Password maximum length 15"
					}
				}
			});

		
		$("#btnupdate").on("click", function() {
                    if (!$("#AgencyForm").valid()) {
                        return false;
                    }
                });


		</script>

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
</body>
</html>
