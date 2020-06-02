<?php
require('model/ConnexionManager.php');

class ConnexionController {
	private $connexionManager;

	function __construct(){
		$this->connexionManager = new ConnexionManager();
	}

	function loginPage(){
		if($this->connexionManager->getAccountCount() == 0){
			$this->connexionManager->createDefaultAdmin();
			$this->connexionManager->connect("To be changed !", "root", true);
			header('Location: /admin/account');
		} else {
			require('view/loginView.php');
		}
	}

	function connect($mail, $password, $stayConnected){
		if($this->connexionManager->connect($mail, $password, $stayConnected)){
			header('Location: /admin/account');
		} else {
			header('Location: /admin/login?error');
		}
	}

}