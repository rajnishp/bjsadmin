<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BlueTeam | List All Workers</title>

	<?php require_once 'views/header/header.php'; ?>

</head>

<body>
	<div id="container" class="effect mainnav-lg">
		
		<?php require_once 'views/navbar/navbar.php'; ?>

		<div class="boxed">

			<!--CONTENT CONTAINER-->
			<!--===================================================-->
			<div id="content-container">
				<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title"><?= $worker -> getFirstName() ?>  <?= $worker -> getLastName() ?></h3>
						</div>
				</div>
				<form class="form-horizontal" id="worker_details_form" onsubmit="return (validateWorkerDetails());">

				    


				    <div class="form-group">
						<label class="col-md-3 control-label"><b>Mobile No.</b></label>
						<div class="col-md-3">
							<label class="col-md-3 control-label"><?= $worker -> getMobile() ?></label>
						</div>
					
						<label class="col-md-1 control-label"><b>Emergancy Mobile No.</b></label>
						<div class="col-md-3">
							<label class="col-md-3 control-label"><?= $worker -> getEmergencyMobile() ?></label>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label"><b>Address</b></label>
						<div class="col-md-3">
							<label class="col-md-3 control-label"><?= $worker -> getAddress() ?></label>
						</div>

							<label class="col-lg-1 control-label">Gender</label>
							<div class="col-md-3">
							<label class="col-md-3 control-label"><?= $worker -> getGender() ?></label>
						</div>

							
						
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label"><b>Highest Education</b></label>
						<div class="col-md-3">
							<label class="col-md-3 control-label"><?= $worker -> getEducation() ?></label>
						</div>

						<label class="col-md-1 control-label"><b>Experience</b></label>
						<div class="col-md-3">
							<label class="col-md-3 control-label"><?= $worker -> getExperience() ?></label>
						</div>

					</div>

					<div class="form-group">
						<label class="col-md-3 control-label"><b>Languages Known</b></label>
						<div class="col-md-3">
							<label class="col-md-3 control-label"><?= $worker -> getLanguages() ?></label>	
						</div>
					
						<label class="col-md-1 control-label"><b>Skills</b></label>
						<div class="col-md-3">
							<label class="col-md-3 control-label"><?= $worker -> getSkills() ?></label>	
						</div>
					</div>

				    <div class="form-group">

				      	<label class="col-md-3 control-label"><b>Current Working City</b></label>

				      	<div class="col-md-3">
				        	<label class="col-md-3 control-label"><?= $worker -> getCurrentWorkingCity() ?></label>	      
				      	</div> <!-- /.col -->

				      	<label class="col-md-1 control-label"><b>Area</b></label>

				      	<div class="col-md-3">
				        	<label class="col-md-3 control-label"><?= $worker -> getCurrentWorkingArea() ?></label>	
				      	</div> <!-- /.col -->

				    </div> <!-- /.form-group -->

				    <div class="form-group">

				      	<label class="col-md-3 control-label"><b>Preferred Working City</b></label>

				      	<div class="col-md-3">
				        	<label class="col-md-3 control-label"><?= $worker -> getPreferredWorkingCity() ?></label>	      
				      	</div> <!-- /.col -->

						<label class="col-md-1 control-label"><b>Area</b></label>

				      	<div class="col-md-3">
				        	<label class="col-md-3 control-label"><?= $worker -> getPreferredWorkingArea() ?></label>
				      	</div> <!-- /.col -->

				    </div> <!-- /.form-group -->

				    <div class="form-group">
						<label class="col-md-3 control-label"><b>Working Domain</b></label>
						<div class="col-md-3">
							<label class="col-md-3 control-label"><?= $worker -> getWorkingDomain() ?></label>
						</div>

						<label for="demo-msk-date" class="col-md-1 control-label"><b>Date of Birth</b></label>
						<div class="col-md-3">
							<label class="col-md-3 control-label"><?= $worker -> getBirthDate() ?></label>
						</div>

					</div>

					<div class="form-group">
						<label class="col-md-3 control-label"><b>Timings</b></label>
						<div class="col-md-3">
							<label class="col-md-3 control-label"><?= $worker -> getTimings() ?></label>
						</div>

						<label for="demo-msk-date" class="col-md-1 control-label"><b>Home Town/state</b></label>
						<div class="col-md-3">
							<label class="col-md-3 control-label"><?= $worker -> getHomeTown() ?></label>
						</div>

					</div>

					<div class="form-group">
						<label class="col-md-3 control-label"><b>Remarks</b></label>
						<div class="col-md-3">
							<label class="col-md-3 control-label"><?= $worker -> getRemarks() ?></label>
						</div>

							<label class="col-lg-1 control-label"><b>Police Verification</b></label>
							<div class="col-lg-3">
								<label class="col-md-3 control-label"><?= $worker -> getPolice() ?></label>
							</div>

							
						
					</div>
					<!-- <div class="form-group">
						<label class="col-md-3 control-label">Working Time Slots</label>

						<div class="col-md-7 input-group date">
							<input id="working_slot1_from" type="text" class="form-control"> To 
							<input id="working_slot1_to" type="text" class="form-control">
							<span class="input-group-addon"><i class="fa fa-clock-o fa-lg"></i></span>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label">Free Time Slots</label>

						<div class="col-md-7 input-group date">
							<input id="free_slot1_from" type="text" class="form-control"> To
							<input id="free_slot1_to" type="text" class="form-control">
							<span class="input-group-addon"><i class="fa fa-clock-o fa-lg"></i></span>
						</div>
					</div> -->

				    

				    </form>

				
				
				
			

			</div>
			<!--===================================================-->
			<!--END CONTENT CONTAINER-->

			
			<?php require_once 'views/navbar/main_navbar.php'; ?>
			
		</div>


		<!-- SCROLL TOP BUTTON -->
		<!--===================================================-->
		<button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
		<!--===================================================-->



	</div>
	<!--===================================================-->
	<!-- END OF CONTAINER -->


	<?php require_once 'views/footer/footer.php'; ?>
	


</body>
</html>
