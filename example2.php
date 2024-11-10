<?php

include __DIR__ . '/vendor/autoload.php';

use Brick\DateTime\LocalDate;

class example
{
    public function __construct(private string $text)
    {
    }

    public function example(): string
    {
        for (
            $day = LocalDate::of(2000, 01, 01);
            $day->isBeforeOrEqualTo(LocalDate::of(2000, 01, 05));
            $day = $day->plusDays(1)
        ) {
            echo $day->jsonSerialize() . "\n";
        }

        echo "This is reachable, but phpstan disagree" . "\n"; // @phpstan-ignore deadCode.unreachable

        return $this->text; // this is still unreachable for phpstan, so it says property $text is never used
    }
}

echo (new example('example'))->example();
echo "\n";





