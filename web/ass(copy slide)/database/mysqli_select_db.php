<?php
$con=mysqli_connect("localhost","root","");
if ($con===false){
    die("ERROR: Could not connect.".mysqli_connect_error());
}
$db_selected=mysqli_select_db($con,"niptict");
if (!$db_selected){
    die("Can't use niptict:".mysqli_error($con));
}
echo "database selected successfully";
mysqli_close($con);
?>