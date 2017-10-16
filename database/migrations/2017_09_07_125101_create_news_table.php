<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('category_id');
            $table->string('title', 255);
            $table->string('sub_title', 255)->nullable();
            $table->text('summary');
            $table->text('sub_summary')->nullable();
            $table->string('image_url', 255);
            $table->string('image_comment', 255)->nullable();
            $table->string('link_1', 255);
            $table->string('link_2', 255)->nullable();
            $table->string('link_3', 255)->nullable();
            $table->date('date')->default(\Carbon\Carbon::now());
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
        Schema::dropIfExists('news');
    }
}
