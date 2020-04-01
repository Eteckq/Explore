<?php
require('model/ConnexionManager.php');

class ConnexionController {
	private $connexionManager;

	function __construct(){
		$this->connexionManager = new ConnexionManager();
	}

	function connect($mail, $password, $stayConnected){
		$this->connexionManager->connect($mail, $password, $stayConnected);
		header('Location: /admin');
	}

}