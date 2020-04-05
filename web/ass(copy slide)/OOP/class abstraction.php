<?php
abstract class abstractClass{
   abstract protected function test();
}
class ConcreteClass extends AbstractClass{
    protected function test(){
        echo "ConcreteClass <br>";
    }
}
?>