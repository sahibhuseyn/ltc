<?php

use Illuminate\Database\Seeder;

class EventSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'language_id' => 2,
            'title' => 'DANCE EVENTS',
            'image' => 'event1.jpg',
            'event_bg' => 'event-bg1.png',
            'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore maxime, sapiente fugiat molestias.',
            'date_str' => '21 SEPTEMBER 2017',
            'time_str' => ' 9:00 AM to 1:00 PM',
            'location' => 'madrid'
        ]);
        DB::table('events')->insert([
            'language_id' => 2,
            'title' => 'DANCE EVENTS',
            'image' => 'event2.jpg',
            'event_bg' => 'event-bg2.png',
            'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore maxime, sapiente fugiat molestias.',
            'date_str' => '22 SEPTEMBER 2017',
            'time_str' => ' 9:00 AM to 1:00 PM',
            'location' => 'baku',
        ]);
        DB::table('events')->insert([
            'language_id' => 2,
            'title' => 'DANCE EVENTS',
            'image' => 'event3.jpg',
            'event_bg' => 'event-bg3.png',
            'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore maxime, sapiente fugiat molestias.',
            'date_str' => '21 SEPTEMBER 2017',
            'time_str' => ' 9:00 AM to 1:00 PM',
            'location' => 'test',
        ]);
    }
}
