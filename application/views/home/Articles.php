<?php 
$page="news";
?>
<!DOCTYPE html>
<html lang="en-US" class="scheme_original">

<!-- Mirrored from organics-html.axiomthemes.com/blog-standard-with-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Jan 2019 09:16:38 GMT -->
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>client_plugin/assets/images/favicon.png" /><title>GiveNGrow | Articles</title>

	
	
	
	
	
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


<body class="page body_filled article_style_stretch top_panel_above sidebar_show sidebar_right">

	<div class="body_wrap">
		<div class="page_wrap">
			<div class="top_panel_fixed_wrap"></div>

			<?php include 'include/Header.php'; ?>


			<div class="top_panel_title top_panel_style_6  title_present breadcrumbs_present scheme_original">
				<div class="top_panel_title_inner top_panel_inner_style_6  title_present_inner breadcrumbs_present_inner">
					<div class="content_wrap">
						<h1 class="page_title">Articles</h1>
						<div class="breadcrumbs">
							<a class="breadcrumbs_item home" href="#">Home</a><span class="breadcrumbs_delimiter"></span><span class="breadcrumbs_item current">Articles</span>
						</div>
					</div>
				</div>
			</div>

			<div class="page_content_wrap page_paddings_yes">
				<div class="content_wrap">
					<div class="content">
					<?php foreach($articleData as $item) { ?>
						<article class="post_item post_item_excerpt post has-post-thumbnail">
						    <div class="post_featured">
						        <div class="post_thumb" data-image="<?php echo base_url(); ?>client_plugin/assets/images/image-7.jpg" data-title="GMOs: Your Right To Know">
						            <a class="hover_icon icon-eye-light" href="<?php echo base_url(); ?>index.php/home/ArticleController/view/<?php echo str_replace("/","-",$this->encryption->encrypt($item->ArticleId)); ?>">
						                <img alt="GMOs: Your Right To Know" src="<?php echo base_url(); ?>/uploads/article/<?php echo $item->Image1; ?>">
						            </a>
						        </div>
						    </div>
						    <div class="post_content clearfix">
						        <h3 class="post_title">
						        <a href="<?php echo base_url(); ?>index.php/home/ArticleController/view/<?php echo str_replace("/","-",$this->encryption->encrypt($item->ArticleId)); ?>">
						            <span class="post_icon icon-book-open"></span>
						            <?php echo $item->Title; ?>
						        </a>
						        </h3>
						        <div class="post_info">
						            <span class="post_info_item post_info_posted">
						                <a href="#" class="post_info_date"><?php $date=date_create($item->ArticleDateTime); echo date_format($date,"d-m-Y"); ?></a>
						            </span>
						        </div>
						        <div class="post_descr">
						            <p><?php echo $item->Description; ?></p>
						            <a href="<?php echo base_url(); ?>index.php/home/ArticleController/view/<?php echo str_replace("/","-",$this->encryption->encrypt($item->ArticleId)); ?>" class="sc_button sc_button_round sc_button_style_filled sc_button_scheme_original sc_button_size_small">READ MORE</a>
						        </div>
						    </div>
						</article>
						<?php } ?>
						
					</div>

<div class="sidebar widget_area scheme_original">
  <div class="sidebar_inner widget_area_inner">
    <aside class="widget widget_categories">
      <h5 class="widget_title">Categories</h5>
      <ul>
	  <?php foreach($articleCatData as $item) { ?>
        <li class="cat-item">
          <a href="<?php echo base_url(); ?>index.php/home/ArticleController/showCategory/<?php echo str_replace("/","-",$this->encryption->encrypt($item->CategoryId)); ?>" ><?php echo $item->CategoryName; ?></a>
		</li>
		<?php } ?>
      </ul>
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

<!-- Mirrored from organics-html.axiomthemes.com/blog-standard-with-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Jan 2019 09:16:40 GMT -->
</html>