<?php

namespace App\Models;

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
}
