<?php

use Illuminate\Database\Seeder;

class GallerySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galleries')->insert([
            'language_id' => 2,
            'category' => 'studing',
            'name' => 'studing',
            'image' => '1.jpg'
        ]);
        DB::table('galleries')->insert([
            'language_id' => 2,
            'category' => 'studing',
            'name' => 'studing',
            'image' => '5.jpg'
        ]);
        DB::table('galleries')->insert([
            'language_id' => 2,
            'category' => 'studing',
            'name' => 'studing',
            'image' => '6.jpg'
        ]);
        DB::table('galleries')->insert([
            'language_id' => 2,
            'category' => 'training',
            'name' => 'training',
            'image' => '2.jpg'
        ]);
        DB::table('galleries')->insert([
            'language_id' => 2,
            'category' => 'training',
            'name' => 'training',
            'image' => '7.jpg'
        ]);
        DB::table('galleries')->insert([
            'language_id' => 2,
            'category' => 'lesson',
            'name' => 'lesson',
            'image' => '3.jpg'
        ]);

        DB::table('galleries')->insert([
        'language_id' => 2,
        'category' => 'lesson',
        'name' => 'lesson',
        'image' => '3.jpg'
        ]);

        DB::table('galleries')->insert([
            'language_id' => 2,
            'category' => 'training',
            'name' => 'training',
            'image' => '4.jpg'
        ]);
    }
}
