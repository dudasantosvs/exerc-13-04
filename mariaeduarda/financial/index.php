<?php

require __DIR__ . "/../source/autoload.php";

use Source\Models\User;
use Source\Models\Address;
use Source\Models\Financial\Savings;

$address = new Address(
"ruaa", "7437", "ap 24"
);

var_dump($address);

$user = new User(
 "duda", "dudinha.com", "849723", $address
);

var_dump($user);

$savings = new Savings(
    "62527", "400", "20/12/32"
)


$user->addSavings($savings);