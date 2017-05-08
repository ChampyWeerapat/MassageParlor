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



        <div class="block-reserve">
            <div class="container" id="vue-app">
                <h1>Reserve Course</h1>
		<form action="">

			<div class="reserved-date">
				Date :
				<input type="date" id="date">
			</div>

			<div class="reserved-massagist">
				Would you like to specify the massager? :
				<input type="radio"
					   name="massagist"
					   value="have"
					   v-on:click="hasMassagist=!hasMassagist">
					Yes
				<input type="radio"
					   name="massagist"
					   value="dont-have"
					   v-on:click="hasMassagist=!hasMassagist"
					   checked>
					No
				<div v-if=hasMassagist>
					<select name="massagist-list">
						@foreach ($massagists as $massagist)
							<option value="{{$massagist->id}}">
								{{$massagist->name}}
							</option>
						@endforeach
					</select>
				</div>
			</div>

			<div class="reserved-table">
				<!-- time table -->
			</div>

			<div class="show-redeem-point">
				<p>
					Your points : @{{ profile.point }}
					(1 point = 1 baht)
				</p>
			</div>

			<div class="voucher-field">
				Redeem Voucher :
				<input type="text" id="voucher-code">
			</div>

			<div class="submit-button">
				<button class="btn btn-default" v-on:click="submitReserve()">
					Reserve
				</button>
			</div>
		</form>
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
        	formMassagist: {
        		name: ''
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
