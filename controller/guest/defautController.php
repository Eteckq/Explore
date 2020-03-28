<?php


function connect($pseudo, $password, $stayConnected)
{
    $connexionManager = new connexionManager();

    $result = $connexionManager->connect($pseudo, $password, $stayConnected);

    header('Location: index.php');

}

function regist($pseudo, $pass) {

	$connexionManager = new connexionManager();
	$result = $connexionManager->register($pseudo, $password);

	if ($result == "OK") {
		connect($pseudo,$pass, null); //Si la création du compte a marché, on connecte le mec directement
	} else {
		header('Location: index.php?action=register');
	}

	

}