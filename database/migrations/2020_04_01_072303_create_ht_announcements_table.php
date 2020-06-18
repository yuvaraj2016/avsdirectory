<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHtAnnouncementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ht_announcements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('photo');
            $table->mediumText('description')->nullable();
            $table->integer('privacy')->default(1)->unsigned();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('ht_announcements');
    }
}
