<?php

$myCup = 'empty';
$mySpouseCup = 'empty';

function fillCup(&$cupParam)
{
    $cupParam = 'filled';
}

fillCup($myCup);
fillCup($mySpouseCup);

echo $myCup . "<br>";
echo $mySpouseCup;
