<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHtRequirementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ht_requirements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            // $table->string('photo');
            $table->mediumText('description')->nullable();
            $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('ht_business_categories');
            $table->integer('privacy')->default(1)->unsigned();
            $table->integer('valid_for')->unsigned();
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
        Schema::dropIfExists('ht_requirements');
    }
}
