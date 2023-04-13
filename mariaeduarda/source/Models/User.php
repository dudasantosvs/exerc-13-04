<?php

namespace Source\Models;


class User{
    private $name;
    private $email;
    private $password;
    private $address;
    private $savings;

    public function __construct ($name = null, $email = null, $password = null, Address $address = null){
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->address = $address;
    }

    public function setName ($name){
        $this->name = $name;

    }

    public function setEmail ($email){
        $this->email = $email;

    }

    public function setPassword ($password){
        $this->password = $password;

    }

    public function setEmail ($address){
        $this->adress = $adress;

    }
    public function getName(){
        return $this->name;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getAddress(){
        return $this->address;
    }

    public function addSavings(Savings $savings){
        $this->savings[] = $savings;
        var_dump($this=>savings);
    }
}

