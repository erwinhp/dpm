<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class Cjam extends Controller
{
  function index()
  {
   $db = DB::select('select distinct datever from dpm where datever < ?', [201702]);
   return view('cjam')->with('Db',$db);
  }
}
