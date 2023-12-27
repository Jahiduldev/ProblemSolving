<?php
class Solution
{
    /**
     * @param Integer $n
     * @return Boolean
     * Date:27-12-2023
     * Jahidul islam
     */
    function isHappy($n)
    {
        $getSumOfSquares = function ($num) {
            return array_sum(array_map(function ($digit) {
                return $digit * $digit;
            }, str_split($num)));
        };

        $slow = $n;
        $fast = $n;

        for ($i = 0; $i < $n; $i++)  // Set a maximum iteration count (you can adjust this)
        {
            $slow = $getSumOfSquares($slow);
            $fast = $getSumOfSquares($getSumOfSquares($fast));

            if ($slow === 1 || $fast === 1)
            {
                return true;
            }

            if ($slow === $fast)
            {
                return false;
            }
        }
        return false; // Non-happy after 20 iterations
    }
}
$obj = new Solution();
var_dump($obj->isHappy(7));
