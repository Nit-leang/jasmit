<?php
$people=array(
    ['name'=>"sok",'age'=>'22',"address"=>"phnom penh"],
    array('name'=>'sao','age'=>'30',"address"=>"kondal")
);
echo "Mr.".$people[0]['name']."is".$people[0]['age']."years old from".$people[0]['address']."<br>";

$people[0]=['name'=>"sok",'age'=>'22',"address"=>"phnom penh"];
$people[1]=array('name'=>"sao",'age'=>'30',"address"=>"kondal");
echo"Mr."$people[0]['name']."is".$people[0]['age']."years old from".$people[0]['address'."<br>"];

?>