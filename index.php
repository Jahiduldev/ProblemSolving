<?php

$arr = array(1,5,5,52,4,4,4,4,40,4,203658,6);
$arr2 = array(10,5,5,52,4,4,40,4,4,4,203658,6);
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");
$a = array(
    array(
        'id' => 5698,
        'first_name' => 'Peter',
    ),
    array(
        'id' => 4767,
        'first_name' => 'Ben',
    ),
    array(
        'id' => 3809,
        'first_name' => 'Joe',
    )
);
$associativeArr = array(
    "one"=> 1,
    "two"=> 1,
    "three"=> 1,
    "four"=> 1,
   );
$arrayChangeKeyCase = array_change_key_case($associativeArr,case: CASE_UPPER);
$arrayChunk = array_chunk($arr,5);
$arrayColumn = array_column($a, 'id');
$arrayCombine = array_combine($arr, $arr2);
$array_count_values = array_count_values($arr);
$arrayDiff=array_diff($a1,$a2);
$arrayDiffAssoc=array_diff_assoc($a1,$a2);
$arrayDiffKey=array_diff_key($a1,$a2);
$arrayFill=array_fill(1,10,"blue");
$arrayFillKeys=array_fill_keys($arr,"blue");
$arrayFlip=array_flip($a1);
$arrayIntersect=array_intersect($a1,$a2);
$arrayIntersectAssoc=array_intersect_assoc($a1,$a2);
$result=array_intersect_key($a1,$a2);
$arrayKeyExists = array_key_exists("a",$a1);
$arrayKeys = array_keys($a1);
$arrayMerge = array_merge($a1,$a2);
$arrayMergeRecursive = array_merge_recursive($a1,$a2);
$arrayMultisort = array_multisort($a);
$arrayProduct = array_product($arr);
echo "<pre>";
print_r($arrayProduct);

