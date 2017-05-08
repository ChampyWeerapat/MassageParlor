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
            'name' => "Champ",
            'imgpath' => "",
        ]);
        DB::table('massagist')->insert([
            'name' => "Meng",
            'imgpath' => "",
        ]);
        DB::table('massagist')->insert([
            'name' => "Mick",
            'imgpath' => "",
        ]);
        DB::table('massagist')->insert([
            'name' => "Air",
            'imgpath' => "",
        ]);
        DB::table('massagist')->insert([
            'name' => "Namphueng",
            'imgpath' => "",
        ]);

    }
}
