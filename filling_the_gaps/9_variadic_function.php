<?php

// a variadic function is a function that accept
// unlimited parameter
// variadic parameter can only be placed on last

function sum(bool $dumpArr, int|float ...$nums)
{
    if ($dumpArr) {

        var_dump($nums);
    }
    return array_sum($nums);
}



echo sum(false, 5, 2, 5, 1, 21, 13, 123, 312,);
