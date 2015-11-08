<?php
	/**
	 * Object represents collection 'service_requests'
	 *
     	 * @author: rajnish
     	 * @date: 2015-09-08 12:40	 
	 */
	class ServiceRequests{
		
		private $uuid;
		private $name;
		private $mobile;
		private $address;
		private $type;

		private $workingHour;
		private $requirements ;

		private $status;
		private $addedOn;
		private $lastUpdateOn;

		function __construct ($name, $mobile, $address, $type, $requirements, $workingHour, $status, $addedOn, $lastUpdateOn, $uuid = null) {
			
			$this -> uuid = $uuid;
			$this -> name = $name;
			$this -> mobile = $mobile;
			$this -> address = $address;
			$this -> type = $type;
			
			$this -> requirements = $requirements;
			$this -> workingHour = $workingHour;

			$this -> status = $status;
			$this -> addedOn = $addedOn;
			$this -> lastUpdateOn = $lastUpdateOn;

		}


		function setUuid($uuid){
			$this -> uuid = $uuid;
		}
		function getUuid(){
			return $this-> uuid;
		}

		function setName($name){
			$this -> name = $name;
		}
		function getName(){
			return $this-> name;
		}

		function setMobile($mobile){
			$this -> mobile = $mobile;
		}
		function getMobile(){
			return $this-> mobile;
		}

		function setStatus($status){
			$this -> status = $status;
		}
		function getStatus(){
			return $this-> status;
		}

		function setAddress($address){
			$this -> address = $address;
		}
		function getAddress(){
			return $this-> address;
		}

		function setType($type){
			$this -> type = $type;
		}
		function getType(){
			return $this-> type;
		}


		function setRequirements($requirements){
			$this -> requirements = $requirements;
		}
		function getRequirements(){
			return $this-> requirements;
		}
		
		function setWorkingHour($workingHour){
			$this -> workingHour = $workingHour;
		}
		function getWorkingHour(){
			return $this-> workingHour;
		}


		function setAddedOn($addedOn){
			$this -> addedOn = $addedOn;
		}
		function getAddedOn(){
			return $this-> addedOn;
		}

		function setLastUpdateOn($lastUpdateOn){
			$this -> lastUpdateOn = $lastUpdateOn;
		}
		function getLastUpdateOn(){
			return $this-> lastUpdateOn;
		}

		function toArray() {
			return array (
							name => $this -> name,
							mobile=> $this -> mobile,
							address => $this -> address,
							type => $this -> type,
							requirements => $this -> requirements,
							workingHour => $this -> workingHour,
							status => $this -> status,
							addedOn => $this -> addedOn									
						);
		}

	}
?>