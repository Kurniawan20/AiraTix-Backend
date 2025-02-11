<?php

namespace HiEvents\Helper;

use Carbon\Carbon;

class DateHelper
{
    public static function convertToUTC(string $eventDate, string $userTimezone): string
    {
        return Carbon::parse($eventDate, $userTimezone)
            ->setTimezone('Asia/Jakarta')
            ->format('Y-m-d H:i:s');
    }

    public static function convertFromUTC(string $eventDate, string $userTimezone): string
    {
        return Carbon::parse($eventDate, 'Asia/Jakarta')
            ->setTimezone($userTimezone)
            ->format('Y-m-d H:i:s');
    }

    public static function utcDateIsPast(string $eventDate): bool
    {
        return Carbon::parse($eventDate, 'Asia/Jakarta')->isPast();
    }

    public static function utcDateIsFuture(string $eventDate): bool
    {
        return Carbon::parse($eventDate, 'Asia/Jakarta')->isFuture();
    }
}
