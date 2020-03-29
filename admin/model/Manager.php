<?php

class Manager {

	protected function dbConnect(){
		$db = new PDO('mysql:host=localhost;dbname=explore;charset=utf8', 'root', 'root');
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
	
	public function getUserFromPseudo($pseudo){
		$db = $this->dbConnect();
        $req = $db->prepare('SELECT * FROM accounts WHERE pseudo = ?');
        $req->execute(array(
            htmlspecialchars($pseudo)
        ));

        return $req->fetch();
	}


}