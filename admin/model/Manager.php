<?php

class Manager {

	protected function dbConnect(){
		$db = new PDO('mysql:host=localhost;dbname=explore;charset=utf8', 'root', 'root');
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $db;
	}

	//TODO
	public function getSelfUser(){
		$db = $this->dbConnect();
	    $req = $db->prepare('SELECT * FROM accounts WHERE id=?');
	    $req->execute(array(
    		$_SESSION['user_id']
    	));
    	return $req->fetch();
	}

	public function getUserFromMail($mail){

		$db = $this->dbConnect();
	    $req = $db->prepare('SELECT * FROM accounts WHERE mail=?');
	    $req->execute(array(
    		$mail
    	));
		$user = $req->fetch();
	    return $user;
	}

	public function resizeimg($source) {
		$ext = strtolower(pathinfo($source)['extension']);
		$pathimg = '..\include\images\uploaded\\' + strtolower(pathinfo($source)['basename']);

		if (!file_exists($source)) {
	    	throw new Exception('Source image file not found');
	  	}
		else if (!in_array($ext, ["bmp", "gif", "jpg", "jpeg", "png", "webp"])) {
	    	throw new Exception('Invalid image file type');
	  	}

		$dimensions = getimagesize($source);
	  	$width = $dimensions[0];
	  	$height = $dimensions[1];

		$funcCreate = "imagecreatefrom" . ($ext=="jpg" ? "jpeg" : $ext);
	  	$funcOutput = "image" . ($ext=="jpg" ? "jpeg" : $ext);

		$original = $funcCreate($source);
	  	$resized = imagecreatetruecolor(300, 200);

		imagecopyresampled($resized, $original, 0, 0, 0, 0, 300, 200, $width, $height);

		$funcOutput($resized,$pathimg);
		imagedestroy($original);
		imagedestroy($resized);
	}

}
