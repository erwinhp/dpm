<!DOCTYPE html>
@extends('layouts.Dash')
@section('content')
<html>
 <head>
  <title>FILTER HOUR</title>
 </head>
 <body>
   <?php
    $pr2="";
    $vtgl1=0;
    $vtgl2=0;
   ?>
<script src="{{URL::to('/')}}/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="{{ asset('js/DD.js') }}"></script>
   <div class="card">
      <div class="card-body">
        <form action="" method="get">


          <!-- text field -->
          <div class="form-group row">
          <div class="col-xs-3">
             <input class="form-control" id="ex1" type="text" placeholder="YYYYMM" name="tgl1">
           </div>
           <div>
           SAMPAI
         </div>
           <div class="col-xs-3">
              <input class="form-control" id="ex2" type="text" placeholder="YYYYMM" name="tgl2">
            </div>
          </div>
          <!-- end of text field omegalul -->
          <div class="col-xs-3">
             <input class="form-control" id="ex2" type="text" placeholder="YYYYMM" name="Rata-Rata Jams">
           </div>

           <div class="col-xs-3">
              <input class="form-control" id="ex2" type="text" placeholder="YYYYMM" name="Rata-Rata Jams">
            </div>
            <!-- filter hour list dropdown -->

          </form>
        </div>
      </div>

<?php
  //inisiasi variable nomor
  $numb=0;
  //nameFilter=name of the select
    if (isset($_GET['tgl1'])) {$vtgl1=$_GET['tgl1'];}
    //echo($vtgl1);
    if (isset($_GET['tgl2'])) {$vtgl2=$_GET['tgl2'];}
    //echo($vtgl2);
    if (isset($_GET['nameFilter'])) {$pr2=$_GET['nameFilter'];}
    //echo ($pr2);
    //check if tgl not empty
    if($vtgl1 == 0 || $vtgl2 == 0 || ($vtgl2-$vtgl1 <=0))
    {
    if ($pr2 > "399")
    {
    $db = DB::select('select DISTINCT idpel,daya from jammenyala where totaljam > :j' , ['j' => $pr2]);
    }
    else {
      $db = DB::select('select DISTINCT idpel,daya from jammenyala where totaljam < :j' , ['j' => $pr2]);
      }
    }
    else{
      if ($pr2 > "399")
      {
      $db = DB::select('select DISTINCT idpel,daya from jammenyala where totaljam > :j AND datever BETWEEN :tgl1 and :tgl2'  , ['j' => $pr2, 'tgl1' => $vtgl1, 'tgl2' => $vtgl2]);
      }
      else {
      $db = DB::select('select DISTINCT idpel,daya from jammenyala where totaljam < :j AND datever BETWEEN :tgl1 and :tgl2'  , ['j' => $pr2, 'tgl1' => $vtgl1, 'tgl2' => $vtgl2]);
        }

    }
?>
<div class="panel panel-default">
 <div class="panel-heading">
  <h3 class="panel-title">Filter Data</h3>
 </div>
 <div class="panel-body">
  <div class="table-responsive">
   <table class="table table-bordered table-striped">
    <tr>
        <th>No</th>
        <th>Id Pelanggan</th>
        <th>Daya</th>
        <th>Detail</th>
      </tr>
@foreach($db as $filts)
<?php $numb=$numb+1; ?>
      <tr>
        <th>{{$numb}}</th>
        <th>{{$filts->idpel}}</th>
        <th>{{$filts->daya}}</th>
        <th>
          <form method="get" action="{{URL::to('/')}}/dfilter">
              <input type="hidden" name="idPels" value="{{$filts->idpel}}">
              <input type="hidden" name="filtsNum" value="{{$pr2}}">
              <input type="submit" class="btn btn-xs btn-primary" value="Detail">

          </form>
        </th>

      </tr>
@endforeach
</table>
</div>
</div>
</div>
 </body>
</html>
@endsection
