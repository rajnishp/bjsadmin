<?php
	/**
	 * Object represents collection 'user_info'
	 *
     	 * @author: rajnish
     	 * @date: 2015-03-03 14:48	 
	 */
	class Agent {
		
		private $uuid;
		private $firstName;
		private $lastName;
		private $username;
		private $password;
		
		private $companyName;
		private $address;
		
		private $email;
		private $mobile;
		
		private $regTime;
		private $lastLoginTime;
		
        function __construct($firstName,$lastName,$username,$password, $companyName, $address, $email, $mobile,
        					$regTime, $lastLoginTime,$uuid = null )
          {
			$this-> uuid = $uuid;
			$this-> firstName = $firstName;
			$this-> lastName = $lastName;
			$this-> username = $username;
			$this-> password = $password;

			$this-> companyName= $companyName;
			$this-> address= $address;

			$this-> email = $email;
			$this-> mobile = $mobile;
			
			$this-> regTime = $regTime;
			$this-> lastLoginTime=$lastLoginTime;
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
		function setMobile($mobile){
			$this -> mobile = $mobile;
		}
		function getMobile(){
				return $this->mobile;
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

		function setCompanyName($companyName){
			$this -> companyName = $companyName;
		}
		function getCompanyName(){
				return $this->companyName;
		}

		function setAddress($address){
			$this -> address = $address;
		}
		function getAddress(){
			return $this->address;
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

		
		function toArray() {
			return array (
						uuid => $this-> uuid,
						first_name => $this-> firstName,
						last_name => $this-> lastName,
						username => $this-> username,
						password => $this-> password,
						
						companyName => $this-> companyName,
						address => $this-> address,

						email => $this -> email,
						mobile => $this-> mobile,

						reg_time=> $this-> regTime,
						last_login_time => $this-> lastLoginTime
				);

		}
	}