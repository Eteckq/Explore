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

	function articles(){
		require('view/pages/articles.php');
	}
}