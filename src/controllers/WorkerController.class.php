<?php

require_once 'controllers/BaseController.class.php';
require_once 'controllers/EmailController.class.php';

class WorkerController extends BaseController {

	function __construct (  ){
		
		parent::__construct();

		$this -> logger -> debug("WorkerController started");

	}

	function render (){
		$baseUrl = $this->baseUrl;

		try{
			if (isset($this-> username)){
				$allWorkers = $this -> workerDAO -> loadAllWorkers();
				//var_dump($allWorkers);
				//die();

				require_once 'views/admin/workers/workers.php';
			}
			else {
				require_once 'views/landing/index.php';
			}

		} catch (Exception $e) {

			//require_once 'views/error/pages-404.php';	
			$this->logger->error( "Error occur :500 ".json_encode($e) );
		}

	}


	function getWorker ($id){
		$baseUrl = $this->baseUrl;

		try{
			if (isset($this-> username)){
				$worker = $this -> workerDAO -> load($id);
				//var_dump($allWorkers);
				//die();

				require_once 'views/admin/workers/worker.php';
			}
			else {
				require_once 'views/landing/index.php';
			}

		} catch (Exception $e) {

			//require_once 'views/error/pages-404.php';	
			$this->logger->error( "Error occur :500 ".json_encode($e) );
		}

	}


	function renderAgent (){
		$baseUrl = $this->baseUrl;

		try{
			if (isset($this-> username)){
				$agentWorkers = $this -> workerDAO -> loadAgentWorkers();
				//var_dump($allWorkers);
				//die();

				require_once 'views/agent/workers/workers.php';
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
				require_once 'views/admin/workers/addNewWorker.php';				
			}
			else {
				require_once 'views/landing/index.php';
			}

		} catch (Exception $e) {

			//require_once 'views/error/pages-404.php';	
			$this->logger->error( "Error occur :500 ".json_encode($e) );
		}

	}
	
	function addNewWorker (){
		
		if (isset($_POST)) {
			
			//agentId added with worker details only for worker added by logged in agent
            //$currentUrl = "http://$_SERVER[HTTP_HOST]/";
            
            /*if($currentUrl == $this-> baseUrl) {
            	echo "inside if";
            	$agentId = null;
            } 
            elseif($currentUrl == $this-> agentBaseUrl) { 
            	echo "inside else if";
            */	$agentId = $this -> uuid;
            /*}
            else { echo "inside else";
            $agentId = "inside else"; }*/
            
            //agentId assigne ends
            ////timings, home_town, remarks, police
var_dump($agentId); 
			$newWorkerObj = new Worker (
										$_POST['first_name'],
										$_POST['last_name'],
										$_POST['address_proof_name'],
										$_POST['address_proof_id'],
										$_POST['id_proof_name'],
										
										$_POST['id_proof_id'],
										$_POST['address'],
										$_POST['mobile'],
										$_POST['emergancy_mobile'],
										$_POST['education'],

										$_POST['languages'],
										$_POST['skills'],

										$_POST['experience'],
										$_POST['working_domain'],
										
										$_POST['current_working_city'],
										$_POST['current_working_area'],
										$_POST['preferred_working_city'],
										$_POST['preferred_working_area'],

										null, 0,

										$_POST['working_slots'],
										$_POST['free_slots'],
										$_POST['birth_date'],
										$_POST['gender'],
										$_POST['timings'],
										$_POST['home_town'],
										$_POST['remarks'],
										$_POST['police'],
										$agentId,
										date("Y-m-d H:i:s"),
										null
									);
			try {
				$this -> workerDAO -> insert($newWorkerObj);
			}
			catch (Exception $e){
				$this->logger->error( "Error occur :500 ".json_encode($e) );
			}

		}
		else{
			header('HTTP/1.1 500 Internal Server Error');
			echo "Fields can not be empty, Try Again";
			die();
		}
	}

}

?>