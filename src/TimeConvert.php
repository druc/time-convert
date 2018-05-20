<?php

namespace Druc\TimeConvert;

class TimeConvert
{
    const SECONDS_IN_MINUTE = 60;
    const SECONDS_IN_HOUR = 3600;
    const SECONDS_IN_DAY = 86400;

    private $seconds;

    /**
     * TimeConvert constructor.
     * @param $seconds
     */
    public function __construct($seconds)
    {
        $this->seconds = $seconds;
    }

    /**
     * @param $seconds
     * @return static
     */
    public static function seconds($seconds)
    {
        return new static($seconds);
    }

    /**
     * @param $minutes
     * @return static
     */
    public static function minutes($minutes)
    {
        return new static($minutes * self::SECONDS_IN_MINUTE);
    }

    /**
     * @param $hours
     * @return static
     */
    public static function hours($hours)
    {
        return new static($hours * self::SECONDS_IN_HOUR);
    }

    /**
     * @param $days
     * @return static
     */
    public static function days($days)
    {
        return new static($days * self::SECONDS_IN_DAY);
    }

    /**
     * @return mixed
     */
    public function toSeconds()
    {
        return $this->seconds;
    }

    /**
     * @return float|int
     */
    public function toMinutes()
    {
        return $this->seconds / self::SECONDS_IN_MINUTE;
    }

    /**
     * @return float|int
     */
    public function toHours()
    {
        return $this->seconds / self::SECONDS_IN_HOUR;
    }

    /**
     * @return float|int
     */
    public function toDays()
    {
        return $this->seconds / self::SECONDS_IN_DAY;
    }
}
