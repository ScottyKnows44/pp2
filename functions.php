<?php
function printArr($numbers){
    foreach ($numbers as $number){
        echo($number . "<br>");
    }
}

function largest($numbers){
    $largest = 0;
    foreach ($numbers as $number){
        if($number > $largest){
            $largest = $number;
        }
    }
    return $largest;
}