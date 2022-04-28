<?php

function fab(int $number){
    if($number === 0 || $number === 1)
        return $number;
    

    return fab($number - 1) + fab($number - 2);
}

echo (fab(4));
