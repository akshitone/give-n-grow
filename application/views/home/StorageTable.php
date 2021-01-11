<?php 
$page="account";
?>
<!DOCTYPE html>
<html lang="en-US" class="scheme_original">

<!-- Mirrored from organics-html.axiomthemes.com/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Jan 2019 09:15:24 GMT -->
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>client_plugin/assets/images/favicon.png" /><title>GiveNGrow | Storage table</title>

	
	
	
	
	
	<style id="rs-plugin-settings-inline-css" type="text/css"></style>
	<link rel="stylesheet" href="<?php echo base_url(); ?>client_plugin/assets/js/vendor/woocommerce/assets/css/woocommerce-layout.css" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>client_plugin/assets/js/vendor/woocommerce/assets/css/woocommerce-smallscreen.css" type="text/css" media="only screen and (max-width: 768px)" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>client_plugin/assets/js/vendor/woocommerce/assets/css/woocommerce.css" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>client_plugin/assets/js/vendor/prettyphoto/css/prettyPhoto.css" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>client_plugin/assets/js/vendor/swiper/swiper.css" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>client_plugin/assets/css/fontello/css/fontello.css" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>client_plugin/assets/css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>client_plugin/assets/css/core.animation.css" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>client_plugin/assets/css/shortcodes.css" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>client_plugin/assets/css/woo-style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>client_plugin/assets/css/skin.css" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>client_plugin/assets/css/responsive.css" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>client_plugin/assets/css/skin.responsive.css" type="text/css" media="all" />
	
	<!-- Custom CSS -->
	
	<link href="<?php echo base_url(); ?>client_plugin/assets/css/datatables/media/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>client_plugin/assets/css/style.min.css" rel="stylesheet">


<body class="page body_filled article_style_stretch top_panel_above sidebar_hide">

	<div class="body_wrap">
		<div class="page_wrap">
			<div class="top_panel_fixed_wrap"></div>



<?php include 'include/Header.php'; ?>


			<div class="top_panel_title top_panel_style_6  title_present breadcrumbs_present scheme_original">
				<div class="top_panel_title_inner top_panel_inner_style_6  title_present_inner breadcrumbs_present_inner">
					<div class="content_wrap">
						<h1 class="page_title" style="font-family:Raleway;font-size:3.429em;font-weight:700;">Storage</h1>
						<div class="breadcrumbs">
							<a class="breadcrumbs_item home" href="#">My Account</a><span class="breadcrumbs_delimiter"></span><span class="breadcrumbs_item current">Storage</span>
						</div>
					</div>
				</div>
			</div>

			<div class="page_content_wrap page_paddings_no" data-animation="animated fadeInUp normal">
				<div class="content_wrap">
				</br>
					<div class="content">
									<div class="row">
										
										<table id="example23" class="display nowrap table table-hover table-striped table-bordered" data-animation="animated fadeInUp normal">
                                        		<thead>
												<tr>
													<th>Sr.No.</th>
													<th>Agency Name</th>
													<th>Product Name</th>
													<th>ProductPrice</th>
													<th>AddedDate</th>
													<th>ProductType</th>
													<th>Weight</th>
													<th>TotalPayment</th>
													
												</tr>
										</thead>
										<tbody>
												<?php 
												$c=1;
												foreach($storageData as $item) { ?>
													<tr>
														<td><?php echo $c; ?></td>
														<td><?php echo $item->AgencyName; ?></td>
														<td><?php echo $item->ProductName; ?></td>
														<td>&#8377;<?php echo $item->ProductPrice; ?></td>
																			<td><?php $date=date_create($item->AddedDate); echo date_format($date,"d-m-Y"); ?></td>
																			<td><?php echo $item->ProductType; ?></td>
																			<td><?php echo $item->Weight; ?></td>
																			<td>&#8377;<?php echo $item->TotalPayment; ?></td>
													
													</tr>
												<?php $c++; } ?>
										</tbody>
                                    </table>
						</div>	
					</div>
				</div>
			</div>
			</br></br></br></br></br>
			<?php include 'include/Footer.php'; ?>

		</div>

	</div>

	<a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a>

	<script data-cfasync="false" src="<?php echo base_url(); ?>client_plugin/assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="<?php echo base_url(); ?>client_plugin/assets/js/vendor/jquery-3.1.0.min.js"></script>
	
	<script type="text/javascript" src="<?php echo base_url(); ?>client_plugin/assets/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>client_plugin/assets/css/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>client_plugin/assets/css/datatables/media/js/datatables.min.js"></script>
	
	<script type="text/javascript" src="<?php echo base_url(); ?>client_plugin/assets/js/vendor/jquery-migrate.min.js"></script>
	
	<script type="text/javascript" src="<?php echo base_url(); ?>client_plugin/assets/js/vendor/photostack/modernizr.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>client_plugin/assets/js/custom/_main.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>client_plugin/assets/js/vendor/superfish.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>client_plugin/assets/js/vendor/jquery.slidemenu.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>client_plugin/assets/js/custom/core.utils.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>client_plugin/assets/js/custom/core.init.js"></script>
	
	<script type="text/javascript" src="<?php echo base_url(); ?>client_plugin/assets/js/vendor/prettyphoto/jquery.prettyPhoto.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>client_plugin/assets/js/custom/shortcodes.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>client_plugin/assets/js/vendor/swiper/swiper.js"></script>
	
	<script>
	$('#example23').DataTable({
        "aaSorting": []
    });
	</script>
	
	
	
	
	
	
	
	
	
</body>

<!-- Mirrored from organics-html.axiomthemes.com/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Jan 2019 09:15:39 GMT -->
</html>