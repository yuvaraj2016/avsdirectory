<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHtBusinessProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//         , mother_name, address, date_of_birth, time_of_birth, birth_place, natchatram, laknam, rasi, photo, no_brothers, no_brothers_married, no_sisters, no_sisters_married, education, job, salary, caste, class, subcaste, father_kulam, mother_kulam, ancestry, dhosam, family_god, dhisa, dhisa_year, dhisa_month, dhisa_days, rasi_kattam_id, laknam_kattam_id, created_at, created_by, updated_date, updated_at
        Schema::create('ht_business_profiles', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('business_name',500);
            $table->string('business_image',500)->nullable();
            $table->string('business_hours',500)->nullable();
            $table->bigInteger('business_cateogy_id')->unsigned();
            // $table->foreign('business_cateogy_id')->references('id')->on('ht_user_business_categories');
            $table->string('business_location',500)->nullable();
            $table->mediumText('business_address');
            $table->mediumText('business_contact');
            $table->string('business_email',500)->nullable();
            $table->string('business_website',500)->nullable();
            $table->mediumText('business_description')->nullable();
            $table->integer('view_count');
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
        Schema::dropIfExists('ht_business_profiles');
    }
}
