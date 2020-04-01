<?php

require('model/GuestManager.php');

class DefaultGuestController {
	private $guestManager;

	function __construct(){
		$this->guestManager = new GuestManager();
	}

	function accueil(){
		$prestations = $this->guestManager->getPrestations();
		require('view/pages/accueil.php');
	}

	function prestation($id){
		$prestations = $this->guestManager->getPrestations();
		
		$prestation = $this->guestManager->getPrestation($id);
		require('view/pages/prestation.php');
	}


}