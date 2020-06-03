<?php

class Evenement
{
    public $id;

    public $title;
    public $description;
    public $date;
    public $image;

    public function __construct($id)
    {
        $this->id = $id;

        $this->title = "";
        $this->description = "";
        $this->date = "";
        $this->image = "";
    }
}
