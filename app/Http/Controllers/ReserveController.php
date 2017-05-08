<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReserveController extends Controller
{
    public function index()
    {
        $courses = DB::select('select * from course', array(1));
        $massagists = DB::select('select * from massagist', array(1));
        return view('reservation')
                ->with('courses', $courses)
                ->with('massagists', $massagists);
    }

}
