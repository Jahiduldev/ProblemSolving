<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums)
    {
        $count = count($nums);
        if ($count <= 2) {
            return $count; // No need to process if the array has 0, 1, or 2 elements
        }

        $index = 2; // Index to place the next unique element

        for ($i = 2; $i < $count; $i++) {
            // Check if the current element is different from the two elements before it
            if ($nums[$i] != $nums[$index - 2]) {
                $nums[$index] = $nums[$i]; // Store the unique element at the index
                $index++; // Move to the next index for storing the next unique element
            }
        }

        return $index; // Return the length of the modified array
    }
}

?>