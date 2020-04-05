<?php
interface MyInterface1{
    public function test1();
}
interface MyInterface2 extends MyInterface1{
    public function test2;
}
class MyConcrete implements MyInterface2{
    public function test1{
        echo "test1() <br>";
    }
    public function test2(){
        echo "test2() <br>";
    }
}
$obj=new myConcrate();
$obj->test1();
$obj->test2();
?>