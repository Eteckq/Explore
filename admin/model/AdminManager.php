<?php

require_once("model/Manager.php");

class AdminManager extends Manager {

	public function getAccounts(){
		$db = $this->dbConnect();
		return $db->query('SELECT * FROM accounts');
	}

	//TODO
	public function getAccount($id){
 		$db = $this->dbConnect();
	    $req = $db->prepare('SELECT * FROM accounts WHERE id=?');
	    $req->execute(array(
    		$userID
    	));
    	return $req->fetch();
	}

	public function getArticles(){
		$db = $this->dbConnect();
		return $db->query('SELECT * FROM articles');
	}

	//TODO
	public function getArticle($id){
		$db = $this->dbConnect();
	    $req = $db->prepare('SELECT * FROM articles WHERE id=?');
	    $req->execute(array(
    		$id
    	));
    	return $req->fetch();
	}

	//TODO
	public function newArticle($name, $description){
/* 		$db = $this->dbConnect();
	    $req = $db->prepare('INSERT INTO `tache` (`name`, `description`) VALUES (:name, :description)');
	    if (strlen($description) <= 1 OR strlen($name) <= 1) {
	    	echo 'trop court';
	    } else {
		    $req->execute(array(
		    	':name' => htmlspecialchars($name),
		    	':description' => htmlspecialchars($description)
	    	));
		} */
	}
}