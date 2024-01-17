<?php
class Solution {

    /**
     * @param Integer[] $arr
     * @return Boolean
     */
    function uniqueOccurrences($arr)
    {
        $counts = array_count_values($arr);
        $arr1 =   array_values($counts);
        $arr2 =   array_unique($arr1);
        return count($arr1) === count($arr2);
    }
}