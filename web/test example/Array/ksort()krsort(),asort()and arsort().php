<?php
$ages=["sok"=>20,'sao'=>15,'dara'=>30];
print_r($ages);
echo"<br>";
ksort($ages);
print_r($ages);
echo"<br>";
krsort($ages);
print_r($ages);
echo"<br>";
asort($ages);
print_r($ages);
echo"<br>";
arsort($ages);
print_r($ages);

?>