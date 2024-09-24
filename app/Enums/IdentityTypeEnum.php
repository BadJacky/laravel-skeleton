<?php

declare(strict_types=1);

namespace App\Enums;

use Jiannei\Enum\Laravel\Support\Traits\EnumEnhance;

enum IdentityTypeEnum: int
{
    use EnumEnhance;

    case NAME   = 1;
    case EMAIL  = 2;
    case PHONE  = 3;
    case GITHUB = 4;
    case WECHAT = 5;
}
