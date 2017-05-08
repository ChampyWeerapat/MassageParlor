<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>Create_Voucher</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
	<form action="create" method="post">
		<div class="container">
			<div class="voucher-field">
				จำนวน Voucher
				<input type="text" id="num_vouc" name="num_vouc">
        ส่วนลด
        <input type="text" id="value" name="value" size = 2>
        <select name='type'>
        <option value='%'>Percent</option>
        <option value='Baht'>Cash</option>
        </select>
        รายละเอียด
    	  <input type='text'
    				 name='descrip'
    				 size = 30>
        <input type='hidden' name='_token' value="{{ csrf_token() }}">
        <!-- <button v-on:click="submit()">สร้าง</button> -->
        <button type="submit">สร้าง</button>
				<hr>
			</div>
    </div>
	</form>
</body>

<!-- <script src="../../public/js/vue.js" charset="utf-8"></script> -->



<!-- </script> -->

</html>
