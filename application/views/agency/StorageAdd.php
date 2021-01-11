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
	<title>GiveNGrow | Purchase Add</title>
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
								<h1 class="separator">Purchase Inputs</h1>
								<nav class="breadcrumb-wrapper" aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="index-2.html"><i class="icon dripicons-home"></i></a></li>
										<li class="breadcrumb-item"><a href="javascript:void(0)">Forms</a></li>
										<li class="breadcrumb-item active" aria-current="page">Purchase Inputs</li>
									</ol>
								</nav>
							</div>
						</div>
					</header>
					<section class="page-content container-fluid">
						<div class="row">
							<div class="col-md-6">
								<div class="card">
									<div class="card-body">
									<div class="form-group row">
													<label class="control-label text-right col-md-3">Farmer Code</label>
													<div class="col-md-5">
														<input type="text" id="txtfarmerid" name="txtfarmerid" autofocus="autofocus" placeholder="Scan Farmer" onChange="getCode(this.value);" class="form-control input-rounded" value="">
													</div>
												</div>	
									<form id="StorageForm" name="StorageForm" method="post" action="<?php echo base_url(); ?>index.php/agency/StorageController/insertData"  class="form-horizontal">
												<?php
										if(isset($_REQUEST["btninsert"]))
										{
											if($this->session->flashdata("add"))
											{
												$msg=$this->session->flashdata("add");
												echo "<script>swal({
													position: 'top-center',
													type: 'success',
													title: '$msg',
													showConfirmButton: false,
													timer: 1500
												  })</script>";					
											 } 
											 
											}?>
												
											<div class="form-body">
												<input type="hidden" name="fid" id="fid"/>
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
														<select name="txtproductid" id="txtproductid" class="form-control input-rounded" onChange="getUnit(this.value);">
															<option>Select Category First</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Product Type</label>
													<div class="col-md-5">
														<select id="txtprodtype" name="txtprodtype" class="form-control input-rounded" onChange="getProductPrice(this.value);" id="txtprodtype">
															<option>Select Product Type</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Product Amount</label>
													<div class="col-md-5">
														<input type="text" id="txtpriceamt" name="txtpriceamt" readonly="readonly" id="txtpriceamt" placeholder="Enter Price Amount" class="form-control input-rounded" autocomplete="family-name" value="">
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Weight</label>
													<div class="col-md-5">
														<input type="text" id="txtweight" name="txtweight" placeholder="Enter Weight" onBlur="mul();" class="form-control input-rounded" autocomplete="family-name" value="">
													</div>
													<b><span id="txtWeight"></span></b>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Total Payment</label>
													<div class="col-md-5">
														<input type="text" id="txttotpayment" name="txttotpayment" placeholder="Total Payment" class="form-control input-rounded" autocomplete="family-name" readonly="readonly" value="">
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
																<button type="submit"id="btninsert" name="btninsert" class="btn btn-success btn-rounded btn-floating">Submit</button>
																<button class="btn btn-secondary clear-form btn-rounded btn-outline">Cancel</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									</form>
								</div>
								<div id="showFarmer" class="col-md-6">

								</div>
							</div>	
						
					</div>
					</section>


		<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/modernizr/modernizr.custom.js"></script>
		<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/jquery/dist/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>validation/jquery.validate.js"></script>
		<script src="<?php echo base_url(); ?>validation/additional-methods.min.js"></script>
		<script>

			$("#StorageForm").validate({
                
				rules: {
					txtfarmerid: {min:1},
					txtcatid: {min:1},
					txtproductid: {min:1},
					txtprodtype: {min:1},
					txtpriceamt: {
						required:true,
						number:true
					},
					txtweight: {
						required:true,
						number:true
					},
					txttotpayment: "required"
				},
				messages: {
					txtfarmerid: {min:"Farmer Name is required"},
					txtcatid: {min:"Category is required"},
					txtproductid: {min:"Product Name is required"},
					txtprodtype: {min:"Product Type is required"},
					txtpriceamt:{ 
						required:"Select Product Type",
						number:"Enter Digits only"
					},
					txtweight: {
						required:"Product Weight is required",
						number:"Enter Digits only"
					},
					txttotpayment: "Enter Product Weight and Product Type is required",
				}
			});

		
		$("#btninsert").on("click", function() {
                    if (!$("#StorageForm").valid()) {
                        return false;
                    }
                });


		</script>
		<!-- ======================= JAVA SCRIPT ===========================-->
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

		<script type="text/javascript">
				function mul() {
					var txtpriceamt = document.getElementById('txtpriceamt').value;
					var txtweight = document.getElementById('txtweight').value;
					document.getElementById('txttotpayment').value = txtpriceamt*txtweight;
					}
		</script>
						<script>
						function getProductPrice(type)
						{
							var pid=document.getElementById("txtproductid").value;
							if(pid=="0")
							{
								alert("Please Select Product First");
							}
							else
							{
								 var xhttp = new XMLHttpRequest();
								  xhttp.onreadystatechange = function() {
								  if (this.readyState == 4 && this.status == 200) {
									  document.getElementById("txtpriceamt").value = this.responseText;
									  }
								  };
								  xhttp.open("POST", "<?php echo base_url(); ?>index.php/agency/StorageController/getPrice/"+pid+"/"+type, true);
								  xhttp.send();
								  <!--getUnit(pid);-->
							}
						}
						function typeFill()
						{
							document.getElementById("txtprodtype").innerHTML="<option>Select Product Type</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option>";
						}
						function getUnit(pid)
						{
										 var xhttp = new XMLHttpRequest();
								 	 xhttp.onreadystatechange = function() {
									 if (this.readyState == 4 && this.status == 200) {
									 document.getElementById("txtWeight").innerHTML = this.responseText;
									 }
								  };
								  xhttp.open("POST", "<?php echo base_url(); ?>index.php/agency/StorageController/getWeight/"+pid, true);
								  xhttp.send();
						}
						function getCode(fcode)
						{
							$('#fid').val(fcode);
										 var xhttp = new XMLHttpRequest();
								 	 xhttp.onreadystatechange = function() {
									 if (this.readyState == 4 && this.status == 200) {
									 document.getElementById("showFarmer").style.visibility="visible";
									 document.getElementById("showFarmer").innerHTML = this.responseText;
									 }
								  };
								  xhttp.open("POST", "<?php echo base_url(); ?>index.php/agency/StorageController/getFarmerCode/"+fcode, true);
								  xhttp.send();
						}
						function fillProductData(catid)
						{
							 var xhttp = new XMLHttpRequest();
							  xhttp.onreadystatechange = function() {
							  if (this.readyState == 4 && this.status == 200) {
								  document.getElementById("txtproductid").innerHTML = this.responseText;
								  }
							  };
							  xhttp.open("POST", "<?php echo base_url(); ?>index.php/agency/StorageController/getProductData/"+catid, true);
							  xhttp.send();
						}
						</script>
</body>
</html>
