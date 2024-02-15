<?php

# PHP arithmetic operators
/**
 * + -> addition
 * - -> subtraction
 * * -> multiplication
 * / -> division
 * % -> modulus
 * ** -> exponentiation
 */

$rice = 30;
$oil = 12;
$ricePrice = 65;
$oilPrice = 190;
$balance = 4000;
$border = 5;

$totalRiceOil = $rice + $oil; // useage addition (+) operators

$totalRicePrice = $rice * $ricePrice; // useage multiplication (*) operators
$totalOilPrice = $oil * $oilPrice;

$totalCost = $totalRicePrice + $totalOilPrice;

$extraBalance = $balance - $totalCost; // useage subtraction (-) operators

$individualCost = $totalCost / $border; // useage division (/) operators

$modulus = $rice % $oil; // useage modulus (%) operators

# ** exponentiation operators work as power 2'th3
$x = 9; // base value
$y = 2; // power value 9 ** 2 = 81

$exponentiation = $x ** $y; // useage exponentiation (**) operators

# display any variable value
echo $exponentiation;
