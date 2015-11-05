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

				<!-- Add Row -->
					<!--===================================================-->
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">List of All Workers</h3>
						</div>
					
						<div id="demo-custom-toolbar2" class="table-toolbar-left">
							<a href="<?= $this-> baseUrl ?>admin/workers/addNew" class="btn btn-primary btn-labeled fa fa-plus">Add New Worker</a>
						</div>
					
						<div class="panel-body">
							<table id="demo-dt-addrow" class="table table-striped table-bordered" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>Name</th>
										<th>Contact No</th>
										<th>Skills</th>
										<th class="min-tablet">Experience</th>
										<th class="min-tablet">Gender</th>
										<th class="min-desktop">Current Working Area</th>
										<th class="min-desktop">Preferred Working Area</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($allWorkers as $worker) { ?>
										<tr>
											<td><?= $worker -> getFirstName() ?>  <?= $worker -> getLastName() ?></td>
											<td><?= $worker-> getMobile() ?> </td>
											<td><?= $worker-> getSkills() ?> </td>
											<td><?= $worker-> getExperience() ?> </td>
											<td><?= $worker-> getGender() ?> </td>
											<td><?= $worker-> getCurrentWorkingCity() ?>, <?= $worker-> getCurrentWorkingArea() ?></td>
											<td><?= $worker-> getPreferredWorkingCity() ?>, <?= $worker-> getPreferredWorkingArea() ?></td>
											 
										</tr>
									<?php } ?>

									
								</tbody>
							</table>
						</div>
					</div>
					<!--===================================================-->
					<!-- End Add Row -->
				
				
			

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
