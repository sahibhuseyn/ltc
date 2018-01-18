<?php

use Illuminate\Database\Seeder;

class TranslationSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('translations')->insert([
            'file_name' => 'navbar',
            'language_id' => 1,
            'key' => 'home',
            'value' => 'Home',
        ]);

        DB::table('translations')->insert([
            'file_name' => 'navbar',
            'language_id' => 2,
            'key' => 'home',
            'value' => 'Ana Səhifə',
        ]);

        DB::table('translations')->insert([
            'file_name' => 'navbar',
            'language_id' => 1,
            'key' => 'courses',
            'value' => 'Courses',
        ]);

        DB::table('translations')->insert([
            'file_name' => 'navbar',
            'language_id' => 2,
            'key' => 'courses',
            'value' => 'Kurslar',
        ]);

        DB::table('translations')->insert([
            'file_name' => 'navbar',
            'language_id' => 2,
            'key' => 'prices',
            'value' => 'Qiymət',
        ]);

        DB::table('translations')->insert([
            'file_name' => 'navbar',
            'language_id' => 2,
            'key' => 'news',
            'value' => 'Xəbərlər',
        ]);

        DB::table('translations')->insert([
            'file_name' => 'navbar',
            'language_id' => 2,
            'key' => 'study_abroad',
            'value' => 'Xaricdə təhsil al',
        ]);

        DB::table('translations')->insert([
            'file_name' => 'navbar',
            'language_id' => 2,
            'key' => 'job',
            'value' => 'Karyera',
        ]);

        DB::table('translations')->insert([
            'file_name' => 'navbar',
            'language_id' => 2,
            'key' => 'gallery',
            'value' => 'Qalereya',
        ]);

        DB::table('translations')->insert([
            'file_name' => 'navbar',
            'language_id' => 2,
            'key' => 'contact',
            'value' => 'Bizimlə Əlaqə',
        ]);

        DB::table('translations')->insert([
            'file_name' => 'navbar',
            'language_id' => 2,
            'key' => 'about_us',
            'value' => 'Haqqımızda',
        ]);
    }
}
