<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register page | Nifty - Responsive admin template.</title>

	<?php require_once 'views/header/header.php'; ?>


</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
	<div id="container" class="cls-container">
		
		
		<!-- BACKGROUND IMAGE -->
		<!--===================================================-->
		<div id="bg-overlay" class="bg-img img-balloon"></div>
		
		<!-- HEADER -->
        <!--===================================================-->
        <div class="cls-header cls-header-lg">
            <div class="cls-brand">
                <a class="box-inline" href="<?= $this-> agentBaseUrl ?>">
                    <!-- <img alt="Nifty Admin" src="img/logo.png" class="brand-icon"> -->
                    <span class="brand-title">BlueTeam <span class="text-thin">Admin</span></span>
                </a>
            </div>
        </div>
        <!--===================================================-->

        

	        <div class="panel">		
				<!--Panel heading-->
				<div class="panel-heading">
					<div class="panel-control" style="float : none">
						<ul class="nav nav-tabs">
							
								<li class="active"><a href="#register" data-toggle="tab">Register</a></li>
								<li><a href="#login" data-toggle="tab">Login</a></li>
							
						</ul>
					</div>
					<!-- <h3 class="panel-title">Panel With tabs</h3> -->
				</div>

				<!--Panel body-->
				<div class="panel-body">
					<div class="tab-content">
						<div class="tab-pane fade in active" id="register">
							<!-- <h4 class="text-thin">First Tab Content</h4> -->
							<!-- REGISTRATION FORM -->
							<!--===================================================-->
							<div class="cls-content">
								<div class="cls-content-lg panel">
									<div class="panel-body">
										<p class="pad-btm">Create an account</p>
										
										<form onsubmit="return (validateAgentRegister());">
											<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
														<div class="input-group">
															<div class="input-group-addon"><i class="fa fa-male"></i></div>
															<input type="text" class="form-control" id="company_name" placeholder="Full Company Name">
														</div>
													</div>
													<div class="form-group">
														<div class="input-group">
															<div class="input-group-addon"><i class="fa fa-male"></i></div>
															<input type="text" class="form-control" placeholder="Address" id="address">
														</div>
													</div>
													<div class="form-group">
														<div class="input-group">
															<div class="input-group-addon"><i class="fa fa-envelope"></i></div>
															<input type="text" class="form-control" placeholder="E-mail" id="email">
														</div>
													</div>
													<div class="form-group">
														<div class="input-group">
															<div class="input-group-addon"><i class="fa fa-envelope"></i></div>
															<input type="text" class="form-control" placeholder="Mobile No." id="mobile">
														</div>
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<div class="input-group">
															<div class="input-group-addon"><i class="fa fa-male"></i></div>
															<input type="text" class="form-control" placeholder="First Name" id="first_name">
														</div>
													</div>
													<div class="form-group">
														<div class="input-group">
															<div class="input-group-addon"><i class="fa fa-male"></i></div>
															<input type="text" class="form-control" placeholder="Last Name" id="last_name">
														</div>
													</div>
													<div class="form-group">
														<div class="input-group">
															<div class="input-group-addon"><i class="fa fa-user"></i></div>
															<input type="text" class="form-control" placeholder="Username" id="username">
														</div>
													</div>
													<div class="form-group">
														<div class="input-group">
															<div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
															<input type="password" class="form-control" placeholder="Password" id="password">
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-xs-8 text-left checkbox">
													<label class="form-checkbox form-icon">
														<input type="checkbox"> I agree with the <a href="#" class="btn-link">Terms and Conditions</a>
													</label>
												</div>
												<div class="col-xs-4">
													<div class="form-group text-right">
														<button class="btn btn-success text-uppercase" type="submit"> Register </button>
													</div>
												</div>
											</div>
											<div class="mar-btm"><em>- or -</em></div>
											<button class="btn btn-primary btn-lg btn-block" type="button">
												<i class="fa fa-facebook fa-fw"></i> Sign Up with Facebook
											</button>
										</form>
									</div>
								</div>
								<div class="pad-ver">
									Already have an account ? <a href="pages-login.html" class="btn-link mar-rgt">Sign In</a>
										</div>
							</div>
							<!--===================================================-->
						</div>
						<div class="tab-pane fade" id="login">
							<!-- <h4 class="text-thin">Second Tab Content</h4> -->
							<!-- LOGIN FORM -->
					        <!--===================================================-->
					        <div class="cls-content">
					            <div class="cls-content-sm panel">
					                <div class="panel-body">
					                    <p class="pad-btm">Sign In to your account</p>
					                    <form  onsubmit="return (validateLogin());" >
					                        <div class="form-group">
					                            <div class="input-group">
					                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
					                                <input type="text" class="form-control"  id="username_login" placeholder="Username">
					                            </div>
					                        </div>
					                        <div class="form-group">
					                            <div class="input-group">
					                                <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
					                                <input type="password" class="form-control" id="password_login" placeholder="Password">
					                                <span id = "password_span"></span>
					                            </div>
					                        </div>
					                        <div class="row">
					                            <div class="col-xs-8 text-left checkbox">
					                                <label class="form-checkbox form-icon">
					                                <input type="checkbox"> Remember me
					                                </label>
					                            </div>
					                            <div class="col-xs-4">
					                                <div class="form-group text-right">
					                                <button class="btn btn-success text-uppercase" type="submit">Sign In</button>
					                                </div>
					                            </div>
					                        </div>
					                        <div class="mar-btm"><em>- or -</em></div>
					                        <button class="btn btn-primary btn-lg btn-block" type="button">
					                            <i class="fa fa-facebook fa-fw"></i> Login with Facebook
					                        </button>
					                    </form>
					                </div>
					            </div>
					            <div class="pad-ver">
					                <a href="pages-password-reminder.html">
					                <a href="#forget-password" data-target="#forget-password" data-toggle="modal" class="btn-link mar-rgt"> Forgot password ?</a>
					                <a href="#" class="btn-link mar-lft">Create a new account</a>
					            </div>
					        </div>
					        <!--===================================================-->
						</div>
					</div>
				</div>
				
			</div>

		
        
		
	</div>
	<!--===================================================-->
	<!-- END OF CONTAINER -->


	<?php require_once 'views/footer/footer.php'; ?>
	
		

</body>
</html>
