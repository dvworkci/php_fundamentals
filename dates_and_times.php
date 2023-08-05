<?php
define("EL","<br>");

echo date_default_timezone_get();

date_default_timezone_set('Asia/Calcutta');

// time — Return current Unix timestamp
$currentTime = time();

echo $currentTime . EL;

// 5 Days in second but in Unix timestamp
echo $currentTime + 5 * 24 * 60 * 60 . EL;

// Yestery in Unix timestamp
echo $currentTime - 60 * 60 * 24 . EL;

// To convert it into human readable format use date() function
echo date('d/m/Y g:i A') . EL;

// 5 Days in second but in proper format
echo date('d/m/Y g:i A',$currentTime + 5 * 24 * 60 * 60) . EL;

// Yesterday 
echo date('d/m/Y g:i A',$currentTime + 60 * 60 * 24) . EL;

// mktime
// (PHP 4, PHP 5, PHP 7, PHP 8)
// mktime — Get Unix timestamp for a date

// mktime(
//         int $hour,
//         ?int $minute = null,
//         ?int $second = null,
//         ?int $month = null,
//         ?int $day = null,
//         ?int $year = null
//     ): int|false

// Returns the Unix timestamp corresponding to the arguments given. This timestamp is a long integer containing the
// number of seconds between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time specified. 
// example : -
echo date('d/m/Y g:i A',mktime(0,0,0,4,10,null)) . EL;  // 10/04/2023 12:00 AM


// strtotime
// (PHP 4, PHP 5, PHP 7, PHP 8)
// strtotime — Parse about any English textual datetime description into a Unix timestamp
// strtotime(string $datetime, ?int $baseTimestamp = null): int|false
// The function expects to be given a string containing an English date format and will try to parse that
// format into a Unix timestamp (the number of seconds since January 1 1970 00:00:00 UTC), relative to 
// the timestamp given in baseTimestamp, or the current time if baseTimestamp is not supplied. 
// The date string parsing is defined in Date and Time Formats, and has several subtle considerations. 
// Reviewing the full details there is strongly recommended. 
// Example : -
echo date('d/m/y g:i A',strtotime('2023-03-08 11:00:00')) . EL;
echo date('d/m/y g:i A',strtotime('tomorrow')) . EL;
echo date('d/m/y g:i A',strtotime('first day of march')) . EL;
echo date('d/m/y g:i A',strtotime('last day of march')) . EL;
echo date('d/m/y g:i A',strtotime('first saturday of march')) . EL;
echo date('d/m/y g:i A',strtotime('last saturday of march')) . EL;
// echo date('d/m/y g:i A',strtotime('tenth day of march')) . EL;  // This does not work


// date_parse
// (PHP 5 >= 5.2.0, PHP 7, PHP 8)
// date_parse — Returns associative array with detailed info about given date/time
// date_parse(string $datetime): array
// date_parse() parses the given datetime string according to the same rules as strtotime() 
// and DateTimeImmutable::__construct(). Instead of returning a Unix timestamp (with strtotime()) 
// or a DateTimeImmutable object (with DateTimeImmutable::__construct()), it returns an associative 
// array with the information that it could detect in the given datetime string.

// If no information about a certain group of elements can be found, these array elements will 
// be set to false or are missing. If needed for constructing a timestamp or DateTimeImmutable 
// object from the same datetime string, more fields can be set to a non-false value.

$dater = date('d/m/y g:i A',strtotime('last saturday of march'));

echo "<pre>";
print_r(date_parse($dater));
echo "</pre>";





