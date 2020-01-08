<?php
function printArr($array)
{
    foreach($array as $item)
    {
        echo $item."<br>";
    }
}

function largest($array)
{
    $max= 0;
    foreach ($array as $item)
    {
        if($item>$max)
        {
            $max=$item;
        }
    }
    return $max;


}