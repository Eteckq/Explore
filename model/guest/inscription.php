<?php

$db = new PDO('mysql:host=localhost;dbname=ship_game;charset=utf8', 'ship', '@h4t6jf//bQa45');
$check = $db->prepare('SELECT pseudo FROM users WHERE pseudo=?');
$req = $db->prepare('INSERT INTO users(pseudo,password) VALUES (:pseudo, :password)');

if(isset($_POST['login'])) {	// USER IS TRYING TO REGISTER
            $check->execute(array(
                $_POST['login']
            ));         
            while($row = $check->fetch(PDO::FETCH_ASSOC)) {
            	echo 'CA MARCHE';
            }
}	// ENDIF


if($_POST['pass'] == "" OR $_POST['login'] == ""){ //EMPTY FIELD
    header('Location: ../../index.php?action=register');
    exit;
}
elseif(strlen($_POST['pass']) < 6){     // PASSWORD TOO SHORT
    header('Location: ../../index.php?action=register');
    exit;
}
elseif(strlen($_POST['login']) < 4){     // LOGIN TOO SHORT
    header('Location: ../../index.php?action=register');
    exit;
}
elseif($check->rowCount() > 0){     // LOGIN IS ALREADY USED
    header('Location: ../../index.php?action=register');
    exit;
}

else {                        // IF NO ERROR --> GOOD TO GO
    $req->execute(array(
    'pseudo' => $_POST['login'],
    'password' => $_POST['pass']
    ));                         // REGISTRATION DONE

    header('Location: ../../index.php?success');
    exit;
}