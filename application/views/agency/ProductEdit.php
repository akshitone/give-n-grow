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
	<title>GiveNGrow | Product Edit</title>
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
	<!-- ================== SWEET ALERT ==================-->
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
								<h1 class="separator">Product Edit</h1>
								<nav class="breadcrumb-wrapper" aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="index-2.html"><i class="icon dripicons-home"></i></a></li>
										<li class="breadcrumb-item"><a href="javascript:void(0)">Forms</a></li>
										<li class="breadcrumb-item active" aria-current="page">Product Edit</li>
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
										<form method="post" enctype="multipart/form-data" id="ProductForm" action="<?php echo base_url(); ?>index.php/agency/ProductController/updateData" class="form-horizontal">
										<?php foreach($productData as $item) { ?>
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
														<input type="hidden" name="txtproductid" value="<?php echo $item->ProductId; ?>"/>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Product Name</label>
													<div class="col-md-5">
														<input type="text" id="txtproductname" name="txtproductname" value="<?php echo $item->ProductName; ?>" placeholder="Product name" class="form-control input-rounded" autocomplete="given-name">
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Product Description</label>
													<div class="col-md-5">
														<textarea id="txtproductdesc" name="txtproductdesc" placeholder="Product description" class="form-control input-rounded" id="exampleFormControlTextarea1" rows="3"><?php echo $item->ProductDescription; ?></textarea>
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Product Weight</label>
													<div class="col-md-5">
														<input type="text" id="txtproductweight" name="txtproductweight" value="<?php echo $item->Weight; ?>" placeholder="KG/BOX" class="form-control input-rounded" autocomplete="given-name">
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Product Image</label>
													<div class="col-md-5">
														<div class="custom-file">
															<input type="file" id="txtproducticon" name="txtproducticon" class="custom-file-input" multiple="" >
															<label class="custom-file-label" for="validatedCustomFile"><?php echo $item->ProductIcon; ?></label>
															<div class="invalid-feedback">Example custom file feedback</div>
														</div>
													</div>
													<span><img src="<?php echo base_url(); ?>/uploads/product/<?php echo $item->ProductIcon; ?>" style="height:75px; width:75px;" class="w-75 rounded-circle"/></span>
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
			jQuery.validator.addMethod("nameRegex", function(value, element) {
    	        return this.optional(element) || /^[a-z\ \s]+$/i.test(value);
    	    }, "Name must contain only letters & space");

			jQuery.validator.addMethod("boxKg", function(value, element) {
    	        return this.optional(element) || /^(BOX|KG)$/i.test(value);
    	    }, "Name must contain only letters & space");
			$("#ProductForm").validate({
                
				rules: {
					txtcatid: {min:1},
					txtproductname: {
						required:true,
						nameRegex:true
					},
					txtproducticon : {
						 extension:"jpg,png,jpeg,gif"
					},
					txtproductdesc: "required",
					txtproductweight: {
						required:true,
						boxKg:true
						}
				},
				messages: {
					txtagencyname: {min:"Name is required"},
					txtcatid: "Category Name is required",
					txtproductname: {
						required:"Product Name is required",
						nameRegex:"Product Name must contain only letters & space"
					},
					txtproducticon : {
						 extension:"select image file extension like jpg,png,jpeg,gif"
					},
					txtproductdesc: "Product Description is required",
					txtproductweight: {
						required:"Product Weight is required",
						boxKg:"Enter either BOX or KG"	
						}
				}
			});

		
		$("#btnupdate").on("click", function() {
                    if (!$("#ProductForm").valid()) {
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
