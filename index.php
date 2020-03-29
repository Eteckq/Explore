<?php
session_start();

require('controller/DefaultGuestController.php');
require('controller/ConnexionController.php');

//On regarde si une "action" est précisée dans l'URL, et si il n'y en a pas on met "accueil" (pour avoir une redirection par defaut)
if(isset($_GET['action'])){
    $action = $_GET['action'];
} else {
    $action = "accueil";
}

if(isset($_SESSION['admin'])){
    $admin = $_SESSION['admin'];
} else {
    $admin = false;
}

$guestController = new DefaultGuestController();

switch ($action) {
    case "login": 
        if($admin){
            header('Location: /admin');
        } else {
            require('view/pages/login.php');
        } 
        break;
    case "articles": $guestController->articles(); break;
    case "connect": 
        $connexionController = new ConnexionController();
        $connexionController->connect($_POST["login"],$_POST["pass"],isset($_POST["remember"])); 
        break;
    default: require('view/pages/accueil.php'); break;
}

