<?php

require('model/AccountManager.php');

class AccountController {
	private $accountManager;

	function __construct(){
		$this->accountManager = new AccountManager();
	}

	function admins(){
		$admins = $this->accountManager->getAccounts();
		require('view/pages/account/list.php');
	}

	function getAdmin($id){
		if($id != 0){
			$admin = $this->accountManager->getAccount($id);
		} else {
			$admin = $this->accountManager->getEmptyAccount();
		}

		require('view/pages/account/edit.php');
	}

	function editAdmin($id, $pseudo, $mail, $password){
		if($id != 0){
			$this->accountManager->editAccount($id, $pseudo, $mail, $password);
		} else {
			$this->accountManager->createAccount($pseudo, $mail, $password);
		}
		header('Location: /admin/account/list');
	}

	function deleteAdmin($id){
		$this->accountManager->deleteAccount($id);
		header('Location: /admin/account/list');
	}
}