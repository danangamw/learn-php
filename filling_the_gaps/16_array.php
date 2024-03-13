<?php

// Documentation
// https://www.php.net/manual/en/ref.array.php

$users = ["John", "Jane", "Bob", null];
$newUsers = ["Dann", "Limbur"];

if (array_key_exists(3, $users)) {
    echo "User found!";
}

// filter
// $users = array_filter(
//     $users,
//     fn ($user) => $user !== 'Bob'
// );

// mapping
// $users = array_map(
//     fn ($user) => strtoupper($user),
//     $users
// );

// merge
$users = array_merge(
    $users,
    $newUsers
);

// sort
asort($users);

echo '<pre>';
print_r($users);
echo '</pre>';
