<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BlueTeam | Fill Worker Details</title>

	<?php require_once 'views/header/header.php'; ?>

</head>

<body>
	<div id="container" class="effect mainnav-lg">
		
		<?php require_once 'views/navbar/navbar.php'; ?>

		<div class="boxed">

			<!--CONTENT CONTAINER-->
			<!--===================================================-->
			<div id="content-container">
				
				<!--Page Title-->
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<div id="page-title">
					<h1 class="page-header text-overflow">Fill Worker Details</h1>

					<!--Searchbox-->
					<div class="searchbox">
						<div class="input-group custom-search-form">
							<input type="text" class="form-control" placeholder="Search..">
							<span class="input-group-btn">
								<button class="text-muted" type="button"><i class="fa fa-search"></i></button>
							</span>
						</div>
					</div>
				</div>
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<!--End page title-->

				<form class="form-horizontal" id="worker_details_form" onsubmit="return (validateWorkerDetails());">

				    <div class="form-group">

				      <label class="col-md-3 control-label">First Name</label>

				      <div class="col-md-3">
				        <input type="text" id ="first_name" class="form-control" placeholder="First Name" />
				      </div> <!-- /.col -->

				      <label class="col-md-1 control-label">Last Name</label>

				      <div class="col-md-3">
				        <input type="text" id ="last_name" class="form-control" placeholder="Last Name" />
				      </div> <!-- /.col -->


				    </div> <!-- /.form-group -->

				    <div class="form-group">

				      	<label class="col-md-3 control-label">Address Proof</label>

				      	<div class="col-md-3">
				        
			            	<select class="selectpicker" id="address_proof_name" name="address_proof_name" data-live-search="true" data-width="100%">    
				                <option value='Voter Id' >Voter Id </option>
				                <option value='Adhaar Card' >Adhaar Card</option>
				                <option value='Driving License' >Driving License</option>
				                <option value='Driving License' >Education Certificate</option>
				                <option value='Driving License' >Bank Account</option>
			              	</select>
				            
				      	</div> <!-- /.col -->

				      	<label class="col-md-1 control-label">Address Proof No</label>

				      	<div class="col-md-3">
				        	<input type="text" id ="address_proof_id" class="form-control" placeholder="Address Proof Id" />
				      	</div> <!-- /.col -->

				    </div> <!-- /.form-group -->

				    <div class="form-group">

				      	<label class="col-md-3 control-label">Id Proof</label>

				      	<div class="col-md-3">
				        
			            	<select class="selectpicker" id="id_proof_name" name="id_proof_name" data-live-search="true" data-width="100%">    
				                <option value='Voter Id' >Voter Id </option>
				                <option value='Adhaar Card' >Adhaar Card</option>
				                <option value='Driving License' >Driving License</option>
				                <option value='Driving License' >Education Certificate</option>
				                <option value='Driving License' >Bank Account</option>
			              	</select>
				            
				      	</div> <!-- /.col -->
				      	<label class="col-md-1 control-label">Id Proof No</label>
				      	<div class="col-md-3">
				        	<input type="text" id ="id_proof_id" class="form-control" placeholder="Id Proof Id" />
				      	</div> <!-- /.col -->

				    </div> <!-- /.form-group -->

				    <div class="form-group">
						<label class="col-md-3 control-label">Mobile No.</label>
						<div class="col-md-3">
							<input type="text" id="mobile" class="form-control" placeholder="Enter 10 digit mobile number">
						</div>
					
						<label class="col-md-1 control-label">Emergancy Mobile No.</label>
						<div class="col-md-3">
							<input type="text" id="emergancy_mobile" class="form-control" placeholder="Enter 10 digit mobile number">
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label">Address</label>
						<div class="col-md-3">
							<textarea type="text" id="address" class="form-control" placeholder="Full Address" rows="4"></textarea>
						</div>

							<label class="col-lg-1 control-label">Gender</label>
							<div class="col-lg-3">
								<div class="radio">
									<label class="form-radio form-icon">
										<input type="radio" name="gender" value="Male"> Male
									</label>

									<label class="form-radio form-icon">
										<input type="radio" name="gender" value="Female"> Female
									</label>

									<label class="form-radio form-icon">
										<input type="radio" name="gender" value="Other"> Other
									</label>
								</div>
							</div>

							
						
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label">Highest Education</label>
						<div class="col-md-3">
							<input type="text" id="education" class="form-control" placeholder="Highest Education ">
						</div>

						<label class="col-md-1 control-label">Experience</label>
						<div class="col-md-3">
							<input type="text" id="experience" class="form-control" placeholder="Experience in Years 2">
							<small class="help">Enter only digit like 2 for 2 years</small>
						</div>

					</div>

					<div class="form-group">
						<label class="col-md-3 control-label">Languages Known</label>
						<div class="col-md-3">
							<input type="text" id="languages" class="form-control" placeholder="Enter atleast one language" data-role="tagsinput">
							<small class="help">Enter multimple seperated by , or Enter</small>
						</div>
					
						<label class="col-md-1 control-label">Skills</label>
						<div class="col-md-3">
							<input type="text" id="skills"  class="form-control" placeholder="Enter atleast one skill" data-role="tagsinput">
							<small class="help">Enter multimple seperated by , or Enter</small>
						</div>
					</div>

				    <div class="form-group">

				      	<label class="col-md-3 control-label">Current Working City</label>

				      	<div class="col-md-3">
				        	<input type="text" id ="current_working_city" class="form-control" placeholder="Current Working City" />       
				      	</div> <!-- /.col -->

				      	<label class="col-md-1 control-label">Area</label>

				      	<div class="col-md-3">
				        	<input type="text" id ="current_working_area" class="form-control" placeholder="Current Working Area" />
				      	</div> <!-- /.col -->

				    </div> <!-- /.form-group -->

				    <div class="form-group">

				      	<label class="col-md-3 control-label">Preferred Working City</label>

				      	<div class="col-md-3">
				        	<input type="text" id ="preferred_working_city" class="form-control" placeholder="Preferred Working City" />       
				      	</div> <!-- /.col -->

						<label class="col-md-1 control-label">Area</label>

				      	<div class="col-md-3">
				        	<input type="text" id ="preferred_working_area" class="form-control" placeholder="Preferred Working Area" />
				      	</div> <!-- /.col -->

				    </div> <!-- /.form-group -->

				    <div class="form-group">
						<label class="col-md-3 control-label">Working Domain</label>
						<div class="col-md-3">
							<input type="text" id="working_domain" class="form-control" placeholder="Field of work">
							<small class="help"></small>
						</div>

						<label for="demo-msk-date" class="col-md-1 control-label">Date of Birth</label>
						<div class="col-md-3">
							<input type="text" id="birth_date" class="form-control" placeholder="dd/mm/yyyy">
						</div>

					</div>

					<div class="form-group">
						<label class="col-md-3 control-label">Timings</label>
						<div class="col-md-3">
							<input type="text" id="timings" class="form-control" placeholder="Timings">
							<small class="help"></small>
						</div>

						<label for="demo-msk-date" class="col-md-1 control-label">Home Town/state</label>
						<div class="col-md-3">
							<input type="text" id="home_town" class="form-control" placeholder="hometown/state">
						</div>

					</div>

					<div class="form-group">
						<label class="col-md-3 control-label">Remarks</label>
						<div class="col-md-3">
							<textarea type="text" id="remarks" class="form-control" placeholder="Remarks" rows="4"></textarea>
						</div>

							<label class="col-lg-1 control-label">Police Verification</label>
							<div class="col-lg-3">
								<div class="radio">
									<label class="form-radio form-icon">
										<input type="radio" name="police" value="yes"> yes
									</label>

									<label class="form-radio form-icon">
										<input type="radio" name="police" value="no"> no
									</label>
								</div>
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

				    <div class="form-group">
					    <label class="col-md-3 control-label"></label>
					    <div class="col-md-7">
					        <button type="submit" class="btn btn-success">Submit Details</button>
					    </div>
				    </div> <!-- /.form-group -->

				</div>
			

			</div>
			<!--===================================================-->
			<!--END CONTENT CONTAINER-->

			
			<?php require_once 'views/navbar/main_navbar.php'; ?>
			
		</div>

		

		<!-- FOOTER -->
		<!--===================================================-->
		<footer id="footer">

			<!-- Visible when footer positions are fixed -->
			<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
			<div class="show-fixed pull-right">
				<ul class="footer-list list-inline">
					<li>
						<p class="text-sm">SEO Proggres</p>
						<div class="progress progress-sm progress-light-base">
							<div style="width: 80%" class="progress-bar progress-bar-danger"></div>
						</div>
					</li>

					<li>
						<p class="text-sm">Online Tutorial</p>
						<div class="progress progress-sm progress-light-base">
							<div style="width: 80%" class="progress-bar progress-bar-primary"></div>
						</div>
					</li>
					<li>
						<button class="btn btn-sm btn-dark btn-active-success">Checkout</button>
					</li>
				</ul>
			</div>



			<!-- Visible when footer positions are static -->
			<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<!-- 			<div class="hide-fixed pull-right pad-rgt">Powered By: <a href="http://dpower4.com" target="_blank"> Dpower4 </a></div> -->



			<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
			<!-- Remove the class name "show-fixed" and "hide-fixed" to make the content always appears. -->
			<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

<!-- 			<p class="pad-lft">&#0169; 2015 BlueTeam</p> -->



		</footer>
		<!--===================================================-->
		<!-- END FOOTER -->


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
