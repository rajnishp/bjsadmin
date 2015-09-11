<?php

	/**
     * @author rajnish
	**/
    
    require_once 'dao/EmployeesDAO.interface.php';
    require_once 'models/Employee.class.php';

    require_once 'utils/mongo/MongoDBUtil.class.php';
    require_once 'exceptions/MongoDbException.class.php';
    require_once 'exceptions/DuplicateEntityException.class.php';

	class EmployeesMongoDAO implements EmployeesDAO {

        private $mongo;
        
        public function __construct () {
            $this -> mongo = new MongoDBUtil(array('db_name' => 'blueteam'));
            $this -> mongo -> init();

        }

        public function insert($serviceRequestObj) {
            global $logger, $warnings_payload;

            $logger -> debug("Insert the customer into `customers` collection");

            $logger -> debug ("Selecting collection: service_requests");
            $this -> mongo -> selectCollection('service_requests');


            $logger -> debug("Mongo Customer: " . json_encode($serviceRequestObj->toArray() ));
            $result = $this -> mongo -> insert($serviceRequestObj->toArray()); 
            $logger -> debug("Result: " . $result ['ok']);

            return $result;

            //return $return;
        }

        public function multiInsert($customerObjs, $raw) {

        }

        public function getByUsernamePassword ($username, $password) {
            global $logger;
            $customerObjs = $output = array();

            $logger -> debug ("Selecting collection: employee");
            $this -> mongo -> selectCollection('employee');

            $employeeQuery = array('username' => $username, 'password' => $password);

            $result = $this -> mongo -> findOne($employeeQuery);
            
            //$firstName,$lastName,$email,$phone,$employeename,$password, $employeeType, $employeeId,
            //                $livingTown, $regTime, $lastLoginTime,$uuid = null 
            if($result) {
                return new Employee($result["first_name"], $result["last_name"], $result["email"], $result['phone'], $result['username'], $result['password'], $result['employee_type'], $result['employee_id'], $result['living_town'], $result['reg_time'], $result['last_login_time'], $result['_id']);
            }
            else {

            }

        }

        public function update($customer, $raw) {
        }  


        public function delete($uuid) {
        }
        
        public function deleteByOtherIdentifier($idType, $idValue) {
        }


        public function load($uuidValues, $orgId = null, $projection = null) {
        }

        public function loadByExternalIdentifier($idType, $idValues, $orgId = null, $projection = null) {
        }

        public function loadByMultipleIdentifiers($identifiers, $orgId = null, $projection = null) {
        }        
        
        public function loadByProfileAttribute($profileAttributeName, $profileAttributeValue) {}
        
        public function loadAll() {
        }
        
        public function loadAllInOrderOf($sortByKey) {
        }
                
        public function loadFromCustomerIdMapping($idType, $idValue) {
            return $this -> customerIdDAO -> queryByIdentifierTypeValue ($idType, $idValue);
        }

        private function checkIfAllNewIdentifiers ($identifiers) {

        }

        public function loadConflict($conflictUuid) {
        
        }

        public function loadAllConflicts() {
        
        }

        public function loadCustomerInConflict($conflictCustomerUuid) {
        
        }

        public function loadAllCustomersInConflict() {
        
        }

        public function insertCustomer($custToInsert) {

        
        }

        private function mapCustomerIdentifiers($identifiers, $uuid) {
        
        }

        public function insertConflict($conflictUuid, $conflictCases) {

        
        }

        public function insertCustomerInConflict($custToInsert) {

        
        }

        public function insertRawdata($raw) {

        }
	}  