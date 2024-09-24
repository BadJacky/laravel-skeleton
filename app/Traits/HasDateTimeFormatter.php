<?php

declare(strict_types=1);

namespace App\Traits;

use DateTimeInterface;

trait HasDateTimeFormatter
{
    /**
     * Prepare a date for array / JSON serialization.
     */
    protected function serializeDate(DateTimeInterface $date): string
    {
        return $date->format($this->getDateFormat() ?: 'Y-m-d H:i:s');
    }
}
