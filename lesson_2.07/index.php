<?php 
function printN($i){
    if($i >= 10){
        return;
    }

    echo $i."\n";
    $i++;
    printN($i);
}
// printN(0);

// Recursive function 
function printNumber($counter, $end, $stepping=2){
    if($counter>$end){
        return;
    }
    echo $counter."\n";
    $counter += $stepping;
    printNumber($counter, $end, $stepping);
}
printNumber(21, 45);