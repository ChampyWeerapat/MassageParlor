<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

    <head>

    @extends('layouts.taghead')
    <link href="css/laravel.css" rel="stylesheet">


    </head>
    <body>
        @include('layouts._menubar')

        <!-- Projects Row -->
       <div class="row" style="width:50%;margin:auto">
           <div class="col-md-4 portfolio-item" >
               <a href="#">
                   <img class="img-responsive" src="img/preview5.jpg" alt="">
               </a>

           </div>
           <div class="col-md-4 portfolio-item">
               <a href="#">
                   <img class="img-responsive" src="img/preview6.jpg" alt="">
               </a>

           </div>

           <div class="col-md-4 portfolio-item">
               <a href="#">
                   <img class="img-responsive" src="img/preview4.jpg" alt="">
               </a>

           </div>
        </div>
        <!-- Main Content -->
        <div class="container" style="text-align:center;padding:50px">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <form>
                      <div class="row control-group">
                          <b>Address</b>&nbsp;:&nbsp;&nbsp;&nbsp;50 Thanon Ngamwongwan
                          <hr>
                      </div>

                      <div class="row control-group">
                          <b>City</b>&nbsp;:&nbsp;&nbsp;&nbsp;Bangkok,Thailand
                          <hr>
                      </div>

                      <div class="row control-group">
                        <b>Phone Number</b>&nbsp;:&nbsp;&nbsp;&nbsp;02-568-8888
                        <hr>
                      </div>

                      <div class="row control-group">
                          <b>Open Hours</b>&nbsp;:&nbsp;&nbsp;&nbsp;08:00&nbsp;A.M-20:00&nbsp;P.M
                          <hr>
                      </div>

                      <div class="row control-group">

                    </form>
                </div>
            </div>
        </div>

        <hr>

        <div id="googleMap" style="width:100%;height:400px;"></div>

            <script>
            function myMap() {
            var mapProp= {
              center: new google.maps.LatLng(13.851867,100.567519),
              zoom:14,
              mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
            }
            </script>

            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4pc0yQPHHP8Qe5u_yeIUePdARb8VOvZA&callback=myMap"></script>



        @include('layouts._footer')
    </body>
