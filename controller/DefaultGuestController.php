<?php

require('model/GuestManager.php');

class DefaultGuestController {
	private $guestManager;

	function __construct(){
		$this->guestManager = new GuestManager();
	}

	function articles(){
		require('view/pages/articles.php');
	}
}