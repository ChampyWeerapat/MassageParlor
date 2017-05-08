<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CreateVoucherController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function index(){
      return view('createvouchers');
    }
    
    public function store(Request $request){
      $count = $request->input('num_vouc');


      for ($i=0; $i < $count ; $i++) {
        $chars = "abcdefghijkmnopqrstuvwxyz023456789";
           srand((double)microtime()*1000000);
           $x = 0;
           $pass = '' ;
           while ($x <= 7) {
               $num = rand() % 33;
               $tmp = substr($chars, $num, 1);
               $pass = $pass . $tmp;
               $x++;
           }


        DB::table('voucher')->insert(
            [
             'code' => $pass,
             'type' => $request->input('type'),
             'amount' => $request->input('value'),
             'description' => $request->input('descrip')


           ]
        );
      }


      return "";

    }

}
