<?php
	/**
	 * Object represents collection 'user_info'
	 *
     	 * @author: rajnish
     	 * @date: 2015-03-03 14:48	 
	 */
	class Employee {
		
		private $uuid;
		private $firstName;
		private $lastName;
		private $email;
		private $phone;
		private $username;
		private $password;
		
		private $employeeType;
		private $employeeId;
		
		private $livingTown;
		
		private $regTime;
		private $lastLoginTime;
		
        function __construct($firstName,$lastName,$email,$phone,$username,$password, $employeeType, $employeeId,
        					$livingTown, $regTime, $lastLoginTime,$uuid = null )
          {
			$this-> uuid = $uuid;
			$this->firstName = $firstName;
			$this->lastName = $lastName;
			$this->email = $email;
			$this->phone = $phone;
			$this->username = $username;
			$this->password = $password;
			
			$this->employeeType= $employeeType;
			$this->employeeId= $employeeId;
			
			$this->livingTown = $livingTown;
			
			$this->regTime = $regTime;
			$this->lastLoginTime=$lastLoginTime;
		}
		
		function setUuid($uuid) {
			$this -> uuid = $uuid;
		}
		function getUuid(){
			return $this-> uuid;
		}

		function setFirstName($firstName){
			$this -> firstName = $firstName;
		}
		function getFirstName(){
			return $this-> firstName;
		}
		
		function setLastName($lastName){
			$this -> lastName = $lastName;
		}
		function getLastName(){
				return $this->lastName;
		}

		function setEmail($email){
			$this -> email = $email;
		}
		function getEmail(){
				return $this-> email;
		}
		function setPhone($phone){
			$this -> phone = $phone;
		}
		function getPhone(){
				return $this->phone;
		}

		function setUsername($username){
			$this -> username = $username;
		}
		function getUsername(){
				return $this-> username;
		}
		
		function setPassword($password){
			$this -> password = $password;
		}
		function getPassword(){
			return $this->password;
		}

		function setEmployeeType($employeeType){
			$this -> employeeType = $employeeType;
		}
		function getEmployeeType(){
				return $this->employeeType;
		}

		function setEmployeeId($employeeId){
			$this -> employeeId = $employeeId;
		}
		function getEmployeeId(){
			return $this->employeeId;
		}


		function setLivingTown($livingTown){
			$this -> livingTown = $livingTown;
		}
		function getLivingTown(){
				return $this-> livingTown;
		}

		function setRegTime($regTime){
			$this -> regTime = $regTime;
		}
		function getRegTime(){
			return $this -> regTime ;
		}
		function setLastLoginTime($lastLoginTime){
			$this->lastLoginTime=$lastLoginTime;
		}
		
		function getLastLoginTime(){
				return $this-> lastLoginTime;
		}
		function toString (){
			return $this -> uuid . ", " . 
					$this -> firstName.",". 
					$this-> lastName.",". 
					$this-> email.",". 
					$this-> phone."," . 
					$this-> username.",". 
					$this-> password.",".
					$this-> employeeType.",".
					$this-> employeeId.",".
					$this-> livingTown.",".
					$this-> regTime.",". 
					$this-> lastLoginTime ;
		}
		
		function toArray() {
			return array (
						uuid => $this-> uuid,
						first_name => $this-> firstName,
						last_name => $this-> lastName,
						email => $this -> email,
						phone => $this-> phone,
						username => $this-> username,
						password => "******",
						employee_type => $this-> employeeType,
						employee_id => $this-> employeeId,
						living_town => $this-> livingTown,
						reg_time=> $this-> regTime,
						last_login_time => $this-> lastLoginTime
				);
		}
	}