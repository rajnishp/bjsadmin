<?php

require_once 'controllers/BaseController.class.php';
require_once 'controllers/EmailController.class.php';

class ServiceController extends BaseController {

	function __construct (  ){
		
		parent::__construct();

		$this -> logger -> debug("ServiceController started");

	}

	function render (){
		$baseUrl = $this->baseUrl;

		try{
			if (isset($this-> username)){
				$allRequests = $this -> serviceDAO -> loadAll();
				
				require_once 'views/admin/services/services.php';
			}
			else {
				require_once 'views/landing/index.php';
			}

		} catch (Exception $e) {

			//require_once 'views/error/pages-404.php';	
			$this->logger->error( "Error occur :500 ".json_encode($e) );
		}

	}

	function updateService() {

		if (isset($_POST['request_status']) && isset($_POST['uuid']) && $_POST['request_status'] != '' && $_POST['uuid'] != null) {
			
			$uuid = $_POST['uuid'];
			$request_status = $_POST['request_status'];

	        try {
				$this -> serviceDAO -> updateStatus($request_status, $uuid);
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


}

?>