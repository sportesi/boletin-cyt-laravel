<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = DB::select('
            SELECT turn_id, campus_id, t.name AS turn, c.name AS campus, year, comission, semester, course_year, count(*) AS count 
            FROM users
            LEFT JOIN turns t ON turn_id = t.id
            LEFT JOIN campuses c ON campus_id = c.id
            GROUP BY t.name, turn_id, campus_id, c.name, year, comission, semester, course_year
        ');

        return view('backoffice.course.index', ['courses' => $courses]);
    }
}
