<?php
function fact($n=1){
    if($n<=1){
        return 1;
    }
    return $n*fact($n-1);
};
echo"factoriel of 5 is:".fact(5);
?>