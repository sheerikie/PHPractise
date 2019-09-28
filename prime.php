<?php


function primeNumber($num){

    $answer=$num%$num;
    if ($answer=1) {
       echo "Its a Prime Number";
    }
    else{
        echo "No Its Not A prime Number";
    }



}


?>