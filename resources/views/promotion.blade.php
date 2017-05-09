<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

    <head>

    @extends('layouts.taghead')
    <link href="css/laravel.css" rel="stylesheet">

    </head>
    <body>
        @include('layouts._menubar')
        <div class="row" style="width:80%;margin-left:225px">

            <div class="col-md-4" style="margin:30px;width:300px;height:500px;padding:5px;border:1px solid brown;">
                <img class="img-responsive" src="img/thai-massage.jpg" alt="">
                <p>Thai Massage</p>
                <p><span style="font-size:15px">Duration</span> <span style="color:red"> 2 </span> <span style="font-size:15px">hr.</span></p>
                <p><span style="font-size:15px">Price</span> <span style="color:red"> 200 </span> <span style="font-size:15px">Bath</span></p>
                <p><span style="font-size:15px">Take this promotion you will receive </span> <span style="color:red"> 6 </span> <span style="font-size:15px">point</span></p>
                <div class="submit-button">
                  <button type="button" class="btn" onclick="window.location='{{ url("/reservation") }}'" style="width:100%;background:black;color:white;position:absolute;buttom:0;right:0;left:0">RESERVE</button>
                </div>
            </div>

            <div class="col-md-4" style="margin:30px;width:300px;height:500px;padding:5px;border:1px solid brown;">
                <img class="img-responsive" src="img/preview2.jpg" alt="">
                <p>Relaxing Massage</p>
                <p><span style="font-size:15px">Duration</span><span style="color:red"> 1.30 </span> <span style="font-size:15px">hr.</span></p>
                <p><span style="font-size:15px">Price</span> <span style="color:red"> 250 </span> <span style="font-size:15px">Bath</span></p>
                <p><span style="font-size:15px">Take this promotion you will receive </span><span style="color:red"> 7 </span> <span style="font-size:15px">point</span></p>
                <div class="submit-button" style="margin:10px;padding:10px">
                  <button type="button" class="btn" onclick="window.location='{{ url("/reservation") }}'" style="width:100%;background:black;color:white;position:absolute;buttom:0;right:0;left:0">RESERVE</button>
                </div>
            </div>

            <div class="col-md-4" style="margin:30px;width:300px;height:500px;padding:5px;border:1px solid brown;">
                <img class="img-responsive" src="img/preview3.jpg" alt="">
                <p>Stone Massage</p>
                <p><span style="font-size:15px">Duration</span><span style="color:red"> 2.30 </span> <span style="font-size:15px">hr.</span></p>
                <p><span style="font-size:15px">Price</span> <span style="color:red"> 450 </span> <span style="font-size:15px">Bath</span></p>
                <p><span style="font-size:15px">Take this promotion you will receive </span><span style="color:red"> 10 </span><span style="font-size:15px">point</span></p>
                <div class="submit-button" style="margin:10px;padding:10px">
                  <button type="button" class="btn" onclick="window.location='{{ url("/reservation") }}'" style="width:100%;background:black;color:white;position:absolute;buttom:0;right:0;left:0">RESERVE</button>
                </div>
            </div>
            <div class="col-md-4"style="margin:30px;width:300px;height:500px;padding:5px;border:1px solid brown;">
                <img class="img-responsive" src="img/preview5.jpg" alt="">
                <p>Oil Massage</p>
                <p><span style="font-size:15px">Duration</span><span style="color:red"> 2 </span> <span style="font-size:15px">hr.</span></p>
                <p><span style="font-size:15px">Price</span> <span style="color:red"> 300 </span> <span style="font-size:15px">Bath</span></p>
                <p><span style="font-size:15px">Take this promotion you will receive </span> <span style="color:red"> 3 </span>  <span style="font-size:15px">point</span></p>
                <div class="submit-button" style="margin:10px;padding:10px">
                  <button type="button" class="btn" onclick="window.location='{{ url("/reservation") }}'" style="width:100%;background:black;color:white;position:absolute;buttom:0;right:0;left:0">RESERVE</button>
                </div>
            </div>
            <div class="col-md-4" style="margin:30px;width:300px;height:500px;padding:5px;border:1px solid brown;">
                <img class="img-responsive" src="img/preview6.jpg" alt="">
                <p>Facial Therapy</p>
                <p><span style="font-size:15px">Duration</span><span style="color:red"> 3 </span> <span style="font-size:15px">hr.</span></p>
                <p><span style="font-size:15px">Price</span> <span style="color:red"> 450 </span> <span style="font-size:15px">Bath</span></p>
                <p><span style="font-size:15px">Take this promotion you will receive </span><span style="color:red"> 5 </span>  <span style="font-size:15px">point</span></p>
                <div class="submit-button" style="margin:10px;padding:10px">
                  <button type="button" class="btn" onclick="window.location='{{ url("/reservation") }}'" style="width:100%;background:black;color:white;position:absolute;buttom:0;right:0;left:0">RESERVE</button>
                </div>
            </div>

            <div class="col-md-4" style="margin:30px;width:300px;height:500px;padding:5px;border:1px solid brown;">
                <img class="img-responsive" src="img/preview4.jpg" alt="">
                <p>Feet Massage</p>
                <p><span style="font-size:15px">Duration</span><span style="color:red"> 1.30 </span> <span style="font-size:15px">hr.</span></p>
                <p><span style="font-size:15px">Price</span> <span style="color:red"> 600 </span> <span style="font-size:15px">Bath</span></p>
                <p><span style="font-size:15px">Take this promotion you will receive </span><span style="color:red"> 9 </span>  <span style="font-size:15px">point</span></p>
                <div class="submit-button" style="margin:10px;padding:10px">
                  <button type="button" class="btn" onclick="window.location='{{ url("/reservation") }}'" style="width:100%;background:black;color:white;position:absolute;buttom:0;right:0;left:0">RESERVE</button>
                </div>
            </div>
         </div>




        @include('layouts._footer')

    </body>

</html>
