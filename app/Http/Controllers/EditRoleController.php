<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditRoleController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$user = DB::table('users')
            ->join('role_user', 'users.id', '=', 'role_user.user_id')
            ->join('roles', 'role_user.role_id', '=', 'roles.id')
            ->select('users.name', 'roles.name as role_name','users.id as user_id','roles.id as role_id')
            ->get();
        // echo $user;
        return view('editrole',['users' => $user]);
    }

    public static function editRole($u,$r){
    	DB::table('role_user')
            ->where('user_id', $u)
            ->update(['role_id' => $r]);
        echo "Change Role Success";
    }
}
