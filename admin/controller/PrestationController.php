<?php

require('model/PrestationManager.php');

class PrestationController {
	private $prestationManager;

	function __construct(){
		$this->prestationManager = new PrestationManager();
	}

	function prestations(){
		$prestations = $this->prestationManager->getPrestations();
		require('view/pages/prestation/list.php');
	}

	function getPrestation($id){
		if($id != 0){
			$prestation = $this->prestationManager->getPrestation($id);
		} else {
			$prestation = $this->prestationManager->getEmptyPrestation();
		}

		require('view/pages/prestation/edit.php');
	}

	function editPrestation($id, $title, $description){
		if($id != 0){
			$this->prestationManager->editPrestation($id, $title, $description);
		} else {
			$this->prestationManager->createPrestation($title, $description);
		}
		header('Location: /admin/prestation/list');
	}
}