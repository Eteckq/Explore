<?php

require_once("model/Manager.php");
require_once("model/objects/Account.php");

class AccountManager extends Manager {

	public function getAccounts(){
		$accounts = array();

		$db = $this->dbConnect();
		$accountsReq = $db->query('SELECT * FROM accounts');
		while ($accountReq = $accountsReq->fetch()) {
			$account = new Account($accountReq["id"]);
			$account->pseudo = $accountReq["pseudo"];
			$account->password = $accountReq["password"];
			$account->mail = $accountReq["mail"];

			$accounts[] = $account;
		}
		return $accounts;
	}

	public function getAccount($id){
		$db = $this->dbConnect();
	    $req = $db->prepare('SELECT * FROM accounts WHERE id=?');
	    $req->execute(array(
    		$id
		));
		$accountReq = $req->fetch();

		$account = new Account($accountReq["id"]);
		$account->pseudo = $accountReq["pseudo"];
		$account->password = $accountReq["password"];
		$account->mail = $accountReq["mail"];

    	return $account;
	}

	public function getEmptyAccount(){
		return new Account(0);
	}

	public function createAccount($pseudo, $mail, $password){
		$db = $this->dbConnect();
	    $req = $db->prepare('INSERT INTO `accounts` (`pseudo`, `mail`,`password`) VALUES (:pseudo, :mail, :password)');
	    if (strlen($password) <= 1 || strlen($pseudo) <= 1) {
	    	//exception
	    } else {
		    $req->execute(array(
		    	':pseudo' => htmlspecialchars($pseudo),
		    	':mail' => htmlspecialchars($mail),
		    	':password' => htmlspecialchars($password)
			));
		}
	}

	public function editAccount($id, $pseudo, $mail, $password){
		$db = $this->dbConnect();
		$req = $db->prepare('UPDATE `accounts` SET pseudo = :pseudo, mail = :mail, password = :password WHERE (`id` = :id)');
		$req->execute(array(
			':id' => $id,
			':pseudo' => $pseudo,
			':mail' => $mail,
			':password' => $password
		));
	}

	public function deleteAccount($id){
		$db = $this->dbConnect();
		$req = $db->prepare('DELETE FROM `accounts` WHERE `id` = :id');
		$req->execute(array(
			':id' => $id,
		));
	}
}

