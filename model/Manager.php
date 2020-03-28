<?php

class Manager {

	protected function dbConnect(){
		$db = new PDO('mysql:host=localhost;dbname=yohan;charset=utf8', 'root', 'root');
		return $db;
	}

	public function getIDFromUser($pseudo){ //Transforme un pseudo (string) de user en son ID correspondant

		$db = $this->dbConnect();
	    $req = $db->prepare('SELECT id FROM users WHERE pseudo=?');
	    $req->execute(array(
    		$pseudo
    	));
    	$user = $req->fetch();
	    return $user['id'];
	}

	public function getUsersFromID($userID){ //Transforme un ID de user en son pseudo (string) correspondant

		$db = $this->dbConnect();
	    $req = $db->prepare('SELECT pseudo FROM users WHERE id=?');
	    $req->execute(array(
    		$userID
    	));
    	$user = $req->fetch();
	    return $user['pseudo'];
	}

	public function getSelfUser(){ //Transforme un pseudo (string) de user en son ID correspondant

		$db = $this->dbConnect();
	    $req = $db->prepare('SELECT * FROM users WHERE id=?');
	    $req->execute(array(
    		$_SESSION['user_id']
    	));
    	$user = $req->fetch();
	    return $user;
	}


	public function getAllUsers(){

		$db = $this->dbConnect();
	    $req = $db->query('SELECT * FROM users');
	    return $req;
	}


}