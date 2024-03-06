<?php
// PHP program to reverse a string using strrev()

function Reverse($str)
{
    return strrev($str);
}
// Driver Code
$str = "GeeksforGeeks";
echo Reverse($str)
?>


<?php
// PHP function to in place reverse a string
// without using library functions

function ReverseStringWithoutLibraryFunction($str){
    for($i=strlen($str)-1, $j=0; $j<$i; $i--, $j++)
    {
        $temp = $str[$i];
        $str[$i] = $str[$j];
        $str[$j] = $temp;
    }
    return $str;
}

// Driver Code
$str = "GeeksforGeeks";
print_r(ReverseStringWithoutLibraryFunction($str));
?>

