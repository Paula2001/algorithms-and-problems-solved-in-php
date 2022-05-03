<?php
// complexity : Normal = O(log(n)) , Best Case O(1)

// O(nLog(n)) O(n^2)

////////////////////////////////////////////////////////////


// [Low = 1,2,Medium = 3,4,11,23,High = 44]

// Searching for 9
// Low = 5 + 1     Middle = 10 + 6 / 2  = 8     high = 10
// [1,2,3,4,5,6,7,8,9,11]
// 1st round : Middle = (10 + 0) / 2 = 5 ,Low = 0 ,High = 10, Value = 6
// 2nd round : Middle = , low = 5 + 1, high = 10 ,Middle = ( 10 + 6 ) / 2 = 8 ,Value = 9 return true

// Searching for 15
// [1,2,3,4,5,6,7,8,9,11]
// 1st round : Middle = (10 + 0) / 2 = 5 ,Low = 0 ,High = 10, Value = 6
// 2nd round : Low = 5 + 1, high = 10 ,Middle = ( 10 + 6 ) / 2 = 8 ,Value = 9
// 3rd round : Low = 8 + 1 = 9 , high = 10 ,Middle = 10 + 9 / 2 = (int) 9.5 = 9 ,Value = 11
// 4rd round : Low = 9 + 1,high = 10  ,Middle = 10 + 10 / 2 = 10 , Value = Null and Low and high = false

function searchBinary(array $array,int $needle, int $low, int $high): int{
    $middle = (int) (($high + $low) / 2); // 5
    $middleValue = $array[$middle]; // 6

    if($middleValue === $needle){
        return $middle;
    }
    if($low == $high){
        return -1; // not found
    }
    if($needle > $array[$middle]) {
        $low = $middle + 1;
    }else{
        $high = ($middle === 0) ? $middle : $middle - 1;
    }

    return searchBinary($array ,$needle ,$low ,$high);
}
$array = [1,2,3];
$needle = 3;
$size = sizeof($array);
echo searchBinary( $array,$needle,0 ,$size);
