<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class c3mth extends Controller
{
  function index()
  {
   $dbs = DB::select('select DISTINCT MAX(datever) from dpm');
   //dd($dbs);
   return view('filter3mth')->with('DB',$dbs)->render();
  }
}
