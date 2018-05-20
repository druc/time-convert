# TimeConvert
Small package to help you convert time units into seconds, minutes, hours or days.

There's no magic in it. It's only purpose is to increase the readability of your code. 

``` php
return TimeConvert::hours(12)->toMinutes(); // readable and meaningful

vs

return 60 * 12;
```


## Install

Via Composer

``` bash
$ composer require druc/time-convert
```

## Usage

``` php
TimeConvert::seconds(60)->toMinutes(); // 1
TimeConvert::seconds(3600)->toHours(); // 1
TimeConvert::seconds(86400)->toDays(); // 1

TimeConvert::minutes(1)->toSeconds(); // 60
TimeConvert::minutes(60)->toHours(); // 1
TimeConvert::minutes(1440)->toDays(); // 1

TimeConvert::hours(1)->toSeconds(); // 3600
TimeConvert::hours(1)->toMinutes(); // 60
TimeConvert::hours(24)->toDays(); // 1

TimeConvert::days(1)->toSeconds(); // 86400
TimeConvert::days(1)->toMinutes(); // 1440
TimeConvert::days(1)->toHours(); // 24
```
## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
