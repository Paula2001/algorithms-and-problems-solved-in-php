<?php
// last most sign. bit
//1011111111 // 1 
//101111111 // 1
//10111111 // 1
//1011111 // 1
//101111 // 1
//10111 // 1
//1011 // 1
//101 // 1
//10 // 1
//1 // 0

$arrayOfBits = [];

for($i = 119;$i > 0;$i = $i >> 1){
    array_push($arrayOfBits, $i & 1);
}


function checkForPalindrome ($arrayOfBits) { 
    $flag = true;
    for ($i = 0, $j = sizeof($arrayOfBits) - 1; $i < sizeof($arrayOfBits); $i++,$j--) { 
        if($arrayOfBits[$i] !== $arrayOfBits[$j]){
            $flag = false;
        }
    }
    return $flag;
}

echo checkForPalindrome($arrayOfBits);