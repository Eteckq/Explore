<?php

require_once("model/Manager.php");

class GuestManager extends Manager {

	function getPrestations(){
		$db = $this->dbConnect();
	    return $db->query('SELECT * FROM prestations');
    }
}