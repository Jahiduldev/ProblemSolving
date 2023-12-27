<?php
class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     * Date:27-12-2023
     * Jahidul Islam
     */
    function twoSum($nums, $target)
    {
        for($i = 0; $i<count($nums); $i++)
        {
            for($j = $i+1; $j<count($nums); $j++)
            {
                if ($nums[$i] + $nums[$j] == $target)
                {
                    return [$i, $j];
                }
            }
        }
        return [];
    }
}
