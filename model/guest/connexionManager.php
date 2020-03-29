<?php
require_once("model/Manager.php");

class ConnexionManager extends Manager {


	public function connect($pseudo, $password, $stayConnected): bool{ //Connecte le joueur
        $user = $this->getUserFromPseudo($pseudo);

        if($password == "" OR $pseudo == ""){
            return false;
        } else if($user['password'] == $password){
            $_SESSION['admin'] = true;
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
