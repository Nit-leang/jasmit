<?php

$username=$_POST["username"];
$password=$_POST["password"];

if(($username <=>'leang sreynit')==0 && ($password<=>'123')==0){
    echo "Hello You're Sigin Success Your Name". $username . "Password".$password ;
}
elseif(($username <=> 'Sorn nita')==0 && ($password<=>'87234')==0){
    echo "Hello You're Sigin Success".$username.$password ;
}
elseif(($username <=> 'Pich vandy')==0 && ($password<=>'543678')==0){
    echo "Hi You are login Success".$username.$password ;
}
else{
    echo "You are not success, Please try agian.";
}
?>