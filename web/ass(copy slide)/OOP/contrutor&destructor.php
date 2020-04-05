<?php
class myClass{
    public function __construct(){
        echo "the class\"".__CLASS__."\"was initiate! <br>";
    }
    public function __destruct(){
        echo "the class\"".__CLASS__."\"was destroyed! <br>";
    }
}
?>