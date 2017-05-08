<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

    <head>

    @extends('layouts.taghead')
    <link href="css/laravel.css" rel="stylesheet">

    </head>
    <body>
        @include('layouts._menubar')
        <div class="row" style="width:50%;margin:auto">
            <div class="col-md-4 portfolio-item" >
                <a href="#">
                    <img class="img-responsive" src="img/preview1.jpg" alt="">
                </a>
                <p>นวดแผนไทย</p>
                <p><span style="font-size:15px">จำนวน</span> <span style="color:red"> 2 </span> <span style="font-size:15px">ชม.</span></p>
                <p><span style="font-size:15px">เมื่อซื้อคอร์สจะได้รับ</span> <span style="color:red"> 6 </span> <span style="font-size:15px">แต้ม</span></p>

            </div>

            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="img/preview2.jpg" alt="">
                </a>
                <p>นวดบำบัดลดความเครียด</p>
                <p><span style="font-size:15px">จำนวน</span><span style="color:red"> 1.30 </span> <span style="font-size:15px">ชม.</span></p>
                  <p><span style="font-size:15px">เมื่อซื้อคอร์สจะได้รับ</span><span style="color:red"> 7 </span> <span style="font-size:15px">แต้ม</span></p>

            </div>

            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="img/preview3.jpg" alt="">
                </a>
                <p>นวดหินภูเขาไฟ</p>
                <p><span style="font-size:15px">จำนวน</span><span style="color:red"> 2.30 </span> <span style="font-size:15px">ชม.</span></p>
                  <p><span style="font-size:15px">เมื่อซื้อคอร์สจะได้รับ</span><span style="color:red"> 10 </span><span style="font-size:15px">แต้ม</span></p>

            </div>
            <div class="col-md-4 portfolio-item" >
                <a href="#">
                    <img class="img-responsive" src="img/preview5.jpg" alt="">
                </a>
                <p>นวดชะลอวัยผิวหน้า</p>
                <p><span style="font-size:15px">จำนวน</span><span style="color:red"> 2 </span> <span style="font-size:15px">ชม.</span></p>
                  <p><span style="font-size:15px">เมื่อซื้อคอร์สจะได้รับ</span> <span style="color:red"> 3 </span>  <span style="font-size:15px">แต้ม</span></p>

            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="img/preview6.jpg" alt="">
                </a>
                <p>นวดเท้า</p>
                <p><span style="font-size:15px">จำนวน</span><span style="color:red"> 3 </span> <span style="font-size:15px">ชม.</span></p>
                  <p><span style="font-size:15px">เมื่อซื้อคอร์สจะได้รับ</span><span style="color:red"> 5 </span>  <span style="font-size:15px">แต้ม</span></p>

            </div>

            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="img/preview4.jpg" alt="">
                </a>
                <p>นวดน้ำมัน</p>
                <p><span style="font-size:15px">จำนวน</span><span style="color:red"> 1.30 </span> <span style="font-size:15px">ชม.</span></p>
                  <p><span style="font-size:15px">เมื่อซื้อคอร์สจะได้รับ</span><span style="color:red"> 9 </span>  <span style="font-size:15px">แต้ม</span></p>

            </div>
         </div>




        @include('layouts._footer')

    </body>

</html>
