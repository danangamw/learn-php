<?php

error_reporting(-1);
ini_set('display_errors', 1);

$multiplier = 2;

$multiply = fn ($num) =>  $num * 2;


/* $multiply = function ($num) use ($multiplier) {
    $multiplier = 5;

    return $num * 2;
}; */

function sum(int|float $a, int|float $b, callable $callback)
{
    return $callback($a + $b);
};

echo sum(10, 5, $multiply);

echo "<br>" . $multiplier;
