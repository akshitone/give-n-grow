<aside class="sidebar sidebar-right">
	<div class="sidebar-content">
		<div class="tab-panel m-b-30" id="sidebar-tabs">
			<ul class="nav nav-tabs primary-tabs">

				<li class="nav-item" role="presentation"><a href="#sidebar-contact" class="nav-link" data-toggle="tab" aria-expanded="true">Contacts</a></li>
			</ul>

			<div class="tab-pane active" id="sidebar-contact">

				<!--START RIGHT SIDEBAR CONTACT LIST -->
				<div class="qt-scroll" data-scroll="minimal-dark">

					<div class="list-view-group-header">Farmer</div>
					<br><br>
					<ul class="list-group p-0">
						<?php
						$result = $this->db->query("select * from tbl_farmer");
						$farmerData = $result->result();
						foreach ($farmerData as $item) {
						?>
							<li class="list-group-item" data-chat="open" data-chat-name="John Smith">
								<span class="float-left"><img src="<?php echo base_url(); ?>/uploads/farmer/<?php echo $item->FarmerIcon; ?>" alt="" style="height:75px; width:75px;" class="w-75 rounded-circle"></span>
								<i class="badge mini success status"></i>
								<div class="list-group-item-body">
									<div class="list-group-item-heading"><?php echo $item->FarmerName; ?></div>
									<div class="list-group-item-text"><?php echo $item->FarmerContact; ?></div>
								</div>
							<?php } ?>
							</li>
					</ul>
					<div class="list-view-group-header">Expert</div>
					<br><br>
					<ul class="list-group p-0">
						<?php
						$result = $this->db->query("select * from tbl_expert");
						$farmerData = $result->result();
						foreach ($farmerData as $item) {
						?>
							<li class="list-group-item" data-chat="open" data-chat-name="John Smith">
								<span class="float-left"><img src="<?php echo base_url(); ?>/uploads/expert/<?php echo $item->ExpertIcon; ?>" alt="" style="height:75px; width:75px;" class="w-75 rounded-circle"></span>
								<i class="badge mini success status"></i>
								<div class="list-group-item-body">
									<div class="list-group-item-heading"><?php echo $item->ExpertName; ?></div>
									<div class="list-group-item-text"><?php echo $item->ExpertContact; ?></div>
								</div>
							<?php } ?>
							</li>
					</ul>
					<!--END RIGHT SIDEBAR CONTACT LIST -->
				</div>
			</div>
		</div>
	</div>
</aside>