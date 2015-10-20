<?php

	/**
	 * @author: rajnish
	**/

	interface AgentsDAO {
		
		public function insert($agent);
		
		public function update($agent, $raw);	

		public function delete($uuid);
		public function deleteByOtherIdentifier($idType, $idValue);

		public function load($uuid);
		public function loadByExternalIdentifier($idType, $idValues);
		public function loadByMultipleIdentifiers($identifiers);
		public function loadByProfileAttribute($profileAttributeName, $profileAttributeValue);
		public function loadAll();
		public function loadAllInOrderOf($sortByKey);
	}