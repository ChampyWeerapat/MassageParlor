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

      <div class="row">
        <div class="col col-md-8" style="padding-left:10%;">
          <div class="block-reserve">
            <div class="container" id="vue-app">
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
                        <input type="date" id="date" class="form-control">
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
                            <option value="" v-for='(course, index) in courses'>
                                     @{{ course.name }}
                            </option>
							@foreach ($courses as $course)
                            <option value="$course->id" >
                                     {{$course->description}}
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

                <br />

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
                          <select name="massagist-list" class="form-control">
                            <option v-for='(massagist, index) in massagists' v-bind:value="massagist.name">
                              @{{ massagist.name }}
                            </option>
                            @foreach ($massagists as $massagist)
                            <option value="$massagists->id" >
                                     {{$massagist->name}}
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
                          <tr>
                            <td></td>
                            <td></td>
                          </tr>
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
                          <input type="time" id="time" class="form-control" >
                        </div>
                      </div>
                    </div>
                  </div>
                  <br />
                <div class="show-redeem-point" v-if="isMember">
                  <p>
                    Your points : @{{ profile.point }}
                    (1 point = 1 Baht)
                  </p>
                </div>

                <div class="show-redeem-point" v-if="!isMember">
                  <p >
                    You are not a member!! &nbsp;&nbsp;
                    Register to be a member
                    &nbsp;&nbsp; >> <a href="http://massageparlor.dev/register" style="color:brown">Click here softly</a>
                  </p>
                </div>

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
              test
          </div>
        </div>
      </div>


        <div class="col col-md-4">
          <div style="border:1px solid gray; border-radius:5px; margin-right:10%; height:450px; padding:20px;">
              test
          </div>
        </div>
      </div>

        @include('layouts._footer')

    </body>


<script src="js/vue.js" charset="utf-8"></script>
<script>
	var vm = new Vue({
		el: '#vue-app',
        data: {
        	hasMassagist: false,
        	profile: {
        		id: '',
	            name: '',
	            point: 0
        	},
        	massagists: [],
        	courses: [],
        	isMember: false
        },
        mounted: function() {
        	this.massagists.push({
        		name: 'Apisit'
        	});
        	this.massagists.push({
        		name: 'Weerapat'
        	});
        	this.massagists.push({
        		name: 'Nampueng'
        	});
        	this.massagists.push({
        		name: 'Air'
        	});
        	this.courses.push({
        		name: 'Body'
        	});
        	this.courses.push({
        		name: 'Half'
        	});
        	this.courses.push({
        		name: 'Feet'
        	});
        },
        	isMember: false
        },
        method: {
        	submitReserve: function() {

          	}
        }
	});
</script>


</html>
