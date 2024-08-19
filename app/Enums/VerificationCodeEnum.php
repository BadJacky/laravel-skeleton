<?php

namespace App\Enums;

use Jiannei\Enum\Laravel\Support\Traits\EnumEnhance;

enum VerificationCodeEnum: string
{
    use EnumEnhance;

    case REGISTER = 'register';
}
