<?php

require_once("model/Manager.php");
require_once("model/objects/Prestation.php");

class PrestationManager extends Manager {
	
	public function getPrestations(){
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

	public function getPrestation($id){
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

	public function getEmptyPrestation(){
		return new Prestation(0);
	}

	public function createPrestation($title, $description){
		$db = $this->dbConnect();
	    $req = $db->prepare('INSERT INTO `prestations` (`title`, `description`) VALUES (:title, :description)');
	    if (strlen($description) <= 1 || strlen($title) <= 1) {
	    	//exception
	    } else {
		    $req->execute(array(
		    	':title' => htmlspecialchars($title),
		    	':description' => htmlspecialchars($description)
			));
		}
	}

	public function editPrestation($id, $title, $description){
		$db = $this->dbConnect();
		$req = $db->prepare('UPDATE `prestations` SET title = :title, description = :description WHERE (`id` = :id)');
		$req->execute(array(
			':id' => $id,
			':title' => $title,
			':description' => $description
		));
	}
}