<!DOCTYPE html>
@extends('layouts.Dash')
@section('content')
<html>
 <head>
  <title>Detail FILTER HOUR</title>
  <!--<link rel="stylesheet" type="text/css" href="{{ asset('js/map.css') }}">-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9z7ANxdb48eovKe-n1KKpj02P4F5jGsQ&callback=initMap"
  async defer></script>
  <script src="{{URL::to('/')}}/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
  <script src="{{ asset('js/main.js') }}"></script>
 </head>
 <body>
<div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Peta pelanggan</h3>
        </div>
          <div class="panel-body">
            <div id="map"></div>
          </div>
        </div>
 </body>
</html>
@endsection
