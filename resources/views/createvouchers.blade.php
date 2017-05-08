<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	@extends('layouts.taghead')
	<title>Create_Voucher</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link href="css/laravel.css" rel="stylesheet">


</head>
<body>
	@include('layouts._menubar')

	<form action="create" method="post">
		<div class="container" style="width:50%;font-family: 'Raleway', sans-serif;font-weight:bold	">
			<div class="tile is-child box notification" style="background-color:#EEB740;padding:20px">
				<div class="voucher-field">
					<div class="voucher-amount">
						Amount of Voucher
						<input type="text" id="num_vouc" name="num_vouc">
					</div><br>

					<div class="voucher-discount">
		        Discount
		        <input type="text" id="value" name="value" size = 2>
		        <select name='type'>
		        <option value='%'>Percent</option>
		        <option value='Baht'>Cash</option>
		        </select>
					</div><br>

					<div class="voucher-description">
		        Description
		    	  <input type='text'
		    				 name='descrip'
		    				 size = 30>
		        <input type='hidden' name='_token' value="{{ csrf_token() }}">
					</div><br>
	        <!-- <button v-on:click="submit()">สร้าง</button> -->
	        <button type="submit">Create Voucher</button>
					<hr>
				</div>
    	</div>
		</div>
	</form>

	@include('layouts._footer')

</body>

<!-- <script src="../../public/js/vue.js" charset="utf-8"></script> -->



<!-- </script> -->

</html>
