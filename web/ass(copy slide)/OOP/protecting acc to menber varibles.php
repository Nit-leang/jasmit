<?php
class Demo{
    private $name;
    public function setName($name){
        $this->name=$name;
    }
    public function getName(){
        return $this->name;
    }
    function sayHello(){
        echo "Hello $this->name!";
    }
}

require_once('demo.php');
$objDemo = new Demo();
$objDemo->name= "sok sabay";
$objDemo->sayHello();


?>