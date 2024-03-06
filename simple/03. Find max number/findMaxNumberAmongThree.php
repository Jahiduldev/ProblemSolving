<?php
function maxNumberAmongThree($n1, $n2, $n3)
{
    if ($n1 > $n2 && $n1 > $n3)
        $greatest= $n1;
    elseif ($n2 > $n3)
        $greatest= $n2;
    else
        $greatest= $n3;
    return $greatest;
}
echo maxNumberAmongThree(20,500,6);