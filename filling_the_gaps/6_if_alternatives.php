<?php $permisson = 1; ?>

<?php if ($permisson === 1) : ?>
    <h1>Hello admin</h1>
<?php elseif ($permisson === 2) : ?>
    <h1>Hello mod</h1>
<?php else : ?>
    <h1>Hello Guest</h1>
<?php endif; ?>