<?php

$paymentStatus = '1';

$message = match ($paymentStatus) {
    '1' => 'Success',
    '2' => 'Denied',
    default => 'Unknown',
};

var_dump($message);
