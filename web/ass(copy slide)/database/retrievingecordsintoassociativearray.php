<?php 
$sql="SELECT * FROM users limit 5";
if($result=mysqli_query($con,$sql)){
    if(mysqli_num_rows($result>0)){
        echo "<table border=1>";
            echo "<tr>";
                echo"<th>"id"</th>";
                echo "<th>" first_name"</th>";
                echo "<th>"last_name"</th>";
            echo "</tr>"
            while($row=mysqli_fetch_array($result)){
                echo "<tr>";
                echo"<td>".$row['id']. "</td>";
                echo "<td>".$row['first_name']."</td>";
                echo "<td>".$row['last_name']."</td>";
            echo "</tr>"
            }
            echo "</table>";
            mysqli_free_result:$result;
    }
    else{
        echo "No records matching your query were found.";
    }
}else{
    echo "ERROR:Could not able to execute $sql.".mysqli_error($con);
}
?>