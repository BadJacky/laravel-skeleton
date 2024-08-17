<?php

namespace App\Enums;

use Jiannei\Enum\Laravel\Support\Traits\EnumEnhance;

enum GenderEnum: int
{
    use EnumEnhance;

    case MAN = 1;
    case WOMAN = 2;
    case UNKNOWN = 3;
}
