<?php
//session_start();

require('controller/DefaultGuestController.php');

//On regarde si une "action" est précisée dans l'URL, et si il n'y en a pas on met "accueil" (pour avoir une redirection par defaut)
if(isset($_GET['action'])){
    $action = $_GET['action'];
} else {
    $action = "accueil";
}

$guestController = new DefaultGuestController();

switch ($action) {
    case "articles": $guestController->articles(); break;
    default: $guestController->accueil(); break;
}

