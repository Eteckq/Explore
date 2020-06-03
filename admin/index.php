<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('controller/ConnexionController.php');

require('controller/AccountController.php');
require('controller/PrestationController.php');
require('controller/EventController.php');

//var_dump($_POST);

$page = isset($_GET['page']) ? $_GET['page'] : "accueil";
$action = isset($_GET['action']) ? $_GET['action'] : "list";
$id = isset($_GET['id']) ? $_GET['id'] : "0";
$admin = isset($_SESSION['admin']) ? $_SESSION['admin'] : false;


if($admin){ //Si le user est un admin
    $accountController = new AccountController();
    $prestationController = new PrestationController();
    $eventController = new EventController();

    switch ($page) {
        case "prestation":
            switch ($action) {
                case "view":
                    $prestationController->getPrestation($id);
                    break;
                case "edit":
                    $prestationController->editPrestation($_POST["id"],$_POST["title"],$_POST["description"],$_POST["image"]);
                    break;
                case "delete":
                    $prestationController->deletePrestation($id);
                    break;
                case "list": default:
                    $prestationController->getPrestations();
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
        case "event":
            switch ($action) {
                case "view":
                    $eventController->getEvent($id);
                    break;
                case "edit":
                    $eventController->editEvent($_POST["id"], $_POST["title"], $_POST["description"], $_POST["date"], $_POST["image"]);
                    break;
                case "delete":
                    $eventController->deleteEvent($id);
                    break;
                case "list":
                default:
                    $eventController->events();
                    break;
            }
            break;
        case "upload":
            switch($action){
                case "event":
                    echo $eventController->uploadImage($_FILES["file"]);
                break;
            }
            break;
        default: require('view/pages/accueil.php'); break;
    }


} else {
    $connexionController = new ConnexionController();
    if($page == "connect"){
        $connexionController->connect($_POST["mail"],$_POST["password"],isset($_POST["remember"])); 
    } else {
        $connexionController->loginPage();
    }
}