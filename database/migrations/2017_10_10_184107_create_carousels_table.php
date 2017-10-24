<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarouselsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carousels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_ru');
            $table->string('title_kk')->nullable();
            $table->string('title_en')->nullable();
            $table->string('short_desc_ru');
            $table->string('short_desc_kk')->nullable();
            $table->string('short_desc_en')->nullable();
            $table->string('title_button_ru');
            $table->string('title_button_kk')->nullable();
            $table->string('title_button_en')->nullable();
            $table->string('image');
            $table->integer('sorting')->default(0)->comment('комментарий');
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
        Schema::dropIfExists('carousels');
    }
}
