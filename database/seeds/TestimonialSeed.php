<?php

use Illuminate\Database\Seeder;

class TestimonialSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            'image' => 'img-3.jpg',
            'position' => 'designer',
            'language_id' => 2,
            'feedback' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque est quasi, quas ipsam, expedita placeat facilis odio illo ex accusantium eaque itaque officiis et sit. Vero quo, impedit neque.',
            'name' => 'Catherine Grace'
        ]);

        DB::table('testimonials')->insert([
            'image' => 'img-4.jpg',
            'position' => 'designer',
            'language_id' => 2,
            'feedback' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque est quasi, quas ipsam, expedita placeat facilis odio illo ex accusantium eaque itaque officiis et sit. Vero quo, impedit neque.',
            'name' => 'Catherine Grace'
        ]);
        DB::table('testimonials')->insert([
            'image' => 'img-1.jpg',
            'position' => 'designer',
            'language_id' => 2,
            'feedback' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque est quasi, quas ipsam, expedita placeat facilis odio illo ex accusantium eaque itaque officiis et sit. Vero quo, impedit neque.',
            'name' => 'Catherine Grace'
        ]);
    }
}
