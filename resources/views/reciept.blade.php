<!DOCTYPE html>
<html>

<head>
    <link href="css/laravel.css" rel="stylesheet">
    @extends('layouts.taghead')
    <link rel="stylesheet" type="text/css" href="css/bulma.css">
</head>

<body>
    
    @include('layouts._menubar')
    
    @foreach ($mas as $x)

        {{$x}}<br>

    @endforeach

      @include('layouts._footer')

    <script src="js/vue.js"></script>

</body>

</html>
