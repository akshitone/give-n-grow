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
    <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>client_plugin/assets/images/favicon.png" /><title>GiveNGrow | Wallet Table</title>

	
	
	
	
	
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


<body class="page body_filled article_style_stretch top_panel_above sidebar_hide">

	<div class="body_wrap">
		<div class="page_wrap">
			<div class="top_panel_fixed_wrap"></div>



<?php include 'include/Header.php'; ?>


			<div class="top_panel_title top_panel_style_6  title_present breadcrumbs_present scheme_original">
				<div class="top_panel_title_inner top_panel_inner_style_6  title_present_inner breadcrumbs_present_inner">
					<div class="content_wrap">
						<h1 class="page_title" style="font-family:Raleway;font-size:3.429em;font-weight:700;">Wallet</h1>
						<div class="breadcrumbs">
							<a class="breadcrumbs_item home" href="#">My Account</a><span class="breadcrumbs_delimiter"></span><span class="breadcrumbs_item current">Wallet</span>
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
			<div class="page_content_wrap page_paddings_no" >
				<div class="content_wrap">
					<div class="content">
					<br>
											<div class="column-1_3 column-1_2-sm">
												<div class="sc_section banner_small_bg_3 banner_block" data-animation="animated fadeInUp normal">
													<div class="sc_section_inner">
														<div class="sc_section_overlay">
															<div class="sc_section_content">
																<span class="sc_icon icon-like83 alignleft"></span>
																<h3 class="sc_title sc_title_regular">Your Balance</h3>
																<h4> &#8377;&nbsp;<?php
																		$totalBalance = $totalstorage[0]->TotalPayment-$totalwithdraw[0]->Amount;
																		echo $totalBalance;
																	?></h4>
															</div>
														</div>
													</div>
												</div>
											</div>
						<br>
								<div class="container">
									<h2 style="font-family:Raleway;font-size:1.6em;font-weight:700;" class="sc_title mb_20 sc_text_center">Wallet</h2>
                                    <table id="example24"  class="display nowrap table table-hover table-striped table-bordered" data-animation="animated fadeInUp normal">
									<thead>
												<tr>
													<th>Sr.No.</th>
													<th>Amount</th>
													<th>RequestedDateTime</th>
													<th>Remark</th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody>
												<?php 
												$c=1;
												foreach($withdrawreqData as $item) { ?>
													<tr>
														<td><?php echo $c; ?></td>
														<td>&#8377;<?php echo $item->Amount; ?></td>
														<td><?php $date=date_create($item->RequestedDateTime); echo date_format($date,"d-m-Y"); ?></td>
														<td><?php echo $item->Remark; ?></td>
														<td><?php 
																	if($item->Status=="Y")
																	{?>
																		 <span class="badge badge-success">Approve</span>
																	<?php							
																	}
																	else
																	{?>
																		<span class="badge badge-danger">Pending</span>
																	<?php
																	}
															 ?></td>
															 <?php $c++; } ?>
											</tbody>
                                    </table>
                                </div>
								</br></br></br>
			
								<h2 class="sc_form_title sc_item_title"><b>Withdraw Request</b></h2>
								<div class="form-style-8">
									<form id="WithdrawForm" method="post" action="<?php echo base_url(); ?>index.php/home/WithdrawRequestController/insertData">
										<input type="text" id="txtamount" name="txtamount" placeholder="Amount" />
										<textarea id="txtremark" name="txtremark" placeholder="Remark" onkeyup="adjust_textarea(this)"></textarea><br>
										<button type="submit" id="btninsert" name="btninsert">Submit</button>
									</form>
								</div>
					</div>
				</div>
			</div>

			</br></br></br></br></br></br>
			<?php include 'include/Footer.php'; ?>
		</div>

	</div>

	<a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a>

	<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="<?php echo base_url(); ?>client_plugin/assets/js/vendor/jquery-3.1.0.min.js"></script>
	
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
	
	<script>
	$('#example24').DataTable({
        "aaSorting": []
    });
	</script>
	
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
			$("#WithdrawForm").validate({
                
				rules: {
					txtamount: {
						required:true,
						number:true
						},
					txtremark : {
						 required:true
					}
				},
				messages: {
					txtamount: {
						required:"Amount is required",
						number:"Amount must contain only number"
					},
					txtremark : {
						 required:"Remark is required"
					}
				}
			});

		
		$("#btninsert").on("click", function() {
                    if (!$("#WithdrawForm").valid()) {
                        return false;
                    }
                });


		</script>
	
	
	
	
	
</body>

<!-- Mirrored from organics-html.axiomthemes.com/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Jan 2019 09:15:39 GMT -->
</html>