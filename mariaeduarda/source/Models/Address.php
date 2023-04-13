<?php

namespace Source\Models;

class Address{
    private $street;
    private $number;
    private $complement;
    
    public function __construct ($street = null, $number = null, $complement = null){
        $this->street = $street;
        $this->number = $number;
        $this->complement = $complement;
        
    }
}
