<?php

require_once 'dao/DAOFactory.class.php';
//require_once 'components/xxx.class.php';
//require_once '.class.php';

// this will be a single page app

abstract class BaseController {

	protected $baseUrl;
	protected $agentBaseUrl;
	protected $employeeDAO;
	protected $workerDAO;
	protected $serviceRequestDAO;
	protected $agentDAO;
	protected $getInTouchDAO;
	protected $serviceDAO;
	protected $userDAO;
	protected $freeWorkes;
	protected $pendingRequests;
	protected $totalUsers;

	function __construct (  ){
		
		global $configs;
		$this-> baseUrl = $configs["BLUETEAM_BASE_URL"];
		$this-> agentBaseUrl = $configs["BLUETEAM_AGENT_BASE_URL"];

		$this->url = rtrim($this->baseUrl,"/").$_SERVER[REQUEST_URI];

		global $logger;
		$this -> logger = $logger;

		$this -> logger -> debug("BaseController started");
		

		if( isset( $_SESSION["uuid"] ) ){

			$this -> uuid = $_SESSION["uuid"];
			$this -> username = $_SESSION["username"];
			$this -> firstName = $_SESSION['first_name'];
			$this -> lastName = $_SESSION['last_name'];

		}

		$DAOFactory = new DAOFactory();

		
		$this -> employeeDAO = $DAOFactory->getEmployeesDAO();
		$this -> workerDAO = $DAOFactory->getWorkersDAO();
		$this -> serviceRequestDAO = $DAOFactory->getServiceRequestDAO();
		$this -> agentDAO = $DAOFactory->getAgentDAO();
		$this -> getInTouchDAO = $DAOFactory->getInTouchDAO();
		$this -> userDAO = $DAOFactory->getUsersDAO();
		$this -> serviceDAO = $DAOFactory->getServicesDAO();


		
		$this->process();

	}
// define freeWorkes,pendingRequests,totalUsers
	function process (){

	}

}

?>