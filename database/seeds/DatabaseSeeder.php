<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UserSeed::class);
        $this->call(LanguageSeed::class);
        $this->call(SliderSeed::class);
        $this->call(CategorySeed::class);
        $this->call(CourseSeed::class);
        $this->call(TestimonialSeed::class);
        $this->call(TeacherSeed::class);
        $this->call(PostSeed::class);
        $this->call(EventSeed::class);
        $this->call(GallerySeed::class);
        $this->call(TranslationSeed::class);
        $this->call(TypeSeed::class);
        $this->call(StuydSeed::class);
    }
}
