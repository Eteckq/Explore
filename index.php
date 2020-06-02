<?php
//session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('controller/DefaultGuestController.php');

//On regarde si une "action" est précisée dans l'URL, et si il n'y en a pas on met "accueil" (pour avoir une redirection par defaut)
$action = isset($_GET['action']) ? $_GET['action'] : "accueil";
$id = isset($_GET['id']) ? $_GET['id'] : "0";
$guestController = new DefaultGuestController();

switch ($action) {
    case "prestation": $guestController->prestation($id); break;
    case "contact": $guestController->contact(); break;
    case "events":
        $guestController->events();
        break;
    default: $guestController->accueil(); break;
}

