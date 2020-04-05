<?php
$file=fopen("content.csv", "r");
print_r(fgetcsv($file));
fclose($file);

$file=fopen("test.htm", "r");
echo fgetss($file, 1024, "<p>,</p>");
fclose($file);
?>