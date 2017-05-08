<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Client</title>
  </head>
  <body>

      @foreach($data as $c)
      <img src="img/logo.png" height="90px" width="90px" style="float: left;"/>
      <!-- <div style = "float: right;"> -->


      <p>Voucher </p>
      <p>Code :  {{$c->code}}</p>

        <p>Discount :  {{$c->amount}} {{$c->type}}</p>


      <!-- </div> -->
      <hr>
      @endforeach


  </body>
</html>
