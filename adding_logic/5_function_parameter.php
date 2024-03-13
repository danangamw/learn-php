<?php

function getStatus($paymentStatus, $showMessage = false)
{
    $message = match ($paymentStatus) {
        1 => 'Success',
        2 => 'Denied',
        default => 'Unknown'
    };

    if ($showMessage) {
        var_dump($message);
    }
}

getStatus(2, true);
getStatus(1);
