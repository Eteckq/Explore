<?php

require_once("model/Manager.php");
require_once("model/objects/Prestation.php");

class GuestManager extends Manager {

	function getPrestations(){
		$prestations = array();

		$db = $this->dbConnect();
		$prestationsReq = $db->query('SELECT * FROM prestations');
		while ($prestationReq = $prestationsReq->fetch()) {
			$prestation = new Prestation($prestationReq["id"]);
			$prestation->title = $prestationReq["title"];
			$prestation->description = $prestationReq["description"];

			$prestations[] = $prestation;
		}
		return $prestations;
	}
	
	function getPrestation($id){
		$db = $this->dbConnect();
	    $req = $db->prepare('SELECT * FROM prestations WHERE id=?');
	    $req->execute(array(
    		$id
		));
		$prestationReq = $req->fetch();

		$prestation = new Prestation($prestationReq["id"]);
		$prestation->title = $prestationReq["title"];
		$prestation->description = $prestationReq["description"];

    	return $prestation;
	}
}