<?php

use Illuminate\Database\Seeder;

class SliderSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            'language_id' => 2,
            'image' => 'slider1.jpg',
            'orange_caption' => 'education',
            'white_caption' => 'organization',
            'overlay' => 'Lorem Ipsum is simply dummy text of the printing and typesetting. Contrary to popular belief. Lorem It has roots in a piece of popular belief.',
            'btn_name' => 'learn mroe',
            'btn_url' => 'test.html'
        ]);

        DB::table('sliders')->insert([
            'language_id' => 2,
            'image' => 'slider2.jpg',
            'orange_caption' => 'learning today',
            'white_caption' => 'perfect',
            'overlay' => 'Lorem Ipsum is simply dummy text of the printing and typesetting. Contrary to popular belief.',
            'btn_name' => 'our courses',
            'btn_url' => 'test.html'
        ]);
    }
}
