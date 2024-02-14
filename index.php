<?php

// define associative array in PHP

$brand = array(
    'id' => 10000,
    'name' => 'MSI',
    'company' => 'Bangladesh',
    'office' => 'Dhaka',
);

var_dump($brand);

$user = [
    'id' => 10000000,
    'name' => 'Sohel Rana',
    'email' => 'dev.sohelrana@gmail.com',
    'avater' => 'https://dev.sohelrna.me/avater/',

];

foreach ($user as $title => $value) {
    echo "$title: $value <br>";
};

// change value 
$user['email'] = 'sohelrana@gmail.com';

// fatch value or data form associative array
echo $user["email"];
