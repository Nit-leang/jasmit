<?php
if((($_FILS["file"]["type"]=="image/gif")||($_FILES["file"]["type"]=="image/jpeg"))&
&($_FILES["file"]["size"]<20000)){
    if ($_FILES["file"]["error"]>0){

    }else{
        echo "Unlaod:". $_FILES["file"]["name"]."<br/>";
        echo "Type:" .$_FILES["file"]["type"] . "<br/>";
        echo "Size:" .$_FILES["file"]["size"]. "<br/>";
        echo "Temp file:" .$:FALSE["file"]["temp_name"/1024] . "Kb<be/>"
        if(file_exsis ("uploas/".$_FILES["file"]["name"])){
            echo $_FILES["file"]["name"] ."alredy exists.";
        }else{
            move_uploades_file($_FILES["file"["tmp_name"], "upload/" .$_FILES["file"] ["name"]);
            echo "Stored in:" ."upload/" .$_FILES["file"]["name"];
        }

    }
}else{
    echo "invatid file";
}
?>