<?php

require_once 'controllers/BaseController.class.php';
require_once 'controllers/EmailController.class.php';

class GetInTouchController extends BaseController {

	function __construct (  ){
		
		parent::__construct();

		$this -> logger -> debug("GetInTouchController started");

	}

	function render (){
		$baseUrl = $this->baseUrl;

		try{
			if (isset($this-> username)){
				$allGetInTouchMessages = $this -> getInTouchDAO -> loadAllGetInTouchMessages();
				
				require_once 'views/admin/getInTouch/getInTouch.php';
			}
			else {
				require_once 'views/landing/index.php';
			}

		} catch (Exception $e) {

			//require_once 'views/error/pages-404.php';	
			$this->logger->error( "Error occur :500 ".json_encode($e) );
		}

	}

	function updateGetInTouchStatus() {

		if (isset($_POST['get_in_touch_status']) && isset($_POST['uuid']) && $_POST['get_in_touch_status'] != '' && $_POST['uuid'] != null) {
			
			$uuid = $_POST['uuid'];
			$get_in_touch_status = $_POST['get_in_touch_status'];

	        try {
				$this -> getInTouchDAO -> updateStatus($get_in_touch_status, $uuid);
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