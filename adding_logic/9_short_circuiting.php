<?php

function example()
{
    echo 'Example called!';

    return true;
}


var_dump(false && example());
var_dump(true && example());
