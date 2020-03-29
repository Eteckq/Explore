<?php
require('model/guest/ConnexionManager.php');

class ConnexionController {
	private $connexionManager;

	function __construct(){
		$this->connexionManager = new ConnexionManager();
	}

	function connect($pseudo, $password, $stayConnected){
		$this->connexionManager->connect($pseudo, $password, $stayConnected);
		header('Location: /admin');
	}

}