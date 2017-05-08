<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

    <head>

    @extends('layouts.taghead')
    <link href="css/laravel.css" rel="stylesheet">


    </head>
    <body>
        @include('layouts._menubar')


            <!-- Team Members Row -->
              <div class="row" style="width:60%;margin:auto;padding:50px">
                @foreach ($mas as $x)
                  <div class="col-lg-4 col-sm-6 text-center" style="padding:60px">
                      <img class="img-circle img-responsive img-center" src="{{$x->imgpath}}" width="300px" height="300px" alt="" >
                      <h3>{{$x->name}}</h3>
                      <p><b>Working Day</b> : <br>Everyday</p>
                      <p><b>Working Time</b>: <br>08:00 A.M-20:00 P.M</p>
                  </div>
                @endforeach
                  
                </div>
