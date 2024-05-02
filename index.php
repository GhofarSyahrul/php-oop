<?php
require_once 'animal.php';
require_once 'Ape.php';
require_once 'Frog.php';

$sheep = new animal('shaun');
echo 'Nama domba:'  . $sheep->name . "\n" . '<br>';
echo 'Legs: ' . $sheep->legs . '<br>';
echo 'Darah dingin: ' . $sheep->cold_blooded . '<br>';
echo '<br>';

$kodok = new frog('Buduk');
echo 'Nama kodok: ' . $kodok->name . "\n" . '<br>';
echo 'Jump: ';
$kodok->jump();
echo 'legs: ' . $kodok->legs . '<br>';
echo ' Darah dingin: ' . $kodok->cold_blooded . '<br>' . '<br>';

$sungokong = new ape("Kera Sakti");
  echo 'Nama mu: ' . $sungokong->name . "\n" . '<br>';
  echo 'Legs: ' . $sungokong->legs .'<br>' ;
  echo "Darah dingin: " . $sungokong->cold_blooded . "<br>";
  echo "Yell: ";
  $sungokong->yell();
?>