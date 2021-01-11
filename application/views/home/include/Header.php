<header class="top_panel_wrap top_panel_style_7 scheme_original">
    <div class="top_panel_wrap_inner top_panel_inner_style_7 top_panel_position_over">

    <div class="top_panel_top">
			    
    <?php if(!isset($this->session->userdata["farmerloggedin"])) { ?>
			<div class="content_wrap clearfix">
				<div class="top_panel_top_contact_area">
					Welcome to our Give N Grow website!
				</div>
				<div class="top_panel_top_user_area">
					<ul id="menu_user" class="menu_user_nav">
						<li class="menu_user_login">
							<?php
								if($this->session->flashdata("error"))
								{
								?>
									<div class="sc_infobox sc_infobox_style_error sc_infobox_closeable sc_infobox_iconed icon-sad70 inited">
										<?php echo $this->session->flashdata("error"); ?>
									</div>
							<?php } ?>		
						</li>	
						<li class="menu_user_login">
							<a href="#popup_login" class="popup_link popup_login_link icon-user189">Login</a>
							<div id="popup_login" class="popup_wrap popup_login bg_tint_light">
								<a href="#" class="popup_close"></a>
								<div class="form_wrap">
										<form action="<?php echo base_url(); ?>index.php/home/FarmerLoginController/dologin" method="post" name="login_form">
											<input type="hidden" name="redirect_to" value="index.html">
											<div class="popup_form_field login_field iconed_field icon-user">
												<input type="text" id="log" name="txtcode" value="" placeholder="Enter Your Code">
											</div>
											<div class="popup_form_field password_field iconed_field icon-lock">
												<input type="password" id="password" name="txtpwd" value="" placeholder="Enter Password">
											</div>
											<div class="popup_form_field remember_field">
												<a href="<?php echo base_url(); ?>index.php/home/FarmerLoginController/ForgetPassword" class="forgot_password">Forgot password?</a>
											</div>
											<div class="popup_form_field submit_field">
												<input type="submit" name="btnsubmit" class="submit_button" value="Login">
											</div>
											<div class="popup_form_field remember_field">
												<a href="<?php echo base_url(); ?>index.php/home/FarmerController/index" class="forgot_password">Be A Farmer</a>
											</div>
										</form>
								</div>
							</div>
						</li>
						<li class="menu_user_social">
							<div class="top_panel_top_socials">
								<div class="sc_socials sc_socials_type_icons sc_socials_shape_square sc_socials_size_tiny">
									<div class="sc_socials_item">
										<a href="https://twitter.com/" target="_blank" class="social_icons social_twitter-1">
											<span class="icon-twitter-1"></span>
										</a>
									</div><div class="sc_socials_item">
										<a href="https://www.facebook.com/" target="_blank" class="social_icons social_facebook">
											<span class="icon-facebook"></span>
										</a>
									</div><div class="sc_socials_item">
										<a href="https://aboutme.google.com/" target="_blank" class="social_icons social_gplus">
											<span class="icon-gplus"></span>
										</a>
									</div><div class="sc_socials_item">
										<a href="https://in.pinterest.com/" target="_blank" class="social_icons social_pinterest-1">
											<span class="icon-pinterest-1"></span>
										</a>
									</div><div class="sc_socials_item">
										<a href="https://www.skype.com/" target="_blank" class="social_icons social_skype">
											<span class="icon-skype"></span>
										</a>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
	<?php } ?>
	<?php if(isset($this->session->userdata["farmerloggedin"])) { ?>
			<div class="content_wrap clearfix">
				<div class="top_panel_top_user_area">
					<ul id="menu_user" class="menu_user_nav">
						<li class="menu_user_cart">
							<a href="#" class="top_panel_cart_button sf-with-ul" data-items="0" data-summa="€0.00">
								<span class="sc_icon icon-smiley3 alignleft"></span>
								<span class="contact_label contact_cart_label">Notifications</span>
							</a>
							<ul class="widget_area sidebar_cart sidebar fadeOut animated fast" style="display: none;">
								<li>
									<div class="widget woocommerce widget_shopping_cart">
										<div class="hide_cart_widget_if_empty">
											<div class="widget_shopping_cart_content">
												<ul class="cart_list product_list_widget">
												<?php 
													$result=$this->db->query("select * from tbl_notification where FarmerId IS NOT NULL and FarmerId='".$this->session->userdata["farmerloggedin"]["FarmerId"]."' order by NotificationDate desc limit 5");
													$notificationData=$result->result();
													foreach($notificationData as $item) {
												?>
													<li class="empty"><div style="margin-bottom:4px;margin-top:20px;"><strong>&#10019;&nbsp;&nbsp;<?php echo $item->Title; ?></strong></div>
													<div><?php echo $item->Description; ?></div>
													<div style="font-size:8px;"><?php echo $item->NotificationDate; ?></div></li>
													<?php } ?>
												</ul>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		<?php } ?>
		</div>
		<div class="top_panel_middle" >
			<div class="content_wrap">
				<div class="columns_wrap columns_fluid">
					<div class="column-1_6 contact_logo">
						<div class="logo">
							<img src="<?php echo base_url(); ?>/admin_plugin/assets/img/avatars/logo_givengrow2.png" width="250" height="25"/>
						</div>
					</div><div class="column-5_6 menu_main_wrap">
						<div class="">				
						</div>
						<a href="#" class="menu_main_responsive_button icon-menu"></a>
						<nav class="menu_main_nav_area">
							<ul id="menu_main" class="menu_main_nav">
								<li class="<?php if($page=="home") echo "current-menu-ancestor"; ?> menu-item-has-children">
									<a href="<?php echo base_url(); ?>index.php/home/HomeController/index">Home</a>
								</li>
								<li class="<?php if($page=="about") echo "current-menu-ancestor"; ?>">
									<a href="<?php echo base_url(); ?>index.php/home/AboutUsController/index">About Us</a>
								</li>
								<li class="<?php if($page=="product") echo "current-menu-ancestor"; ?>">
									<a href="<?php echo base_url(); ?>index.php/home/ProductsController/index">Products</a>
								</li>
								
								<li class="<?php if($page=="news") echo "current-menu-ancestor"; ?> menu-item-has-children">
									<a href="<?php echo base_url(); ?>index.php/home/ArticleController/index">News & blog</a>
									<ul class="sub-menu">
											<li class="">
											<a href="<?php echo base_url(); ?>index.php/home/ArticleController/index">Articles</a>
										</li>
										<li class="">
											<a href="<?php echo base_url(); ?>index.php/home/SubsidyController/index">Subsidy</a>
										</li>
										<li class="">
											<a href="<?php echo base_url(); ?>index.php/home/FAQController/index">FAQ</a>
										</li>
										<?php if(isset($this->session->userdata["farmerloggedin"])) { ?>
										<li class="">
											<a href="<?php echo base_url(); ?>index.php/home/QuestionController/viewQuestion">Ask Question</a>
										</li>
										<?php } ?>
									</ul>
								</li>
								<li class="<?php if($page=="contact") echo "current-menu-ancestor"; ?>">
									<a href="<?php echo base_url(); ?>index.php/home/ContactController/index">Contacts</a>
								</li>
								<li class="<?php if($page=="feedback") echo "current-menu-ancestor"; ?>">
									<a href="<?php echo base_url(); ?>index.php/home/FeedbackController/index">Your Feedback</a>
								</li>
								<?php if(isset($this->session->userdata["farmerloggedin"])) { ?>
								<li class="<?php if($page=="account") echo "current-menu-ancestor"; ?> menu-item-has-children">
									<a href="<?php echo base_url(); ?>index.php/home/MyAccountController/viewStorage">My Account</a>
									<ul class="sub-menu">
										<li class="">
											<a href="<?php echo base_url(); ?>index.php/home/MyAccountController/viewStorage">Storage</a>
										</li>
										<li class="">
											<a href="<?php echo base_url(); ?>index.php/home/MyAccountController/viewWallet">Wallet</a>
										</li>
										<li class="">
											<a href="<?php echo base_url(); ?>index.php/home/WithdrawRequestController/viewWithdrawRequest">Withdraw Request</a>
										</li>
										
										<li class="">
											<a href="<?php echo base_url(); ?>index.php/home/FarmerLoginController/logout">LogOut</a>
										</li>
									</ul>
								</li>
								<?php } ?>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>