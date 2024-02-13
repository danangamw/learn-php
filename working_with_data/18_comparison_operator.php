<?php

// Comparison operator always produce or return boolean value
// Check https://www.php.net/manual/en/language.operators.comparison.php
// for complete documentation

var_dump(1 === 1); // == true
var_dump(1 === 3); // false
var_dump(4 % 2 === 0); // true
var_dump(4 * 2 > 8); // false
var_dump(4 ** 2 < 16); // false

// comparison with type juggling
var_dump(
    1 <> 1,
    1 !== '1',
    2 < 3,
    2 > 3,
    2 <= 3,
    2 >= 3
);
