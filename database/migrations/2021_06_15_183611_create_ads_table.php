<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->integer('positon');
            $table->string('name');
            $table->text('image')->nullable();
            $table->text('popup_image')->nullable();
            $table->text('url');
            $table->tinyInteger('publication_status');
            $table->string('start_ads');
            $table->string('end_ads');
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
        Schema::dropIfExists('abs');
    }
}
