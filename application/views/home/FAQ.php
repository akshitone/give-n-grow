<?php 
$page="news";
?>
<!DOCTYPE html>
<html lang="en-US" class="scheme_original">

<!-- Mirrored from organics-html.axiomthemes.com/blog-portfolio-3-columns.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Jan 2019 09:17:42 GMT -->
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>client_plugin/assets/images/favicon.png" /><title>GiveNGrow | Subsidy</title>

	
	
	
	
	<link rel="stylesheet" href="<?php echo base_url(); ?>client_plugin/assets/css/core.portfolio.css" type="text/css" media="all" >
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

<body class="page body_filled article_style_stretch top_panel_above sidebar_hide">

	<div class="body_wrap">
		<div class="page_wrap">
			<div class="top_panel_fixed_wrap"></div>



			<?php include 'include/Header.php'; ?>


			<div class="top_panel_title top_panel_style_6  title_present breadcrumbs_present scheme_original">
				<div class="top_panel_title_inner top_panel_inner_style_6  title_present_inner breadcrumbs_present_inner">
					<div class="content_wrap">
						<h1 class="page_title">FAQ</h1>
						<div class="breadcrumbs">
							<a class="breadcrumbs_item home" href="#">Home</a><span class="breadcrumbs_delimiter"></span><span class="breadcrumbs_item current">FAQ</span>
						</div>
					</div>
				</div>
			</div>

			<div class="page_content_wrap page_paddings_yes">
			
				<div class="content_wrap">
				
					<div class="content" >
					<section class="spb_25">
									<div class="container">
										<div class="columns_wrap">
										<?php foreach($faqData as $item) {
											if($item->FAQCatId=="1") { ?>
											<div class="column-1_1 column-1_2-sm">
												<div class="sc_section banner_small_bg_1 banner_block" data-animation="animated fadeInUp normal">
													<div class="sc_section_inner">
														<div class="sc_section_overlay">
															<div class="sc_section_content">
																<span class="sc_icon icon-smiley3 alignleft"></span>
																<h4 class="sc_title sc_title_regular"><?php echo $item->Question; ?></h4>
																<p><?php echo $item->Answer; ?></p>
															</div>
														</div>
													</div>
												</div>
											</div><br><br>
										<?php }
											elseif($item->FAQCatId=="2") { ?>
											<div class="column-1_1 column-1_2-sm">
												<div class="sc_section banner_small_bg_2 banner_block" data-animation="animated fadeInUp normal">
													<div class="sc_section_inner">
														<div class="sc_section_overlay">
															<div class="sc_section_content">
																<span class="sc_icon icon-smiley3 alignleft"></span>
																<h4 class="sc_title sc_title_regular"><?php echo $item->Question; ?></h4>
																<p><?php echo $item->Answer; ?></p>
															</div>
														</div>
													</div>
												</div>
											</div><br><br>
										<?php }
										elseif($item->FAQCatId=="3") { ?>
											<div class="column-1_1 column-1_2-sm">
												<div class="sc_section banner_small_bg_3 banner_block" data-animation="animated fadeInUp normal">
													<div class="sc_section_inner">
														<div class="sc_section_overlay">
															<div class="sc_section_content">
																<span class="sc_icon icon-smiley3 alignleft"></span>
																<h4 class="sc_title sc_title_regular"><?php echo $item->Question; ?></h4>
																<p><?php echo $item->Answer; ?></p>
															</div>
														</div>
													</div>
												</div>
											</div><br><br>
										<?php } } ?>
										</div>
									</div>
								</section>
					
					</div>
				</div>
			</div>

			<?php include 'include/Footer.php'; ?>
		</div>

	</div>

	<a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a>

	<script data-cfasync="false" src="<?php echo base_url(); ?>client_plugin/assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="<?php echo base_url(); ?>client_plugin/assets/js/vendor/jquery-3.1.0.min.js"></script>
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
	
	
	<script type="text/javascript" src="<?php echo base_url(); ?>client_plugin/assets/js/vendor/jquery-ui.js"></script>
	
	
	
	<script type="text/javascript" src="<?php echo base_url(); ?>client_plugin/assets/js/vendor/isotope.pkgd.min.js"></script>
	
	
	
	
	
	
	<script type="text/javascript" src="<?php echo base_url(); ?>client_plugin/assets/js/vendor/jquery.hoverdir.js"></script>
</body>

<!-- Mirrored from organics-html.axiomthemes.com/blog-portfolio-3-columns.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Jan 2019 09:17:42 GMT -->
</html>