<?php
$con=mysqli_connect("localhost","root","");
if ($con===false){
    die("ERROR: Could not connect.".mysqli_connect_error());
}
$db_selected=mysqli_select_db($con,"niptict");
if (!$db_selected){
    die("Can't use niptict:".mysqli_error($con));
}
$sql="UPDATE users SET gender='F'WHERE id>1000";
if(mysqli_query($con,$sql)){
    echo "successfully updated";
}else{
    echo  "ERROR: Could not able to execute $sql.".mysqli_error($con);
}
mysqli_close($con);
?>