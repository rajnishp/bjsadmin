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
	 * @return ServiceRequestsDAO
	 */
	public static function getWorkersDAO(){
		
		require_once('WorkersDAO.interface.php');
		require_once('models/Worker.class.php');
		require_once('mongo/WorkersMongoDAO.class.php');

		return new WorkersMongoDAO();
	}

	/**
	 * @return UserInfoDAO
	 */
	public static function getEmployeesDAO(){
		
		require_once('EmployeesDAO.interface.php');
		require_once('models/Employee.class.php');
		require_once('mongo/EmployeesMongoDAO.class.php');

		return new EmployeesMongoDAO();
	}

}
?>