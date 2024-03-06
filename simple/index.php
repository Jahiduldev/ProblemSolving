<?php

function fibonaciNumber(int $n):int
{
    if ($n == 0)
    {
        return 0;
    }else if($n == 1){
        return 1;
    }
    return fibonaciNumber($n-1) + fibonaciNumber($n-2);
}
echo fibonaciNumber(20);