<?php

use Illuminate\Database\Seeder;

class TypeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            'name' => 'Texnologiya',
            'slug' => 'texnologiya',
            'parent_id' => 0,
            'language_id' => 2
        ]);
    }
}
