<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

    <head>

    @extends('layouts.taghead')
    <link href="css/laravel.css" rel="stylesheet">


    </head>
    <body>
        @include('layouts._menubar')


            <div class="container">
                <h1 class="text-center"><b>Our Massager</b></h1>
                @foreach ($mas as $x)
                  <div class="col-lg-4 col-sm-6 text-center" style="margin:30px 30px 30px 40px;width:150px;height:400px;padding:5px;">
                      <img class="img-circle img-responsive img-center" src="{{$x->imgpath}}" alt="" >
                      <h3>{{$x->name}}</h3>
                      <p><b>Working Day</b> : <br>Everyday</p>
                      <p><b>Working Time</b>: <br>08:00 A.M-20:00 P.M</p>
                  </div>
                @endforeach

                </div>
      @include('layouts._footer')
    </body>
