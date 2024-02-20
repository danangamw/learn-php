<?php

declare(strict_types=1);


function getNewName(): string
{
    $prefix = range("A", "Z");
    $suffix = mt_rand(100, 999);

    shuffle($prefix);

    return "{$prefix[0]}{$prefix[1]}{$suffix}";
}



echo getNewName() . "<br>";
echo getNewName() . "<br>";
