<?php

namespace Druc\TimeConvert\Test;

use PHPUnit\Framework\TestCase;
use Druc\TimeConvert\TimeConvert;

class TimeConvertTest extends TestCase
{
    /** @test */
    public function from_seconds_to_minutes()
    {
        $minutes = TimeConvert::seconds(60)->toMinutes();
        $this->assertEquals($minutes, 1);
    }

    /** @test */
    public function from_seconds_to_hours()
    {
        $hours = TimeConvert::seconds(3600)->toHours();
        $this->assertEquals($hours, 1);
    }

    /** @test */
    public function from_seconds_to_days()
    {
        $days = TimeConvert::seconds(86400)->toDays();
        $this->assertEquals($days, 1);
    }

    /** @test */
    public function from_minutes_to_seconds()
    {
        $seconds = TimeConvert::minutes(1)->toSeconds();
        $this->assertEquals($seconds, 60);
    }

    /** @test */
    public function from_minutes_to_hours()
    {
        $hours = TimeConvert::minutes(60)->toHours();
        $this->assertEquals($hours, 1);
    }

    /** @test */
    public function from_minutes_to_days()
    {
        $days = TimeConvert::minutes(1440)->toDays();
        $this->assertEquals($days, 1);
    }

    /** @test */
    public function from_hours_to_seconds()
    {
        $seconds = TimeConvert::hours(1)->toSeconds();
        $this->assertEquals($seconds, 3600);
    }

    /** @test */
    public function from_hours_to_minutes()
    {
        $minutes = TimeConvert::hours(1)->toMinutes();
        $this->assertEquals($minutes, 60);
    }

    /** @test */
    public function from_hours_to_days()
    {
        $days = TimeConvert::hours(24)->toDays();
        $this->assertEquals($days, 1);
    }

    /** @test */
    public function from_days_to_seconds()
    {
        $seconds = TimeConvert::days(1)->toSeconds();
        $this->assertEquals($seconds, 86400);
    }

    /** @test */
    public function from_days_to_minutes()
    {
        $minutes = TimeConvert::days(1)->toMinutes();
        $this->assertEquals($minutes, 1440);
    }

    /** @test */
    public function from_days_to_hours()
    {
        $days = TimeConvert::days(1)->toHours();
        $this->assertEquals($days, 24);
    }
}
