<?php

use Illuminate\Database\Seeder;

class MassagistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('massagist')->insert([
            'name' => "Weerapat",
            'imgpath' => "img/massager/weerapat.jpg",
        ]);
        DB::table('massagist')->insert([
            'name' => "Ariyamak",
            'imgpath' => "img/massager/ariyamak.jpg",
        ]);
        DB::table('massagist')->insert([
            'name' => "Apisit",
            'imgpath' => "img/massager/apisit.jpg",
        ]);
        DB::table('massagist')->insert([
            'name' => "Narumon",
            'imgpath' => "img/massager/narumon.jpg",
        ]);
        DB::table('massagist')->insert([
            'name' => "Boonyaporn",
            'imgpath' => "img/massager/boonyaporn.jpg",
        ]);

    }
}
