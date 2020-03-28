<?php

require_once("model/Manager.php");

class AdminManager extends Manager {


	public function getAllUsers(){
		$db = $this->dbConnect();
	    $req = $db->query('SELECT * FROM users');
	    return $req;
	}

	public function getUserFromID($userID){ //Transforme un ID en user

		$db = $this->dbConnect();
	    $req = $db->prepare('SELECT * FROM users WHERE id=?');
	    $req->execute(array(
    		$userID
    	));
    	$user = $req->fetch();
    	return $user;
	}

	public function getProgress(){

		$db = $this->dbConnect();
		$req = $db->query('SELECT * FROM tache');
		return $req;
	}

	public function getTask($id){

		$db = $this->dbConnect();
	    $req = $db->prepare('SELECT * FROM tache WHERE id=?');
	    $req->execute(array(
    		$id
    	));
    	$task = $req->fetch();
    	return $task;
	}

	public function addTask($name, $description){

		$db = $this->dbConnect();
	    $req = $db->prepare('INSERT INTO `tache` (`name`, `description`) VALUES (:name, :description)');
	    if (strlen($description) <= 1 OR strlen($name) <= 1) {
	    	echo 'trop court';
	    } else {
		    $req->execute(array(
		    	':name' => htmlspecialchars($name),
		    	':description' => htmlspecialchars($description)
	    	));
		}
	}

	public function getTaskComment($id){

		$db = $this->dbConnect();
	    $req = $db->prepare('SELECT * FROM tache_comment WHERE task_id = :task_id');
	    $req->execute(array(
	    	':task_id' => $id
    	));

	    return $req;

	}

	public function newTaskComment($id, $text){

		$db = $this->dbConnect();
	    $req = $db->prepare('INSERT INTO `tache_comment` (`task_id`, `text`) VALUES (:task_id, :comment)');
	    if (strlen($text) <= 1) {
	    	echo 'trop court';
	    } else {
		    $req->execute(array(
		    	':task_id' => $id,
		    	':comment' => htmlspecialchars($text)
	    	));
		}
		
	}

	public function setTaskProgress($id, $value){

		$progress = intval($value);

		if ($progress > 0 || $progress < 100) {
			$db = $this->dbConnect();
		    $req = $db->prepare('UPDATE `tache` SET `progression` = :progress WHERE (`id` = :id)');
		    $req->execute(array(
		    	':id' => $id,
		    	':progress' => $progress
	    	));
		}
		
	}
}