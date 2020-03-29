<?php
session_start();

require('controller/admin/DefaultAdminController.php');

require('controller/guest/DefaultGuestController.php');
require('controller/guest/ConnexionController.php');



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


if($admin == 1){ //Si le user est un admin
    $adminController = new DefaultAdminController();
    switch ($action) {
        case "admins": $adminController->admins(); break;
        case "articles": $adminController->articles(); break;
        default: $adminController->accueil(); break;
    }

} else {
    $guestController = new DefaultGuestController();

    switch ($action) {
        case "admin": require('view/guest/pages/login.php'); break;
        case "connect": 
            $connexionController = new ConnexionController();
            $connexionController->connect($_POST["login"],$_POST["pass"],isset($_POST["remember"])); 
            break;
        default: require('view/guest/pages/accueil.php'); break;
    }
}
