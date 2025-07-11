<?php
require_once('animal.php');
require_once('frog.php');
require_once('ape.php');

$shaun = new animal("Shaun");
echo "Name: " . $shaun->name . "<br>";
echo "Legs: " . $shaun->legs . "<br>";
echo "Cold-blooded: " . ($shaun->cold_blooded ? 'Yes' : 'No') . "<br>";
echo "=========================<br>";

$kera = new ape("kera sakti");
echo "Name : " . $kera->name . "<br>";
echo "legs : " . $kera->legs . "<br>";
echo "cold blooded : " . ($kera->cold_blooded ? 'yes' : 'no') . "<br>";
echo "Yell : " . $kera->yell() . "<br>";

echo "=========================<br>";

$buduk = new frog("buduk");
echo "Name : " . $buduk->name . "<br>";
echo "legs : " . $buduk->legs . "<br>";
echo "cold blooded : " . ($buduk->cold_blooded ? 'yes' : 'no') . "<br>";
echo "Jump : " . $buduk->jump() . "<br><br>";
?>


