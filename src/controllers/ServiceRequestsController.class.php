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
				
				require_once 'views/serviceRequest/serviceRequest.php';
			}
			else {
				require_once 'views/landing/index.php';
			}

		} catch (Exception $e) {

			//require_once 'views/error/pages-404.php';	
			$this->logger->error( "Error occur :500 ".json_encode($e) );
		}

	}	


}

?>