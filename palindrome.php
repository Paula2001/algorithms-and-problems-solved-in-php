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
// $i & 1
$last = 0;
for($i = 119;$i > 1;$i = $i >> 1){
    $last = $i;
}
// 1101 = 13 - 1011 = 11


// for($i = 11;$i >= 1;$i = $i >> 1){
//     echo $i & 1;
//     echo "\n";
// }

// echo "\n";

// for($i = 13;$i >= 1;$i = $i >> 1){
//     echo $i & 1;
//     echo "\n";
// }

$b = 11;
$x = 11;
$y = 0;
$second = 13;
for($i = 0;$i < 4;$i++){
    $y = $y << 1;
    // echo "The is shift left y = ". $y; 
    // echo "\n";
    // echo "\n";
    $y |= $x & 1;
    // echo "This is add one bit to y = ". $y;
    // echo "\n";
    // echo "\n"; 
    $x = $x >> 1;
    // echo "This is shift x to right = ". $x; 
    // echo "\n";
    // echo "\n";
}

echo $y;

// if($second === $y ){
//     echo "yes";
// }

















// echo $last;

// for($i = 3;$i <= 119;$i = $i << 1){
//     echo $i;
//     echo "\n";
// }


// function checkForPalindrome ($arrayOfBits) { 
//     $flag = true;
//     for ($i = 0, $j = sizeof($arrayOfBits) - 1; $i < sizeof($arrayOfBits); $i++,$j--) { 
//         if($arrayOfBits[$i] !== $arrayOfBits[$j]){
//             $flag = false;
//         }
//     }
//     return $flag;
// }

// echo checkForPalindrome($arrayOfBits);
