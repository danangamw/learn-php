<?php

declare(strict_types=1);

function slices(string $series, int $size): array
{
    $seriesCount = strlen($series);

    if ($size > $seriesCount || $size < 1) {
        return [];
    }

    $results = [];

    for ($i = 0; $i <= $seriesCount - $size; $i++) {
        $results[] = substr($series, $i, $size);
    }

    return $results;
}

echo "<pre>";
print_r(slices("123412", 3));
echo " </pre>";

print_r(slices("41231", 4));
