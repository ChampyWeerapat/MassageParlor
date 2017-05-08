<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Massage Parlor</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
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
				กรอกโค้ด Voucher: 
				<input type="text" id="voucher-code">
			</div>

			<div class="submit-button">
				<button v-on:click="submitReserve()">
					จอง
				</button>
			</div>
		</form>
	</div>
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
