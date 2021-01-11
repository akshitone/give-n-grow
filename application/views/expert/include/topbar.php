	<div id="app">
		<!-- TOP TOOLBAR WRAPPER -->
		<nav class="top-toolbar navbar navbar-desktop flex-nowrap">
			<ul class="navbar-nav nav-left">
				<li class="nav-item">
					<a href="javascript:void(0)" data-toggle-state="content-menu-close">
						<i class="icon dripicons-align-left"></i> </a>
				</li>
			</ul>
			<ul class="site-logo" style="margin-top:-70px !important;">
				<li>
					<a
						href="<?php echo base_url(); ?>index.php/expert/ExpertController/view/<?php echo str_replace('/', '-', $this->encryption->encrypt($this->session->userdata['expertloggedin']['ExpertId'])); ?>"><img
							src="<?php echo base_url(); ?>/admin_plugin/assets/img/avatars/logo_givengrow2.png"
							width="250" height="25" /></a>
				</li>
			</ul>
			<ul class="navbar-nav nav-right">

				<li class="nav-item dropdown">
					<a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button"
						aria-haspopup="true" aria-expanded="false">
						<img src="<?php echo base_url(); ?>/uploads/expert/<?php echo $this->session->userdata['expertloggedin']['ExpertIcon']; ?>"
							style="height:40px; width:40px;" class="w-35 rounded-circle" alt="Albert Einstein"> </a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-accout">
						<div class="dropdown-header pb-3">
							<div class="media d-user">
								<img class="align-self-center mr-3 w-40 rounded-circle"
									src="<?php echo base_url(); ?>/uploads/expert/<?php echo $this->session->userdata['expertloggedin']['ExpertIcon']; ?>"
									alt="Albert Einstein">
								<div class="media-body">
									<h5 class="mt-0 mb-0"><?php echo $this->session->userdata['expertloggedin']['ExpertName']; ?>
									</h5>
									<span><?php echo $this->session->userdata['expertloggedin']['Email']; ?></span>
								</div>
							</div>
						</div>
						<a class="dropdown-item"
							href="<?php echo base_url(); ?>index.php/expert/ExpertController/view/<?php echo str_replace('/', '-', $this->encryption->encrypt($this->session->userdata['expertloggedin']['ExpertId'])); ?>"><i
								class="icon dripicons-user"></i> Profile</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item"
							href="<?php echo base_url(); ?>index.php/expert/ExpertLoginController/logout"><i
								class="icon dripicons-lock-open"></i> Sign Out</a>
					</div>
				</li>

			</ul>
		</nav>
		<!-- END TOP TOOLBAR WRAPPER -->
