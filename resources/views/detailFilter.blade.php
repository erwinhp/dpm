<!DOCTYPE html>
@extends('layouts.Dash')
@section('content')
<html>
 <head>
  <title>Detail FILTER HOUR</title>
 </head>
 <body>
   <?php
    $ids="";
    $filtsnum=0;

   ?>

<?php
  //inisiasi variable nomor
  $numb=0;
  //nameFilter=name of the select
    if (isset($_GET['idPels'])) {$ids=$_GET['idPels'];}
    if (isset($_GET['filtsNum'])) {$filtsnum=$_GET['filtsNum'];}
    if ($filtsnum > "399")
    {
    $db = DB::select('select * from jammenyala where totaljam > :j and idpel= :j2 ' , ['j' => $filtsnum,'j2'=>$ids]);
    }
    else {
      $db = DB::select('select * from jammenyala where totaljam < :j and idpel= :j2' , ['j' => $filtsnum,'j2'=>$ids]);
      }
?>
<div class="panel panel-default">
 <div class="panel-heading">
  <h3 class="panel-title">Filter Data {{$ids}}</h3>
 </div>
 <div class="panel-body">
  <div class="table-responsive">
   <table class="table table-bordered table-striped">
    <tr>
        <th>No</th>
        <th>Id Pelanggan</th>
        <th>Daya</th>
        <th>Stand</th>
        <th>Total Jam</th>
        <th>Tanggal</th>
      </tr>
@foreach($db as $filts)
<?php $numb=$numb+1; ?>
      <tr>
        <th>{{$numb}}</th>
        <th>{{$filts->idpel}}</th>
        <th>{{$filts->daya}}</th>
        <th>{{$filts->stand}}</th>
        <th>{{$filts->totaljam}}</th>
        <th>{{$filts->datever}}</th>
      </tr>
@endforeach
</table>
</div>
</div>
</div>
 </body>
</html>
@endsection
