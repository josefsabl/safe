<?php

namespace Safe;

use Safe\Exceptions\DatetimeException;

/**
 * This is the procedural version of
 * DateTimeImmutable::__construct.
 * 
 * Unlike the DateTimeImmutable constructor, it will return
 * FALSE instead of an exception if the passed in
 * datetime string is invalid.
 * 
 * @param string $datetime 
 * @param \\DateTimeZone|null $timezone 
 * @return \DateTimeImmutable Returns a new DateTimeImmutable instance
 * @throws DatetimeException
 * 
 */
function date_create_immutable(string $datetime = "now", ?\\DateTimeZone $timezone = null): \DateTimeImmutable
{
    error_clear_last();
    $result = \date_create_immutable($datetime, $timezone);
    if ($result === false) {
        throw DatetimeException::createFromPhpError();
    }
    return $result;
}


/**
 * This is the procedural version of
 * DateTime::__construct.
 * 
 * Unlike the DateTime constructor, it will return
 * FALSE instead of an exception if the passed in
 * datetime string is invalid.
 * 
 * @param string $datetime 
 * @param \\DateTimeZone|null $timezone 
 * @return \DateTime Returns a new DateTime instance
 * @throws DatetimeException
 * 
 */
function date_create(string $datetime = "now", ?\\DateTimeZone $timezone = null): \DateTime
{
    error_clear_last();
    $result = \date_create($datetime, $timezone);
    if ($result === false) {
        throw DatetimeException::createFromPhpError();
    }
    return $result;
}


/**
 * Returns associative array with detailed info about given date/time.
 * 
 * @param string $format Documentation on how the format is used, please
 * refer to the documentation of
 * DateTimeImmutable::createFromFormat. The same
 * rules apply.
 * @param string $datetime String representing the date/time.
 * @return array Returns associative array with detailed info about given date/time.
 * 
 * The returned array has keys for year,
 * month, day, hour,
 * minute, second,
 * fraction, and is_localtime.
 * 
 * If is_localtime is present then
 * zone_type indicates the type of timezone. For type
 * 1 (UTC offset) the zone,
 * is_dst fields are added; for type 2
 * (abbreviation) the fields tz_abbr,
 * is_dst are added; and for type 3
 * (timezone identifier) the tz_abbr,
 * tz_id are added.
 * 
 * The array includes warning_count and
 * warnings fields. The first one indicate how many
 * warnings there were.
 * The keys of elements warnings array indicate the
 * position in the given datetime where the warning
 * occurred, with the string value describing the warning itself. An example
 * below shows such a warning.
 * 
 * The array also contains error_count and
 * errors fields. The first one indicate how many errors
 * were found.
 * The keys of elements errors array indicate the
 * position in the given datetime where the error
 * occurred, with the string value describing the error itself. An example
 * below shows such an error.
 * @throws DatetimeException
 * 
 */
function date_parse_from_format(string $format, string $datetime): array
{
    error_clear_last();
    $result = \date_parse_from_format($format, $datetime);
    if ($result === false) {
        throw DatetimeException::createFromPhpError();
    }
    return $result;
}


/**
 * date_sunrise returns the sunrise time for a given
 * day (specified as a timestamp) and location.
 * 
 * @param int $timestamp The timestamp of the day from which the sunrise
 * time is taken.
 * @param int $returnFormat 
 * returnFormat constants
 * 
 * 
 * 
 * constant
 * description
 * example
 * 
 * 
 * 
 * 
 * SUNFUNCS_RET_STRING
 * returns the result as string
 * 16:46
 * 
 * 
 * SUNFUNCS_RET_DOUBLE
 * returns the result as float
 * 16.78243132
 * 
 * 
 * SUNFUNCS_RET_TIMESTAMP
 * returns the result as int (timestamp)
 * 1095034606
 * 
 * 
 * 
 * 
 * @param float $latitude Defaults to North, pass in a negative value for South.
 * See also: date.default_latitude
 * @param float $longitude Defaults to East, pass in a negative value for West.
 * See also: date.default_longitude
 * @param float $zenith zenith is the angle between the center of the sun
 * and a line perpendicular to earth's surface. It defaults to
 * date.sunrise_zenith
 * 
 * Common zenith angles
 * 
 * 
 * 
 * Angle
 * Description
 * 
 * 
 * 
 * 
 * 90°50'
 * Sunrise: the point where the sun becomes visible.
 * 
 * 
 * 96°
 * Civil twilight: conventionally used to signify the start of dawn.
 * 
 * 
 * 102°
 * Nautical twilight: the point at which the horizon starts being visible at sea.
 * 
 * 
 * 108°
 * Astronomical twilight: the point at which the sun starts being the source of any illumination.
 * 
 * 
 * 
 * 
 * @param  $utcOffset Specified in hours.
 * The utcOffset is ignored, if
 * returnFormat is
 * SUNFUNCS_RET_TIMESTAMP.
 * @return mixed Returns the sunrise time in a specified returnFormat on
 * success. One potential reason for failure is that the
 * sun does not rise at all, which happens inside the polar circles for part of
 * the year.
 * @throws DatetimeException
 * 
 */
function date_sunrise(int $timestamp, int $returnFormat = SUNFUNCS_RET_STRING, float $latitude = null, float $longitude = null, float $zenith = null,  $utcOffset = null)
{
    error_clear_last();
    $result = \date_sunrise($timestamp, $returnFormat, $latitude, $longitude, $zenith, $utcOffset);
    if ($result === false) {
        throw DatetimeException::createFromPhpError();
    }
    return $result;
}


/**
 * date_sunset returns the sunset time for a given
 * day (specified as a timestamp) and location.
 * 
 * @param int $timestamp The timestamp of the day from which the sunset
 * time is taken.
 * @param int $returnFormat 
 * returnFormat constants
 * 
 * 
 * 
 * constant
 * description
 * example
 * 
 * 
 * 
 * 
 * SUNFUNCS_RET_STRING
 * returns the result as string
 * 16:46
 * 
 * 
 * SUNFUNCS_RET_DOUBLE
 * returns the result as float
 * 16.78243132
 * 
 * 
 * SUNFUNCS_RET_TIMESTAMP
 * returns the result as int (timestamp)
 * 1095034606
 * 
 * 
 * 
 * 
 * @param float $latitude Defaults to North, pass in a negative value for South.
 * See also: date.default_latitude
 * @param float $longitude Defaults to East, pass in a negative value for West.
 * See also: date.default_longitude
 * @param float $zenith zenith is the angle between the center of the sun
 * and a line perpendicular to earth's surface. It defaults to
 * date.sunset_zenith
 * 
 * Common zenith angles
 * 
 * 
 * 
 * Angle
 * Description
 * 
 * 
 * 
 * 
 * 90°50'
 * Sunset: the point where the sun becomes invisible.
 * 
 * 
 * 96°
 * Civil twilight: conventionally used to signify the end of dusk.
 * 
 * 
 * 102°
 * Nautical twilight: the point at which the horizon ends being visible at sea.
 * 
 * 
 * 108°
 * Astronomical twilight: the point at which the sun ends being the source of any illumination.
 * 
 * 
 * 
 * 
 * @param  $utcOffset Specified in hours.
 * The utcOffset is ignored, if
 * returnFormat is
 * SUNFUNCS_RET_TIMESTAMP.
 * @return mixed Returns the sunset time in a specified returnFormat on
 * success. One potential reason for failure is that the
 * sun does not set at all, which happens inside the polar circles for part of
 * the year.
 * @throws DatetimeException
 * 
 */
function date_sunset(int $timestamp, int $returnFormat = SUNFUNCS_RET_STRING, float $latitude = null, float $longitude = null, float $zenith = null,  $utcOffset = null)
{
    error_clear_last();
    $result = \date_sunset($timestamp, $returnFormat, $latitude, $longitude, $zenith, $utcOffset);
    if ($result === false) {
        throw DatetimeException::createFromPhpError();
    }
    return $result;
}


/**
 * Behaves the same as strftime except that the
 * time returned is Greenwich Mean Time (GMT). For example, when run
 * in Eastern Standard Time (GMT -0500), the first line below prints
 * "Dec 31 1998 20:00:00", while the second prints "Jan 01 1999
 * 01:00:00".
 * 
 * @param string $format See description in strftime.
 * @param int $timestamp The optional timestamp parameter is an
 * int Unix timestamp that defaults to the current
 * local time if timestamp is omitted or NULL. In other
 * words, it defaults to the value of time.
 * @return string Returns a string formatted according to the given format string
 * using the given timestamp or the current
 * local time if no timestamp is given.  Month and weekday names and
 * other language dependent strings respect the current locale set
 * with setlocale.
 * On failure, FALSE is returned.
 * @throws DatetimeException
 * 
 */
function gmstrftime(string $format, int $timestamp = null): string
{
    error_clear_last();
    $result = \gmstrftime($format, $timestamp);
    if ($result === false) {
        throw DatetimeException::createFromPhpError();
    }
    return $result;
}


/**
 * Returns a number formatted according to the given format string using the
 * given integer timestamp or the current local time
 * if no timestamp is given. In other words, timestamp
 * is optional and defaults to the value of time.
 * 
 * Unlike the function date, idate
 * accepts just one char in the format parameter.
 * 
 * @param string $format 
 * The following characters are recognized in the
 * format parameter string
 * 
 * 
 * 
 * format character
 * Description
 * 
 * 
 * 
 * 
 * B
 * Swatch Beat/Internet Time
 * 
 * 
 * d
 * Day of the month
 * 
 * 
 * h
 * Hour (12 hour format)
 * 
 * 
 * H
 * Hour (24 hour format)
 * 
 * 
 * i
 * Minutes
 * 
 * 
 * I (uppercase i)
 * returns 1 if DST is activated,
 * 0 otherwise
 * 
 * 
 * L (uppercase l)
 * returns 1 for leap year,
 * 0 otherwise
 * 
 * 
 * m
 * Month number
 * 
 * 
 * N
 * ISO-8601 day of the week (1 for Monday
 * through 7 for Sunday)
 * 
 * 
 * o
 * ISO-8601 year (4 digits)
 * 
 * 
 * s
 * Seconds
 * 
 * 
 * t
 * Days in current month
 * 
 * 
 * U
 * Seconds since the Unix Epoch - January 1 1970 00:00:00 UTC -
 * this is the same as time
 * 
 * 
 * w
 * Day of the week (0 on Sunday)
 * 
 * 
 * W
 * ISO-8601 week number of year, weeks starting on
 * Monday
 * 
 * 
 * y
 * Year (1 or 2 digits - check note below)
 * 
 * 
 * Y
 * Year (4 digits)
 * 
 * 
 * z
 * Day of the year
 * 
 * 
 * Z
 * Timezone offset in seconds
 * 
 * 
 * 
 * 
 * @param int $timestamp The optional timestamp parameter is an
 * int Unix timestamp that defaults to the current
 * local time if timestamp is omitted or NULL. In other
 * words, it defaults to the value of time.
 * @return int Returns an int on success.
 * 
 * As idate always returns an int and
 * as they can't start with a "0", idate may return
 * fewer digits than you would expect. See the example below.
 * @throws DatetimeException
 * 
 */
function idate(string $format, int $timestamp = null): int
{
    error_clear_last();
    $result = \idate($format, $timestamp);
    if ($result === false) {
        throw DatetimeException::createFromPhpError();
    }
    return $result;
}


/**
 * strptime returns an array with the
 * timestamp parsed.
 * 
 * Month and weekday names and other language dependent strings respect the
 * current locale set with setlocale (LC_TIME).
 * 
 * @param string $timestamp The string to parse (e.g. returned from strftime).
 * @param string $format The format used in timestamp (e.g. the same as
 * used in strftime). Note that some of the format
 * options available to strftime may not have any
 * effect within strptime; the exact subset that are
 * supported will vary based on the operating system and C library in
 * use.
 * 
 * For more information about the format options, read the
 * strftime page.
 * @return array Returns an array.
 * 
 * 
 * The following parameters are returned in the array
 * 
 * 
 * 
 * parameters
 * Description
 * 
 * 
 * 
 * 
 * "tm_sec"
 * Seconds after the minute (0-61)
 * 
 * 
 * "tm_min"
 * Minutes after the hour (0-59)
 * 
 * 
 * "tm_hour"
 * Hour since midnight (0-23)
 * 
 * 
 * "tm_mday"
 * Day of the month (1-31)
 * 
 * 
 * "tm_mon"
 * Months since January (0-11)
 * 
 * 
 * "tm_year"
 * Years since 1900
 * 
 * 
 * "tm_wday"
 * Days since Sunday (0-6)
 * 
 * 
 * "tm_yday"
 * Days since January 1 (0-365)
 * 
 * 
 * "unparsed"
 * the timestamp part which was not
 * recognized using the specified format
 * 
 * 
 * 
 * 
 * @throws DatetimeException
 * 
 */
function strptime(string $timestamp, string $format): array
{
    error_clear_last();
    $result = \strptime($timestamp, $format);
    if ($result === false) {
        throw DatetimeException::createFromPhpError();
    }
    return $result;
}


/**
 * Each parameter of this function uses the default time zone unless a
 * time zone is specified in that parameter.  Be careful not to use
 * different time zones in each parameter unless that is intended.
 * See date_default_timezone_get on the various
 * ways to define the default time zone.
 * 
 * @param string $datetime A date/time string. Valid formats are explained in Date and Time Formats.
 * @param  $baseTimestamp The timestamp which is used as a base for the calculation of relative
 * dates.
 * @return int Returns a timestamp on success, FALSE otherwise.
 * @throws DatetimeException
 * 
 */
function strtotime(string $datetime,  $baseTimestamp = null): int
{
    error_clear_last();
    $result = \strtotime($datetime, $baseTimestamp);
    if ($result === false) {
        throw DatetimeException::createFromPhpError();
    }
    return $result;
}


/**
 * 
 * 
 * @param string $abbr Time zone abbreviation.
 * @param int $utcOffset Offset from GMT in seconds. Defaults to -1 which means that first found
 * time zone corresponding to abbr is returned.
 * Otherwise exact offset is searched and only if not found then the first
 * time zone with any offset is returned.
 * @param int $isDST Daylight saving time indicator. Defaults to -1, which means that
 * whether the time zone has daylight saving or not is not taken into
 * consideration when searching. If this is set to 1, then the
 * utcOffset is assumed to be an offset with
 * daylight saving in effect; if 0, then utcOffset
 * is assumed to be an offset without daylight saving in effect. If
 * abbr doesn't exist then the time zone is
 * searched solely by the utcOffset and
 * isDST.
 * @return string Returns time zone name on success.
 * @throws DatetimeException
 * 
 */
function timezone_name_from_abbr(string $abbr, int $utcOffset = -1, int $isDST = -1): string
{
    error_clear_last();
    $result = \timezone_name_from_abbr($abbr, $utcOffset, $isDST);
    if ($result === false) {
        throw DatetimeException::createFromPhpError();
    }
    return $result;
}


