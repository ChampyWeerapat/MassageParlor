<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MassagistController extends Controller
{
    //
    public function index()
    {
    	$user = DB::table('massagist')
            ->select('name', 'imgpath')
            ->get();
        // echo $user;
        return view('massager',['mas' => $user]);
    }
}
