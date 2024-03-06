<?php
$x = 20;
$y = 25;

function findLcmAndLcd($x, $y)
{
    if ($x > $y) {
        $temp = $x;
        $x = $y;
        $y = $temp;
    }

    for($i = 1; $i < ($x+1); $i++) {
        if ($x%$i == 0 && $y%$i == 0)
            $gcd = $i;
    }

    $lcm = ($x*$y)/$gcd;
    return "LCM of $x and $y is: $lcm and lcd is: $gcd";
}
echo  findLcmAndLcd(20,25)
?>