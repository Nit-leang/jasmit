<?php

// getting the value of name field
$name1 = $_GET["fristname"];
$name2 = $_GET["lastname"];
// getting the value of the email field
$email = $_GET["email"];

echo "Hi, ". $name1.$name2 . "</br>";
echo "Your email address: ". $email ."<br>";

?>