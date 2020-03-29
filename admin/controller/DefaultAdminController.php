<?php

require('model/AdminManager.php');

class DefaultAdminController {
	private $adminManager;
	private $connexionManager;

	function __construct(){
		$this->adminManager = new AdminManager();
		$this->connexionManager = new ConnexionManager();
	}

	function accueil(){
		require('view/pages/accueil.php');
	}
	
	function admins(){
		$adminsReq = $this->adminManager->getAccounts();
		require('view/pages/admins.php');
	}
	
	function articles(){
		$articlesReq = $this->adminManager->getArticles();
		require('view/pages/articles.php');
	}
	
	//TODO
	function addArticle($name, $desc){
		$this->adminManager->addArticle($name, $desc);
		header('Location: /newArticle');
	}
	
	//TODO
	function getArticle($id){
		$article = $this->adminManager->getArticle($id);
		//$comments = $this->adminManager->getArticleComment($id);
	
		require('view/pages/article.php');
	
	}
}