<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \HttpOz\Roles\Models\Role::create([
        'name' => 'Owner',
        'slug' => 'owner',
    	]);

    	\HttpOz\Roles\Models\Role::create([
        'name' => 'Employee',
        'slug' => 'employee',
    	]);

    	\HttpOz\Roles\Models\Role::create([
        'name' => 'Member',
        'slug' => 'member',
    	]);

    	$adminRole = \HttpOz\Roles\Models\Role::whereSlug('owner')->first();

    	$admin = \App\User::create([
        	'name' => 'admin',
        	'email' => 'oscar@github.com',
        	'password' => bcrypt('admin'),
        	'address' => 'abc',
        	'tel' => '0809950951',
            'point' => 0,
    	]);

    	$admin->attachRole($adminRole);
    }
}
