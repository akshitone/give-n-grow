<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.authenticgoods.co/themes/quantum-pro/demos/demo7/auth.forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Oct 2018 08:16:02 GMT -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>GiveNGrow | Forgot Password</title>
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
	<!-- ======================= MENU TYPE ===========================-->
		<link rel="stylesheet" href="<?php echo base_url(); ?>admin_plugin/assets/css/layouts/vertical/menu-type/content.css">
	<!-- ======================= THEME COLOR STYLES ===========================-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>admin_plugin/assets/css/layouts/vertical/themes/theme-a.css">
</head>

<body class="content-menu">
	<div class="container">
	
		<form class="sign-in-form" method="post" action="<?php echo base_url(); ?>index.php/agency/AgencyLoginController/checkAgencyContact">
			<div class="card">
				<div class="card-body">
					<?php
						if($this->session->flashdata("error"))
						{
					?>
					<div class="alert alert-rounded alert-danger alert-dismissible fade show" role="alert">
						<strong>Oh snap!</strong><?php echo $this->session->flashdata("error"); ?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true" class="la la-close"></span>
							</button>
					</div>
					<?php } ?>
					<a href="index-2.html" class="brand text-center d-block m-b-20">
					<img width="300" src="<?php echo base_url(); ?>/admin_plugin/assets/img/avatars/logo_givengrow2.png" alt="QuantumPro Logo" />
					</a>
					<h5 class="sign-in-heading text-center">Forgotten Password?</h5>
					<p class="text-center text-muted">Enter your Contact to reset your password</p>
					<div class="form-group">
						<label class="sr-only">Agency Contact</label>
						<input type="text" name="txtagencyphno" id="txtagencyphno" class="form-control" placeholder="Agency Contact" >
					</div>
					<button class="btn btn-primary btn-rounded btn-floating btn-lg btn-block" type="submit">Reset Password</button>
				</div>
			</div>
		</form>
	</div>

	<!-- ================== GLOBAL VENDOR SCRIPTS ==================-->
	<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/modernizr/modernizr.custom.js"></script>
	<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/jquery/dist/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/js-storage/js.storage.js"></script>
	<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/js-cookie/src/js.cookie.js"></script>
	<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/pace/pace.js"></script>
	<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/metismenu/dist/metisMenu.js"></script>
	<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/switchery-npm/index.js"></script>
	<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
	<!-- ================== GLOBAL APP SCRIPTS ==================-->
	<script src="<?php echo base_url(); ?>admin_plugin/assets/js/global/app.js"></script>

</body>


<!-- Mirrored from www.authenticgoods.co/themes/quantum-pro/demos/demo7/auth.forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Oct 2018 08:16:02 GMT -->
</html>
