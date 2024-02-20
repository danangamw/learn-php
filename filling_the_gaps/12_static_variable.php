<?php

// PHP destroy variable in the function
// so every execute the foo function
// the variable $a always to be 1
// but when use static the variable will be kept on memory
function foo()
{
    static $a = 1;

    return $a++;
}


echo foo() . "<br>";
echo foo() . "<br>";
echo foo() . "<br>";
