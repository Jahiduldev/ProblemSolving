<?php
function isPalindrome($input_string)
{
    $input_string = strtolower($input_string);
    $reversed_string = strrev($input_string);
    return $input_string === $reversed_string;
}

$input_string = "racecar";
if (isPalindrome($input_string))
{
    echo $input_string . " is a palindrome!";
} else
{
    echo $input_string . " is not a palindrome.";
}
