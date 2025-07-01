<?php

namespace App\Models;

use Database\Factories\BuildingFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 *
 *
 * @property int $id
 * @property string $address
 * @property float $latitude
 * @property float $longitude
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Collection<int, Company> $companies
 * @property-read int|null $companies_count
 * @method static BuildingFactory factory($count = null, $state = [])
 * @method static Builder<static>|Building newModelQuery()
 * @method static Builder<static>|Building newQuery()
 * @method static Builder<static>|Building query()
 * @method static Builder<static>|Building whereAddress($value)
 * @method static Builder<static>|Building whereCreatedAt($value)
 * @method static Builder<static>|Building whereDeletedAt($value)
 * @method static Builder<static>|Building whereId($value)
 * @method static Builder<static>|Building whereLatitude($value)
 * @method static Builder<static>|Building whereLongitude($value)
 * @method static Builder<static>|Building whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Building extends Model
{
    /** @use HasFactory<BuildingFactory> */
    use HasFactory;

    protected $fillable = [];

    public function companies(): HasMany
    {
        return $this->hasMany(Company::class);
    }
}
