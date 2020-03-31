<?php

class Prestation {
    public $id;

    public $title;
    public $description;

    public function __construct($id){
        $this->id = $id;
        
        $this->title = "";
        $this->description = "";
    }
}