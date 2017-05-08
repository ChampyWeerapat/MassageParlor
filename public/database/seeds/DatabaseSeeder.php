<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
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
    	]);

    	$admin->attachRole($adminRole);


    }
}
