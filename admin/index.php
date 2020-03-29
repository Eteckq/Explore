<?php
session_start();

require('controller/DefaultAdminController.php');
require('controller/ConnexionController.php');

$action = isset($_GET['action']) ? $_GET['action'] : "accueil";
$admin = isset($_SESSION['admin']) ? $_SESSION['admin'] : false;


if($admin){ //Si le user est un admin
    $adminController = new DefaultAdminController();

    switch ($action) {
        case "admins": $adminController->admins(); break;
        case "articles": $adminController->articles(); break;
        default: require('view/pages/accueil.php'); break;
    }

} else {
    if($action == "connect"){
        $connexionController = new ConnexionController();
        $connexionController->connect($_POST["login"],$_POST["pass"],isset($_POST["remember"])); 
    } else {
        require('view/loginView.php');
    }
}