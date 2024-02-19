<?php

$paymentStatus = 1;

switch ($paymentStatus) {
    case 1:
        var_dump("pending");
        break;
    case 2:
        var_dump("success");
        break;
    default:
        var_dump("unknown");
        break;
}
