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
	<title>GiveNGrow | Price Date Add</title>
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
	<!-- ======================= SWEET ALERT ===========================-->
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
								<h1 class="separator">Price date Inputs</h1>
								<nav class="breadcrumb-wrapper" aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="index-2.html"><i class="icon dripicons-home"></i></a></li>
										<li class="breadcrumb-item"><a href="javascript:void(0)">Forms</a></li>
										<li class="breadcrumb-item active" aria-current="page">Price date Inputs</li>
									</ol>
								</nav>
							</div>
					</header>
					<section class="page-content container-fluid">
						<div class="row">
							<div class="col">
								<div class="card">
									<div class="card-body">
										<form method="post" id="PriceDateForm" action="<?php echo base_url(); ?>index.php/admin/PriceDateController/insertData" class="form-horizontal">
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
													<label class="control-label text-right col-md-3">Category Name</label>
													<div class="col-md-5">
														<select id="txtcatid" name="txtcatid" class="form-control input-rounded" onChange="fillProductData(this.value);">
														<option>Select Category</option>
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
													<label class="control-label text-right col-md-3">Product Name</label>
													<div class="col-md-5">
														<select id="txtproductid" name="txtproductid" id="txtproductid" class="form-control input-rounded">
															<option>Select Category First</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Price Date</label>
													<div class="col-md-5">
														<input type="date" value="" id="txtpricedate" name="txtpricedate" class="form-control input-rounded" placeholder="dd/mm/yyyy">
													</div>
												</div>
												
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Buyer Price 1</label>
													<div class="col-md-5">
														<input type="text" id="txtbuyerprice1" name="txtbuyerprice1" placeholder="Buyer price" class="form-control input-rounded" autocomplete="family-name">
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Seller Price 1</label>
													<div class="col-md-5">
														<input type="text" id="txtsellerprice1" name="txtsellerprice1" placeholder="Seller price" class="form-control input-rounded" autocomplete="family-name">
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Buyer Price 2</label>
													<div class="col-md-5">
														<input type="text" id="txtbuyerprice2" name="txtbuyerprice2" placeholder="Buyer price" class="form-control input-rounded" autocomplete="family-name">
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Seller Price 2</label>
													<div class="col-md-5">
														<input type="text" id="txtsellerprice2" name="txtsellerprice2" placeholder="Seller price" class="form-control input-rounded" autocomplete="family-name">
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Buyer Price 3</label>
													<div class="col-md-5">
														<input type="text" id="txtbuyerprice3" name="txtbuyerprice3" placeholder="Buyer price" class="form-control input-rounded" autocomplete="family-name">
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Seller Price 3</label>
													<div class="col-md-5">
														<input type="text" id="txtsellerprice3" name="txtsellerprice3" placeholder="Seller price" class="form-control input-rounded" autocomplete="family-name">
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
		<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/sweetalert2/dist/sweetalert2.min.js"></script>
		<!-- ================== GLOBAL APP SCRIPTS ==================-->
		<script src="<?php echo base_url(); ?>admin_plugin/assets/js/global/app.js"></script>
		<!-- ================== PAGE LEVEL COMPONENT SCRIPTS ==================-->
		<script src="<?php echo base_url(); ?>admin_plugin/assets/js/components/sweetalert2.js"></script>
		<script src="<?php echo base_url(); ?>admin_plugin/assets/js/components/datatables-init.js"></script>

					<script language="javascript">
						function fillProductData(catid)
						{
							 var xhttp = new XMLHttpRequest();
							  xhttp.onreadystatechange = function() {
								if (this.readyState == 4 && this.status == 200) {
								  document.getElementById("txtproductid").innerHTML = this.responseText;
								}
							  };
							  xhttp.open("POST", "<?php echo base_url(); ?>index.php/admin/PriceDateController/getProductData/"+catid, true);
							  xhttp.send();
						}
					</script>

		<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/modernizr/modernizr.custom.js"></script>
		<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/jquery/dist/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>validation/jquery.validate.js"></script>
		<script src="<?php echo base_url(); ?>validation/additional-methods.min.js"></script>
		<script>

			$("#PriceDateForm").validate({
                
				rules: {
					txtcatid: {min:1},
					txtproductid: {min:1},
					txtpricedate: {
						required: true
					},
					txtbuyerprice1: {
						required: true,
						number: true
					},
					txtsellerprice1: {
						required: true,
						number: true
					},
					txtbuyerprice2: {
						required: true,
						number: true
					},
					txtsellerprice2: {
						required: true,
						number: true
					},
					txtbuyerprice3: {
						required: true,
						number: true
					},
					txtsellerprice3: {
						required: true,
						number: true
					}
				},
				messages: {
					txtagencyname: {min:"Agency Name is required"},
					txtcatid: {min:"Category Name is required"},
					txtproductid: "Product Name is required",
					txtpricedate: {
						required: "Product Date is required"
					},
					txtbuyerprice1: {
						required: "Buyer Price1 is required",
						number: "Please Enter Digit"
					},
					txtsellerprice1: {
						required: "Seller Price1 is required",
						number: "Please Enter Digit"
					},
					txtbuyerprice2: {
						required: "Buyer Price2 is required",
						number: "Please Enter Digit"
					},
					txtsellerprice2: {
						required: "Seller Price2 is required",
						number: "Please Enter Digit"
					},
					txtbuyerprice3: {
						required: "Buyer Price3 is required",
						number: "Please Enter Digit"
					},
					txtsellerprice3: {
						required: "Seller Price3 is required",
						number: "Please Enter Digit"
					}
				}
			});

		
		$("#btninsert").on("click", function() {
                    if (!$("#PriceDateForm").valid()) {
                        return false;
                    }
                });


		</script>
</body>
</html>
