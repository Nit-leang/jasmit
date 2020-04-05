<?php
class Rectangle{
    public $lenght=0;
    public $width=0;
    public function getPerimeter(){
        return (2*($this->length +$this->width));
    }
    public function getArea(){
        return ($this->lenght*$this->width);
    }
}
?>