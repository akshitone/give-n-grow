<?php 
$page="";
?>
<!DOCTYPE html>
<html lang="en-US" class="scheme_original">

<!-- Mirrored from organics-html.axiomthemes.com/contacts.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Jan 2019 09:19:55 GMT -->
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>client_plugin/assets/images/favicon.png" /><title>GiveNGrow | Farmer Inputs</title>

	
	
	
	
	
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


<body class="page body_filled article_style_stretch top_panel_above sidebar_hide">

	<div class="body_wrap">
		<div class="page_wrap">
			<div class="top_panel_fixed_wrap"></div>



<?php include 'include/Header.php'; ?>


			<div class="top_panel_title top_panel_style_6  title_present breadcrumbs_present scheme_original">
				<div class="top_panel_title_inner top_panel_inner_style_6  title_present_inner breadcrumbs_present_inner">
					<div class="content_wrap">
						<h1 class="page_title">Farmer Registration</h1>
						<div class="breadcrumbs">
							<a class="breadcrumbs_item home" href="#">Home</a><span class="breadcrumbs_delimiter"></span><span class="breadcrumbs_item current">Farmer</span>
						</div>
					</div>
				</div>
			</div>
			<div class="page_content_wrap page_paddings_no">
				<div class="content">
					<div class="content_wrap">
						<div class="sc_form_wrap">
						    <div class="sc_form_style_form_2">
								<?php
									if($this->session->flashdata("add"))
									{
									?>
										<div class="sc_infobox sc_infobox_style_success sc_infobox_iconed icon-like83 inited" data-animation="animated fadeInUp normal">
											<?php echo $this->session->flashdata("add"); ?>
										</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="page_content_wrap page_paddings_no">
				<div class="content">
					<article class="post_item post_item_single page">
						<div class="post_content">
							<section class="spb_25">
								<div class="container-fluid">
					                
								</div>
							</section>
							<section class="spt_80 spb_100">
								<div class="container">
									<div class="content_wrap">
										<div class="sc_form_wrap">
										    <div class="sc_form_style_form_2">
												<h2 class="sc_form_title sc_item_title">
													<b>Farmer Inputs</b>
												</h2>
												<div class="sc_form_descr sc_item_descr">Organic Store is your source for healthy way of living. We welcome you at our facility at any time!</div>  
										       			<div class="form-style-8">
															<form id="FarmerForm" method="post" action="<?php echo base_url(); ?>index.php/home/FarmerController/insertData" enctype="multipart/form-data">
																	<input type="text" name="txtfarmername" placeholder="Name" /><br>
																	<b><span>Farmer Icon </span></b><input type="file" name="txtfarmericon" placeholder="Image" /><br><br>
                                                                    <input type="text" name="txtfarmercontact" placeholder="Contact" />
																	<textarea name="txtfarmeraddress" placeholder="Address" onkeyup="adjust_textarea(this)"></textarea>
                                                                    <input type="password" name="txtfarmerpassword" placeholder="Password" />
                                                                    <input type="text" name="txtfarmeraadharno" placeholder="Aadhar No" /><br>
                                                                    <b><span>Aadhar Front Image </span></b><input type="file" name="txtaadharfrontimg" placeholder="Aadhar Front Image" /><br><br>
                                                                    <b><span>Aadhar Back Image </span></b><input type="file" name="txtaadharbackimg" placeholder="Aadhar Back Image" /><br><br>
																	<button type="submit" id="btninsert" name="btninsert">Submit</button>
																</form>
															</div>
													    </form>										                
										            </div>
										        </div>
										    </div>
										</div>
									</div>
								</div>
							</section>
						</div>
					</article>
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
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAB4BoYuLptxWMVgKR5ed4ec3M7d7s4oVo"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>client_plugin/assets/js/custom/core.googlemap.js"></script>
	<script type="text/javascript">
		//auto expand textarea
		function adjust_textarea(h) {
			h.style.height = "20px";
			h.style.height = (h.scrollHeight)+"px";
		}
	</script>
	<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/modernizr/modernizr.custom.js"></script>
		<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/jquery/dist/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>validation/jquery.validate.js"></script>
		<script src="<?php echo base_url(); ?>validation/additional-methods.min.js"></script>
		<script>
			jQuery.validator.addMethod("nameRegex", function(value, element) {
    	        return this.optional(element) || /^[a-z\ \s]+$/i.test(value);
    	    }, "Name must contain only letters & space");
			$("#FarmerForm").validate({
                
				rules: {
					txtfarmername: {
						required:true,
						nameRegex:true
						},
					txtfarmericon : {
						 required:true,
						 extension:"jpg,png,jpeg,gif"
						 
					},
					txtfarmercontact: {
									required:true,
									minlength:10,
									maxlength:10,
									number:true
					},
					txtfarmeraddress: "required",
					txtfarmerpassword: {
									required:true,
									minlength:6,
									maxlength:15
					},
					txtfarmeraadharno: {
									required:true,
									minlength:12,
									maxlength:12,
									number:true
					},
					txtaadharfrontimg : {
						 required:true,
						 extension:"jpg,png,jpeg,gif"
						 
					},
					txtaadharbackimg : {
						 required:true,
						 extension:"jpg,png,jpeg,gif"
						 
					}
				},
				messages: {
					txtfarmername: {
						required:"Farmer Name is required",
						nameRegex:"Farmer Name must contain only letters & space"
					},
					txtfarmericon : {
						 required:"Farmer image is required",
						 extension:"select image file extension like jpg,png,jpeg,gif"
						 
					},
					txtfarmercontact: { 
							required:"Contact Number is required",
							minlength:"Contact Number must be 10 digit",
							maxlength:"Contact Number must be 10 digit",
							number: "Contact Number must be digit"
					},
					txtfarmeraadharno: { 
							required:"Aadhar Number is required",
							minlength:"Aadhar Number must be 12 digit",
							maxlength:"Aadhar Number must be 12 digit",
							number: "Aadhar Number must be digit"
					},
					txtfarmeraddress: "Farmer Address is required",
					txtfarmerpassword: { 
							required:"Password is required",
							minlength:"Password minimum length 6",
							maxlength:"Password maximum length 15"
					},
					txtaadharfrontimg : {
						 required:"Aadhar front image is required",
						 extension:"select image file extension like jpg,png,jpeg,gif"
						 
					},
					txtaadharbackimg : {
						 required:"Aadhar back image is required",
						 extension:"select image file extension like jpg,png,jpeg,gif"
						 
					}
				}
			});

		
		$("#btninsert").on("click", function() {
                    if (!$("#FarmerForm").valid()) {
                        return false;
                    }
                });


		</script>
	
</body>

<!-- Mirrored from organics-html.axiomthemes.com/contacts.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Jan 2019 09:19:55 GMT -->
</html>
