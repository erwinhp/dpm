<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cdetailFilter extends Controller
{
  public function index(Request $request)
{
return view('detailFilter');
}
}
