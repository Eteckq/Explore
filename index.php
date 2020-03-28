<?php

require('controller/admin/defautController.php');
require('controller/guest/defautController.php');

session_start();

//On regarde si une "action" est précisée dans l'URL, et si il n'y en a pas on met "accueil" (pour avoir une redirection par defaut)
if(isset($_GET['action'])){
    $action = $_GET['action'];
} else {
    $action = "accueil";
}

if(isset($_SESSION['admin'])){
    $admin = $_SESSION['admin'];
} else {
    $admin = 0;
}


if($admin == 1){ //Si le user est un admin
    switch ($action) {
        case "accueil": accueil(); break;
    }

} else {
    switch ($action) {
        case "register": require('view/guest/registerView.php'); break;
        default: require('view/guest/loginView.php'); break;
    }
}
