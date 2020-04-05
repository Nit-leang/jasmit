<?php
$db=new mysqli('localhost','root','root','niptict');
if($db===false){
    die("ERROR:Could not connect.".$db->connect_error);
}
echo "Connected Successfully";
$db->close();
?>