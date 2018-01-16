<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('language_id')->unsigned();
            $table->foreign('language_id')->references('id')->on('languages')->onDelete('cascade');
            $table->string('slug')->unique();
            $table->string('title');
            $table->string('image');
            $table->string('short_description');
            $table->text('description');
            $table->string('quote');
            $table->string('quote_source');
            $table->integer('view_count')->default(0);
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('posts');
    }
}
