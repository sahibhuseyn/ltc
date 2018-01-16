<?php

use Illuminate\Database\Seeder;

class TeacherSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([
            'name' => 'David Jakaria',
            'title' => 'teacher',
            'slug' => 'teacher',
            'language_id' => 2,
            'short_description' => 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem.',
            'description' => '',
            'image' => 'team1.jpg',
        ]);

        DB::table('teachers')->insert([
            'name' => 'Jhon Doe',
            'title' => 'teacher',
            'slug' => 'teacher1',
            'language_id' => 2,
            'short_description' => 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem.',
            'description' => '',
            'image' => 'team2.jpg',
        ]);
    }
}
