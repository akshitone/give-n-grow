	<div id="app">
		<!-- TOP TOOLBAR WRAPPER -->
		<nav class="top-toolbar navbar navbar-desktop flex-nowrap">
			<ul class="navbar-nav nav-left">
				<li class="nav-item">
					<a href="javascript:void(0)" data-toggle-state="content-menu-close">
						<i class="icon dripicons-align-left"></i> </a>
				</li>
			</ul>
			<ul class="site-logo" style="margin-top:-70px;margin-left:200px; !important;">
				<li>
					<a href="<?php echo base_url(); ?>index.php/admin/DashboardController/index"><img src="<?php echo base_url(); ?>/admin_plugin/assets/img/avatars/logo_givengrow2.png" width="250" height="25" /></a>
				</li>
			</ul>
			<ul class="navbar-nav nav-right">
				<li class="nav-item dropdown dropdown-menu-lg">
					<a href="javascript:void(0)" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						<i class="icon dripicons-view-apps"></i>
					</a>
					<div class="dropdown-menu dropdown-menu-right p-0">
						<div class="dropdown-menu-grid">
							<div class="menu-grid-row">
								<div><a class="dropdown-item  border-bottom border-right" href="<?php echo base_url(); ?>index.php/admin/StorageController/index"><i class="zmdi zmdi-local-shipping zmdi-hc-fw"></i><span>Purchase</span></a></div>
								<div><a class="dropdown-item  border-bottom" href="<?php echo base_url(); ?>index.php/admin/SellerController/index"><i class="zmdi zmdi-shopping-cart zmdi-hc-fw"></i><span>Sell</span></a></div>
							</div>
							<div class="menu-grid-row">
								<div><a class="dropdown-item  border-right" href="<?php echo base_url(); ?>index.php/admin/StockController/index"><i class="zmdi zmdi-store zmdi-hc-fw"></i><span>Stock</span></a></div>
								<div> <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/admin/WithdrawReqController/index"><i class="zmdi zmdi-money-box zmdi-hc-fw"></i><span>Withdraw Request</span></a></div>
							</div>
						</div>
					</div>
				</li>
				<li class="nav-item dropdown dropdown-notifications dropdown-menu-lg">
					<a href="javascript:void(0)" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						<i class="icon dripicons-bell"></i>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<div class="card card-notification">
							<div class="card-header">
								<a href="<?php echo base_url(); ?>index.php/admin/NotificationController/view">
									<h5 class="card-title"><b>Notifications</b></h5>
								</a>

							</div>
							<div class="card-body">
								<div class="card-container-wrapper">
									<div class="card-container">
										<div class="timeline timeline-border">
											<?php
											$result = $this->db->query("select * from tbl_notification where AgencyId IS NULL and ExpertId IS NULL and FarmerId IS NULL ORDER BY NotificationDate DESC limit 4");
											$notificationData = $result->result();
											foreach ($notificationData as $item) {
												if ($item->Title == "Farmer Added") {
											?>
													<div class="timeline timeline-border">
														<div class="timeline-list timeline-border timeline-primary">
															<div class="timeline-info" style="margin-bottom:20px;">
																<div class="d-inline-block"><?php echo $item->Title; ?></div>
																<div><small class="text-muted"><?php echo $item->Description; ?></small></div>
																<small class="float-right text-muted"><?php $date = date_create($item->NotificationDate);
																										echo date_format($date, "d-m-Y"); ?></small>
															</div>
														</div>
													</div>
												<?php } elseif ($item->Title == "Stock Added") {
												?>
													<div class="timeline timeline-border">
														<div class="timeline-list timeline-border timeline-accent">
															<div class="timeline-info" style="margin-bottom:20px;">
																<div class="d-inline-block"><?php echo $item->Title; ?></div>
																<div><small class="text-muted"><?php echo $item->Description; ?></small></div>
																<small class="float-right text-muted"><?php $date = date_create($item->NotificationDate);
																										echo date_format($date, "d-m-Y"); ?></small>
															</div>
														</div>
													</div>
												<?php } elseif ($item->Title == "Stock Selling") {
												?>
													<div class="timeline timeline-border">
														<div class="timeline-list timeline-border timeline-success">
															<div class="timeline-info" style="margin-bottom:20px;">
																<div class="d-inline-block"><?php echo $item->Title; ?></div>
																<div><small class="text-muted"><?php echo $item->Description; ?></small></div>
																<small class="float-right text-muted"><?php $date = date_create($item->NotificationDate);
																										echo date_format($date, "d-m-Y"); ?></small>
															</div>
														</div>
													</div>
												<?php } elseif ($item->Title == "Product Added") {
												?>
													<div class="timeline timeline-border">
														<div class="timeline-list timeline-border timeline-info">
															<div class="timeline-info" style="margin-bottom:20px;">
																<div class="d-inline-block"><?php echo $item->Title; ?></div>
																<div><small class="text-muted"><?php echo $item->Description; ?></small></div>
																<small class="float-right text-muted"><?php $date = date_create($item->NotificationDate);
																										echo date_format($date, "d-m-Y"); ?></small>
															</div>
														</div>
													</div>
												<?php } elseif ($item->Title == "Withdraw Request") {
												?>
													<div class="timeline timeline-border">
														<div class="timeline-list timeline-border timeline-warning">
															<div class="timeline-info" style="margin-bottom:20px;">
																<div class="d-inline-block"><?php echo $item->Title; ?></div>
																<div><small class="text-muted"><?php echo $item->Description; ?></small></div>
																<small class="float-right text-muted"><?php $date = date_create($item->NotificationDate);
																										echo date_format($date, "d-m-Y"); ?></small>
															</div>
														</div>
													</div>
												<?php } else { ?>
													<div class="timeline timeline-border">
														<div class="timeline-list timeline-border">
															<div class="timeline-info" style="margin-bottom:20px;">
																<div class="d-inline-block"><?php echo $item->Title; ?></div>
																<div><small class="text-muted"><?php echo $item->Description; ?></small></div>
																<small class="float-right text-muted"><?php $date = date_create($item->NotificationDate);
																										echo date_format($date, "d-m-Y"); ?></small>
															</div>
														</div>
													</div>
											<?php }
											} ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
						<img src="<?php echo base_url(); ?>/uploads/<?php echo $this->session->userdata["loggedin"]["Icon"]; ?>" class="w-35 rounded-circle" alt="Albert Einstein"> </a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-accout">
						<div class="dropdown-header pb-3">
							<div class="media d-user">
								<img class="align-self-center mr-3 w-40 rounded-circle" src="<?php echo base_url(); ?>/uploads/<?php echo $this->session->userdata["loggedin"]["Icon"]; ?>" alt="Albert Einstein">
								<div class="media-body">
									<h5 class="mt-0 mb-0"><?php echo $this->session->userdata["loggedin"]["Name"]; ?></h5>
									<span><?php echo $_SESSION["UserName"]; ?></span>
								</div>
							</div>
						</div>
						<a class="dropdown-item" href="<?php echo base_url(); ?>index.php/admin/LoginController/logout"><i class="icon dripicons-lock-open"></i> Sign Out</a>
					</div>
				</li>
				<li class="nav-item">
					<a href="javascript:void(0)" data-toggle-state="aside-right-open">
						<i class="icon dripicons-align-right"></i>
					</a>
				</li>
			</ul>
		</nav>
		<!-- END TOP TOOLBAR WRAPPER -->