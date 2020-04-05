<?php
$con=mysqli_connect("localhost","root","");
if ($con===false){
    die("ERROR: Could not connect.".mysqli_connect_error());
}
$db_selected=mysqli_select_db($con,"niptict");
if (!$db_selected){
    die("Can't use niptict:".mysqli_error($con));
}
$sql="UPDATE users SET last_name='sabay'WHERE id=1";
if(mysqli_query($con,$sql)){
    echo "records were updated successfully";
}else{
    echo  "ERROR: Could not able to execute $sql.".mysqli_error($con);
}
mysqli_close($con);
?>