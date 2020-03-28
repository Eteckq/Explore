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
		header('Location: index.php?success');
	} else {
		header('Location: index.php?action=register');
	}

	

}