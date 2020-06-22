<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHtEventTrackersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ht_event_trackers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('event_id')->unsigned();
            $table->foreign('event_id')->references('id')->on('ht_event_configs');
            $table->string('user_name');
            $table->string('user_contact',11)->unique();
            $table->string('user_email',500)->nullable();
            $table->string('user_organisation',500)->nullable();
            $table->string('user_location',1000)->nullable();
            $table->timestamp('accepted_on')->useCurrent();
            $table->integer('status')->nullable();
            $table->integer('created_by')->unsigned();
            $table->integer('updated_by')->unsigned();
            $table->timestamps();
        });
        // Schema::table('event_trakers', function($table) {
        //      ;
        //  });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ht_event_trackers');
    }
}
