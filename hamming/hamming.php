<?php

//
// This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
// convenience to get you started writing code faster.
//

function distance($a, $b)
{
    if(strlen($a) === strlen($b)){
        $arrayA = str_split($a);
        $arrayB = str_split($b);
   return count(array_diff_assoc($arrayA, $arrayB));
   }else{
    throw new InvalidArgumentException('DNA strands must be of equal length.');
   }
}
