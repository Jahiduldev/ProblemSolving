<?php

function maxNumber(array $numArray)
{
    $maxNumber = 0;
    sort($numArray);
    return array_pop($numArray);
}
$numArray = [2,500,1,5,20,100,3,5,2];
echo '<pre>';
print_r(maxNumber($numArray));