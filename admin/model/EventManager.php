<?php

require_once("model/Manager.php");
require_once("model/objects/Evenement.php");

class EventManager extends Manager {
	
	public function getEvents(){
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

	public function getEvent($id){
		$db = $this->dbConnect();
	    $req = $db->prepare('SELECT * FROM events WHERE id=?');
	    $req->execute(array(
    		$id
		));
		$eventReq = $req->fetch();

		$event = new Evenement($eventReq["id"]);
		$event->title = $eventReq["title"];
		$event->description = $eventReq["description"];
		$event->date = $eventReq["date"];
		$event->image = $eventReq["image"];

    	return $event;
	}

	public function getEmptyEvent(){
		return new Evenement(0);
	}

	public function createEvent($title,$description,$date, $image){
		$db = $this->dbConnect();
	    $req = $db->prepare('INSERT INTO `events` (`title`, `description`, `date`, `image`) VALUES (:title, :description, :date, :image)');
	    if (strlen($description) <= 1 || strlen($title) <= 1) {
	    	//exception
	    } else {
		    $req->execute(array(
		    	':title' => htmlspecialchars($title),
		    	':description' => htmlspecialchars($description),
				':date' => htmlspecialchars($date),
				':image' => htmlspecialchars($image)
			));
		}
	}

	public function editEvent($id, $title,$description,$date, $image){
		$db = $this->dbConnect();
		$req = $db->prepare('UPDATE `events` SET title = :title, description = :description, date = :date, image = :image WHERE (`id` = :id)');
		$req->execute(array(
			':id' => $id,
			':title' => $title,
			':description' => $description,
			':date' => $date,
			':image' => $image,
		));
	}

	public function deleteEvent($id){
		$db = $this->dbConnect();
		$req = $db->prepare('DELETE FROM `events` WHERE `id` = :id');
		$req->execute(array(
			':id' => $id,
		));
	}
}