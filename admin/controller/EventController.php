<?php

require('model/EventManager.php');

class EventController {
	private $eventManager;

	function __construct(){
		$this->eventManager = new EventManager();
	}

	function events(){
		$events = $this->eventManager->getEvents();
		require('view/pages/event/list.php');
	}

	function getEvent($id){
		if($id != 0){
			$event = $this->eventManager->getEvent($id);
		} else {
			$event = $this->eventManager->getEmptyEvent();
		}

		require('view/pages/event/edit.php');
	}

	function editEvent($id, $title, $description){
		if($id != 0){
			$this->eventManager->editEvent($id, $title, $description);
		} else {
			$this->eventManager->createEvent($title, $description);
		}
		header('Location: /admin/event/list');
	}

	function deleteEvent($id){
		$this->eventManager->deleteEvent($id);
		header('Location: /admin/event/list');
	}
}