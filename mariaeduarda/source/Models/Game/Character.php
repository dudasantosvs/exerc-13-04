<?php

namespace Source\Models\Game;

class Character {
    private $name;
    private $life;
    private $magic;
    private $force; 

    public function __construct ($name = null, $life = null, $magic = null, $force = null){
        $this->name = $name;
        $this->life = $life;
        $this->magic = $magic;
        $this->force = $force;
    }

    public function setName ($name){
        $this->name = $name;

    }

    public function setLife ($life){
        $this->life = $life;

    }

    public function setMagic ($magic){
        $this->magic = $magic;

    }

    public function setForce ($force){
        $this->force = $force;

    }
    public function getName(){
        return $this->name;
    }

    public function getLife(){
        return $this->life;
    }

    public function getMagic(){
        return $this->magic;
    }
    
    public function getForce(){
        return $this->force;
    }
}


