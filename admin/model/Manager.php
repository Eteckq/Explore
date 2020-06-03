<?php

class Manager {

	protected function dbConnect(){
		$db = new PDO('mysql:host=localhost;dbname=explore;charset=utf8', 'explore', '5D14!dzDp*d');
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

	public function uploadImage($file){
		$imageFileType = pathinfo($file['name'], PATHINFO_EXTENSION);


		$filename = $this->generateRandomString(10) . "." . $imageFileType;
		$location = "../include/images/uploaded/" . $filename;

		/* Valid Extensions */
		$valid_extensions = array("bmp", "gif", "jpg", "jpeg", "png", "webp");
		/* Check file extension */
		if (!in_array(strtolower($imageFileType), $valid_extensions)) {
			return 0;
		}

		/* Upload file */
		if (move_uploaded_file($file['tmp_name'], $location)) {
			return $filename;
		} else {
			return 0;
		}
		
	}

	private function generateRandomString($length = 10){
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}

}
