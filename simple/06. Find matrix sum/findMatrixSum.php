<?php

function sumTwoMatrices($mat1, $mat2)
{
    $rows = count($mat1);
    $columns = count($mat1[0]);

    // Sum Matrix Initialize with Zeros
    $sum = array();
    for ($i = 0; $i < $rows; $i++)
    {
        for ($j = 0; $j < $columns; $j++)
        {
            $sum[$i][$j] = 0;
        }
    }

    // Matrix Addition
    for ($i = 0; $i < $rows; $i++)
    {
        for ($j = 0; $j < $columns; $j++)
        {
            $sum[$i][$j] = $mat1[$i][$j] + $mat2[$i][$j];
        }
    }

    return $sum;
}

// First Matrix
$matrix1 = array(
    array(26, 14, 31),
    array(41, 61, 11),
    array(14, 12, 19)
);

// Second Matrix
$matrix2 = array(
    array(11, 8, 27),
    array(21, 15, 25),
    array(22, 15, 21)
);

// Get the first Matrix dimension
$rows1 = count($matrix1);
$columns1 = count($matrix1[0]);

// Get the second Matrix dimension
$rows2 = count($matrix2);
$columns2 = count($matrix2[0]);

// Check both matrix dimension is equal or not
if($rows1 != $rows2 || $columns1 != $columns2)
{
    echo "Matrix dimension not Equal. Sum not possible";
}
else
{
    // Sum of Matrices
    $sum = sumTwoMatrices($matrix1, $matrix2);
    // Print the Sum Matrix
    foreach ($sum as $row)
    {
        echo implode("\t", $row) . "\n";
    }
}

?>
