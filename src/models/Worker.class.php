<?php
	/**
	 * Object represents collection 'workers'
	 *
     	 * @author: rajnish
     	 * @date: 2015-09-09 22:40	 
	 */
	class Worker{
		
		private $firstName;
		private $lastName;
		private $addressProof;
		private $idProof;
		private $address;
		private $mobile;
		private $emergencyMobile;
		private $education;
		private $languages;
		private $skills;
		private $experience;
		private $workingDomain;
		private $currentWorkingArea;
		private $preferredworkingArea;
		private $guessedSalary;
		private $verificationStatus;
		private $workTimeSlots;
		private $freeTimeSlots;
		private $birthDate;
		private $gender;
		private $addedOn;
		private $lastUpdateOn;

		function __construct ($firstName, $lastName, $addressProof, $idProof, $address, $mobile, $emergencyMobile, $education,
							$languages, $skills, $experience, $workingDomain, $currentWorkingArea, $preferredworkingArea, $guessedSalary, $verificationStatus,
							$workTimeSlots, $freeTimeSlots, $birthDate, $gender, $addedOn, $lastUpdateOn, $uid = null) {
			
			$this -> uid = $uid;
			$this -> firstName = $firstName;
			$this -> lastName = $lastName;
			$this -> addressProof = $addressProof;
			$this -> idProof = $idProof;
			$this -> address = $address;
			$this -> mobile = $mobile;
			$this -> emergencyMobile = $emergencyMobile;
			$this -> education = $education;
			$this -> languages = $languages;
			$this -> skills = $skills;
			$this -> experience = $experience;
			$this -> workingDomain = $workingDomain;
			$this -> currentWorkingArea = $currentWorkingArea;
			$this -> preferredworkingArea = $preferredworkingArea;
			$this -> guessedSalary = $guessedSalary;
			$this -> verificationStatus = $verificationStatus;
			$this -> workTimeSlots = $workTimeSlots;
			$this -> freeTimeSlots = $freeTimeSlots;
			$this -> birthDate = $birthDate;
			$this -> gender = $gender;
			$this -> addedOn = $addedOn;
			$this -> lastUpdateOn = $lastUpdateOn;

		}

		function setUid($uid){
			$this -> uid = $uid;
		}
		function getUid(){
			return $this-> uid;
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
			return $this-> lastName;
		}

		function setAddressProof($addressProof){
			$this -> addressProof = $addressProof;
		}
		function getAddressProof(){
			return $this-> addressProof;
		}

		function setIdProof($idProof){
			$this -> idProof = $idProof;
		}
		function getIdProof(){
			return $this-> idProof;
		}

		function setAddress($address){
			$this -> address = $address;
		}
		function getAddress(){
			return $this-> address;
		}

		function setMobile($mobile){
			$this -> mobile = $mobile;
		}
		function getMobile(){
			return $this-> mobile;
		}

		function setEmergencyMobile($emergencyMobile){
			$this -> emergencyMobile = $emergencyMobile;
		}
		function getEmergencyMobile(){
			return $this-> emergencyMobile;
		}

		function setEducation($education){
			$this -> education = $education;
		}
		function getEducation(){
			return $this-> education;
		}

		function setLanguages($languages){
			$this -> languages = $languages;
		}
		function getLanguages(){
			return $this-> languages;
		}

		function setSkills($skills){
			$this -> skills = $skills;
		}
		function getSkills(){
			return $this-> languages;
		}

		function setExperience($experience){
			$this -> experience = $experience;
		}
		function getExperience(){
			return $this-> experience;
		}

		function setWorkingDomain($workingDomain){
			$this -> workingDomain = $workingDomain;
		}
		function getWorkingDomain(){
			return $this-> workingDomain;
		}

		function setCurrentWorkingArea($currentWorkingArea){
			$this -> currentWorkingArea = $currentWorkingArea;
		}
		function getCurrentWorkingArea(){
			return $this-> currentWorkingArea;
		}

		function setPreferredworkingArea($preferredworkingArea){
			$this -> preferredworkingArea = $preferredworkingArea;
		}
		function getPreferredworkingArea(){
			return $this-> preferredworkingArea;
		}

		function setGuessedSalary($guessedSalary){
			$this -> guessedSalary = $guessedSalary;
		}
		function getGuessedSalary(){
			return $this-> guessedSalary;
		}

		function setVerificationStatus($verificationStatus){
			$this -> verificationStatus = $verificationStatus;
		}
		function getVerificationStatus(){
			return $this-> verificationStatus;
		}

		function setWorkTimeSlots($workTimeSlots){
			$this -> workTimeSlots = $workTimeSlots;
		}
		function getWorkTimeSlots(){
			return $this-> workTimeSlots;
		}

		function setFreeTimeSlots($freeTimeSlots){
			$this -> freeTimeSlots = $freeTimeSlots;
		}
		function getFreeTimeSlots(){
			return $this-> freeTimeSlots;
		}

		function setBirthDate($birthDate){
			$this -> birthDate = $birthDate;
		}
		function getBirthDate(){
			return $this-> birthDate;
		}

		function setGender($gender){
			$this -> gender  = $gender;
		}
		function getGender(){
			return $this-> gender;
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
							firstName => $this -> firstName,
							lastName=> $this -> lastName,
							addressProof => $this -> addressProof,
							idProof => $this -> idProof,
							address => $this -> address,
							mobile => $this -> mobile,
							emergencyMobile=> $this -> emergencyMobile,
							education => $this -> education,
							languages => $this -> languages,
							skills => $this -> skills,
							experience => $this -> experience,
							workingDomain=> $this -> workingDomain,
							currentWorkingArea => $this -> currentWorkingArea,
							preferredworkingArea => $this -> preferredworkingArea,
							guessedSalary => $this -> guessedSalary,
							verificationStatus => $this -> verificationStatus,
							workTimeSlots=> $this -> workTimeSlots,
							freeTimeSlots => $this -> freeTimeSlots,
							birthDate => $this -> birthDate,
							gender => $this -> gender,
							addedOn => $this -> addedOn,
							lastUpdateOn => $this -> lastUpdateOn
						);
		}

	}
?>