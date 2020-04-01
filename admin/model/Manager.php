<?php

class Manager {

	protected function dbConnect(){
		$db = new PDO('mysql:host=localhost;dbname=explore;charset=utf8', 'root', 'root');
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $db;
	}
	
	//TODO
	public function getSelfUser(){
		$db = $this->dbConnect();
	    $req = $db->prepare('SELECT * FROM accounts WHERE id=?');
	    $req->execute(array(
    		$_SESSION['user_id']
    	));
    	return $req->fetch();
	}

	public function getUserFromMail($mail){

		$db = $this->dbConnect();
	    $req = $db->prepare('SELECT * FROM accounts WHERE mail=?');
	    $req->execute(array(
    		$mail
    	));
		$user = $req->fetch();
	    return $user;
	}

}