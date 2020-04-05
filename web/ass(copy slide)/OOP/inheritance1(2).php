<?php
require_once("rectangle.php");
class Square  extends rectangle{
    public function isSqatr(){
        if($this->lenght==$this->width){
            return true;
        }else{
            return false;
        }
    }
}
?>