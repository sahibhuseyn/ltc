<?php

use Illuminate\Database\Seeder;

class CourseSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'language_id' => 2,
            'category_id' => 1,
            'slug' => 'SCIENCE & TECHNOLOGY',
            'title' => 'SCIENCE & TECHNOLOGY',
            'image' => 'c1.jpg',
            'short_description' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Suspendisse ullamcorper fermentum lectus, vel tincidunt ligula mollis sit amet. Aliquam at ante at elit efficitur tincidunt a quis neque. Donec ut pulvinar metus. Pellentesque lobortis volutpat eros sed sagittis. Nunc rutrum ex eu auctor tristique. Maecenas suscipit vestibulum nunc nec placerat. Phasellus blandit augue nunc, consequat consectetur augue placerat sed. Aenean fermentum scelerisque lectus, sit amet ultricies ex interdum bibendum. Quisque porttitor, enim maximus convallis gravida, dui arcu lacinia libero, quis ornare nibh elit pharetra massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed varius ultricies metus. Donec ac ex porta libero venenatis sodales. Sed efficitur eget risus sed molestie. Nulla blandit bibendum metus ut sagittis. Etiam quis semper justo. Sed tristique facilisis felis ut tincidunt. Phasellus auctor convallis nisl ut accumsan. Suspendisse ullamcorper fermentum lectus, vel tincidunt ligula mollis sit amet. Aliquam at ante at elit efficitur tincidunt a quis neque. Donec ut pulvinar metus. Pellentesque lobortis volutpat eros sed sagittis',
            'price' => 125,
            'prev_price' => 170,
            'class_time' => '2 saat',
            'type' => 'standart',
            'course_duration' => '3 ay',
        ]);

        DB::table('courses')->insert([
            'language_id' => 2,
            'category_id' => 1,
            'slug' => 'HEALTH & PSYCHOLOGY',
            'title' => 'HEALTH & PSYCHOLOGY',
            'image' => 'c2.jpg',
            'short_description' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
            'description' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
            'price' => 125,
            'prev_price' => 180,
            'class_time' => '2 saat',
            'type' => 'standart',
            'course_duration' => '3 ay',
        ]);
        DB::table('courses')->insert([
            'language_id' => 2,
            'category_id' => 1,
            'slug' => 'html5',
            'title' => 'HTML5 KURSLARI HAVAYI',
            'image' => 'c4.jpg',
            'short_description' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
            'description' => '12312312321',
            'price' => 125,
            'prev_price' => 180,
            'class_time' => '2 saat',
            'type' => 'standart',
            'course_duration' => '3 ay',
        ]);
        DB::table('courses')->insert([
            'language_id' => 2,
            'category_id' => 1,
            'slug' => 'BUSINESS-ACCOUNTING',
            'title' => 'BUSINESS & ACCOUNTING',
            'image' => 'c3.jpg',
            'short_description' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
            'description' => '12312312321',
            'price' => 125,
            'prev_price' => 150,
            'class_time' => '2 saat',
            'type' => 'standart',
            'course_duration' => '3 ay',
        ]);
    }
}
