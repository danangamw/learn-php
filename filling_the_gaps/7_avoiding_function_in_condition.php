<?php
function getPermission()
{
    sleep(1);

    return 1;
}

$permission = getPermission();
?>

<!-- <?php if ($permission === 1) : ?>
    <h1>Hello admin</h1>
<?php elseif ($permission === 2) : ?>
    <h1>Hello mod</h1>
<?php else : ?>
    <h1>Hello Guest</h1>
<?php endif; ?> -->

<?php
switch (getPermission()) {
    case 1:
        echo "<h1>Hello Admin</h1>";
        break;
    case 2:
        echo "<h1>Hello Mod</h1>";
        break;
    default:
        echo "<h1>Hello guest</h1>";
}
