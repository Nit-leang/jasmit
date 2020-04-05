<?php
$datas= "Ta\n";
$datas .= "Sa\n";
$datas .= "Sao\n";
$datas .= "kter\n";
$datas .= "nana\n";
$datas .= "oppa\n";
if(file_put_contents("test.text", $datas, FILE_APPEND)>0){
    echo "Data is the written seccess !";
}else{
    echo "Data is fail to write !";
}

?>