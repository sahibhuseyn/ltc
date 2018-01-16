<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->integer('language_id')->unsigned();
            $table->foreign('language_id')->references('id')->on('languages')->onDelete('cascade');
            $table->string('slug');
            $table->string('type');
            $table->string('title');
            $table->string('image');
            $table->string('short_description');
            $table->text('description');
            $table->integer('price');
            $table->integer('prev_price')->unsigned()->default(0);
            $table->string('class_time');
            $table->string('course_duration');
            $table->tinyInteger('selected')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
