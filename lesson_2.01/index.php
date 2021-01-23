<?php 

function isEven($n){ // $n is argument
    if($n % 2 == 0){
        return true;
    }
    return false;
}

$x = 13;
if(isEven($x)){ // $x is argument
    echo "{$x} is an even number";
}else{
    echo "{$x} is an odd number";
}