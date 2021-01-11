<?php
if (!isset($this->session->userdata['expertloggedin'])) {
    redirect('/expert/ExpertLoginController/index');
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.authenticgoods.co/themes/quantum-pro/demos/demo7/pages.profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Oct 2018 08:12:00 GMT -->

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>GiveNGrow | Expert View</title>
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
	<script
		src="<?php echo base_url(); ?>admin_plugin/assets/vendor/sweetalert2/dist/sweetalert2.min.js">
	</script>
	<!-- ================== GLOBAL APP SCRIPTS ==================-->
	<script src="<?php echo base_url(); ?>admin_plugin/assets/js/global/app.js">
	</script>
	<!-- ================== PAGE LEVEL COMPONENT SCRIPTS ==================-->
	<script
		src="<?php echo base_url(); ?>admin_plugin/assets/js/components/sweetalert2.js">
	</script>
	<script
		src="<?php echo base_url(); ?>admin_plugin/assets/js/components/datatables-init.js">
	</script>
</head>

<body class="content-menu">
	<!-- CONTENT WRAPPER -->
	<div id="app">
		<?php include 'include/topbar.php'; ?>

		<?php include 'include/leftbar.php'; ?>
		<div class="content container-fluid">
			<section class="page-content container-fluid">
				<div class="row">
					<div class="col-xl-6 col-lg-4">
						<div class="card">
							<div class="card-body">
								<div class="profile-card text-center">
									<?php foreach ($expertData as $item) { ?>
									<div class="thumb-xl member-thumb m-b-10 center-block">
										<img src="<?php echo base_url(); ?>/uploads/Expert/<?php echo $item->ExpertIcon; ?>"
											style="height:300px; width:300px;" class="rounded-circle img-thumbnail"
											alt="profile-image">
									</div>
									<div class="">
										<h5 class="m-b-5"><?php echo $item->ExpertName; ?>
										</h5>
										<p class="text-muted"><?php echo $item->ExpertUserName; ?>
										</p>
									</div>
									<ul class="list-reset text-left m-t-40">

										<li style="margin-bottom:10px;" class="text-muted"><strong>Mobile:</strong><span
												class="m-l-15"><?php echo $item->ExpertContact; ?></span>
										</li>
										<li style="margin-bottom:10px;" class="text-muted"><strong>Email:</strong> <span
												class="m-l-15"><?php echo $item->Email; ?></span>
										</li>
										<li style="margin-bottom:10px;" class="text-muted"><strong>Active:</strong>
											<span class="m-l-15"><?php
                                                                                                            if ('Y' == $item->IsActive) {?>
												<span class="badge badge-success">YES</span>
												<?php
                                                                                                            } else {?>
												<span class="badge badge-danger">NO</span>
												<?php
                                                                                                            }
                                                                                                        ?>
											</span>
										</li>
										<?php } ?>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-8">
						<div class="row">
							<?php foreach ($articleData as $item) { ?>
							<div class="col-md-6">
								<div class="card">
									<div class="card-content" style="height:900px;">
										<div class="card-header no-border">
											<h5 class="card-subtitle text-muted" style="margin-bottom:10px;">
												<b>From:</b>&nbsp;&nbsp;<?php echo $item->ExpertName; ?>
											</h5>
											<h6 class="card-subtitle text-muted"><?php echo $item->CategoryName; ?>
											</h6>
										</div>
										<div class="card-body p-t-0">
											<img class="img-fluid"
												src="<?php echo base_url(); ?>/uploads/article/<?php echo $item->Image1; ?>"
												style="height:200px;width:500px;margin-bottom:10px;"
												alt="Card image cap">
											<img class="img-fluid"
												src="<?php echo base_url(); ?>/uploads/article/<?php echo $item->Image2; ?>"
												style="height:200px;width:500px;margin-bottom:10px;"
												alt="Card image cap">
											<h5 class="card-title"><?php echo $item->Title; ?>
											</h5>
											<p class="card-text" style="font-size:12px;margin-bottom:5px;"><?php echo $item->Description; ?>
											</p>
											<p class="card-subtitle text-muted" style="margin-bottom:10px;"><?php $date = date_create($item->ArticleDateTime); echo date_format($date, 'd/m/Y h:i:sA'); ?>
											</p>
											<?php
                                                                    if ('Y' == $item->IsApprove) {?>
											<a
												href="<?php echo base_url(); ?>index.php/expert/ArticleController/UpdateToNo/<?php echo str_replace('/', '-', $this->encryption->encrypt($item->ArticleId)); ?>">
												<span class="badge badge-success">Approve</span></a>
											<?php
                                                                    } else {?>
											<a
												href="<?php echo base_url(); ?>index.php/expert/ArticleController/UpdateToYes/<?php echo str_replace('/', '-', $this->encryption->encrypt($item->ArticleId)); ?>"><span
													class="badge badge-danger">Pending</span></a>
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
</body>

</html>
