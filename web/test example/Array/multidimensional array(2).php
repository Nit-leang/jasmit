<?php
$people=[
    "sok"=>['age'=>'20',"address"=>"phnom penh"],
    'sao'=>array('age'=>'30',"address"=>"kondal");
 ] ;
echo "Mr.sok is ".$people['sok']['age']."years old from".$people['sok']['address']."<br>";
$people["sok"]=['age'='20', "address"=>"phnom penh"];
$people['sao']=array('age'=>'30',"address"=>"kondal");
echo"Mr.sok is".$people['sok']['age']."years old from".$people['sok']['address']."<br>";

?>

