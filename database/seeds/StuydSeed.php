<?php

use Illuminate\Database\Seeder;

class StuydSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('studies')->insert([
            'language_id' => 2,
            'type_id' => 1,
            'slug' => 'css3',
            'title' => 'CSS 3 Kurslarina davam',
            'image' => 'bg1.jpg',
            'short_description' => 'Yeni Css kurslari start goturdu',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'created_at' => '2018-01-03 00:00:00',
        ]);
    }
}
