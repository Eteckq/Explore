<?php

class Account {
    public $id;

    public $pseudo;
    public $mail;
    public $password;

    public function __construct($id){
        $this->id = $id;

        $this->pseudo = "";
        $this->password = "";
        $this->mail = "";
    }
}