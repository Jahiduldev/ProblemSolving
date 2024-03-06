<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     * DATE: 27-12-2023
     * JAHIDUL ISLAM
     */
    function longestConsecutive($nums)
    {
        if (empty($nums))
        {
            return 0;
        }

        $uniqueArray = array_unique($nums);
        sort($uniqueArray);

        $maxStreak = 1;
        $currentStreak = 1;

        for ($i = 1; $i < count($uniqueArray); $i++)
        {
            if ($uniqueArray[$i] == $uniqueArray[$i - 1] + 1)
            {
                $currentStreak++;
            } else {
                $maxStreak = max($maxStreak, $currentStreak);
                $currentStreak = 1;
            }
        }
        return max($maxStreak, $currentStreak);
    }

}
