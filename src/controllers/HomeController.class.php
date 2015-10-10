<?php

require_once 'controllers/BaseController.class.php';
require_once 'controllers/EmailController.class.php';

class HomeController extends BaseController {

	function __construct (  ){
		
		parent::__construct();

		$this -> logger -> debug("HomeController started");

	}

	function render (){
		$baseUrl = $this->baseUrl;
		// here its shower that user is not in session
		

		try{
			if (isset($this-> username)){
				require_once 'views/admin/admin.php';				
			}
			else {
				require_once 'views/landing/index.php';
			}

		} catch (Exception $e) {

			//require_once 'views/error/pages-404.php';	
			$this->logger->error( "Error occur :500 ".json_encode($e) );
		}

	}

	function admin() {
		try{

			require_once 'views/admin/admin.php';

		} catch (Exception $e) {

			//require_once 'views/error/pages-404.php';	
			$this->logger->error( "Error occur :500 ".json_encode($e) );
		}		
	}
 
	function serviceRequest (){
		if (isset($_POST['name'], $_POST['mobile'], $_POST['address'], $_POST['type'])) {

			$serviceRequestObj = new ServiceRequests (
													$_POST['name'],
													$_POST['mobile'],
													$_POST['address'],
													$_POST['type'],
													1,
													date("Y-m-d H:i:s")
												);
			try {
				$this -> serviceRequestDAO -> insert($serviceRequestObj);
			}
			catch (Exception $e){
				$this->logger->error( "Error occur :500 ".json_encode($e) );
			}

		}
	}

	function login (){
		if(isset($_POST['username'],$_POST['password'])){

			$this->user = $this-> employeeDAO ->getByUsernamePassword( $_POST['username'], $_POST['password']);
			
			if($this->user){
				
				$_SESSION['uuid'] = $this->user->getUuid();
				$_SESSION['username'] = $this->user->getUsername() ;
				$_SESSION['first_name'] = $this->user->getFirstName() ;
				$_SESSION['last_name'] = $this->user->getLastName() ;
				$_SESSION['email'] = $this->user->getEmail();
				$_SESSION['last_login'] = $this->user->getLastLoginTime();

			}
			else{
				header('HTTP/1.1 500 Internal Server Error');
				echo "Username and Password donot match, Try Again";
				die();
			}

		}
		else {
			header('HTTP/1.1 500 Internal Server Error');
			echo "Username and Password field cannot be empty";
			die();
		}

	}

	function logout(){
	    
	    session_unset($_SESSION['uuid']);
	    session_unset($_SESSION['username']);
	    session_unset($_SESSION['first_name']);
	    session_unset($_SESSION['last_name']);
	    session_unset($_SESSION['email']);
	    session_unset($_SESSION['last_login']);
	    session_unset();
	    
	    session_destroy();
	    
	    header('Location: '.$this-> baseUrl);
	    die();

	}

}

?>