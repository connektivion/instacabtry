<?php

?>
<style>

</style>
<link rel="stylesheet" href="css/bootstrap.min.css">
<form id="formone">
<div class="row" style="margin-left: 0px;margin-top: 50px;">
					<div class="row">
						<div class="col-md-4">
							Pickup location:
						</div>
						<div class="col-md-8">
							<input type="text" id="pickup" class="text">
						</div>
					</div><p>
					<div class="row">
						<div class="col-md-4">
							Drop location:
						</div>
						<div class="col-md-8">
							<input type="text" id="drop" class="text">
						</div>
					</div><p>
					<div class="row">
						<div class="col-md-4">
							Date:
						</div>
						<div class="col-md-8">
							<input type="text" id="date" class="text">
						</div>
					</div><p>
					<div class="row">
						<div class="col-md-4">
							Time:
						</div>
						<div class="col-md-8">
							<input type="text" id="time" class="text">
						</div>
					</div>
					
				</div>
</form>
<script src="js/jquery.js" type="text/javascript" charset="UTF-8"></script>
	<script src="js/jquery.datetimepicker.js" type="text/javascript" charset="UTF-8"></script>
	<script src="js/bootstrap.min.js" type="text/javascript" charset="UTF-8"></script>
<script>

		jQuery('#time').datetimepicker({
		  datepicker:false,
		  format:'H:i',
		});
		jQuery('#date').datetimepicker({
		 lang:'de',
		 i18n:{
		  de:{
		   months:[
		    'January','February','March','April',
		    'May','June','July','August',
		    'September','October','November','December',
		   ],
		   dayOfWeek:[
		    "Sun", "Mon", "Tue", "Wed", 
		    "Thu", "Fri", "Sat",
		   ]
		  }
		 },
		 timepicker:false,
		 format:'d.m.Y'
		});
</script>