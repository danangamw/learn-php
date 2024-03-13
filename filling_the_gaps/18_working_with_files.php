<?php

// Documentation
// https://www.php.net/manual/en/ref.filesystem.php

/* $directory = scandir(__DIR__);

print_r($directory);
 */

error_reporting(-1);
ini_set('display_errors', 1);


if (file_exists('example.txt')) {
    echo filesize('example.txt') . " bytes<br>"; // Add units for readability

    file_put_contents('example.txt', 'Hello World');

    echo file_get_contents('example.txt');
} else {
    echo "File 'example.txt' does not exist.";
}
