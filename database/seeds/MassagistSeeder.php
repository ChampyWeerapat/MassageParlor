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
        ]);
        DB::table('massagist')->insert([
            'name' => "Meng",
        ]);
        DB::table('massagist')->insert([
            'name' => "Mick",
        ]);
        DB::table('massagist')->insert([
            'name' => "Air",
        ]);
        DB::table('massagist')->insert([
            'name' => "Namphueng",
        ]);

    }
}
