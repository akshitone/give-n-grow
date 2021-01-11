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
	<title>GiveNGrow | Send Notification</title>
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
								<h1 class="separator">Notification</h1>
								<nav class="breadcrumb-wrapper" aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="index-2.html"><i class="icon dripicons-home"></i></a></li>
										<li class="breadcrumb-item"><a href="javascript:void(0)">Forms</a></li>
										<li class="breadcrumb-item active" aria-current="page">Send Notification</li>
									</ol>
								</nav>
							</div>
							<ul class="actions top-right">
								<li class="dropdown">
									<a href="javascript:void(0)" class="btn btn-fab" data-toggle="dropdown" aria-expanded="false">
															<i class="la la-ellipsis-h"></i>
														</a>
									<div class="dropdown-menu dropdown-icon-menu dropdown-menu-right">
									<div class="dropdown-header">
										Quick Actions
									</div>
									<a href="<?php echo base_url(); ?>index.php/admin/NotificationController/addAgency" class="dropdown-item">
																<i class="icon dripicons-clockwise"></i> Agency Notification
															</a>
										<a href="<?php echo base_url(); ?>index.php/admin/NotificationController/addFarmer" class="dropdown-item">
																<i class="icon dripicons-clockwise"></i> Farmer Notification
															</a>
										<a href="<?php echo base_url(); ?>index.php/admin/NotificationController/addExpert" class="dropdown-item">
																<i class="icon dripicons-clockwise"></i> Expert Notification
															</a>
									</div>
								</li>
           					 </ul>
						</div>
					</header>
					<section class="page-content container-fluid">
						<div class="row">
							<div class="col">
								<div class="card">
									<div class="card-body">
										<form method="post" id="ExpertForm" action="<?php echo base_url(); ?>index.php/admin/NotificationController/insertAgency" enctype="multipart/form-data" class="form-horizontal">
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
													<label class="control-label text-right col-md-3">Agency Name</label>
													<div class="col-md-5">
														<select id="txtagencyid" name="txtagencyid" class="form-control input-rounded">
															<option>Select Agency</option>
															<?php
																foreach($agencyData as $item)
																{
															?>
															<option value="<?php echo $item->AgencyId; ?>"><?php echo $item->AgencyName; ?></option>
															<?php } ?>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Title</label>
													<div class="col-md-5">
														<input type="text" id="txttitle" name="txttitle" placeholder="Enter Title" class="form-control input-rounded" autocomplete="family-name">
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-right col-md-3">Description</label>
													<div class="col-md-5">
														<input type="text" id="txtdescription" name="txtdescription" placeholder="Enter Description" class="form-control input-rounded" autocomplete="family-name">
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

			$("#ExpertForm").validate({
                
				rules: {
					txtcatid: {min:1},
					txtexpertname: "required",
					txtexperticon : {
						 required:true,
						 extension:"jpg,png,jpeg,gif"
						 
					},
					
					txtexpertno: "required",
					txtexpertqualification: "required",
					txtexpertexp: "required",
					txtexpertemail:{
									 required:true,
									 email:true
									},
					txtexpertusername: "required",
					txtexpertpassword: "required"
				},
				messages: {
					txtcatid: "Expert Name is required",
					txtexpertname: "Expert Name is required",
					txtexperticon : {
						 required:"image is required",
						 extension:"select image file extension like jpg,png,jpeg,gif"
					},
					
					txtexpertno: "Contact Number is required",
					txtexpertqualification: "Expert Qualification is required",
					txtexpertexp: "Expert Experience is required",
					txtexpertemail:{
									 required:"Email is required",
									 email:"Enter valid email"
									},
					txtexpertusername: "Expert UserName is required",
					txtexpertpassword: "Expert Password is required"
				}
			});

		
		$("#btnsubmit").on("click", function() {
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
