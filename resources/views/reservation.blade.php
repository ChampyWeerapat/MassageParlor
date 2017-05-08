<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

    <head>

    @extends('layouts.taghead')
    <link href="css/laravel.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    </head>
    <body>
        <div class="flex-center position-ref bg-logo">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="links">
                    <a href="">Home</a>
                    <a href="">Reservation</a>
                    <a href="">Package & Promotion</a>
                    <a href="">Massager</a>
                    <a href="">Contact Us</a>
                </div>
            </div>
        </div>

        <hr>

        <div class="block-reserve">
            <div class="container" id="vue-app">
		<form action="">
			<div class="reserved-date">
				วันที่ : 
				<input type="date" id="date">
			</div>

			<div class="reserved-massagist">
				ช่างประจำ :
				<input type="radio" 
					   name="massagist" 
					   value="have"
					   v-on:click="hasMassagist=!hasMassagist">
					มี
				<input type="radio" 
					   name="massagist" 
					   value="dont-have"
					   v-on:click="hasMassagist=!hasMassagist"
					   checked>
					ไม่มี
				<div v-if=hasMassagist>
					<select name="massagist-list">
						<option value="" v-for='(massagist, index) in massagists'>
							@{{ index + 1 }}.
							@{{ massagist.name }}
						</option>
					</select>
				</div>
			</div>

			<div class="reserved-table">
				<!-- time table -->
			</div>

			<div class="show-redeem-point">
				<p>
					แต้มสะสมที่มี : @{{ profile.point }}
					(1 แต้มเท่ากับ 1 บาท)
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
        },
        method: {
        	submitReserve: function() {
            	
          	}
        }
	});
</script>


</html>