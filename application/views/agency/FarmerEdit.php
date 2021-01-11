<?php
if(!isset($this->session->userdata["agencyloggedin"]))
{
	redirect("/agency/AgencyLoginController/index");
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.authenticgoods.co/themes/quantum-pro/demos/demo7/forms.form-groups.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Oct 2018 08:15:35 GMT -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>GiveNGrow | Farmer Edit</title>
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
								<h1 class="separator">Farmer Edit</h1>
								<nav class="breadcrumb-wrapper" aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="index-2.html"><i class="icon dripicons-home"></i></a></li>
										<li class="breadcrumb-item"><a href="javascript:void(0)">Forms</a></li>
										<li class="breadcrumb-item active" aria-current="page">Farmer Edit</li>
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
										<form method="post" enctype="multipart/form-data" id="FarmerForm" action="<?php echo base_url(); ?>index.php/agency/FarmerController/updateData" class="form-horizontal">
										<?php foreach($farmerData as $item) { ?>
											<div class="form-body">
														<input type="hidden" name="txtfarmerid" value="<?php echo $item->FarmerId; ?>"/>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Farmer Name</label>
													<div class="col-md-5">
														<input type="text" id="txtfarmername" name="txtfarmername" value="<?php echo $item->FarmerName; ?>" placeholder="Farmer name" class="form-control input-rounded" autocomplete="given-name">
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">FarmerIcon</label>
													<div class="col-md-5">
														<div class="custom-file">
															<input type="file" id="txtfarmericon" name="txtfarmericon" class="custom-file-input"  id="validatedCustomFile"/ >
															<label class="custom-file-label" for="validatedCustomFile"><?php echo $item->FarmerIcon; ?></label>
															<div class="invalid-feedback">Example custom file feedback</div>
														</div>
													</div>
													<img src="<?php echo base_url(); ?>/uploads/farmer/<?php echo $item->FarmerIcon; ?>" style="height:75px; width:75px;" class="w-75 rounded-circle"/>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Contact</label>
													<div class="col-md-5">
														<input type="text" id="txtfarmercontact" name="txtfarmercontact"  value="<?php echo $item->FarmerContact; ?>" placeholder="Contact no" class="form-control input-rounded" autocomplete="family-name">
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Address</label>
													<div class="col-md-5">
														<textarea id="txtfarmeraddress" name="txtfarmeraddress"  placeholder="Address" class="form-control input-rounded" id="exampleFormControlTextarea1" rows="3"><?php echo $item->FarmerAddress; ?></textarea>
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Password</label>
													<div class="col-md-5">
													<input type="password" id="txtfarmerpassword" name="txtfarmerpassword" value="<?php echo $item->Password; ?>" class="form-control input-rounded" id="exampleInputPassword1" autocomplete="current-password" placeholder="Password">
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Farmer Code</label>
													<div class="col-md-5">
														<input type="text" id="txtfarmercode" name="txtfarmercode" value="<?php echo $item->FarmerCode; ?>" placeholder="Farmer code" class="form-control input-rounded" autocomplete="family-name">
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Aadhar No.</label>
													<div class="col-md-5">
														<input type="text" id="txtfarmeraadharno" name="txtfarmeraadharno" value="<?php echo $item->AadharNumber; ?>" placeholder="Aadhar Card no" class="form-control input-rounded" autocomplete="family-name">
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Aadhar Front Image</label>
													<div class="col-md-5">
														<div class="custom-file">
															<input type="file" id="txtaadharfrtimage" name="txtaadharfrtimage" class="custom-file-input" multiple="" id="validatedCustomFile" >
															<label class="custom-file-label" for="validatedCustomFile"><?php echo $item->AadharFrontImage; ?></label>
															<div class="invalid-feedback">Example custom file feedback</div>
														</div>
													</div>
													<img src="<?php echo base_url(); ?>/uploads/farmer/<?php echo $item->AadharFrontImage; ?>" style="height:75px; width:75px;" class="w-75 rounded-circle"/>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Aadhar Back Image</label>
													<div class="col-md-5">
														<div class="custom-file">
															<input type="file" id="txtaadharbckimage" name="txtaadharbckimage" class="custom-file-input" multiple="" id="validatedCustomFile" >
															<label class="custom-file-label" for="validatedCustomFile"><?php echo $item->AadharBackImage; ?></label>
															<div class="invalid-feedback">Example custom file feedback</div>
														</div>
													</div>
													<img src="<?php echo base_url(); ?>/uploads/farmer/<?php echo $item->AadharBackImage; ?>" style="height:75px; width:75px;" class="w-75 rounded-circle"/>
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
																<button id="btnupdate" name="btnupdate" type="submit" class="btn btn-primary btn-rounded">Update</button>
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
			jQuery.validator.addMethod("nameRegex", function(value, element) {
    	        return this.optional(element) || /^[a-z\ \s]+$/i.test(value);
    	    }, "Name must contain only letters & space");
			$("#FarmerForm").validate({
                
				rules: {
					txtfarmername: {
						required:true,
						nameRegex:true
						},
					txtfarmericon : {
						 extension:"jpg,png,jpeg,gif"
						 
					},
					txtfarmercontact: {
									required:true,
									minlength:10,
									maxlength:10,
									number:true
					},
					txtfarmeraddress: "required",
					txtfarmerpassword: {
									required:true,
									minlength:6,
									maxlength:15
					},
					txtfarmercode: {
									required:true,
									maxlength:10,
									number:true
					},
					txtfarmeraadharno: {
									required:true,
									minlength:12,
									maxlength:12,
									number:true
					},
					txtaadharfrtimage : {
						 extension:"jpg,png,jpeg,gif"
						 
					},
					txtaadharbckimage : {
						 extension:"jpg,png,jpeg,gif"
						 
					}
				},
				messages: {
					txtfarmername: {
						required:"Farmer Name is required",
						nameRegex:"Farmer Name must contain only letters & space"
					},
					txtfarmericon : {
						 extension:"select image file extension like jpg,png,jpeg,gif"
						 
					},
					txtfarmercontact: { 
							required:"Contact Number is required",
							minlength:"Contact Number must be 10 digit",
							maxlength:"Contact Number must be 10 digit",
							number: "Contact Number must be digit"
					},
					txtfarmeraadharno: { 
							required:"Aadhar Number is required",
							minlength:"Aadhar Number must be 12 digit",
							maxlength:"Aadhar Number must be 12 digit",
							number: "Aadhar Number must be digit"
					},
					txtfarmeraddress: "Farmer Address is required",
					txtfarmerpassword: { 
							required:"Password is required",
							minlength:"Password minimum length 6",
							maxlength:"Password maximum length 15"
					},
					txtfarmercode: { 
							required:"Farmer Code is required",
							maxlength:"Farmer Code maximum length 10",
							number: "Farmer Code must be digit"
					},
					txtaadharfrtimage : {
						 extension:"select image file extension like jpg,png,jpeg,gif"
						 
					},
					txtaadharbckimage : {
						 extension:"select image file extension like jpg,png,jpeg,gif"
						 
					}
				}
			});

		
		$("#btnupdate").on("click", function() {
                    if (!$("#FarmerForm").valid()) {
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
		<!-- ================== GLOBAL APP SCRIPTS ==================-->
		<script src="<?php echo base_url(); ?>admin_plugin/assets/js/global/app.js"></script>
		<!-- ================== PAGE LEVEL COMPONENT SCRIPTS ==================-->
		<script src="<?php echo base_url(); ?>admin_plugin/assets/js/components/sweetalert2.js"></script>
		<script src="<?php echo base_url(); ?>admin_plugin/assets/js/components/datatables-init.js"></script>

</body>
</html>
