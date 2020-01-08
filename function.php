<?php
//print all the numbers of an array each number in new line
function printArr($array)
{
    foreach($array as $item)
    {
        echo $item."<br>";
    }
}
//find the largest number from an array
function largest($array)
{
    $max = 0;
    foreach ($array as $item) {
        if ($item > $max) {
            $max = $item;
        }
    }
    return $max;
}
//remove duplicate from an array
    function removeDups($array)
    {
//        var_dump($array);
        return array_unique($array);
    }