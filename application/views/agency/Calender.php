<?php
if(!isset($this->session->userdata["agencyloggedin"]))
{
	redirect("/agency/AgencyLoginController/index");
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.authenticgoods.co/themes/quantum-pro/demos/demo7/apps.calendar.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Oct 2018 08:11:54 GMT -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>GiveNGrow | Calendar</title>
	<!-- ================== GOOGLE FONTS ==================-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet">
	<!-- ======================= GLOBAL VENDOR STYLES ========================-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>admin_plugin/assets/css/vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>admin_plugin/assets/vendor/metismenu/dist/metisMenu.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>admin_plugin/assets/vendor/switchery-npm/index.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>admin_plugin/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
	<!-- ======================= LINE AWESOME ICONS ===========================-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>admin_plugin/assets/css/icons/line-awesome.min.css">
	<!-- ======================= DRIP ICONS ===================================-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>admin_plugin/assets/css/icons/dripicons.min.css">
	<!-- ======================= MATERIAL DESIGN ICONIC FONTS =================-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>admin_plugin/assets/css/icons/material-design-iconic-font.min.css">
	<!-- ======================= PAGE LEVEL VENDOR STYLES ============================-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>admin_plugin/assets/vendor/fullcalendar/dist/fullcalendar.css">
	<!-- ======================= GLOBAL COMMON STYLES ============================-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>admin_plugin/assets/css/common/main.bundle.css">
	<!-- ======================= LAYOUT TYPE ===========================-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>admin_plugin/assets/css/layouts/vertical/core/main.css">
	<!-- ======================= MENU TYPE ===========================-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>admin_plugin/assets/css/layouts/vertical/menu-type/content.css">
	<!-- ======================= THEME COLOR STYLES ===========================-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>admin_plugin/assets/css/layouts/vertical/themes/theme-i.css">
</head>
<body class="content-menu">
	<!-- CONTENT WRAPPER -->
	<div id="app">
	<?php include 'include/topbar.php'; ?>
		
		<?php include 'include/leftbar.php'; ?>
	
				<div class="content container-fluid">
					<section class="page-content container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-body">
										<div id="calendar"></div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
				
			</div>
		</div>
		<!-- END CONTENT WRAPPER -->
		<!-- Add event -->
		<div class="modal fade" id="modal_new_event" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Add an Event</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form class="form-event" role="form">
							<div class="form-group row">
								<label for="editTitle" class="col-md-2 control-label">Title</label>
								<div class="col-md-10">
									<input type="text" class="form-control new_event_title" id="new_event_title" placeholder="Event Name">
								</div>
							</div>
							<div class="form-group row">
								<label for="allDay" class="col-md-2 control-label">All Day</label>
								<div class="col-md-10">
									<div class="togglebutton m-t-5">
										<label>
											<input type="checkbox" class="js-switch" id="allDay" checked />
										</label>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<label for="startDate" class="col-md-2 control-label">Start</label>
								<div class="col-md-10">
									<div class="row">
										<div class="col p-0">
											<div class="form-group m-0">
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-addon"><i class="icon dripicons-calendar"></i></span>
													</div>
													<input type="text" class="form-control datepicker" id="add_event_start_date" placeholder="Start Date">
												</div>
											</div>
										</div>
										<div class="col">
											<div class="form-group row m-0">
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-addon"><i class="icon dripicons-clock"></i></span>
													</div>
													<input type="text" class="form-control datepicker" id="add_event_start_time" placeholder="Start Time">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<label for="endDate" class="col-md-2 control-label">End</label>
								<div class="col-md-10">
									<div class="row">
										<div class="col p-0">
											<div class="form-group m-0">
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-addon"><i class="icon dripicons-calendar"></i></span>
													</div>
													<input type="text" class="form-control datepicker" id="add_event_end_date" placeholder="End Date">
												</div>
											</div>
										</div>
										<div class="col">
											<div class="form-group row m-0">
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-addon"><i class="icon dripicons-clock"></i></span>
													</div>
													<input type="text" class="form-control datepicker" id="add_event_end_time" placeholder="End Time">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<label for="eventColor" class="col-md-2 control-label">Tag Color</label>
								<div class="col-md-10">
									<div class="form-group m-t-5">
										<div class="event-tag">
											<span class="brand-primary">
												<input type="radio" value="brand-primary" name="event-tag" checked="">
												<i></i>
											</span>
											<span class="brand-accent">
												<input type="radio" value="brand-accent" name="event-tag">
												<i></i>
											</span>
											<span class="brand-warning">
												<input type="radio" value="brand-warning" name="event-tag">
												<i></i>
											</span>
											<span class="brand-info">
												<input type="radio" value="brand-info" name="event-tag">
												<i></i>
											</span>
											<span class="brand-success">
												<input type="radio" value="brand-success" name="event-tag">
												<i></i>
											</span>
											<span class="brand-danger">
												<input type="radio" value="brand-danger" name="event-tag">
												<i></i>
											</span>
											<span class="brand-gray">
												<input type="radio" value="brand-gray" name="event-tag">
												<i></i>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<input type="hidden" id="new-event-start" />
						<input type="hidden" id="new-event-end" />
					</form>
					<div class="modal-footer">
						<button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary" id="btn_add_event">Add Event</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Edit event modal-->
	<div class="modal fade" id="modal_edit_event">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Edit Event</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form class="edit-event__form">
						<div class="form-group row">
							<label for="editTitle" class="col-md-2 control-label">Title</label>
							<div class="col-md-10">
								<input type="text" class="form-control edit_event_title" id="editTitle" placeholder="Event Title">
							</div>
						</div>
						<div class="form-group row">
							<label for="toggle-allDay" class="col-md-2 control-label">All Day</label>
							<div class="col-md-10">
								<div class="togglebutton m-t-5">
									<label>
										<input type="checkbox" class="js-switch" id="toggle-allDay" />
									</label>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="startDate" class="col-md-2 control-label">Start</label>
							<div class="col-md-10">
								<div class="row">
									<div class="col p-0">
										<div class="form-group m-0">
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-addon"><i class="icon dripicons-calendar"></i></span>
												</div>
												<input type="text" class="form-control datepicker" id="event_start_date" placeholder="Start Date">
											</div>
										</div>
									</div>
									<div class="col">
										<div class="form-group m-0">
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-addon"><i class="icon dripicons-clock"></i></span>
												</div>
												<input type="text" class="form-control datepicker" id="event_start_time" placeholder="Start Time">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="endDate" class="col-md-2 control-label">End</label>
							<div class="col-md-10">
								<div class="row">
									<div class="col p-0">
										<div class="form-group m-0">
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-addon"><i class="icon dripicons-calendar"></i></span>
												</div>
												<input type="text" class="form-control datepicker" id="event_end_date" placeholder="End Date">
											</div>
										</div>
									</div>
									<div class="col">
										<div class="form-group m-0">
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-addon"><i class="icon dripicons-clock"></i></span>
												</div>
												<input type="text" class="form-control datepicker" id="event_end_time" placeholder="End Time">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="eventColor" class="col-md-2 control-label">Tag Color</label>
							<div class="col-md-10">
								<div class="form-group m-t-5">
									<div class="event-tag event-tag-edit">
										<span class="brand-primary">
											<input type="radio" value="brand-primary" name="event-tag">
											<i></i>
										</span>
										<span class="brand-accent">
											<input type="radio" value="brand-accent" name="event-tag">
											<i></i>
										</span>
										<span class="brand-warning">
											<input type="radio" value="brand-warning" name="event-tag">
											<i></i>
										</span>
										<span class="brand-info">
											<input type="radio" value="brand-info" name="event-tag">
											<i></i>
										</span>
										<span class="brand-success">
											<input type="radio" value="brand-success" name="event-tag">
											<i></i>
										</span>
										<span class="brand-danger">
											<input type="radio" value="brand-danger" name="event-tag">
											<i></i>
										</span>
										<span class="brand-gray">
											<input type="radio" value="brand-gray" name="event-tag">
											<i></i>
										</span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="textArea" class="col-md-2 control-label">Desctiption</label>
							<div class="col-md-10">
								<textarea class="form-control edit-event-description" rows="3" id="textArea" placeholder="Event Desctiption"></textarea>
							</div>
						</div>
						<div class="form-group m-0">
							<div class="col-md-12">
								<div class="checkbox">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">	Notify people on</label>
									</div>
									<figure class="max-w-100">
										<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 576 270" style="enable-background:new 0 0 576 270;" xml:space="preserve">
											<style type="text/css">
											.st0{fill:#ECB32D;}
											.st1{fill:#63C1A0;}
											.st2{fill:#E01A59;}
											.st3{fill:#331433;}
											.st4{fill:#D62027;}
											.st5{fill:#89D3DF;}
											.st6{fill:#258B74;}
											.st7{fill:#819C3C;}
											.st8{fill:#2D333A;}
											</style>
											<g>
												<g>
													<path class="st0" d="M141.8,87.1c-1.9-5.7-8-8.8-13.7-7c-5.7,1.9-8.8,8-7,13.7l28.1,86.4c1.9,5.3,7.7,8.3,13.2,6.7
													c5.8-1.7,9.3-7.8,7.4-13.4C169.8,173.3,141.8,87.1,141.8,87.1z"/>
													<path class="st1" d="M98.3,101.2c-1.9-5.7-8-8.8-13.7-7c-5.7,1.9-8.8,8-7,13.7l28.1,86.4c1.9,5.3,7.7,8.3,13.2,6.7
													c5.8-1.7,9.3-7.8,7.4-13.4C126.3,187.4,98.3,101.2,98.3,101.2z"/>
													<path class="st2" d="M177.2,158.6c5.7-1.9,8.8-8,7-13.7c-1.9-5.7-8-8.8-13.7-7L84,166.1c-5.3,1.9-8.3,7.7-6.7,13.2
													c1.7,5.8,7.8,9.3,13.4,7.4C90.9,186.7,177.2,158.6,177.2,158.6z"/>
													<path class="st3" d="M102,183.1c5.6-1.8,12.9-4.2,20.7-6.7c-1.8-5.6-4.2-12.9-6.7-20.7l-20.7,6.7L102,183.1z"/>
													<path class="st4" d="M145.6,168.9c7.8-2.5,15.1-4.9,20.7-6.7c-1.8-5.6-4.2-12.9-6.7-20.7l-20.7,6.7L145.6,168.9z"/>
													<path class="st5" d="M163,115.1c5.7-1.9,8.8-8,7-13.7c-1.9-5.7-8-8.8-13.7-7l-86.4,28.1c-5.3,1.9-8.3,7.7-6.7,13.2
													c1.7,5.8,7.8,9.3,13.4,7.4C76.8,143.1,163,115.1,163,115.1z"/>
													<path class="st6" d="M87.9,139.5c5.6-1.8,12.9-4.2,20.7-6.7c-2.5-7.8-4.9-15.1-6.7-20.7l-20.7,6.7L87.9,139.5z"/>
													<path class="st7" d="M131.4,125.4c7.8-2.5,15.1-4.9,20.7-6.7c-2.5-7.8-4.9-15.1-6.7-20.7l-20.7,6.7L131.4,125.4z"/>
												</g>
											</g>
											<path class="st8" d="M264.8,109.8c3.8,1.7,4.1,2.9,1.1,8.6c-3.1,5.8-3.8,6.2-7.6,4.7c-4.7-2-10.8-3.5-14.7-3.5
											c-6.4,0-10.6,2.3-10.6,5.8c0,11.5,36.6,5.3,36.6,29.7c0,12.3-10.6,20.5-26.4,20.5c-8.3,0-18.6-2.8-25.7-6.4
											c-3.5-1.8-3.8-2.8-0.7-8.7c2.6-5.1,3.5-5.7,7.3-4.1c6,2.6,13.7,4.7,18.8,4.7c5.8,0,9.7-2.4,9.7-5.8c0-11.1-37.3-5.8-37.3-29.5
											c0-12.6,10.5-21,26.2-21C249.1,104.7,258.4,106.9,264.8,109.8z"/>
											<path class="st8" d="M294.4,80.8v91.2c0,1.4-1.5,2.8-3.5,2.8h-9.6c-2.1,0-3.5-1.5-3.5-2.8V80.8c0-4.5,1.3-4.9,8.3-4.9
											C294.1,75.8,294.4,76.4,294.4,80.8z"/>
											<path class="st8" d="M362.6,132v39.3c0,2.1-1.5,3.5-3.5,3.5h-9.5c-2.2,0-3.7-1.6-3.5-3.8l0.1-4.2c-5.1,5.7-12.5,8.7-19.9,8.7
											c-14.3,0-23.9-8.3-23.9-20.6c0-13.1,10.8-22,27.1-22c6.2,0,11.8,1.1,16.4,3v-4.5c0-7.2-5.7-11.5-15.4-11.5c-4.5,0-10.1,1.8-14.5,4.4
											c-3.4,1.9-4.2,1.8-7.9-3.7c-3.6-5.5-3.5-6.5,0-8.8c6.7-4.3,15.7-7.1,24-7.1C350.8,104.7,362.6,114.8,362.6,132z M318.4,154.8
											c0,4.7,4,7.8,9.9,7.8c7.2,0,13.8-3.5,17.6-9.4v-6.1c-3.8-1.5-8.5-2.3-12.6-2.3C324.3,144.8,318.4,149,318.4,154.8z"/>
											<path class="st8" d="M427.6,109.9c3.5,2,3.6,3.1-0.2,9c-3.6,5.6-4.2,5.9-8.1,4c-2.9-1.5-7.6-2.8-11.4-2.8c-12,0-20,7.9-20,19.9
											c0,12.4,8,20.8,20,20.8c4.2,0,9.4-1.6,12.8-3.5c3.5-2,4.2-1.9,7.9,3.5c3.3,5,3.3,6.2,0.3,8.3c-5.4,3.7-13.8,6.5-21.3,6.5
											c-22.2,0-37.1-14.2-37.1-35.6c0-21.2,14.9-35.3,37.3-35.3C414.6,104.7,422.6,107,427.6,109.9z"/>
											<path class="st8" d="M500.2,166.2c2.8,3.5,1.7,4.8-5.3,7.3c-7.1,2.6-8.1,2.4-10.6-0.8l-19.9-26.5l-8.9,8.6v17.2
											c0,1.4-1.5,2.8-3.5,2.8h-9.6c-2.1,0-3.5-1.5-3.5-2.8V80.8c0-4.5,1.3-4.9,8.3-4.9c8.1,0,8.3,0.6,8.3,4.9v51.8l27.2-26.1
											c3-2.8,4.7-2.6,10,0.9c5.9,3.8,6.3,4.9,3.5,7.6L476,134.8L500.2,166.2z"/>
										</svg>
									</figure>
								</div>
							</div>
						</div>
						<input type="hidden" class="edit_event_id">
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default btn-flat" data-calendar="delete">Delete</button>
					<button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-primary" data-calendar="update">Update</button>
				</div>
			</div>
			<!-- modal-content -->
		</div>

		<!-- ================== GLOBAL VENDOR SCRIPTS ==================-->
		<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/modernizr/modernizr.custom.js"></script>
		<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/jquery/dist/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
		<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/js-storage/js.storage.js"></script>
		<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/js-cookie/src/js.cookie.js"></script>
		<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/pace/pace.js"></script>
		<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/metismenu/dist/metisMenu.js"></script>
		<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/switchery-npm/index.js"></script>
		<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
		<!-- ================== PAGE LEVEL VENDOR SCRIPTS ==================-->
		<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/moment/min/moment.min.js"></script>
		<script src="<?php echo base_url(); ?>admin_plugin/assets/vendor/fullcalendar/dist/fullcalendar.min.js"></script>
		<script src="<?php echo base_url(); ?>admin_plugin/<?php echo base_url(); ?>admin_plugin/<?php echo base_url(); ?>admin_plugin/<?php echo base_url(); ?>admin_plugin/<?php echo base_url(); ?>admin_plugin/cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
		<script src="<?php echo base_url(); ?>admin_plugin/<?php echo base_url(); ?>admin_plugin/<?php echo base_url(); ?>admin_plugin/<?php echo base_url(); ?>admin_plugin/<?php echo base_url(); ?>admin_plugin/cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.js"></script>
		<!-- ================== GLOBAL APP SCRIPTS ==================-->
		<script src="<?php echo base_url(); ?>admin_plugin/assets/js/global/app.js"></script>
		<!-- ================== PAGE LEVEL COMPONENT SCRIPTS ==================-->
		<script>
		(function(window, document, $, undefined) {
  "use strict";
	$(function() {

		var date = new Date();
		var m = date.getMonth();
		var y = date.getFullYear();
		var target = $('#calendar');
		target.fullCalendar({
			header: {
				left: 'prev,next,today',
				center: 'title'
			},
			theme: false,
			selectable: true,
			selectHelper: true,
			navLinks: true,
			eventLimit: true,
			events: [
			<?php
			foreach($farmerCalenderData as $item)
			{
			?>{
				id: 18,
				title: '<?php echo $item->ProductId; ?> - <?php echo $item->Weight; ?>',
				start: '<?php echo date('Y-m-d',strtotime($item->AddedDate)); ?>',
				end: '<?php echo date('Y-m-d',strtotime($item->AddedDate)); ?>',
				allDay: true,
				className: 'qt-fc-event-danger'
			},
			<?php } ?>
		],
		
		viewRender: function(view) {
			var calendarDate = $("#calendar").fullCalendar('getDate');
			var calendarMonth = calendarDate.month();
			$('#calendar .fc-toolbar').attr('data-calendar-month', calendarMonth);
			$('.block-header-calendar > h2 > span').html(view.title);
		}
	});
	//Add new Event

	//Update/Delete an Event
	

});

})(window, document, window.jQuery);
</script>

	</body>
	
<!-- Mirrored from www.authenticgoods.co/themes/quantum-pro/demos/demo7/apps.calendar.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Oct 2018 08:12:00 GMT -->
</html>
