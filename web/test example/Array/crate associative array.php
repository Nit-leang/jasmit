<?php
$ages=array("sok"=>20, 'sao'=>15, 'dar'=>30);
echo "Mr.sok is".$ages['sok']."years old <br>";
echo "Mr.sok is".$ages['sao']."years old <br>";
echo "Mr.sok is".$ages['dara']."years old <br>";

$ages["sok"]=20;
$ages["sao"]=15;
$ages["dara"]=30;
echo "Mr.sok is".$ages['sak']."years old <br>";
echo "Mr.sao is".$ages['sao']."years old <br>";
echo "Mr.dara is".$ages['dara']."years old<br>";

?>