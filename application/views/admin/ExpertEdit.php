<?php
if(!isset($this->session->userdata["loggedin"]))
{
	redirect("/admin/LoginController/index");
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.authenticgoods.co/themes/quantum-pro/demos/demo7/forms.basic-inputs.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Oct 2018 08:15:35 GMT -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>GiveNGrow | Expert Edit</title>
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
								<h1 class="separator">Expert Inputs</h1>
								<nav class="breadcrumb-wrapper" aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="index-2.html"><i class="icon dripicons-home"></i></a></li>
										<li class="breadcrumb-item"><a href="javascript:void(0)">Forms</a></li>
										<li class="breadcrumb-item active" aria-current="page">Expert Inputs</li>
									</ol>
								</nav>
							</div>
						</div>
					</header>
					<section class="page-content container-fluid">
							<div class="row">
									<div class="col-md-12">
										<div class="card">
											<div class="card-body">
												<form method="post" id="ExpertForm" action="<?php echo base_url(); ?>index.php/admin/ExpertController/updateData" enctype="multipart/form-data" class="form-horizontal">
												<?php foreach($expertData as $item) { ?>
											<div class="form-body">
											<div class="form-group row">
													<label class="control-label text-right col-md-3">Expert Category Name</label>
													<div class="col-md-5">
														<select id="txtcatid" name="txtcatid" class="form-control input-rounded">
															<option>Select Expert Category</option>
															<?php
																foreach($categoryData as $i)
																{
															?>
															<option value="<?php echo $i->CategoryId; ?>" <?php if($i->CategoryId==$item->CategoryId){ ?> selected <?php } ?>><?php echo $i->CategoryName; ?></option>
															<?php } ?>
														</select>
													</div>
												</div>
													<input type="hidden" name="txtexpertid" value="<?php echo $item->ExpertId; ?>"/>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Expert Name</label>
													<div class="col-md-5">
														<input type="text" id="txtexpertname" name="txtexpertname" value="<?php echo $item->ExpertName; ?>" placeholder="Expert name" class="form-control input-rounded" autocomplete="family-name">
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Expert Contact</label>
													<div class="col-md-5">
														<input type="text" id="txtexpertno" name="txtexpertno" value="<?php echo $item->ExpertContact; ?>" placeholder="Expert contact" class="form-control input-rounded" autocomplete="family-name">
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Expert Email</label>
													<div class="col-md-5">
														<input type="text" id="txtexpertemail" name="txtexpertemail" value="<?php echo $item->Email; ?>" placeholder="Expert email" class="form-control input-rounded" autocomplete="family-name">
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Expert Icon</label>
													<div class="col-md-5">
														<div class="custom-file">
															<input type="file" id="txtexperticon" name="txtexperticon" class="custom-file-input" / >
															<label class="custom-file-label" for="validatedCustomFile"><?php echo $item->ExpertIcon; ?></label>
															<div class="invalid-feedback">Example custom file feedback</div>
														</div>
													</div>
													<img src="<?php echo base_url(); ?>/uploads/Expert/<?php echo $item->ExpertIcon; ?>" style="height:75px; width:75px;" class="w-75 rounded-circle"/>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Expert Qualification</label>
													<div class="col-md-5">
														<input type="text" id="txtexpertqualification" name="txtexpertqualification" value="<?php echo $item->ExpertQualification; ?>" placeholder="Expert qualification" class="form-control input-rounded" autocomplete="family-name">
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Expert Experience</label>
													<div class="col-md-5">
														<input type="text" id="txtexpertexp" name="txtexpertexp" value="<?php echo $item->ExpertExperience; ?>" placeholder="Expert experience in year(s)" class="form-control input-rounded" autocomplete="family-name">
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Username</label>
													<div class="col-md-5">
														<input type="text" id="txtexpertusername" name="txtexpertusername" value="<?php echo $item->ExpertUserName; ?>" placeholder="Expert username" class="form-control input-rounded" autocomplete="family-name">
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Password</label>
													<div class="col-md-5">
													<input type="password" id="txtexpertpassword" name="txtexpertpassword" value="<?php echo $item->ExpertPassword; ?>" class="form-control input-rounded" id="exampleInputPassword1" autocomplete="current-password" placeholder="Password">
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
																<button id="btnupdate" type="submit" name="btnupdate" class="btn btn-primary btn-rounded btn-floating">Submit</button>
																<button type="reset" class="btn btn-secondary clear-form btn-rounded btn-outline">Cancel</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										</form>
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
		<script src="<?php echo base_url(); ?>validation/jquery.validate.js"></script>
		<script src="<?php echo base_url(); ?>validation/additional-methods.min.js"></script>
		<script>
			jQuery.validator.addMethod("nameRegex", function(value, element) {
    	        return this.optional(element) || /^[a-z.\ \s]+$/i.test(value);
    	    }, "Name must contain only letters & space");
			$("#ExpertForm").validate({
                
				rules: {
					txtcatid: {min:1},
					txtexpertname: {
						required:true,
						nameRegex:true
						},
					txtexperticon : {
						 required:true,
						 extension:"jpg,png,jpeg,gif"
						 
					},
					
					txtexpertno: {
									required:true,
									minlength:10,
									maxlength:10,
									number:true
					},
					txtexpertqualification: {
						required:true,
						nameRegex:true
						}, 
					txtexpertexp: {
									required:true,
									maxlength:2,
									number:true
					},
					txtexpertemail:{
									 required:true,
									 email:true
									},
					txtexpertusername: "required",
					txtexpertpassword: {
									required:true,
									minlength:6,
									maxlength:15
					}
				},
				messages: {
					txtcatid: "Expert Category Name is required",
					txtexpertname: {
						required:"Expert Name is required",
						nameRegex:"Expert Name must contain only letters & space"
					},
					txtexperticon : {
						 required:"Expert image is required",
						 extension:"select image file extension like jpg,png,jpeg,gif"
					},
					
					txtexpertno: { 
							required:"Contact Number is required",
							minlength:"Contact Number must be 10 digit",
							maxlength:"Contact Number must be 10 digit",
							number: "Contact Number must be digit"
					},
					txtexpertqualification: {
						required:"Expert Qualification is required",
						nameRegex:"Expert Qualification must contain only letters & space"
					},
					txtexpertexp: { 
							required:"Experience is required",
							maxlength:"Experience maximum length 10",
							number: "Experience must be digit"
					},
					txtexpertemail:{
									 required:"Email is required",
									 email:"Enter valid email"
									},
					txtexpertusername: "Expert UserName is required",
					txtexpertpassword: { 
							required:"Password is required",
							minlength:"Password minimum length 6",
							maxlength:"Password maximum length 15"
					}
				}
			});

		
		$("#btnupdate").on("click", function() {
                    if (!$("#ExpertForm").valid()) {
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
