<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BlueTeam | Agent Dashboard</title>

	<?php require_once 'views/header/header.php'; ?>

</head>

<body>
	<div id="container" class="effect mainnav-lg">
		
		<?php require_once 'views/navbar/navbar.php'; ?>

		<div class="boxed">

			<!--CONTENT CONTAINER-->
			<!--===================================================-->
			<div id="content-container">

				<div id="page-title">
					<h1 class="page-header text-overflow">BlueTeam Agent Dashboard</h1>

				</div>

				
				<div class="row">
					<div class="col-sm-6 col-md-4 col-lg-3 col-lg-offset-1">

						<!--Sales tile-->
						<a href="<?= $this -> agentBaseUrl ?>workers" >
							<div class="panel panel-primary panel-colorful">
								<div class="pad-all text-center">
									<span class="text-5x text-thin"></span>
									<p>List All Workers</p>
									<i class="fa fa-users"></i>
								</div>
							</div>
						</a>

					</div>

					<div class="col-sm-6 col-md-4 col-lg-3">

						<!--Sales tile-->
						<a href="<?= $this -> agentBaseUrl ?>requests" >
							<div class="panel panel-primary panel-colorful">
								<div class="pad-all text-center">
									<span class="text-5x text-thin"></span>
									<p>List All Requests</p>
									<i class="fa fa-shopping-cart"></i>
								</div>
							</div>
						</a>

					</div>

					<div class="col-sm-6 col-md-4 col-lg-3">

						<!--List all get in touch messages/queries-->
						<a href="<?= $this -> agentBaseUrl ?>getInTouch" >
							<div class="panel panel-primary panel-colorful">
								<div class="pad-all text-center">
									<span class="text-5x text-thin"></span>
									<p>List All Queries</p>
									<i class="fa fa-envelope"></i>
								</div>
							</div>
						</a>

					</div>

					<div class="col-sm-6 col-md-4 col-lg-3 col-lg-offset-1">

						<!--Messages tile-->
						<a href="<?= $this -> agentBaseUrl ?>workers/addNew" >
							<div class="panel panel-warning panel-colorful">
								<div class="pad-all text-center">
									<span class="text-5x text-thin"></span>
									<p>Add New Worker</p>
									<i class="fa fa-plus"></i>
								</div>
							</div>
						</a>

					</div>
					<div class="col-sm-6 col-md-4 col-lg-3">

						<!--Projects-->
						<a href="<?= $this -> agentBaseUrl ?>home/logout" >
							<div class="panel panel-purple panel-colorful">
								<div class="pad-all text-center">
									<span class="text-5x text-thin"></span>
									<p>Logout</p>
									<i class="fa fa-sign-out"></i>
								</div>
							</div>
						</a>

					</div>
					
				</div>
			

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
