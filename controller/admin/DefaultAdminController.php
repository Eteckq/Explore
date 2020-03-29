<?php

require('model/admin/AdminManager.php');

class DefaultAdminController {
	private $adminManager;

	function __construct(){
		$this->adminManager = new AdminManager();
	}

	function accueil(){
		require('view/admin/pages/accueil.php');
	}
	
	function admins(){
		$adminsReq = $this->adminManager->getAccounts();
		require('view/admin/pages/admins.php');
	}
	
	function articles(){
		$articlesReq = $this->adminManager->getArticles();
		require('view/admin/pages/articles.php');
	}
	
	function addArticle($name, $desc){
		$this->adminManager->addArticle($name, $desc);
		header('Location: /newArticle');
	}
	
	function getArticle($id){
		$article = $this->adminManager->getArticle($id);
		//$comments = $this->adminManager->getArticleComment($id);
	
		require('view/admin/pages/article.php');
	
	}
}