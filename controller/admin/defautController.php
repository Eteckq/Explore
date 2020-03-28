<?php

require('model/admin/AdminManager.php');

function adminAccueil(){
	require('view/admin/AdminView/accueilView.php');
}

function adminListe(){

	$adminManager = new AdminManager();
	$userList = $adminManager->getAllUsers();

	require('view/admin/AdminView/userlistView.php');
}

function playerInfo($id){

	$adminManager = new AdminManager();
	$user = $adminManager->getUserFromID($id);

	require('view/admin/AdminView/playerInfosView.php');
}

function progress(){

	$adminManager = new AdminManager();
	$progress = $adminManager->getProgress();

	require('view/admin/AdminView/progressionView.php');
}

function addTache($name, $desc){

	$adminManager = new AdminManager();
	$adminManager->addTask($name, $desc);

	header('Location: index.php?action=progress');
}

function getTache($id){
	$adminManager = new AdminManager();
	$tache = $adminManager->getTask($id);
	$comments = $adminManager->getTaskComment($id);

	require('view/admin/AdminView/taskView.php');

}

function commentTache($id, $text){

	$adminManager = new AdminManager();
	$adminManager->newTaskComment($id, $text);

	header('Location: index.php?action=getTask&id=' . $id);


}

function setTaskProgress($id, $value){

	$adminManager = new AdminManager();
	$adminManager->setTaskProgress($id, $value);

	header('Location: index.php?action=getTask&id=' . $id);
	
}


function admin_changelog(){

	require('view/admin/AdminView/versionView.php');
	
}