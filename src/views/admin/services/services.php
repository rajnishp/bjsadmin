<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BlueTeam Admin | List all Services</title>

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
						<h3 class="panel-title">List of all Services</h3>
					</div>
				
					<div id="demo-custom-toolbar2" class="table-toolbar-left">
						<a href="<?= $this-> baseUrl ?>services/addNew" class="btn btn-primary btn-labeled fa fa-plus">Add New Service</a>
					</div>
				
					<div class="panel-body">
						<table id="demo-dt-addrow" class="table table-striped table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>Service Name</th>
									<th>Service Plan</th>
									
								</tr>
							</thead>
							<tbody>
								<?php foreach ($allRequests as $serviceRequest) { ?>
									<tr>
										<td><?= $serviceRequest-> getName() ?></td>
										<td><?= $serviceRequest-> getPlans() ?> </td>				
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
	
	<script type="text/javascript">

		function validateRequestStatus(uuid) {
            alert("there");
            
            var dataString = "";

            dataString = "request_status=" + $("#request_status").val() + "&uuid=" + uuid ;
			
			alert(dataString);
            
            $.ajax({
                type: "POST",
                url: "<?= $this-> baseUrl?>"+"requests/updateRequestStatus",
                data: dataString,
                cache: false,
                success: function(result){
                	alert(result);
	                alert("inside succeessss");
	                console.log("insode success");
                },
                error: function(result){
                	alert(result);
    	            alert("inside error");
        	        console.log("insode error");
                }
            });
        
	        return false;
    	}
	</script>

</body>
</html>
