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
				
				<br>
				<br>
				<div>
					<select name="course-list">
						<option value="" v-for='(course, index) in courses'>
							@{{ index + 1 }}.
							@{{ course.name }}
						</option>
					</select>
				</div>
				
				<br>
				<div v-if=hasMassagist>
					<select name="massagist-list">
						<option v-for='(massagist, index) in massagists' v-bind:value="massagist.name">
							@{{ index + 1 }}.
							@{{ massagist.name }}
						</option>
					</select>
				</div>
			</div>
			<br>
			<div class="table" v-if="hasMassagist">
				<table border="1" cellspacing="0" cellpadding="5">
					<tr>
						<th>เวลาเข้างาน</th>
						<th>เวลาออกงาน</th>
					</tr>
					<tr>
						<td></td>
					</tr>
				</table>
			</div>

			<div>
				<p>
					เวลาที่เริ่ม : 
					<input type="text" id="hour" maxlength="2" size="2" placeholder="hr">
					:
					<select name="min" id="min">
						<option value="full">00</option>
						<option value="have">30</option>
					</select>
				</p>
			</div>

			<div class="show-redeem-point" v-if="isMember">
				<p>
					แต้มสะสมที่มี : @{{ profile.point }}
					(1 แต้มเท่ากับ 1 บาท)
				</p>
			</div>

			<div class="show-redeem-point" v-if="!isMember">
				<p>
					คุณไม่ได้เป็นสมาชิก
					สมัครสมาชิก
					<a href="http://massageparlor.dev/register">กดที่นี่เบาๆ</a>
				</p>
			</div>

			<div class="voucher-field">
				กรอกโค้ด Voucher: 
				<input type="text" id="voucher-code">
			</div>
			
			<br>
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
        method: {
        	submitReserve: function() {
            	
          	}
        }
	});
</script>

</html>
