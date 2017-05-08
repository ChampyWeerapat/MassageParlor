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
            'name' => "Facial Massage",
            'description' => "Facial Massage",
            'duration' => 60,
            'price' => 3000,
            'imgpath' => "img/service/facial.jpg"
        ]);
        DB::table('course')->insert([
            'name' => "Feet Massage",
            'description' => "Feet Massage",
            'duration' => 60,
            'price' => 3000,
            'imgpath' => "img/service/feet.jpg"
        ]);
        DB::table('course')->insert([
            'name' => "Oil Massage",
            'description' => "Oil Massage",
            'duration' => 60,
            'price' => 3000,
            'imgpath' => "img/service/oilmassage.jpg"
        ]);
        DB::table('course')->insert([
            'name' => "Relax Massage",
            'description' => "Relax Massage",
            'duration' => 60,
            'price' => 3000,
            'imgpath' => "img/service/relax.jpg"
        ]);
        DB::table('course')->insert([
            'name' => "Skinscrub",
            'description' => "Skinscrub",
            'duration' => 60,
            'price' => 3000,
            'imgpath' => "img/service/skinscrub.jpg"
        ]);
        DB::table('course')->insert([
            'name' => "Thai Massage",
            'description' => "Thai Massage",
            'duration' => 60,
            'price' => 3000,
            'imgpath' => "img/service/thaimassage.jpg"
        ]);
        DB::table('course')->insert([
            'name' => "Thai Yoga",
            'description' => "Thai Yoga",
            'duration' => 60,
            'price' => 3000,
            'imgpath' => "img/service/thaiyoga.jpg"
        ]);
    }
}
