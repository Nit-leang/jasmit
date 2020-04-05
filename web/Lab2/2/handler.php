<?php

// getting the value of name field
$name1 = $_POST["fristname"];
$name2 = $_POST["lastname"];
// getting the value of the email field
$email = $_POST["email"];

echo "Hi, ". $name1.$name2 . "<br>";
echo "Your email address: ". $email ."<br>";

?>