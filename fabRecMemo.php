
<?php

function fab(int $number,array &$memorization = []){
    if($number === 0 || $number === 1)
        return $number;
    
    if(array_key_exists($number,$memorization)){
        return $memorization[$number];
    }
    $result = fab($number - 1, $memorization) + fab($number - 2,$memorization);
    $memorization[$number] = $result; 
    return $result;
}

echo (fab(50));
