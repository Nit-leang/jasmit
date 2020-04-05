<?php
class BaseClass{
    public function test(){
        echo "BaseClass::test() called <br>";
    }
    final public function test1(){
        echo "BeseClass::test1() called <br>";
    }
}
class ChildClass extends BaseClass{
    public function test1(){
        echo "ChildClass::test() called <br>";
    }
}
$c=new ChildClass();
$c->test1();
?>