<?php

class Prestation {
    public $id;

    public $title;
    public $description;
    public $image;

    public function __construct($id){
        $this->id = $id;
        
        $this->title = "";
        $this->description = "";
        $this->image = "";
    }
}