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

	function updateRequestStatus() {
		var_dump($_POST); die();

		if (isset($_POST['request_status']) && isset($_POST['uuid']) && $_POST['request_status'] != '' && $_POST['uuid'] != null) {
			
			$uuid = $_POST['uuid'];
			$request_status = $_POST['request_status'];


			/*global $logger, $warnings_payload;
	        $update = false;
	        
	        if (! isset($_POST['uuid'])) {
	            $warnings_payload [] = 'PUT call to /challenge must be succeeded ' . 
	                                    'by /challengeId i.e. PUT /challenge/challengeId';
	            throw new UnsupportedResourceMethodException();
	        }
	        if (! isset($data))
	            throw new MissingParametersException('No fields specified for updation');

	        $serviceRequestObj = $this -> serviceRequestDAO -> load($_POST['uuid']);
	        
	        if(! is_object($serviceRequestDAO)) 
	            return array('code' => '2004');

	        $newStatus= $_POST ['request_status'];
	        if (isset($newStatus)) {
	            if ($newStatus != $challengeObj -> getStatus()) {
	                $update = true;
	                $serviceRequestObj -> setStatus($newStatus);
	            }
	        }

	        if ($update) {
	            $logger -> debug('Update request_status object: ' . $serviceRequestObj -> toString());

	            try {
					//$this -> serviceRequestDAO -> updateStatus($request_status, $uuid);
					$result = $this -> serviceRequestDAO-> updateStatus($challengeObj);
				}
				catch (Exception $e){
					$this->logger->error( "Error occur :500 ".json_encode($e) );
				}

	            $logger -> debug('Updated entry: ' . $result);
	        }

	        $serviceRequest = $serviceRequestObj -> toArray();
	        $this -> serviceRequest [] = $serviceRequest;*/

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


}

?>