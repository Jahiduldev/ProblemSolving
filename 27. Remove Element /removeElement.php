<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
        $nums = array_values(array_diff($nums, [$val]));
        return count($nums);
    }
}