<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

    <head>

    @extends('layouts.taghead')
    <link href="css/laravel.css" rel="stylesheet">

    </head>
    <body>
        @include('layouts._menubar')

        @include('layouts._slider')

        @foreach ($data as $x)
                  <div class="col-lg-4 col-sm-6 text-center" style="padding:60px">
                      <img class="img-responsive" src="{{$x->imgpath}}" width="300px" height="300px" alt="" >
                      <h3>{{$x->name}}</h3>
                      <p><b>Description</b> : <br>{{$x->description}}</p>
                      <p><b>Duration</b>: <br>{{$x->duration}} Minutes</p>
                  </div>
                @endforeach

        @include('layouts._footer')

    </body>

</html>
