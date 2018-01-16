<?php

use Illuminate\Database\Seeder;

class LanguageSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([
            'code' => 'en',
            'name' => 'English',
            'status' => 1,
            'position' => 1,
            'image' => 'en.png'
        ]);

        DB::table('languages')->insert([
            'code' => 'az',
            'name' => 'Azeri',
            'status' => 1,
            'position' => 2,
            'image' => 'az.png'
        ]);

        DB::table('languages')->insert([
            'code' => 'fr',
            'name' => 'French',
            'status' => 1,
            'position' => 3,
            'image' => 'fr.png'
        ]);
    }
}
