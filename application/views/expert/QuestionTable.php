<?php
if (!isset($this->session->userdata['expertloggedin'])) {
    redirect('/expert/ExpertLoginController/index');
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.authenticgoods.co/themes/quantum-pro/demos/demo7/tables.data.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Oct 2018 08:16:01 GMT -->

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>GiveNGrow | Question Table</title>
	<!-- ================== GOOGLE FONTS ==================-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet">
	<!-- ======================= GLOBAL VENDOR STYLES ========================-->
	<link rel="stylesheet"
		href="<?php echo base_url(); ?>admin_plugin/assets/css/vendor/bootstrap.css">
	<link rel="stylesheet"
		href="<?php echo base_url(); ?>admin_plugin/assets/vendor/metismenu/dist/metisMenu.css">
	<link rel="stylesheet"
		href="<?php echo base_url(); ?>admin_plugin/assets/vendor/switchery-npm/index.css">
	<link rel="stylesheet"
		href="<?php echo base_url(); ?>admin_plugin/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
	<!-- ======================= LINE AWESOME ICONS ===========================-->
	<link rel="stylesheet"
		href="<?php echo base_url(); ?>admin_plugin/assets/css/icons/line-awesome.min.css">
	<!-- ======================= DRIP ICONS ===================================-->
	<link rel="stylesheet"
		href="<?php echo base_url(); ?>admin_plugin/assets/css/icons/dripicons.min.css">
	<!-- ======================= MATERIAL DESIGN ICONIC FONTS =================-->
	<link rel="stylesheet"
		href="<?php echo base_url(); ?>admin_plugin/assets/css/icons/material-design-iconic-font.min.css">
	<!-- ======================= PAGE LEVEL VENDOR STYLES ============================-->
	<link rel="stylesheet"
		href="<?php echo base_url(); ?>admin_plugin/assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.css">
	<!-- ======================= GLOBAL COMMON STYLES ============================-->
	<link rel="stylesheet"
		href="<?php echo base_url(); ?>admin_plugin/assets/css/common/main.bundle.css">
	<!-- ======================= LAYOUT TYPE ===========================-->
	<link rel="stylesheet"
		href="<?php echo base_url(); ?>admin_plugin/assets/css/layouts/vertical/core/main.css">
	<!-- ======================= MENU TYPE ===========================================-->
	<link rel="stylesheet"
		href="<?php echo base_url(); ?>admin_plugin/assets/css/layouts/vertical/menu-type/content.css">
	<!-- ======================= THEME COLOR STYLES ===========================-->
	<link rel="stylesheet"
		href="<?php echo base_url(); ?>admin_plugin/assets/css/layouts/vertical/themes/theme-i.css">
	<script
		src="<?php echo base_url(); ?>admin_plugin/assets/vendor/sweetalert2/dist/sweetalert2.min.js">
	</script>
</head>

<body class="content-menu">
	<div id="app">
		<?php include 'include/topbar.php'; ?>
		<?php include 'include/leftbar.php'; ?>
		<div class="content container-fluid">
			<header class="page-header">
				<div class="d-flex align-items-center">
					<div class="mr-auto">
						<h1 class="separator">Question Data</h1>
						<nav class="breadcrumb-wrapper" aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index-2.html"><i
											class="icon dripicons-home"></i></a></li>
								<li class="breadcrumb-item"><a href="javascript:void(0)">Tables</a></li>
								<li class="breadcrumb-item active" aria-current="page">Question Data</li>
							</ol>
						</nav>
					</div>
				</div>
			</header>
			<section class="page-content container-fluid">
				<div class="row">
					<?php foreach ($questionData as $item) { ?>
					<div class="col-md-3">
						<div class="card">
							<div class="card-content" style="height:700px;">
								<div class="card-header no-border">
									<h5 class="card-subtitle text-muted" style="margin-bottom:10px;">
										<b>From:</b>&nbsp;&nbsp;<?php echo $item->FarmerName; ?>
									</h5>
									<h6 class="card-subtitle text-muted"><?php echo $item->CategoryName; ?>
									</h6>
								</div>
								<div class="card-body p-t-0">
									<img class="img-fluid"
										src="<?php echo base_url(); ?>/uploads/question/<?php echo $item->ImageUrl; ?>"
										style="height:250px;width:500px;margin-bottom:10px;" alt="Card image cap">
									<h5 class="card-title"><?php echo $item->Title; ?>
									</h5>
									<p class="card-text" style="font-size:12px;margin-bottom:10px;"><?php echo $item->Description; ?>
									</p>
									<p class="card-subtitle text-muted" style="font-size:12px;margin-bottom:10px;">
										<?php $date = date_create($item->QuestionDateTime); echo date_format($date, 'd-m-Y h:i:sA'); ?>
									</p>
									<?php
                                                                    if ('Y' == $item->IsApprove) {?>
									<span class="badge badge-success">Approve</span>
									<?php
                                                                    } else {?>
									<a
										href="<?php echo base_url(); ?>index.php/expert/AnswerController/Add/<?php echo str_replace('/', '-', $this->encryption->encrypt($item->QuestionId)); ?>"><span
											class="badge badge-danger">Give Answer</span></a>
									<?php
                                                                    }
                                                    ?>

								</div>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</section>

		</div>
		<!-- ======================= JAVA SCRIPT ===========================-->
		<script
			src="<?php echo base_url(); ?>admin_plugin/assets/vendor/modernizr/modernizr.custom.js">
		</script>
		<script
			src="<?php echo base_url(); ?>admin_plugin/assets/vendor/jquery/dist/jquery.min.js">
		</script>
		<script
			src="<?php echo base_url(); ?>admin_plugin/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js">
		</script>
		<script
			src="<?php echo base_url(); ?>admin_plugin/assets/vendor/js-storage/js.storage.js">
		</script>
		<script
			src="<?php echo base_url(); ?>admin_plugin/assets/vendor/js-cookie/src/js.cookie.js">
		</script>
		<script
			src="<?php echo base_url(); ?>admin_plugin/assets/vendor/pace/pace.js">
		</script>
		<script
			src="<?php echo base_url(); ?>admin_plugin/assets/vendor/metismenu/dist/metisMenu.js">
		</script>
		<script
			src="<?php echo base_url(); ?>admin_plugin/assets/vendor/switchery-npm/index.js">
		</script>
		<script
			src="<?php echo base_url(); ?>admin_plugin/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js">
		</script>
		<!-- ================== PAGE LEVEL VENDOR SCRIPTS ==================-->
		<script
			src="<?php echo base_url(); ?>admin_plugin/assets/vendor/datatables.net/js/jquery.dataTables.js">
		</script>
		<script
			src="<?php echo base_url(); ?>admin_plugin/assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.js">
		</script>
		<!-- ================== GLOBAL APP SCRIPTS ==================-->
		<script
			src="<?php echo base_url(); ?>admin_plugin/assets/js/global/app.js">
		</script>
		<!-- ================== PAGE LEVEL COMPONENT SCRIPTS ==================-->
		<script
			src="<?php echo base_url(); ?>admin_plugin/assets/js/components/sweetalert2.js">
		</script>
		<script
			src="<?php echo base_url(); ?>admin_plugin/assets/js/components/datatables-init.js">
		</script>

</body>

</html>
