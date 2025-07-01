<?php

namespace App\Enums;

enum MetricAbbrEnum : string
{
    case METERS = 'm';
    case KILOMETERS = 'km';
    case MILES = 'mile';

    public function value(): int {
        return match ($this) {
            self::METERS => MetricConstEnum::METERS->value,
            self::KILOMETERS => MetricConstEnum::KILOMETERS->value,
            self::MILES => MetricConstEnum::MILES->value,
        };
    }
}
