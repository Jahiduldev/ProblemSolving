<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */


    function rotate(&$nums, $k)
    {
        $length = count($nums);
        $k %= $length; // Reduce k to the smallest positive integer if k is larger than the array size

        $tempArray = [];
        // Store the last k elements in a temporary array
        for ($i = $length - $k; $i < $length; $i++) {
            $tempArray[] = $nums[$i];
        }

        // Shift the elements to make space for rotated elements
        for ($i = $length - 1; $i >= $k; $i--) {
            $nums[$i] = $nums[$i - $k];
        }

        // Place the rotated elements at the beginning of the array
        for ($i = 0; $i < $k; $i++) {
            $nums[$i] = $tempArray[$i];
        }
    }

}