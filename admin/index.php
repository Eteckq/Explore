<?php
session_start();

require('controller/DefaultAdminController.php');
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


if($admin){ //Si le user est un admin
    $adminController = new DefaultAdminController();

    switch ($action) {
        case "admins": $adminController->admins(); break;
        case "articles": $adminController->articles(); break;
        default: require('view/pages/accueil.php'); break;
    }

} else {
    $connexionController = new ConnexionController();
    switch ($action) {
        case "connect": 
            $connexionController->connect($_POST["login"],$_POST["pass"],isset($_POST["remember"])); 
            break;
        default: require('view/loginView.php'); break;
    }    
}