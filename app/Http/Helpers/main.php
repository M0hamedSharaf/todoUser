<?php

function getSum($x, $y)
{
    return $x + $y;
}

function getScore($rate)
{
    if($rate > 100)
    {
        throw new Exception("error");
    }

    
    if($rate >= 85)
    {
        return "excellant";
    }
    else if($rate >= 75)
    {
        return "very good";
    }
    else if($rate >= 65)
    {
        return "good";
    }
    else if($rate > 50)
    {
        return "accepted";
    }
    else
    {
        return "failed";
    }
}

// [1,2,3,4,5]
// [5,4,3,2,1]
function reverseArray(array $arr)
{
    $newArray = [];
    for($i = count($arr) - 1; $i >= 0; $i++)
    {
        $newArray []= $arr[$i];
    }
    return $newArray;
}

// [1,2,3,4,5]
// [3,4,5,1,2]
function rotateArray(array &$arr, int $n)
{
    $s = 0;
    $e = count($arr) - 1;

    while($n > 0)
    {
        swapInArray($arr, $s, $e);
        $n--;
    }
}

// [1,2,3,4,5] 0 , 4
// [5,2,3,4,1]
function swapInArray(&$arr, $s, $e)
{
    $left = $arr[$s];
    $arr[$s] = $arr[$e];    
    $arr[$e] = $left;
}