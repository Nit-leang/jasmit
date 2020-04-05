<?php
require_once("square.php");
$obj=new Square;
$obj->lenght=20;
$obj->width=20;
if($obj->isSquare()){
    echo "The area of the square is:";
}else{
    echo "The area of the retangle is:";
};
echo $obj->getArea();
?>