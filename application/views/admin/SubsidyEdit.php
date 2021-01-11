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
	<title>GiveNGrow | Subsidy Edit</title>
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
								<h1 class="separator">Product Inputs</h1>
								<nav class="breadcrumb-wrapper" aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="index-2.html"><i class="icon dripicons-home"></i></a></li>
										<li class="breadcrumb-item"><a href="javascript:void(0)">Forms</a></li>
										<li class="breadcrumb-item active" aria-current="page">Subsidy Edit</li>
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
										<form method="post" id="ProductForm" action="<?php echo base_url(); ?>index.php/admin/SubsidyController/updateData" enctype="multipart/form-data" class="form-horizontal">
										<?php foreach($subsidyData as $item) { ?>
											<div class="form-body">
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Category Name</label>
													<div class="col-md-5">
														<select id="txtcatid" name="txtcatid" class="form-control input-rounded">
														<option>Select Category</option>
															<?php
																foreach($categoryData as $i)
																{
															?>
															<option value="<?php echo $i->CategoryId; ?>" <?php if($i->CategoryId==$item->CategoryId){ ?> selected <?php } ?>><?php echo $i->CategoryName; ?></option>
															<?php } ?>
														</select>
													</div>
												</div>
												<input type="hidden" name="txtsubsidyid" value="<?php echo $item->SubsidyId; ?>"/>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Title</label>
													<div class="col-md-5">
														<input type="text" id="txttitle" name="txttitle" placeholder="Subsidy title" value="<?php echo $item->Title; ?>" class="form-control input-rounded" autocomplete="given-name">
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Description</label>
													<div class="col-md-5">
														<textarea id="txtsubsidydesc" name="txtsubsidydesc" placeholder="Subsidy description" class="form-control input-rounded" id="exampleFormControlTextarea1" rows="3"><?php echo $item->Description; ?></textarea>
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Image</label>
													<div class="col-md-5">
														<div class="custom-file">
															<input type="file" id="txtimage" name="txtimage" class="custom-file-input" multiple="" id="validatedCustomFile" >
															<label class="custom-file-label" for="validatedCustomFile"><?php echo $item->Image; ?></label>
															<div class="invalid-feedback">Example custom file feedback</div>
														</div>
													</div><img src="<?php echo base_url(); ?>/uploads/subsidy/<?php echo $item->Image; ?>" style="height:75px; width:75px;" class="w-75 rounded-circle"/></span>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Address</label>
													<div class="col-md-5">
														<textarea id="txtaddress" name="txtaddress" placeholder="Address" class="form-control input-rounded" id="exampleFormControlTextarea1" rows="3"><?php echo $item->Address; ?></textarea>
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Contact</label>
													<div class="col-md-5">
														<input type="text" id="txtcontact" name="txtcontact" value="<?php echo $item->Contact; ?>" placeholder="Contact no" class="form-control input-rounded" autocomplete="family-name">
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Application Link</label>
												<div class="col-md-5">
													<div class="input-group mb-3">
														<div class="input-group-prepend">
															<span class="input-group-text" id="basic-addon3">https://applicationname.com/</span>
														</div>
														<input type="text" class="form-control" id="txtapplink" name="txtapplink" value="<?php echo $item->ApplicationLink; ?>" aria-describedby="basic-addon3">
													</div>
												</div>
												</div>
											</div>
											<?php } ?>
										</div>
										<div class="card-footer bg-light">
											<div class="form-actions">
												<div class="row">
													<div class="col-md-12">
														<div class="row">
															<div class="offset-sm-3 col-md-5">
																<button type="submit" name="btnsubmit" class="btn btn-success btn-rounded btn-floating">Update</button>
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
			jQuery.validator.addMethod("nameRegex", function(value, element) {
    	        return this.optional(element) || /^[a-z\ \s]+$/i.test(value);
    	    }, "Name must contain only letters & space");

			jQuery.validator.addMethod("boxKg", function(value, element) {
    	        return this.optional(element) || /^(BOX|KG)$/i.test(value);
    	    }, "Name must contain only letters & space");
			$("#ProductForm").validate({
                
				rules: {
					txtcatid: {min:1},
					txttitle: {
						required:true,
						nameRegex:true
					},
					txtimage : {
						 required:true,
						 extension:"jpg,png,jpeg,gif"
						 
					},
					txtsubsidydesc: "required",
					txtaddress: "required",
					txtcontact: {
									required:true,
									minlength:10,
									maxlength:10,
									number:true
					},
					txtapplink: "required"
				},
				messages: {
					txtcatid: "Category Name is required",
					txttitle: {
						required:"Title is required",
						nameRegex:"Title must contain only letters & space"
					},
					txtimage : {
						 required:"Image is required",
						 extension:"select image file extension like jpg,png,jpeg,gif"
						 
					},
					txtsubsidydesc: "Subsidy Description is required",
					txtaddress: "Address is required",
					txtcontact: { 
							required:"Contact Number is required",
							minlength:"Contact Number must be 10 digit",
							maxlength:"Contact Number must be 10 digit",
							number: "Contact Number must be digit"
					},
					txtapplink: "Application Link is required"
				}
			});

		
		$("#btninsert").on("click", function() {
                    if (!$("#ProductForm").valid()) {
                        return false;
                    }
                });


		</script>
</body>
</html>
