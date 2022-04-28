<?php

function bubble($array ,$size){
    if(1 === $size){
        return $array;
    }

    for($i = 0;$i < $size - 1;$i++){
        if($array[$i] > $array[$i + 1]){
            $temp = $array[$i];
            $array[$i] = $array[$i + 1];
            $array[$i + 1] = $temp;
        }
    }

    return bubble($array ,$size - 1);
}

$arr = [64, 34, 25, 12, 22, 11, 90 ];
print_r(bubble($arr ,sizeof($arr)));