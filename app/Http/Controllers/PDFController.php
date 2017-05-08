<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use PDF;
use Illuminate\Support\Facades\DB;

class PDFController extends Controller
{
    public function pdf(){

      $results = DB::select('select * from voucher', array(1));
      $pdf = PDF::loadView('pdf',['data'=>$results]);
      return $pdf->download('clients.pdf');
    }
}
