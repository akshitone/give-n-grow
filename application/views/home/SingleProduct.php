<?php 
$page="product";
?>
<!DOCTYPE html>
<html lang="en-US" class="scheme_original">

<!-- Mirrored from organics-html.axiomthemes.com/shop-single-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Jan 2019 09:16:26 GMT -->
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>client_plugin/assets/images/favicon.png" /><title>GiveNGrow | Single Articles</title>

	<link rel="stylesheet" href="<?php echo base_url(); ?>client_plugin/assets/js/vendor/mediaelement/css/mediaelementplayer.css" type="text/css" media="all" >
	
	
	
	
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
	<link rel="stylesheet" href="<?php echo base_url(); ?>client_plugin/assets/css/form.css" type="text/css" media="all" />

	<!-- Custom CSS -->
	
	<link href="<?php echo base_url(); ?>client_plugin/assets/css/datatables/media/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>client_plugin/assets/css/style.min.css" rel="stylesheet">


<body class="archive woocommerce woocommerce-page body_filled article_style_stretch top_panel_above sidebar_show sidebar_right">

	<div class="body_wrap">
		<div class="page_wrap">
			<div class="top_panel_fixed_wrap"></div>

			<?php include 'include/Header.php'; ?>
			<?php foreach($productData as $item) { ?>
			<div class="top_panel_title top_panel_style_6  title_present breadcrumbs_present scheme_original">
				<div class="top_panel_title_inner top_panel_inner_style_6  title_present_inner breadcrumbs_present_inner">
					<div class="content_wrap">
						<h1 class="page_title" style="font-family:Raleway;font-size:3.429em;font-weight:700;"><?php echo $item->ProductName; ?></h1>
						<div class="breadcrumbs">
							<a class="breadcrumbs_item home" href="#">Home</a><span class="breadcrumbs_delimiter"></span><span class="breadcrumbs_item current">Single product</span>
						</div>
					</div>
				</div>
			</div>

			<div class="page_content_wrap page_paddings_yes">
				<div class="content_wrap">
					<div class="content">
					
						<article class="post_item post_item_single post_item_product">
							<nav class="woocommerce-breadcrumb">
								<a href="#">Home</a>
								<a href="#">Organic Dairy</a>
								Fresh Meal Kit
							</nav>
							<div class="product has-post-thumbnail sale">
								<div class="images">
										<img src="<?php echo base_url(); ?>/uploads/product/<?php echo $item->ProductIcon; ?>" class="attachment-shop_single size-shop_single wp-post-image" alt="26" title="<?php echo $item->ProductName; ?>" />
								</div>
					
								<div class="woocommerce-tabs sc_tabs">
                                    <ul class="tabs" role="tablist" id="tabs_sliders">
                                        <li class="description_tab">
                                            <a href="#tab1" role="tab" data-toggle="tab">Description</a>
                                        </li>
                                        <li class="reviews_tab">
                                            <a href="#tab2" role="tab" data-toggle="tab">Price</a>
                                        </li>

                                    </ul>
									<div class="panel entry-content" id="tab1">
										<h2>Product Description</h2>
										<p><?php echo nl2br(htmlspecialchars($item->ProductDescription)) ; ?></p>
									</div>		
					<?php } ?>
									<div class="panel entry-content" id="tab2">
										<div id="reviews">
											<div id="comments">
												<h2>Product Price</h2>
											</div>
											<div id="review_form_wrapper">
											<table id="example23" class="display nowrap table table-hover table-striped table-bordered">
                                    	<thead>
												<tr>
													<th>PriceDate</th>
													<th>1st Quality Price</th>
													<th>2nd Quality Price</th>
													<th>3rd Quality Price</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach($pricedateData as $item) { ?>
													<tr>
														<td><?php $date=date_create($item->PriceDate); echo date_format($date,"d-m-Y"); ?></td>
														<td><?php echo $item->SellerPrice1; ?></td>
														<td><?php echo $item->SellerPrice2; ?></td>
														<td><?php echo $item->SellerPrice3; ?></td>
													</tr>
												<?php } ?>
											</tbody>
                                    </table>
											</div>
											<div class="clear">
											</div>
										</div>
									</div>
								</div>
								<br>
								<div class="related products">
									<h2>Related Products</h2>
									<ul class="products">
									<?php foreach($relatedProductData as $item) { ?>
										<li class="first product has-post-thumbnail column-1_3">
											<div class="post_item_wrap">
												<div style="height:300px;" class="post_featured">
													<div class="post_thumb">
													<img src="<?php echo base_url(); ?>/uploads/product/<?php echo $item->ProductIcon; ?>" class="attachment-shop_single size-shop_single wp-post-image" alt="26" title="<?php echo $item->ProductName; ?>" />
														<div class="woo_thumb_buttons">
															<div class="quick_view_images">
															<a href="<?php echo base_url(); ?>/uploads/product/<?php echo $item->ProductIcon; ?>" class="woocommerce-main-image zoom sc_button quick_view_button icon-resize-full-1" title="">Quick View</a>
															</div>
															<div class="shortcode_add_to_button">
															<a href="<?php echo base_url(); ?>index.php/home/ProductsController/viewProduct/<?php echo str_replace("/","-",$this->encryption->encrypt($item->ProductId)); ?>" class="button">View Product</a>
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
										</li>
									<?php } ?>
									</ul>
								</div>
							</div>
						</article>
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
	
	<script type="text/javascript" src="<?php echo base_url(); ?>client_plugin/assets/js/vendor/woocommerce/assets/js/jquery.prettyPhoto.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>client_plugin/assets/js/vendor/woocommerce/assets/js/jquery.prettyPhoto.init.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>client_plugin/assets/js/custom/shortcodes.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>client_plugin/assets/js/vendor/swiper/swiper.js"></script>
	
	
	
	<script type='text/javascript' src='<?php echo base_url(); ?>client_plugin/assets/js/vendor/core.min.js'></script>
	<script type='text/javascript' src='<?php echo base_url(); ?>client_plugin/assets/js/vendor/widget.min.js'></script>
	<script type='text/javascript' src='<?php echo base_url(); ?>client_plugin/assets/js/vendor/tabs.min.js'></script>
	<script type='text/javascript' src='<?php echo base_url(); ?>client_plugin/assets/js/vendor/effect.min.js'></script>
	<script type='text/javascript' src='<?php echo base_url(); ?>client_plugin/assets/js/vendor/effect-fade.min.js'></script>
	<script>
	$('#example23').DataTable({
        
    });
	</script>
	
	<script>
	$('#example24').DataTable({
        
    });
	</script>
</body>

<!-- Mirrored from organics-html.axiomthemes.com/shop-single-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Jan 2019 09:16:33 GMT -->
</html>