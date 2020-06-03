<?php

require_once("model/Manager.php");
require_once("model/objects/Prestation.php");
require_once("model/objects/Evenement.php");

class GuestManager extends Manager {

	function getPrestations(){
		$prestations = array();

		$db = $this->dbConnect();
		$prestationsReq = $db->query('SELECT * FROM prestations');
		while ($prestationReq = $prestationsReq->fetch()) {
			$prestation = new Prestation($prestationReq["id"]);
			$prestation->title = $prestationReq["title"];
			$prestation->description = $prestationReq["description"];
			$prestation->image = $prestationReq["image"];

			$prestations[] = $prestation;
		}
		return $prestations;
	}

	function getEvents()
	{
		$events = array();

		$db = $this->dbConnect();
		$eventsReq = $db->query('SELECT * FROM events');
		while ($eventReq = $eventsReq->fetch()) {
			$event = new Evenement($eventReq["id"]);
			$event->title = $eventReq["title"];
			$event->description = $eventReq["description"];
			$event->date = $eventReq["date"];
			$event->image = $eventReq["image"];

			$events[] = $event;
		}
		return $events;
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
		$prestation->image = $prestationReq["image"];

    	return $prestation;
	}
}