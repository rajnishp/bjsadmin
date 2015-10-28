<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BlueTeam Admin | List all Get In Touch Messages</title>

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
						<h3 class="panel-title">List of all Get In Touch Messages</h3>
					</div>
				
					<div class="panel-body">
						<table id="demo-dt-addrow" class="table table-striped table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>Name</th>
									<th>Email</th>
									<th>Subject</th>
									<th class="min-tablet">Message</th>
									<th class="min-tablet">Response Status</th>
									<th class="min-desktop">Message Time</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($allGetInTouchMessages as $message) { ?>
									<tr>
										<td><?= $message-> getContactName() ?></td>
										<td><?= $message-> getContactEmail() ?> </td>
										<td><?= $message-> getContactSubject() ?> </td>
										<td><?= $message-> getContactMessage() ?> </td>
										<td><?= $message-> getStatus() ?>
											<form  onsubmit="return (validateGetInTouchStatus('<?= $message-> getUuid() ?>'));">
												<select class="selectpicker" id="get_in_touch_status">

													<option class="btn-info" value="Request">Request</option>
													<option class="btn-warning" value="In-progress" >In-progress</option>
													<option class="btn-success" value="Delivered" >Delivered</option>

												</select>
												<button type="submit" class="btn btn-primary"> Update </button>
											</form>
										</td>
										<td><?= $message-> getAddedOn() ?></td>					
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

		function validateGetInTouchStatus(uuid) {
            alert("there");
            
            var dataString = "";

            dataString = "get_in_touch_status=" + $("#get_in_touch_status").val() + "&uuid=" + uuid ;
			
			alert(dataString);
            
            $.ajax({
                type: "POST",
                url: "<?= $this-> baseUrl?>"+"getInTouch/updateGetInTouchStatus",
                data: dataString,
                cache: false,
                success: function(result){
                  alert("inside succeessss");
                  console.log("insode success");
                },
                error: function(result){
                  alert("inside error");
                  console.log("insode error");
                }
            });
        
	        return false;
    	}
	</script>

</body>
</html>
