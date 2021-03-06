<?php
session_start();

// server should keep session data for AT LEAST 1 hour
ini_set('session.gc_maxlifetime', 728000);

// each client should remember their session id for EXACTLY 1 hour
session_set_cookie_params(728000);



include_once "controllers/HomeController.class.php";
include_once "controllers/AgentHomeController.class.php";
include_once "controllers/WorkerController.class.php";
include_once "controllers/ServiceRequestsController.class.php";
include_once "controllers/GetInTouchController.class.php";
include_once "controllers/UserController.class.php";
include_once "controllers/ServiceController.class.php";


require_once 'utils/Util.php';
require_once 'utils/Timer.php';
require_once 'utils/ShopbookLogger.php';
require_once 'cache/AppCacheRegistry.class.php';

/*

type
1.		Landing Page

2. 		Search Page *****
..................................
admin.blueteam.com

operate.blueteam.com

*/

/* Setting up the app-configurations globally for use across classes */
global $configs;
$configs = json_decode (file_get_contents('blueteam-configs.json'), true);

/* Setting up the logger globally for use across classes */
global $logger;
$logger = new ShopbookLogger();
$logger -> enabled = true;
$logger -> debug ("Setting up ...");




$route = explode("/",$_SERVER[REQUEST_URI]);

//router hack for uploads
if(in_array('uploads', $route)){
	$redir = $configs['BLUETEAM_BASE_URL'];
	$flag = false;

	foreach ($route as $key => $value) {
		if($value == 'uploads')
			$flag = true;
		if($flag)
			$redir .= $value."/";
	}
	//rtrim($redir, "\/");
	header("location:".substr($redir,0,-1));
}

//router uploads hack end
$logger -> debug ("router :: " .json_encode($route));

$logger -> debug ("post :: " .json_encode($_POST));

$logger -> debug ("get :: " .json_encode($_GET));


		$page = $route[1];

		//single page app
		switch ($page) {


			case "fileUpload":
				require_once "controllers/FilesController.class.php";
					
				break;


			case "home":
				$homeController = new HomeController();
				if($route[2] == "logout"){
					$homeController -> logout ();
				}
				elseif($route[2] == 'signup') {
					$homeController -> signup ();
				}
				elseif($route[2] == 'login') {
					$homeController -> login ();
				}
				elseif($route[2] == 'forgetPassword') {
					$homeController -> forgetPassword ();
				}
				
				$where = $route[2];

				switch ($where) {

					case 'serviceRequest':
						$homeController ->  serviceRequest();
						break;
					
					default:
						$homeController -> render ();
						break;
				}

				break;
				

			case "workers":
				$workerController = new WorkerController();

				$where = $route[2];
				//var_dump($route);die();
				switch ($where) {

					case 'addNew':
						$workerController -> addNew();
						break;
					// addNew is page for addnewworker
					case 'addNewWorker':
						$workerController -> addNewWorker();
						break;
					//addNewWorker is post worker detail for new worker

					case 'list':
						$workerController -> render();
						break;

					case 'get':
						$workerController -> getWorker($route[3]);
						break;


					default:
						$workerController -> render ();
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

					case 'updateRequestStatus':
						$serviceRequestsController -> updateRequestStatus();
						break;

					case 'deleteRequest':
						$serviceRequestsController -> deleteRequest();
						break;
					
					default:
						$serviceRequestsController -> render ();
						break;
				}

				break;

			case "services":
				$serviceController = new ServiceController();

				$where = $route[2];

				switch ($where) {

					case 'addNew':
						$serviceController -> addNew();
						break;

					case 'updateRequestStatus':
						$serviceController -> updateService();
						break;
					
					default:
						$serviceController -> render ();
						break;
				}

				break;

			case "users":
				$userController = new UserController();

				$where = $route[2];

				switch ($where) {

					case 'addNew':
						$userController -> addNew();
						break;

					case 'updateRequestStatus':
						$userController -> updateUser();
						break;
					
					default:
						$userController -> render ();
						break;
				}

				break;

			case "getInTouch":
				$getInTouchController = new GetInTouchController();

				$where = $route[2];

				switch ($where) {

					case 'updateGetInTouchStatus':
						$getInTouchController -> updateGetInTouchStatus();
						break;
					
					default:
						$getInTouchController -> render ();
						break;
				}

				break;
				

			default:

				//langing page of blueteam
				// Can also be routed to 404 page
				$homeController = new HomeController();
				$homeController -> render ();

				break;

		}

?>