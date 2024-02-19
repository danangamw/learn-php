<?php

function getStatus($paymentStatus, $showMessage = false)
{
    $message = match ($paymentStatus) {
        1 => 'Success',
        2 => 'Denied',
        default => 'Unknown'
    };

    return $message;
}


$statusMessage = getStatus(1);
var_dump($statusMessage);
