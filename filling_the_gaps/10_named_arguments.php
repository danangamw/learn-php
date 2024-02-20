<?php
error_reporting(-1);
ini_set('display_errors', 1);

function sum($a, $b)
{
    return $a + $b;
}

echo sum($b = 2, $a = 1);
