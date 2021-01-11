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
	<title>GiveNGrow | Answer Table</title>
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

	<script type="text/javascript">
		function showdeletealert() {
			swal(
				'Deleted!',
				'Your data has been deleted.',
				'success'
			)
		}
	</script>
</head>

<body class="content-menu">
	<!-- CONTENT WRAPPER -->
	<div id="app">
		<?php include 'include/topbar.php'; ?>

		<?php include 'include/leftbar.php'; ?>
		<div class="content container-fluid">
			<header class="page-header">
				<div class="d-flex align-items-center">
					<div class="mr-auto">
						<h1 class="separator">Answer Data</h1>
						<nav class="breadcrumb-wrapper" aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index-2.html"><i
											class="icon dripicons-home"></i></a></li>
								<li class="breadcrumb-item"><a href="javascript:void(0)">Tables</a></li>
								<li class="breadcrumb-item active" aria-current="page">Answer Data</li>
							</ol>
						</nav>
					</div>
				</div>
			</header>
			<?php
                    if ($this->session->flashdata('delete')) {
                        echo '<script type="text/javascript">'.'showdeletealert();'.'</script>';
                    }
                    ?>
			<section class="page-content container-fluid">
				<?php foreach ($answerData as $item) { ?>
				<div class="card">
					<div class="card-body">
						<h5 class="card-title"><?php echo $item->Title; ?>
						</h5>
						<p class="card-text"><?php echo $item->AnswerText; ?>
						</p>
						<p class="card-text" style="margin-top:-15px;"><small class="text-muted"><?php echo $item->AnswerDateTime; ?></small>
						</p>
						<p class="card-text" style="font-size:20px;margin-top:-15px;"><small class="text-muted">-<?php echo $item->ExpertName; ?></small></p>
						<?php
                                            if ('Y' == $item->IsApprove) {?>
						<span class="badge badge-success">Approve</span>
						<?php
                                            } else {?>
						<span class="badge badge-danger">Pending</span>
						<?php
                                            }
                                        ?>&nbsp;&nbsp;

						<a href="<?php echo base_url(); ?>index.php/expert/AnswerController/delete/<?php echo str_replace('/', '-', $this->encryption->encrypt($item->AnswerId)); ?>"
							class="btn btn-danger btn-rounded btn-floating btn-outline">Delete</a>
					</div>
				</div>
				<?php } ?>
			</section>
		</div>
</body>

</html>
