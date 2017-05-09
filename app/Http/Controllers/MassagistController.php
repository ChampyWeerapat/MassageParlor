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

    public function index2()
    {
    	$user = DB::table('massagist')
            ->select('*')
            ->get();
        // echo $user;
        return view('add-massager',['mas' => $user]);
    }

    public static function addDB(Request $request){

    	

    	if ($request->file('fileToUpload')->isValid()) {
    		$file = $request->file('fileToUpload');
    		//Display File Name
      		$destinationPath = 'img/massager';
      		$file->move($destinationPath,$file->getClientOriginalName());
      		DB::table('massagist')->insert(
    		['name' => $request->input('fname')." ".$request->input('lname'), 'imgpath' => $destinationPath."/".$file->getClientOriginalName()]
			);
		}

    	

		$user = DB::table('massagist')
            ->select('*')
            ->get();
        // echo $user;
        return view('add-massager',['mas' => $user]);
    }
}
