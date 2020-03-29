<?php

require('model/guest/GuestManager.php');

class DefaultGuestController {
	private $guestManager;

	function __construct(){
		$this->guestManager = new GuestManager();
	}
}