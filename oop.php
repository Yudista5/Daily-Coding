<?php

require_once('animal1.php');
require_once('animal2.php');
require_once('animal3.php');

$hewan = new animal1("Shaun");
echo "Name : ". $hewan->name . "<br>";
echo "Legs : ". $hewan->legs . "<br>";
echo "Cold blooded : ". $hewan->coldBlooded . "<br><br>";

$katak = new animal2('Buduk');
echo "Name : ". $katak->name . "<br>";
echo "Legs : ". $katak->legs . "<br>";
echo "Cold blooded : ". $katak->coldBlooded . "<br>";
echo "Jump : ". $katak->action . "<br><br>";

$ape = new animal3('Kera Sakti');
echo "Name : ". $ape->name . "<br>";
echo "Legs : ". $ape->legs . "<br>";
echo "Cold blooded : ". $ape->coldBlooded . "<br>";
echo "Yell : ". $ape->action . "<br>";
?>