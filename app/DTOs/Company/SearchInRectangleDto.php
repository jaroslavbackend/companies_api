<?php

namespace App\DTOs\Company;

use Spatie\LaravelData\Data;

class SearchInRectangleDto extends Data
{
    public float $latitude;
    public float $longitude;
    public float $oppositeLatitude;
    public float $oppositeLongitude;
    public function __construct(
        //
    ) {}
}
