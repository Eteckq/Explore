<?php

class Manager {

	protected function dbConnect(){
		$db = new PDO('mysql:host=localhost;dbname=explore;charset=utf8','root', 'root');
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
		$ext = strtolower(pathinfo($source['name'], PATHINFO_EXTENSION));
		$pathimg = '../include/images/uploaded/' . strtolower(pathinfo($source['tmp_name'], PATHINFO_BASENAME));

		$dimensions = getimagesize($source['tmp_name']);
	  	$width = $dimensions[0];
	  	$height = $dimensions[1];

		$funcCreate = "imagecreatefrom" . ($ext=="jpg" ? "jpeg" : $ext);

		$original = $funcCreate($source['tmp_name']);
	  	$resized = imagecreatetruecolor(300, 200);

		imagecopyresampled($resized, $original, 0, 0, 0, 0, 300, 200, $width, $height);
		imagedestroy($original);

		return $resized;		//returns resized image (not yet saved as a file)
	}

	public function uploadImage($file){
		$imageFileType = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));


		$filename = $this->generateRandomString(10) . "." . $imageFileType;
		$location = "../include/images/uploaded/" . $filename;

		/* Valid Extensions */
		$valid_extensions = array("bmp", "gif", "jpg", "jpeg", "png", "webp");
		/* Check file extension */
		if (!in_array(strtolower($imageFileType), $valid_extensions)) {
			return 0;
		}

		//resize
		$img = $this->resizeimg($file);
		$funcOutput = "image" . ($imageFileType=="jpg" ? "jpeg" : $imageFileType);

		/* Upload file */
		if ($funcOutput($img, $location)) {
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
