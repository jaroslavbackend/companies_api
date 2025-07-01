<?php

namespace App\Models;

use Database\Factories\CompanyFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 *
 *
 * @property int $id
 * @property string $title
 * @property string $phone
 * @property int|null $building_id
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Building|null $building
 * @method static CompanyFactory factory($count = null, $state = [])
 * @method static Builder<static>|Company newModelQuery()
 * @method static Builder<static>|Company newQuery()
 * @method static Builder<static>|Company query()
 * @method static Builder<static>|Company whereBuildingId($value)
 * @method static Builder<static>|Company whereCreatedAt($value)
 * @method static Builder<static>|Company whereDeletedAt($value)
 * @method static Builder<static>|Company whereId($value)
 * @method static Builder<static>|Company wherePhone($value)
 * @method static Builder<static>|Company whereTitle($value)
 * @method static Builder<static>|Company whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Company extends Model
{
    /** @use HasFactory<CompanyFactory> */
    use HasFactory;

    protected $fillable = [];

    public function building(): BelongsTo
    {
        return $this->belongsTo(Building::class);
    }
}
