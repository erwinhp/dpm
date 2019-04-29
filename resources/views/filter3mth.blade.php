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
    $vtglmax=0;
   ?>
<script src="{{URL::to('/')}}/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="{{ asset('js/DD.js') }}"></script>
   <div class="card">
      <div class="card-body">
        @foreach ($DB as $dbz)
          @foreach ($dbz as $dbx)
            <?php
              $vtglmax=0;
            ?>
          @endforeach
        @endforeach
        <?php
        $db = DB::select('select distinct idPel from jammenyala where datever < ?', [201702]);
        ?>
      </div>
    </div>
 </body>
</html>
@endsection
