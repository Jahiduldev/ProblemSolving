<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        $count = count($nums);
        $threshold = $count / 2;
        $frequency = [];

        // Count occurrences of each element using a hashmap
        foreach ($nums as $num) {
            if (!isset($frequency[$num])) {
                $frequency[$num] = 1;
            } else {
                $frequency[$num]++;
            }

            // Check if the current element appears more than ⌊ n/2 ⌋ times
            if ($frequency[$num] > $threshold) {
                return $num;
            }
        }

        return null; // No majority element found
    }
}