<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class maps extends Controller
{
  function index()
     {
       //$db = DB::select('select * from jammenala where datever <:j and idpel=:j2', ['j' => $cutfilename,'j2' => $value['idpel']]);
      //$data = DB::table('jammenyala')->orderBy('idpel', 'ASC')->get();
      return view('gmaps');
     }
}
