<?php

namespace App\Models;

use Database\Factories\ActivityFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Staudenmeir\LaravelCte\Eloquent\QueriesExpressions;

/**
 *
 *
 * @property int $id
 * @property string $title
 * @property int $activity_id
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static ActivityFactory factory($count = null, $state = [])
 * @method static Builder<static>|Activity newModelQuery()
 * @method static Builder<static>|Activity newQuery()
 * @method static Builder<static>|Activity query()
 * @method static Builder<static>|Activity whereActivityId($value)
 * @method static Builder<static>|Activity whereCreatedAt($value)
 * @method static Builder<static>|Activity whereDeletedAt($value)
 * @method static Builder<static>|Activity whereId($value)
 * @method static Builder<static>|Activity whereTitle($value)
 * @method static Builder<static>|Activity whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Activity extends Model
{
    /** @use HasFactory<ActivityFactory> */
    use HasFactory;
    use QueriesExpressions;
}
