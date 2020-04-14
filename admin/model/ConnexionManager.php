<?php
require_once("model/Manager.php");

class ConnexionManager extends Manager {

    public function getAccountCount(){
		$db = $this->dbConnect();
	    $req = $db->prepare('SELECT * FROM accounts');
	    $req->execute();
		return $req->rowCount();
    }
    
    public function createDefaultAdmin(){
		$db = $this->dbConnect();
	    $req = $db->prepare('INSERT INTO `accounts` (`pseudo`, `mail`,`password`) VALUES (:pseudo, :mail, :password)');
        $req->execute(array(
            ':pseudo' => "Admin",
            ':mail' => "To be changed !",
            ':password' => password_hash("root", PASSWORD_DEFAULT)
        ));
	}

	public function connect($mail, $password, $stayConnected): bool{
        $user = $this->getUserFromMail($mail);

        if($password == "" OR $mail == ""){
            return false;
        } else if(password_verify($password, $user['password'])){
            $_SESSION['admin'] = true;
            $_SESSION['user_id'] = $user['id'];
            if($stayConnected){
                //Extension de la durée de la session
                $params = session_get_cookie_params();
                setcookie(session_name(), $_COOKIE[session_name()], time() + 60*60*24*30, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
            }
            return true;
        } else {
            return false;
        }
	}

}
