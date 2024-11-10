<?php

include __DIR__ . '/vendor/autoload.php';

use Brick\DateTime\LocalDate;

for (
    $day = LocalDate::of(2000, 01, 01);
    $day->isBeforeOrEqualTo(LocalDate::of(2000, 01, 05));
    $day = $day->plusDays(1)
) {
    echo $day->jsonSerialize() . "\n";
}

echo "This is reachable, but phpstan disagree". "\n";
