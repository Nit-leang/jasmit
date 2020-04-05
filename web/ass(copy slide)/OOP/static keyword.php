<?php
class Foo{
    public static $static_var="foo";
    public function staticValue(){
        return self: :$static_var;
    }
}
class Bar extends Foo{
    public function fooStatic(){
        return parent::$static_var;
    }

}
echo Foo:: $static_var."<br>";
$foo=new Foo();
echo $foo->staticValue()."<br>";
echo $foo->static_var."<br>";
echo $foo::static_var."<br>";
echo Bar::static_var."<br>";
$bar=new Bar();
echo $bar->fooStatic()."<br>";
?>