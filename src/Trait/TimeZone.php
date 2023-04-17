<?php
namespace App\Trait;

Trait TimeZone
{
    Public function changeTimeZone($time_zone)
    {
        date_default_timeZone_set($time_zone);
    }
}