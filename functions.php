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

function removeDups($numbers){
    $array2 = array();
    foreach ($numbers as $number){
        if(in_array($number, $array2) == false){
            array_push($array2, $number);
        }
    }
    return $array2;
}

function distribution($numbers){
    $array2 = array();
    $count = 1;
    foreach($numbers as $number){

        if(!in_array($number, $array2)){
            $array2 = $array2 + array($number => $count);
        }
    }

    foreach ($array2 as $key => $value){
        foreach ($numbers as $number){
           if($key == $number){
               $array2[$key] = $value++;
           }
        }
    }
    ksort($array2);
    return $array2;

}
