<?php

function isLeap(int $year): bool
{
    if ($year % 4 !== 0) {
        return false;
    }

    if ($year % 100 === 0 && $year % 400 !== 0) {
        return false;
    }

    return true;

    // return (!($year % 4) && $year % 100) || ($year % 400);
}

// echo isLeap(1996);
echo isLeap(1997);
// echo isLeap(2000);
echo isLeap(1990);
