<?php

require('model/PrestationManager.php');

class PrestationController {
	private $prestationManager;

	function __construct(){
		$this->prestationManager = new PrestationManager();
	}

	function getPrestations(){
		$prestations = $this->prestationManager->getPrestations();
		foreach ($prestations as $prestation) {
			if(strlen($prestation->description) > 30){
				$prestation->description = substr($prestation->description, 0, 30);
				$prestation->description .= "...";
			}
		}
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

	function editPrestation($id, $title, $description, $image){
		if($id != 0){
			$this->prestationManager->editPrestation($id, $title, $description, $image);
		} else {
			$this->prestationManager->createPrestation($title, $description, $image);
		}
		header('Location: /admin/prestation/list');
	}

	function deletePrestation($id){
		$this->prestationManager->deletePrestation($id);
		header('Location: /admin/prestation/list');
	}
}