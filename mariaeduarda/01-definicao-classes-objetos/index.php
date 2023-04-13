<?php

require __DIR__ . "/../source/User.php";

// Exemplo 01

/*
$user = new User();
$user->name = "Maria Eduarda";
$user->email = "duda@gmail.com";
//var_dump($user);
echo "Ola, {$user->name}! Seu e-mail {$user->email}";
*/
$user = new User("joazinho", "joao@gmail.com");
//$user->setName("Maria Eduarda");
//$user->setEmail("duda@gmail.com");
var_dump($user);

