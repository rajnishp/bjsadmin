<?php
session_start();

// server should keep session data for AT LEAST 1 hour
ini_set('session.gc_maxlifetime', 7280000);

// each client should remember their session id for EXACTLY 1 hour
session_set_cookie_params(7280000);

include_once "controllers/AgentHomeController.class.php";

include_once "controllers/WorkerController.class.php";

require_once 'utils/Util.php';
require_once 'utils/Timer.php';
require_once 'utils/ShopbookLogger.php';
require_once 'cache/AppCacheRegistry.class.php';


/* Setting up the app-configurations globally for use across classes */
global $configs;
$configs = json_decode (file_get_contents('blueteam-configs.json'), true);

/* Setting up the logger globally for use across classes */
global $logger;
$logger = new ShopbookLogger();
$logger -> enabled = true;
$logger -> debug ("Setting up ...");


$route = explode("/",$_SERVER[REQUEST_URI]);

$logger -> debug ("router :: " .json_encode($route));

$logger -> debug ("post :: " .json_encode($_POST));

$logger -> debug ("get :: " .json_encode($_GET));


		$page = $route[1];
		//single page app
		switch ($page) {


			case "home":
				$agentHomeController = new AgentHomeController();
				if($route[2] == "logout"){
					$agentHomeController -> logout ();
				}
				elseif($route[2] == 'signup') {
					$agentHomeController -> signup ();
				}
				elseif($route[2] == 'login') {
					$agentHomeController -> login ();
				}
				elseif($route[2] == 'forgetPassword') {
					$agentHomeController -> forgetPassword ();
				}
				
				$where = $route[2];

				switch ($where) {

					case 'serviceRequest':
						$agentHomeController ->  serviceRequest();
						break;
					
					default:
						$agentHomeController -> render ();
						break;
				}

				break;
				

			case "workers":
				$workerController = new WorkerController();

				$where = $route[2];

				switch ($where) {

					case 'addNew':
						$workerController -> addNew();
						break;
					// addNew is page for addnewworker
					case 'addNewWorker':
						$workerController -> addNewWorker();
						break;
					//addNewWorker is post worker detail for new worker
					default:
						$workerController -> renderAgent ();
						break;
				}

				break;

			case "requests":
				$serviceRequestsController = new ServiceRequestsController();

				$where = $route[2];

				switch ($where) {

					case 'addNew':
						$serviceRequestsController -> addNew();
						break;
					default:
						$serviceRequestsController -> render ();
						break;
				}

				break;
				

			default:

				//langing page of blueteam
				// Can also be routed to 404 page
				$agentHomeController = new AgentHomeController();
				$agentHomeController -> render ();

				break;

		}

?>