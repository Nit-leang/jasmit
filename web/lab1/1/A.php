<?php
$n = $_GET['Number1'];
$m = $_GET['Number2'];
$find1 = $_GET['find'];
if($find1 == "+"){
    $sum = $n + $m;

echo "The sum of the two numbers is ". $sum;}

elseif($find1 == "-"){
    $sum = $n - $m;

echo "The minus of the two numbers is ". $sum;}
elseif($find1 == "/"){

    $sum = $n / $m;

echo "The / of the two numbers is ". $sum;}

elseif($find1 == "*"){
    $sum = $n * $m;

echo "The * of the two numbers is ". $sum;}
?>