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
						<h1 class="page_title">Subsidy</h1>
						<div class="breadcrumbs">
							<a class="breadcrumbs_item home" href="#">Home</a><span class="breadcrumbs_delimiter"></span><span class="breadcrumbs_item current">Subsidy</span>
						</div>
					</div>
				</div>
			</div>
			<div class="page_content_wrap page_paddings_yes">
				<div class="content_wrap">
					<div class="content">
					    <div class="isotope_wrap " data-columns="3">
							<?php foreach($subsidyData as $item) { ?>
					        <div class="isotope_item isotope_item_portfolio isotope_item_portfolio_3 isotope_column_3 flt_176">
					            <article class="post_item post_item_portfolio post_item_portfolio_3 post_format_standard odd">
					                <div class="post_content isotope_item_content ih-item colored square effect_shift left_to_right">
					                    <div class="post_featured img">
					                        <a href="blog-single-post.html">
					                            <img alt="Why Farm Organically?" src="<?php echo base_url(); ?>/uploads/subsidy/<?php echo $item->Image; ?>" style="height:400px;" >
					                        </a>
					                    </div>
					                    <div class="post_info_wrap info">
					                        <div class="info-back">
					                            <h4 class="post_title">
					                            <a ><?php echo $item->Title; ?></a>
					                            </h4>
					                            <div class="post_descr">
					                                <p class="post_info" >
					                                    <span class="post_info_item post_info_posted">
					                                        <a class="post_info_date"><?php echo $item->Description; ?></a>
					                                    </span>
					                                </p>
					                                <p>
					                                    <a><b>Address:</b><br><?php echo $item->Address; ?></a>
													</p>
													<p>
					                                    <a><b>Contact:</b><br><?php echo $item->Contact; ?></a>
													</p>
													<p>
					                                    <a href="<?php echo $item->ApplicationLink; ?>" target="_blank"><b>ApplicationLink:</b><br><?php echo $item->ApplicationLink; ?></a>
					                                </p>
					                                
					                                <p class="post_buttons"></p>
					                            </div>
					                        </div>
					                    </div>
					                </div>
					            </article>
							</div>
							<?php } ?>	
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