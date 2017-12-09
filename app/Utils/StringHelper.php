<?php namespace App\Utils;

class StringHelper
{
    public static function courseName($course)
    {
        return implode(' ', [
            $course->year,
            $course->course_year . '°',
            $course->comission,
            $course->turn,
            $course->campus
        ]);
    }
}