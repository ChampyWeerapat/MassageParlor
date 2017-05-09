<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use PDF;
use Illuminate\Support\Facades\DB;

class PDFController extends Controller
{
    public function pdf(){
      $count = $_GET["count"];
      // $all = DB::select('select COUNT(*) from voucher', array(1));
      // $all = DB::table('voucher')->latest()->first();
      // for ($i=0; $i < $count; $i++) {
      //   $results .= $all[i]
      // }

      $all = DB::table('voucher')->count();
      echo $all;
      $logic = $all-$count;

      $results = DB::select('select * from voucher where voucher.id > '.$logic.'  ', array(1));
      $pdf = PDF::loadView('pdf',['data'=>$results]);
      return $pdf->download('clients.pdf');
    }
}
