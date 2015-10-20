<?php

require_once 'controllers/BaseController.class.php';

class AgentHomeController  extends BaseController {

	function __construct (  ){
		
		parent::__construct();
		
		$this -> logger -> debug("AgentHomeController started");

	}

	function render (){
		$baseUrl = $this-> baseUrl;
		$agentBaseUrl = $this -> agentBaseUrl;
		
		try{
			if (isset($this-> username))
				require_once 'views/agentDashboard/agent.dashboard.php';
			else
				require_once 'views/landing/agent.index.php';

		} catch (Exception $e) {

			require_once 'views/error/pages-404.php';	
			$this->logger->error( "Error occur :500 ".json_encode($e) );
		}

	}

	function signup(){
		echo "inside signup function";

		if(isset($_POST['company_name'], $_POST['address'],$_POST['mobile'], $_POST['email'],$_POST['username'], $_POST['password'])
			&& $_POST['username'] != '' && $_POST['password'] != '' 
			&& $_POST['email'] !='' && $_POST['company_name'] != '' 
			&& $_POST['address'] != '' && $_POST['mobile'] !='') {
	
			$isUserNameExist = $this->agentDAO->queryByUsername($_POST['username']);
			$isEmailExist = $this->agentDAO->queryByEmail($_POST['email']);

			if ($isEmailExist) {
				header('HTTP/1.1 500 Internal Server Error');
				echo "User is reistered with this Email,<br>Try different email or Please Sign In";
				die();
			}
			elseif ($isUserNameExist) {
				header('HTTP/1.1 500 Internal Server Error');
				echo "User is reistered with this Username,<br>Try different Username or Please Sign In";
				die();
			}
			else {

				$this ->agent = new Agent(
										$_POST['first_name'],
										$_POST['last_name'],
										$_POST['username'],
										md5($_POST['password']),
										$_POST['company_name'],
										$_POST['address'],
										$_POST['email'],
										$_POST['mobile'],
										date("Y-m-d H:i:s"),
										null);
				
				try {
					$this->agent -> setUuid ($this-> agentDAO-> insert($this->agent) );
				}
				catch (Exception $e) {
					$this->logger->error( "Failed to register, Error occur :500 ".json_encode($e) );

				}
				
				if($this-> agent) {
					$_SESSION['uuid'] = $this-> agent -> getUuid();
					$_SESSION['username'] = $this-> agent->getUsername() ;
					$_SESSION['email'] = $this-> agent->getEmail();
					$_SESSION['last_login'] = $this-> agent->getLastLoginTime() ;
					$_SESSION['first_name'] = $this-> agent->getFirstName() ;
					$_SESSION['last_name'] = $this-> agent->getLastName() ;

				}
				else{
					header('HTTP/1.1 500 Internal Server Error');
					echo "Failed to register";
					die();
				}
			}
		}
		else {
			echo "outside else";
		}
	}

	function login (){
		if(isset($_POST['username'],$_POST['password'])){
			$this-> agent = $this-> agentDAO -> getByUsernamePassword( $_POST['username'], md5($_POST['password']));
			var_dump($this->agent); die();
			if($this-> agent){
			
				$_SESSION['uuid'] = $this-> agent -> getUuid();
				$_SESSION['username'] = $this-> agent->getUsername() ;
				$_SESSION['email'] = $this-> agent->getEmail();
				$_SESSION['last_login'] = $this-> agent->getLastLoginTime() ;
				$_SESSION['first_name'] = $this-> agent->getFirstName() ;
				$_SESSION['last_name'] = $this-> agent->getLastName() ;

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
	    
	    header('Location: '.$this-> agentBaseUrl);
	    die();

	}

}

?>