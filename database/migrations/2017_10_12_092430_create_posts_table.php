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
            $table->string('title_ru');
            $table->string('title_kk')->nullable();
            $table->string('title_en')->nullable();
            $table->text('desc_ru')->nullable();
            $table->text('desc_kk')->nullable();
            $table->text('desc_en')->nullable();
            $table->string('short_desc_ru')->nullable();
            $table->string('short_desc_kk')->nullable();
            $table->string('short_desc_en')->nullable();
            $table->string('price_ru')->nullable();
            $table->string('price_kk')->nullable();
            $table->string('price_en')->nullable();
            $table->string('image')->nullable();
            $table->integer('category_id');
            $table->integer('sorting');
            $table->integer('type');
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
