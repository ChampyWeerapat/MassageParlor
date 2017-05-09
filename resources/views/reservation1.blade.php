<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

    <head>

    @extends('layouts.taghead')
    <link href="css/laravel.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    </head>
    <body>
      @include('layouts._menubar')
      <div style="padding:2%; padding-left:10%; padding-top:2%;">
        <h1>Reserve Course</h1>
      </div>

      <div class="row" id="vue-app">
        <div class="col col-md-8" style="padding-left:10%;">
          <div class="block-reserve">
            <div class="container">
              <form action="">
                <div class="reserved-date">
                  <div class="form-group">
                    <div class="row">
                      <div class="col col-md-2">
                        <label>Date<label>
                      </div>
                      <div class="col col-md-1">
                        <label>:</label>
                      </div>
                      <div class="col-6 col-md-4">
<<<<<<< HEAD
                        <input type="date" id="date" name="date" class="form-control">
=======
                        <input type="date" id="date" class="form-control" v-model="date">
>>>>>>> fa0ac8f65942d89b90c4696420205b31b9d0880c
                      </div>
                    </div>
                  </div>
                </div>

                <div class="course">
                    <div class="row">
                      <div class="col col-md-2">
                        <label>Course</label>
                      </div>
                      <div class="col col-md-1">
                        <label>:</label>
                      </div>
                      <div class="col-6 col-md-4">
                        <div class="form-group">
                          <select name="course-list" class="form-control">
							@foreach ($courses as $course)
                            <option value="$course->id" >
                                     {{ $course->name }}
                            </option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                    </div>
                </div>

                <div class="reserved-massagist">
                    <div class="row">
                      <div class="col col-md-4">
                        <label>Would you like to specify the massager?</label>
                      </div>
                      <div class="col col-md-1">
                        <input type="radio" name="massagist" value="have" v-on:click="hasMassagist=!hasMassagist"> &nbsp; Yes
                      </div>
                      <div class="col col-md-1">
                        <input type="radio" name="massagist" value="dont-have" v-on:click="hasMassagist=!hasMassagist" checked> &nbsp; No
                      </div>
                    </div>
                </div>

                <br/>

                <div v-if=hasMassagist>
                  <div class="form-group">
                      <div class="row">
                        <div class="col col-md-1">
                          <!-- Space  -->
                        </div>
                        <div class="col col-md-1">
                          <label>Name<label>
                        </div>
                        <div class="col col-md-1">
                          <label>:</label>
                        </div>
                        <div class="col-6 col-md-4">
                          <select id="massagist-list" name="massagist-list" class="form-control">
                            @foreach ($massagists as $massagist)
<<<<<<< HEAD
                            <option value="{{$massagist->id}}" >
                                     {{$massagist->name}}
=======
                            <option value="$massagists->id" >
                                     {{ $massagist->name }}
>>>>>>> fa0ac8f65942d89b90c4696420205b31b9d0880c
                            </option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>

                <div class="table" v-if="hasMassagist">
                  <div class="row">
                    <div class="col col-md-6">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th><center>Start</center></th>
                            <th><center>Finish</center></th>
                          </tr>
                        </thead>
                        <tbody>
                        	@foreach ($massagists as $massagist)
	                        	<tr>
		                            <td></td>
		                            <td></td>
	                          	</tr>
                          	@endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

                <div>
                  <div class="form-group">
                      <div class="row">
                        <div class="col col-md-2">
                          <label>Reserve time<label>
                        </div>
                        <div class="col col-md-1">
                          <label>:</label>
                        </div>
                        <div class="col-6 col-md-4">
                          <input type="time" id="time" class="form-control" v-model="time">
                        </div>
                      </div>
                  </div>
                </div>
				@if (Route::has('login'))
					@if (Auth::check())
		                <div class="show-redeem-point">
		                  <p>
		                    Your points : {{ Auth::user()->point }}
		                    (1 point = 1 Baht)
		                  </p>
		                </div>
					@else
		                <div class="show-redeem-point">
		                  <p>
		                    You are not a member!! &nbsp;&nbsp;
		                    Register to be a member
		                    &nbsp;&nbsp; >> <a href="http://massageparlor.dev/register" style="color:brown">Click here softly</a>
		                  </p>
		                </div>
		            @endif
	            @endif

                <div class="voucher-field">
                  <div class="form-group">
                    <div class="row">
                      <div class="col col-md-2">
                        <label>Redeem Voucher</label>
                      </div>
                      <div class="col col-md-1">
                        <label>:</label>
                      </div>
                      <div class="col-6 col-md-4">
                        <input type="text" id="voucher-code" class="form-control">
                      </div>
                    </div>
                  </div>
                </div>


                <br>
                <div class="submit-button">
                  <button type="button" class="btn" v-on:click="submitReserve()">RESERVE</button>
                </div>
              </form>
             </div>
           </div>
        </div>


        <div class="col col-md-4">
          	<div style="border:1px solid gray; border-radius:5px; margin-right:10%; height:450px; padding:20px;">
              <div name="date-report">
              	Date : 
              	@{{ date }}
              </div>
              <div name="price-report">
              	Price: 
              	@{{ time }}
              </div>
          	</div>
        </div>
      </div>

        @include('layouts._footer')

    </body>


<script>
  $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

  $(document).ready(function(){
    $("#massagist-list").change(function(){
            alert("1234")
            $.ajax({
               type:'POST',
               url:'/getmsg',
               data:'_token = <?php echo csrf_token() ?>',
               success:function(data){
                  alert(data);
               }
          });
        });
        });
</script>
<script src="js/vue.js" charset="utf-8"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<script>
	var vm = new Vue({
		el: '#vue-app',
        data: {
        	hasMassagist: false,
        	date: "",
        	time: "",
        	price: 0
        },
        compute: {
        	getPrice: function() {
        		
        	}
        },
        method: {
        	submitReserve: function() {

          	}
        }
	});

</script>


</html>
