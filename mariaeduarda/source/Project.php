<?php

class Project{
    private $title;
    private $resume;
    private $text;

    public function __construct ($title = null, $resume = null, $text = null){
        $this->title = $title;
        $this->resume = $resume;
        $this->text = $text;
    }

    public function setTitle ($title){
        $this->title = $title;

    }

    public function setResume ($resume){
        $this->resume = $resume;

    }

    public function setText ($text){
        $this->text = $text;

    }

    public function getTitle(){
        return $this->title;
    }

    public function getResume(){
        return $this->resume;
    }

    public function getText(){
        return $this->text;
    }
}