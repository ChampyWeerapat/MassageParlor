<?php

use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('course')->insert([
            'description' => "Regular Massage",
            'duration' => 60,
            'price' => 3000,
        ]);
        DB::table('course')->insert([
            'description' => "Chinese Massage",
            'duration' => 60,
            'price' => 3500,
        ]);
        DB::table('course')->insert([
            'description' => "Foot Massage",
            'duration' => 30,
            'price' => 1000,
        ]);
    }
}
