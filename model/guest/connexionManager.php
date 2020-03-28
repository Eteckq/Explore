<?php
require_once("model/Manager.php");

class connexionManager extends Manager {


	public function connect($pseudo, $password, $stayConnected){ //Connecte le joueur

        $db = $this->dbConnect();
        $req = $db->prepare('SELECT * FROM users WHERE pseudo = ?');
        $req->execute(array(
            htmlspecialchars($pseudo)
        ));

        $user = $req->fetch();

        if($password == "" OR $pseudo == ""){
            return "login";
            exit;
        }
        elseif($user['password'] == $password){

            $_SESSION['user_id'] = $user['id'];
            $_SESSION['admin'] = $user['isAdmin'];
            header('Location: ../../index.php');

            if($stayConnected){
                //Extension de la durée de la session
                $params = session_get_cookie_params();
                setcookie(session_name(), $_COOKIE[session_name()], time() + 60*60*24*30, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
            }

        }
        else {
            return "login";
        }
	}

    public function register($login, $pass){

        $db = $this->dbConnect();
        $check = $db->prepare('SELECT pseudo FROM users WHERE pseudo=?');
        $req = $db->prepare('INSERT INTO users(pseudo,password) VALUES (:pseudo, :password)');

        if(isset($_POST['login'])) {    // USER IS TRYING TO REGISTER
                    $check->execute(array(
                        $_POST['login']
                    ));         
                    while($row = $check->fetch(PDO::FETCH_ASSOC)) {
                        echo 'CA MARCHE';
                    }
        }   // ENDIF


        if($_POST['pass'] == "" OR $_POST['login'] == ""){ //EMPTY FIELD
            return;
        }
        elseif(strlen($_POST['pass']) < 6){     // PASSWORD TOO SHORT
            return;
        }
        elseif(strlen($_POST['login']) < 4){     // LOGIN TOO SHORT
            return;
        }
        elseif($check->rowCount() > 0){     // LOGIN IS ALREADY USED
            return;
        }

        else {                        // IF NO ERROR --> GOOD TO GO
            $req->execute(array(
            'pseudo' => htmlspecialchars($_POST['login']),
            'password' => $_POST['pass']
            ));                         // REGISTRATION DONE

            return "OK";
        }

    }

}
