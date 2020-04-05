<form action="list.php" class="form">
<?php
if($result->num_rows>0){
    while($row=
    $result->ferch_assoc()){
        echo "id:". $row["id"]."-Name:" .$row["firstname"]."<br>";
        }
    }else{
        echo "0 results";
    }




?>