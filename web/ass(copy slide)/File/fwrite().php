<?php
$file="note.text";
$data="I'm study at nipticp.";
$handle= fopen($file,"w");
if(fwrite($handle, $data)>0){
    echo "write success";
}else{
    echo "write fail";
}
fclose($handle);
?>