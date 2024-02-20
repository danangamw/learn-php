<?php

error_reporting(-1);
ini_set('display_errors', 1);

$x = 5;

include './8_example.php';

function foo()
{
    global $x;
    echo $x;

    $x++;
}

foo();

echo $x;
