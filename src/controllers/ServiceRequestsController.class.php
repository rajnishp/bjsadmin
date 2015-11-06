<?php

require_once 'controllers/BaseController.class.php';
require_once 'controllers/EmailController.class.php';

class ServiceRequestsController extends BaseController {

	function __construct (  ){
		
		parent::__construct();

		$this -> logger -> debug("RequestsController started");

	}

	function render (){
		$baseUrl = $this->baseUrl;

		try{
			if (isset($this-> username)){
				$allRequests = $this -> serviceRequestDAO -> loadAllServiceRequests();
				
				require_once 'views/admin/serviceRequest/serviceRequest.php';
			}
			else {
				require_once 'views/landing/index.php';
			}

		} catch (Exception $e) {

			//require_once 'views/error/pages-404.php';	
			$this->logger->error( "Error occur :500 ".json_encode($e) );
		}

	}

	function addNew () {
		$baseUrl = $this-> baseUrl;

		try{
			if (isset($this-> username)){
				require_once 'views/admin/serviceRequest/addNewRequest.php';				
			}
			else {
				require_once 'views/landing/index.php';
			}

		} catch (Exception $e) {

			//require_once 'views/error/pages-404.php';	
			$this->logger->error( "Error occur :500 ".json_encode($e) );
		}

	}

	function updateRequestStatus() {

		if (isset($_POST['request_status']) && isset($_POST['uuid']) && $_POST['request_status'] != '' && $_POST['uuid'] != null) {
			
			$uuid = $_POST['uuid'];
			$request_status = $_POST['request_status'];

	        try {
				$this -> serviceRequestDAO -> updateStatus($request_status, $uuid);
			}
			catch (Exception $e){
				$this->logger->error( "Error occur :500 ".json_encode($e) );
			}

		}
		else{
			header('HTTP/1.1 500 Internal Server Error');
			echo "Select atleast one value";
			die();
		}
	}

	function deleteRequest() {

		if (isset($_POST['uuid']) && $_POST['uuid'] != null) {
			
			$uuid = $_POST['uuid'];

	        try {
				$this -> serviceRequestDAO -> deleteRequest($uuid);
			}
			catch (Exception $e){
				$this->logger->error( "Error occur :500 ".json_encode($e) );
			}

		}
		else{
			header('HTTP/1.1 500 Internal Server Error');
			echo "Can't delete service request";
			die();
		}
	}


}

?>