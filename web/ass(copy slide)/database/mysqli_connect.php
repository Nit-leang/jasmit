<?php
$con=mysqli_connect("localhost","root","");
if ($con===false){
    die("ERROR: Could not connect.".mysqli_connect_error());
}
echo "Connected successfully";
mysqli_connect($con);
?>