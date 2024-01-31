<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->integer('category_id');
            $table->string('name');
            $table->string('title')->unique();
            $table->integer('subcategory_id');
            $table->string('slug')->unique();
            $table->text('description');
            $table->text('video_link')->nullable();
            $table->text('is_approve')->nullable();
            $table->tinyInteger('publication_status');
            $table->text('image');
            $table->tinyInteger('breaking_news')->nullable();
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
