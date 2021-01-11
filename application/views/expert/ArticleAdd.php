<?php
if(!isset($this->session->userdata["expertloggedin"]))
{
	redirect("/expert/ExpertLoginController/index");
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.authenticgoods.co/themes/quantum-pro/demos/demo7/forms.basic-inputs.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Oct 2018 08:15:35 GMT -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>GiveNGrow | Article Add</title>
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
								<h1 class="separator">Article Inputs</h1>
								<nav class="breadcrumb-wrapper" aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="index-2.html"><i class="icon dripicons-home"></i></a></li>
										<li class="breadcrumb-item"><a href="javascript:void(0)">Forms</a></li>
										<li class="breadcrumb-item active" aria-current="page">Article Inputs</li>
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
												<form method="post" id="ArticleForm" action="<?php echo base_url(); ?>index.php/expert/ArticleController/insertData" enctype="multipart/form-data" class="form-horizontal">
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
													<label class="control-label text-right col-md-3">Article Category Name</label>
													<div class="col-md-5">
														<select id="txtcatid" name="txtcatid" class="form-control input-rounded">
															<option>Select Article Category</option>
															<?php
																foreach($categoryData as $item)
																{
															?>
															<option value="<?php echo $item->CategoryId; ?>"><?php echo $item->CategoryName; ?></option>
															<?php } ?>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Title</label>
													<div class="col-md-5">
														<input type="text" id="txttitle" name="txttitle" placeholder="Title" class="form-control input-rounded" autocomplete="family-name">
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Description</label>
													<div class="col-md-5">
														<textarea id="txtarticledesc" name="txtarticledesc" placeholder="Description" class="form-control input-rounded" id="exampleFormControlTextarea1" rows="3"></textarea>
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Article Image1</label>
													<div class="col-md-5">
														<div class="custom-file">
															<input type="file" id="txtarticleimage1" name="txtarticleimage1" class="custom-file-input"  >
															<label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
															<div class="invalid-feedback">Example custom file feedback</div>
														</div>
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Article Image2</label>
													<div class="col-md-5">
														<div class="custom-file">
															<input type="file" id="txtarticleimage2" name="txtarticleimage2" class="custom-file-input" / >
															<label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
															<div class="invalid-feedback">Example custom file feedback</div>
														</div>
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Video URL</label>
												<div class="col-md-5">
													<div class="input-group mb-3">
														<div class="input-group-prepend">
															<span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
														</div>
														<input type="text" class="form-control" id="txtvideourl" name="txtvideourl" aria-describedby="basic-addon3">
													</div>
												</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Article Date</label>
													<div class="col-md-5">
														<input type="date" value="" id="txtarticledate" name="txtarticledate" class="form-control input-rounded" placeholder="dd/mm/yyyy">
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Source</label>
													<div class="col-md-5">
														<input type="text" id="txtsource" name="txtsource" placeholder="Source" class="form-control input-rounded" autocomplete="family-name">
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Tags</label>
													<div class="col-md-5">
														<input type="text" id="txttags" name="txttags" placeholder="Tags" class="form-control input-rounded" autocomplete="family-name">
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
																<button id="btnsubmit" type="submit" name="btnsubmit" class="btn btn-success btn-rounded btn-floating">Submit</button>
																<button class="btn btn-secondary clear-form btn-rounded btn-outline">Cancel</button>
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
						
	<!-- ======================= JAVA SCRIPT ===========================-->
		<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/modernizr/modernizr.custom.js"></script>
		<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/jquery/dist/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>validation/jquery.validate.js"></script>
		<script src="<?php echo base_url(); ?>validation/additional-methods.min.js"></script>
		<script>
			jQuery.validator.addMethod("nameRegex", function(value, element) {
    	        return this.optional(element) || /^[a-z\ \s]+$/i.test(value);
    	    }, "Name must contain only letters & space");
			$("#ArticleForm").validate({
                
				rules: {
					txtcatid: {min:1},
					txttitle: {
						required:true,
						nameRegex:true
					},
					txtarticledesc: "required",
					txtarticleimage1: {
						 required:true,
						 extension:"jpg,png,jpeg,gif"
						 
					},
					txtarticleimage2: {
						 required:true,
						 extension:"jpg,png,jpeg,gif"
						 
					},
					txtarticledate: "required"
				},
				messages: {
					txtcatid: {min:"Expert Name is required"},
					txttitle: {
						required:"Article Title is required",
						nameRegex:"Article Name must contain only letters & space"
					},
					txtarticledesc: "Description is required",
					txtarticleimage1: {
						 required:"Article Image is required",
						 extension:"jpg,png,jpeg,gif"
					},
					txtarticleimage2: {
						 required:"Article Image is required",
						 extension:"jpg,png,jpeg,gif"
					},
					txtarticledate: "required"
				}
			});

		
		$("#btnsubmit").on("click", function() {
                    if (!$("#ArticleForm").valid()) {
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
