<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHtLikesPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *


     * @return void
     */

     //likes photo
    public function up()
    {
        Schema::create('ht_likes__photos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('photo_id');
            $table->foreign('photo_id')->references('id')->on('ht_photos');

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
        Schema::dropIfExists('ht_likes__photos');
    }
}
