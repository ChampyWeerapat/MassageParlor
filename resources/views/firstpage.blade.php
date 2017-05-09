<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

    <head>

    @extends('layouts.taghead')
    <link href="css/laravel.css" rel="stylesheet">

    </head>
    <body>
        @include('layouts._menubar')

        @include('layouts._slider')

        <div class="container">
          <h1 class="text-center"><b>Our Service</b></h1>

        @foreach ($data as $x)

          <div class="col-md-4 text-center" style="margin:30px;width:300px;height:500px;padding:5px;border:1px solid brown;">
            <img class="img-responsive" src="{{$x->imgpath}}" height="200px"alt="" >
            <h3>{{$x->name}}</h3>
            <p><b>Description</b> : <br>{{$x->description}}</p>
            <p><b>Duration</b>: <br>{{$x->duration}} Minutes</p>
          </div>
        @endforeach
        </div>

        @include('layouts._footer')

    </body>

</html>
