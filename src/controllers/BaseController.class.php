<?php

require_once 'dao/DAOFactory.class.php';
//require_once 'components/xxx.class.php';
//require_once '.class.php';

// this will be a single page app

abstract class BaseController {

	protected $baseUrl;
	protected $employeeDAO;
	protected $serviceRequestDAO;


	function __construct (  ){
		
		global $configs;
		$this->baseUrl = $configs["BLUETEAM_BASE_URL"];

		$this->url = rtrim($this->baseUrl,"/").$_SERVER[REQUEST_URI];

		global $logger;
		$this -> logger = $logger;

		$this -> logger -> debug("BaseController started");
		

		if( isset( $_SESSION["uuid"] ) ){

			$this -> userId = $_SESSION["user_id"];
			$this -> username = $_SESSION["username"];
			$this -> firstName = $_SESSION['first_name'];
			$this -> lastName = $_SESSION['last_name'];

		}

		$DAOFactory = new DAOFactory();

		
		$this -> employeeDAO = $DAOFactory->getEmployeesDAO();
		$this -> serviceRequestDAO = $DAOFactory->getWorkersDAO();
		
		$this->process();

	}

	function process (){

	}

}

?>