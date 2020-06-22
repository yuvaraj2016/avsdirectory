<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHtCommunityProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//         , mother_name, address, date_of_birth, time_of_birth, birth_place, natchatram, laknam, rasi, photo, no_brothers, no_brothers_married, no_sisters, no_sisters_married, education, job, salary, caste, class, subcaste, father_kulam, mother_kulam, ancestry, dhosam, family_god, dhisa, dhisa_year, dhisa_month, dhisa_days, rasi_kattam_id, laknam_kattam_id, created_at, created_by, updated_date, updated_at
        Schema::create('ht_community_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name',500);
            $table->string('father_name',500);
            $table->date('date_of_birth');
            $table->integer('age')->unsigned();;
            $table->string('blood_group',50)->nullable();
            $table->string('photo',500)->nullable();
            $table->string('native_place',500);
            $table->string('district',500);
            $table->string('ancestry',500)->nullable();
            $table->mediumText('address');
            $table->string('telephone',500);
            $table->integer('cell_no')->unsigned();;
            $table->string('email')->unique();
            $table->string('job_details',500)->nullable();
            $table->mediumText('job_description')->nullable();
            $table->string('designation',500)->nullable();
            $table->string('company_name',500)->nullable();
            $table->mediumText('company_address')->nullable();
            $table->string('company_telephone',500)->nullable();
            $table->integer('company_cell_no')->nullable();
            $table->string('company_email')->unique()->nullable();
            $table->string('qualification',500);
            // $table->integer('no_male_child')->unsigned();
            // $table->integer('no_female_child')->unsigned();
            $table->string('uid',500)->unique();
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
        Schema::dropIfExists('ht_community_profiles');
    }
}
