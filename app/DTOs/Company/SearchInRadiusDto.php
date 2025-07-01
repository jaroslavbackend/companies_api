<?php

namespace App\DTOs\Company;

use Spatie\LaravelData\Data;

class SearchInRadiusDto extends Data
{
    public float $latitude;
    public float $longitude;
    public int $distance;

    public function __construct(
        //
    ) {}
}
