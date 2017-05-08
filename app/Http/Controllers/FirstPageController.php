<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FirstPageController extends Controller
{
    //
    public function index()
    {
    	$user = DB::table('course')
            ->select('*')
            ->get();
        // echo $user;
        return view('firstpage',['data' => $user]);
    }
}
