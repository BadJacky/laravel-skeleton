<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Scopes\OrderScope;
use App\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @mixin IdeHelperModel
 */
class Model extends BaseModel
{
    use HasDateTimeFormatter;
    use HasFactory;
    use SoftDeletes;

    /**
     * The "booted" method of the model.
     */
    protected static function booted(): void
    {
        static::addGlobalScope(new OrderScope);
    }
}
