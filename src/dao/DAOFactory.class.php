<?php

/**
 * DAOFactory
 * @author: rajnish
 * @date: ${date}
 */
require_once('utils/sql/Connection.class.php');
require_once('utils/sql/ConnectionFactory.class.php');
require_once('utils/sql/ConnectionProperty.class.php');
require_once('utils/sql/QueryExecutor.class.php');
require_once('utils/sql/Transaction.class.php');
require_once('utils/sql/SqlQuery.class.php');
require_once('utils/ArrayList.class.php');

class DAOFactory{

	/**
	 * @return WorkersMongoDAO
	 */
	public static function getWorkersDAO(){
		
		require_once('WorkersDAO.interface.php');
		require_once('models/Worker.class.php');
		require_once('mongo/WorkersMongoDAO.class.php');

		return new WorkersMongoDAO();
	}

	/**
	 * @return EmployeesMongoDAO
	 */
	public static function getEmployeesDAO(){
		
		require_once('EmployeesDAO.interface.php');
		require_once('models/Employee.class.php');
		require_once('mongo/EmployeesMongoDAO.class.php');

		return new EmployeesMongoDAO();
	}

	/**
	 * @return ServiceRequestsDAO
	 */
	public static function getServiceRequestDAO(){
		
		require_once('ServiceRequestsDAO.interface.php');
		require_once('models/ServiceRequests.class.php');
		require_once('mongo/ServiceRequestsMongoDAO.class.php');

		return new ServiceRequestsMongoDAO();
	}

	/**
	 * @return AgentsMongoDAO
	 */
	public static function getAgentDAO(){
		
		require_once('AgentsDAO.interface.php');
		require_once('models/Agent.class.php');
		require_once('mongo/AgentsMongoDAO.class.php');

		return new AgentsMongoDAO();
	}

	/**
	 * @return GetInTouchDAO
	 */
	public static function getInTouchDAO(){
		
		require_once('GetInTouchDAO.interface.php');
		require_once('models/GetInTouch.class.php');
		require_once('mongo/GetInTouchMongoDAO.class.php');

		return new GetInTouchMongoDAO();
	}

	//getServicesDAO
	/**
	* @return ServicesMongoDAO
	*/

	public static function getServicesDAO(){
		
		require_once('ServicesDAO.interface.php');
		require_once('models/Service.class.php');
		require_once('mongo/ServicesMongoDAO.class.php');

		return new ServicesMongoDAO();
	}

	//getUsersDAO
	/**
	* @return UsersMongoDAO
	*/

	public static function getUsersDAO(){
		
		require_once('UsersDAO.interface.php');
		require_once('models/User.class.php');
		require_once('mongo/UsersMongoDAO.class.php');

		return new UsersMongoDAO();
	}


}
?>