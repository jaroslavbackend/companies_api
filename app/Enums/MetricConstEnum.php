<?php

namespace App\Enums;

enum MetricConstEnum: int //earth radius
{
    case METERS = 6371000;
    case KILOMETERS = 6371;
    case MILES = 3963;
}
