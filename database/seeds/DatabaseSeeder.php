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
        DB::table('roles')->insert([
            'name' => 'Member',
            'slug' => 'member',
            'level' => 1,
        ]);

        DB::table('roles')->insert([
            'name' => 'Employee',
            'slug' => 'employee',
            'level' => 1,
        ]);

        DB::table('roles')->insert([
            'name' => 'Owner',
            'slug' => 'owner',
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'apisit.r@ku.th',
            'password' => bcrypt('admin'),
            'address' => 'abc',
            'tel' => '0809950951',
        ]);

        DB::table('role_user')->insert([
            'role_id' => 3,
            'user_id' => 1,
        ]);


    }
}
