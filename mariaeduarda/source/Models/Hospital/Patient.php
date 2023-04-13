<?php

namespace Source\Models\Hospital;

use Source\Models\User;

class Patient extends User{
    private $chart;
    private $dateOfBirth;

    public function __construct($name = null, $email = null, $password = null, $chart = null, $dateOfBirth = null) 
    {
       parent::__construct ($name, $email, $password);
       $this->chart = $chart;
       $this->dateOfBirth = $dateOfBirth;

    }
}
}