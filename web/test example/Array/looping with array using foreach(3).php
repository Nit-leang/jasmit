<?php
$people=array(
    ['name'=>"sok",'age'=>'22',"address"=>"phnom penh"];
    array('name'=>'sao','age'=>'30',"address"=>"kondal")
);
?>
<table>
    <tr>
        <th>Name</th> 
        <th>Age</th>
        <th>Address</th>   
    </tr>
    <?php
        foreach($people as $person){
            echo"<tr>";
            echo "<td>".$person['name']."</td>";
            echo "<td>".$person['age']."</td>";
            echo "<td>".$person['address']."</td>";
            echo "</tr>";
        }
    ?>
</table>