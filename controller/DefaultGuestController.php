<?php

require('model/GuestManager.php');

class DefaultGuestController {
	private $guestManager;

	function __construct(){
		$this->guestManager = new GuestManager();
	}

	private function loadPage($pageName, $params = null){
		$prestations = $this->guestManager->getPrestations();
		require('view/pages/'.$pageName.'.php');
	}

	function accueil(){
		require('view/pages/accueil.php');
	}

	function prestation($id){
		$prestation = $this->guestManager->getPrestation($id);
		$this->loadPage("prestation", array("prestation" => $prestation));
	}

	function contact(){
		$this->loadPage("contact");
	}


}