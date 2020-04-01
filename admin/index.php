<?php
session_start();

require('controller/ConnexionController.php');

require('controller/AccountController.php');
require('controller/PrestationController.php');

//var_dump($_POST);

$page = isset($_GET['page']) ? $_GET['page'] : "accueil";
$action = isset($_GET['action']) ? $_GET['action'] : "list";
$id = isset($_GET['id']) ? $_GET['id'] : "0";
$admin = isset($_SESSION['admin']) ? $_SESSION['admin'] : false;


if($admin){ //Si le user est un admin
    $accountController = new AccountController();
    $prestationController = new PrestationController();

    switch ($page) {
        case "prestation":
            switch ($action) {
                case "view":
                    $prestationController->getPrestation($id);
                    break;
                case "edit":
                    $prestationController->editPrestation($_POST["id"],$_POST["title"],$_POST["description"]);
                    break;
                case "delete":
                    $prestationController->deletePrestation($id);
                    break;
                case "list": default:
                    $prestationController->prestations();
                    break;
            }
        break;
        case "account":
            switch ($action) {
                case "view":
                    $accountController->getAdmin($id);
                    break;
                case "edit":
                    $accountController->editAdmin($_POST["id"],$_POST["pseudo"],$_POST["mail"],$_POST["password"]);
                    break;
                case "delete":
                    $accountController->deleteAdmin($id);
                    break;
                case "list": default:
                    $accountController->admins();
                    break;
            }
        break;
        default: require('view/pages/accueil.php'); break;
    }


} else {
    if($page == "connect"){
        $connexionController = new ConnexionController();
        $connexionController->connect($_POST["mail"],$_POST["password"],isset($_POST["remember"])); 
    } else {
        require('view/loginView.php');
    }
}