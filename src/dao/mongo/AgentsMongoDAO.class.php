<?php

	/**
     * @author rajnish
	**/
    
    require_once 'dao/AgentsDAO.interface.php';
    require_once 'models/Agent.class.php';

    require_once 'utils/mongo/MongoDBUtil.class.php';
    require_once 'exceptions/MongoDbException.class.php';
    require_once 'exceptions/DuplicateEntityException.class.php';

	class AgentsMongoDAO implements AgentsDAO {

        private $mongo;
        
        public function __construct () {
            $this -> mongo = new MongoDBUtil(array('db_name' => 'blueteam'));
            $this -> mongo -> init();

        }

        public function insert($agentObj) {
            global $logger, $warnings_payload;

            $logger -> debug("Insert the agent details into 'agents' collection");

            $logger -> debug ("Selecting collection: agents");
            $this -> mongo -> selectCollection('agents');


            $logger -> debug("Mongo Agent: " . json_encode($agentObj-> toArray() ));
            $result = $this -> mongo -> insert($agentObj-> toArray()); 
            $logger -> debug("Result: " . $result ['ok']);

            return $result;
        }

        public function multiInsert($customerObjs, $raw) {

        }

        public function getByUsernamePassword ($username, $password) {
            global $logger;

            $logger -> debug ("Selecting collection: agents");
            $this -> mongo -> selectCollection('agents');

            $agentQuery = array('username' => $username, 'password' => $password);

            $result = $this -> mongo -> findOne($agentQuery);
         
            if($result) {
                return new Agent($result["first_name"], $result["last_name"], $result['username'], $result['password'], 
                                    $result['company_name'], $result['address'],  $result["email"], $result['mobile'], 
                                    $result['reg_time'], $result['last_login_time'], $result['_id']);
            }
            else {

            }

        }

        public function queryByUsername ($username) {
            global $logger;

            $logger -> debug ("Selecting collection: agents");
            $this -> mongo -> selectCollection('agents');

            $agentQuery = array('username' => $username);

            $result = $this -> mongo -> findOne($agentQuery);
         
            if($result) {
                return new Agent(null, null, $result['username'], null, null, null, null, null, null, null);
            }
            else {

            }

        }

        public function queryByEmail ($email) {
            global $logger;

            $logger -> debug ("Selecting collection: agents");
            $this -> mongo -> selectCollection('agents');

            $agentQuery = array('email' => $email);

            $result = $this -> mongo -> findOne($agentQuery);

            if($result) {
                return new Agent(null, null, null, null, null, null, $result["email"], null, null, null);
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