<?php

/* 
    if (expr) {
        statement
    }

    documentation
    https://www.php.net/manual/en/control-structures.if.php

*/

$score = 56;

if ($score > 90) {
    var_dump('A');
} else if ($score > 80) {
    var_dump('B');
} else if ($score > 70) {
    var_dump('C');
} else if ($score > 60) {
    var_dump('D');
} else if ($score > 50) {
    var_dump('E');
} else {
    var_dump('F');
}
