<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHtPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ht_photos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('album_id');
            $table->foreign('album_id')->references('id')->on('ht_albums');
            $table->string('photo');
            $table->mediumText('photo_description')->nullable();
            $table->integer('privacy')->default(1)->unsigned();
            $table->integer('status')->nullable();
            $table->integer('created_by')->unsigned();
            $table->integer('updated_by')->unsigned();
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
        Schema::dropIfExists('ht_photos');
    }
}
