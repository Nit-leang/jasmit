<?php
$con=mysqli_connect("localhost","root","");
if ($con===false){
    die("ERROR: Could not connect.".mysqli_connect_error());
}
$sql="SELECT*FROM persons";
if ($result=mysqli_query($con,$sql)){
    if(mysqli_num_rows($result)>0){
        echo "query successfully with some record";
        mysqli_free_result($result);
    }
    else{
        echo "No records matching your query were found.";
    }
}
else{
    echo  "ERROR: Could not able to execute $sql.".mysqli_error($con);
}
mysqli_close($con);
?>