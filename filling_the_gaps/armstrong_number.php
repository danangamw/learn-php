<?php

error_reporting(-1);
ini_set('display_errors', 1);


function isArmstrongNumber(int $number): bool
{
    $numbers =  str_split((string)$number);
    $numberCount = count($numbers);

    $numbers = array_map(function ($number) use ($numberCount) {
        return $number ** $numberCount;
    }, $numbers);

    return array_sum($numbers) == $number;
}

isArmstrongNumber(153);
