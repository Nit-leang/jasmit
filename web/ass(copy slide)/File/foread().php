<?php
$file="data.text";
$handle=fopen($file, "r");
$content=fread($handle, "20");
fclose ($handle);
echo $content;

$file="data.text";
$handle=fopen($file, "r");
$size=filesize($file);
$content=fread($handle, $size);
fclose($handle);
echo $content;
?>