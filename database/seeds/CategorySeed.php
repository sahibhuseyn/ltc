<?php

use Illuminate\Database\Seeder;

class CategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'ingilis dili',
            'language_id' => 2,
            'slug' => 'ingilis dili',
            'parent_id' => 0
        ]);
    }
}
