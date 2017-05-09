<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecieptController extends Controller
{
    //
    public function index(Request $request){
    	return view('reciept',['mas' => $request->all()]);
    }
}