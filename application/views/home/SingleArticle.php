<?php 
$page='news';
?>
<!DOCTYPE html>
<html lang="en-US" class="scheme_original">

<!-- Mirrored from organics-html.axiomthemes.com/blog-single-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Jan 2019 09:21:38 GMT -->
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


<body class="page body_filled article_style_stretch top_panel_above sidebar_show sidebar_right">

	<div class="body_wrap">
		<div class="page_wrap">
			<div class="top_panel_fixed_wrap"></div>
			<?php include 'include/Header.php'; ?>
			<?php foreach($articleData as $item) { ?>
			<div class="top_panel_title top_panel_style_6  title_present breadcrumbs_present scheme_original">
				<div class="top_panel_title_inner top_panel_inner_style_6  title_present_inner breadcrumbs_present_inner">
					<div class="content_wrap">
						<h1 class="page_title"><?php echo $item->Title; ?></h1>
						<div class="breadcrumbs">
							<a class="breadcrumbs_item home" href="#">Home</a><span class="breadcrumbs_delimiter"></span><span class="breadcrumbs_item current">Single Article</span>
						</div>
					</div>
				</div>
			</div>

			<div class="page_content_wrap page_paddings_yes">
				<div class="content_wrap">
					
					    <article class="post_item post_item_single has-post-thumbnail">
					        <section class="post_featured">
					            <div class="post_thumb" data-image="<?php echo base_url(); ?>client_plugin/assets/images/image-7.jpg" data-title="Image Post">
					                <a class="hover_icon hover_icon_view" href="<?php echo base_url(); ?>/uploads/article/<?php echo $item->Image2; ?>" title="Image Post">
									<a class="hover_icon hover_icon_view" href="<?php echo base_url(); ?>/uploads/article/<?php echo $item->Image1; ?>" title="Image Post">
					                    <img alt="Image Post" src="<?php echo base_url(); ?>/uploads/article/<?php echo $item->Image1; ?>">
					                </a>
					            </div>
					        </section>
					        <div class="post_info">
					            <span class="post_info_item post_info_posted">
					                <a href="#" class="post_info_date date updated"><?php $date=date_create($item->ArticleDateTime); echo date_format($date,"d-m-Y"); ?></a>
					            </span>
					            <span class="post_info_item post_info_posted_by vcard"> by <a href="#" class="post_info_author"><?php echo $item->ExpertName; ?></a></span>
					            <span class="post_info_item post_info_tags">
					                in
					                <a class="category_link" href="#"><?php echo $item->CategoryName; ?></a>
					            </span>
								<span class="post_info_item post_info_counters">
									<?php if(isset($this->session->userdata["farmerloggedin"]))
											{ 
												if($checkLikeData>0)
												{ ?>
														<span class="post_counters_item post_counters_comments icon-comment" title="Comments" href="#" ><span class="post_counters_number"><?php echo $getComment; ?></span></span>
														<a class="post_counters_item icon-heart enabled" title="Like">
												<?php } else { ?>
														<span class="post_counters_item post_counters_comments icon-comment" title="Comments" href="#"><span class="post_counters_number"><?php echo $getComment; ?></span></span>
														<a class="post_counters_item icon-heart enabled" title="Like" href="<?php echo base_url(); ?>index.php/home/ArticleController/insertLikeData/<?php echo str_replace("/","-",$this->encryption->encrypt($item->ArticleId));  ?>">
												<?php } } else {?>
														<span class="post_counters_item post_counters_comments icon-comment" title="Comments" href="#"><span class="post_counters_number"><?php echo $getComment; ?></span></span>
														<a class="post_counters_item icon-heart enabled" title="Like">
												<?php }
											} ?>
									<span class="post_counters_number">
										<?php echo $likeData; ?>
									</span></a>		
									<span class="post_counters_number">
										<h5>Ratings:<?php
										if($averageRating[0]->totalrows==0)
										{
											echo 0;
										}
										else
										{
											echo ($averageRating[0]->totalrating/$averageRating[0]->totalrows); 
										} ?></h5>
									</span>
					            </span>
					        </div>
					        <section class="post_content">
							<?php foreach($articleData as $item) { ?>
                  				<p><?php echo $item->Description; ?></p>
                      			<div class="post_info post_info_bottom">
					                <span class="post_info_item post_info_tags">
					                    Tags:
					                    <a class="post_tag_link" href="#"><?php echo $item->Tags; ?></a>
					                </span>
					            </div>
					        </section>
						<?php } ?>
						<?php foreach($commentData as $item) { ?>
					        <section class="post_author author vcard">
					            <div class="post_author_avatar">
					                    <img alt='' src="<?php echo base_url(); ?>/uploads/farmer/<?php echo $item->FarmerIcon; ?>" width="100"/>
					            </div>
					            <h6 class="post_author_title">About 
					            <span>
					                <a class="fn"><?php echo $item->FarmerName; ?></a>
					            </span>
					            </h6>
					            <div class="post_author_info">"<?php echo $item->CommentText; ?>"</div>
					        </section>
					        <section class="related_wrap related_wrap_empty">
					        </section>
						<?php } ?>
					    </article>
						<?php if(isset($this->session->userdata["farmerloggedin"])) { ?>
					    <section class="comments_wrap">
					        <div class="comments_form_wrap">
					            <h2 class="section_title comments_form_title">Add Comment</h2>
					            <div class="comments_form">
					                <div id="respond" class="comment-respond">
										<div class="form-style-8">
											<form method="post" action="<?php echo base_url(); ?>index.php/home/ArticleController/insertComment">
												<input type="hidden" name="txtarticleid" value="<?php echo $articleData[0]->ArticleId; ?>"/>
												<textarea name="txtcomment" placeholder="Comment" onkeyup="adjust_textarea(this)"></textarea>
												<button type="submit" name="contact_submit">Give Comment</button>
											</form>
										</div>
					                </div>
					            </div>
					        </div>
					    </section>
					<?php } ?>
					<?php if(isset($this->session->userdata["farmerloggedin"]))
							{
								if($checkRatingData>0)
								{
					?>
					<section class="comments_wrap">
					    <div class="comments_form_wrap">
					    	<h2 class="section_title comments_form_title">Your Ratings</h2>
					            <div class="comments_form">
					                <div id="respond" class="comment-respond">
					
					
										<div class="form-style-8">					
											<h4>Your Ratings:<?php echo $resultRatingData[0]->Rating; ?></h4>
					<?php } else
							{ ?>
												<form method="post" action="<?php echo base_url(); ?>index.php/home/ArticleController/insertRatings" enctype="multipart/form-data">
					<?php foreach($articleData as $item) { ?>
						<section class="comments_wrap">
					    <div class="comments_form_wrap">
					    	<h2 class="section_title comments_form_title">Give Ratings</h2>
					            <div class="comments_form">
					                <div id="respond" class="comment-respond">
														<input type="hidden" value="<?php echo $item->ArticleId; ?>" name="txtarticleid" >
					<?php } ?>
																	
														<input type="radio" name="radioRating" id="rating1" value="1">1 
														<input type="radio" name="radioRating" id="rating2" value="2">2 
														<input type="radio" name="radioRating" id="rating3" value="3">3 
														<input type="radio" name="radioRating" id="rating4" value="4">4 
														<input type="radio" name="radioRating" id="rating5" value="5">5 <br><br>

														<button type="submit" name="btnrating">Give Ratings</button>
												</form>
										</div>
					<?php } } ?>
						        	</div>
					            </div>
					        </div>
					    </section>
						<?php if(!isset($this->session->userdata["farmerloggedin"]))
							{
						?>
						<section class="comments_wrap" align="center">
					    <div class="comments_form_wrap">
					    	<h2 class="section_title comments_form_title">YOU CAN COMMENTS AND GIVE RATINGS AFTER JOIN US!</h2>
					    </section>
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
	<script type="text/javascript">
		//auto expand textarea
		function adjust_textarea(h) {
			h.style.height = "20px";
			h.style.height = (h.scrollHeight)+"px";
		}
	</script>
	
	
	
	
	
	
	
	
	
</body>

<!-- Mirrored from organics-html.axiomthemes.com/blog-single-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Jan 2019 09:21:40 GMT -->
</html>