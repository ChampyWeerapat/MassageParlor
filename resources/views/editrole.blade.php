@extends('layouts.app')

@section('content')

<?php 
    use App\Http\Controllers\EditRoleController;
    if(isset($_GET['submit'])){
        echo EditRoleController::editRole($_GET['user'],$_GET['role']);
    }
 ?>

<form action="" method="GET">
<select id="user" name="user">
    @foreach ($users as $x)
        <option value='{{$x->user_id}}'>{{$x->name}}</option>
    @endforeach
</select>

<select id="role" name="role">
    @foreach ($users as $x)
        <option value='{{$x->role_id}}'>{{$x->role_name}}</option>
    @endforeach
</select>
<button type="submit" name="submit">Submit</button>
</form>
@endsection