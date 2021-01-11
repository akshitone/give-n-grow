<?php 
$page="product";
?>
<!DOCTYPE html>
<html lang="en-US" class="scheme_original">

<!-- Mirrored from organics-html.axiomthemes.com/shop-shop-classic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Jan 2019 09:15:39 GMT -->
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>client_plugin/assets/images/favicon.png" /><title>GiveNGrow | Productc</title>

	
	
	 
	

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



<body class="archive woocommerce woocommerce-page body_filled article_style_stretch top_panel_above sidebar_show sidebar_right">

	<div class="body_wrap">
		<div class="page_wrap">
			<div class="top_panel_fixed_wrap"></div>



<?php include 'include/Header.php'; ?>


			<div class="top_panel_title top_panel_style_6  title_present breadcrumbs_present scheme_original">
				<div class="top_panel_title_inner top_panel_inner_style_6  title_present_inner breadcrumbs_present_inner">
					<div class="content_wrap">
						<h1 class="page_title">Shop</h1>
						<div class="breadcrumbs">
							<a class="breadcrumbs_item home" href="#">Home</a><span class="breadcrumbs_delimiter"></span><span class="breadcrumbs_item current">Shop</span>
						</div>
					</div>
				</div>
			</div>

			<div class="page_content_wrap page_paddings_yes">
				<div class="content_wrap">
					<div class="content">
						<div class="list_products shop_mode_thumbs">
							<nav class="woocommerce-breadcrumb" >
								<a href="#">Home</a>&nbsp;&#47;&nbsp;Shop
							</nav>
							<p class="woocommerce-result-count">
								Showing all 11 results
							</p>
							
							<ul class="products">
								<?php foreach($productData as $item) { ?>
								<li class="first product has-post-thumbnail column-1_3">
									<div class="post_item_wrap">
										<div class="post_featured">
											<div class="post_thumb">
												<div>
													<img src="<?php echo base_url(); ?>/uploads/product/<?php echo $item->ProductIcon; ?>" height="500" width="500" />
												</div>
												<div class="woo_thumb_buttons">
													<div class="quick_view_images">
														<a href="<?php echo base_url(); ?>/uploads/product/<?php echo $item->ProductIcon; ?>" class="woocommerce-main-image zoom sc_button quick_view_button icon-resize-full-1" title="">Quick View</a>
													</div>
													<div class="shortcode_add_to_button">
														<a href="<?php echo base_url(); ?>index.php/home/ProductsController/viewProduct/<?php echo str_replace("/","-",$this->encryption->encrypt($item->ProductId)); ?>" class="icon-shopping-cart13 button add_to_cart_button">View Product</a>
													</div>
												</div>
											</div>
										</div>
										<div class="post_content">
											<h3>
											<a href="#"><?php echo $item->ProductName; ?></a>
											</h3>
											<div class="product_cats">
											<a href="<?php echo base_url(); ?>index.php/home/ProductsController/<?php echo $item->CategoryName; ?>"><?php echo $item->CategoryName; ?></a>
											</div>
										</div>
									</div>
									</li><?php } ?>
							</ul>
						</div>
					</div>

<div class="sidebar widget_area scheme_original">
	<div class="sidebar_inner widget_area_inner">
		
		<aside class="widget woocommerce widget_product_categories">
			<h5 class="widget_title">Product Categories</h5>
			<?php foreach($categoryData as $item) { ?>
			<ul class="product-categories">
				<li class="cat-item cat-item-96">
				<a href="<?php echo base_url(); ?>index.php/home/ProductsController/<?php echo $item->CategoryName; ?>"><?php echo $item->CategoryName; ?></a>
					<span class="count">(4)</span>
				</li>
			</ul>
			<?php } ?>
		</aside>
		<aside class="widget widget_archive">
      <h5 class="widget_title">Expert</h5>
      <ul>
			<?php foreach($expertData as $item) { ?>
        <li>
          <?php echo $item->ExpertName; ?>
        </li>
			<?php } ?>
      </ul>
    </aside>
    <aside class="widget widget_recent_posts">
					<h5 class="widget_title">Recent Posts</h5>
					<?php 
					$result=$this->db->query("select a.*,c.CategoryName from tbl_article a left join tbl_category as c on c.CategoryId=a.CategoryId ORDER BY ArticleDateTime DESC LIMIT 0,2");
					$articleData=$result->result();
					foreach($articleData as $item) { ?>
					<article class="post_item with_thumb first">
						<div class="post_thumb">
							<img width="75" height="75" alt="GMOs: Your Right To Know" src="<?php echo base_url(); ?>/uploads/article/<?php echo $item->Image1; ?>">
						</div>
						<div class="post_content">
							<h6 class="post_title">
							<a href="<?php echo base_url(); ?>index.php/home/ArticleController/view/<?php echo str_replace("/","-",$this->encryption->encrypt($item->ArticleId)); ?>"><?php echo $item->Title; ?></a>
							</h6>
						</div>
					</article>
					<?php } ?>
				</aside>
 
    <aside class="widget widget_text">
      <h5 class="widget_title">Contact Us</h5>
      <div class="textwidget">121 International Business Centre,<br>Piplod, Dummas Road, Surat 395007<br>+91 787 4 987 797<br> +91 83 202 362 59</div>
    </aside>
	</div>
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
	
	
	
	
	
	
	
	
</body>

<!-- Mirrored from organics-html.axiomthemes.com/shop-shop-classic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Jan 2019 09:16:26 GMT -->
</html>