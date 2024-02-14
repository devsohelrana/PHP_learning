<?php


// create array

# create arrays by using array() function
$user = array(1, 'Sohel Rana', "BBA at PUST", '1st year 1st semester'); #single line
$user = array(
    1,
    'Sohel Rana',
    "BBA at PUST",
    '1st year 1st semester'
); # multipule line

# or using shorter syntax by using [] brackets
$user = [
    1,
    "Sohel Rana",
    "BBA at PUST",
];

# array keys
$user = [
    0 => 'Sohel Rana',
    1 => 'Shamim',
    2 => 'Sumon Sarker'
];

// define associative array in PHP
$brand = array(
    'id' => 10000,
    'name' => 'MSI',
    'company' => 'Bangladesh',
    'office' => 'Dhaka',
);

$userAcco = [
    'id' => 10000000,
    'name' => 'Sohel Rana',
    'email' => 'dev.sohelrana@gmail.com',
    'avater' => 'https://dev.sohelrna.me/avater/',

];

// fatch value using loop
foreach ($userAcco as $title => $value) {
    echo "$title: $value <br>";
};

// change value 
$userAcco['email'] = 'sohelrana@gmail.com';

// add array item
$userAcco["phone"] = "+8801822-079983";
// add multiple array items
array_push($user, "name", "age"); # this method working normal array
$userAcco += ["token" => "jfh93303+_iodjfhkd", "verified_at" => true]; # this method working associative array

// remove array item
array_splice($user, 1, 2); # First specify the index (where to start) && second how many items you want to delete
unset($userAcco["token"]);

/**
 * array_splice() 
 * unset()
 * array_shift() => Remove the First Item
 * array_pop() => Remove the Last Item
 */

// Sorting Arrays

/**
 * sort() - sort arrays in ascending order
 * rsort() - sort arrays in descending order
 * asort() - sort associative arrays in ascending order, according to the value
 * ksort() - sort associative arrays in ascending order, according to the key
 * arsort() - sort associative arrays in descending order, according to the value
 * krsort() - sort associative arrays in descending order, according to the key
 */
$numbers = array(4, 6, 2, 22, 11, -11, 0, 99, 25, 88, -30);

rsort($numbers);

var_dump($numbers);



// fatch value or data form associative array
# echo $userAcco["phone"] . '<br>';
// var_dump($userAcco);

// array change key case CASE_UPPER or CASE_LOWER
print_r(array_change_key_case($userAcco, CASE_LOWER));

# var_dump($user);
