<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHtMatrimonyBasicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//         , mother_name, address, date_of_birth, time_of_birth, birth_place, natchatram, laknam, rasi, photo, no_brothers, no_brothers_married, no_sisters, no_sisters_married, education, job, salary, caste, class, subcaste, father_kulam, mother_kulam, ancestry, dhosam, family_god, dhisa, dhisa_year, dhisa_month, dhisa_days, rasi_kattam_id, laknam_kattam_id, created_at, created_by, updated_date, updated_at
        Schema::create('ht_matrimony_basics', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name',500);
            $table->integer('age')->unsigned();
            $table->float('height',8,2)->nullable();
            $table->string('gender',100);
            $table->integer('marital_status')->unsigned();
            $table->foreign('marital_status')->references('id')->on('ht_config_marital_statuses');
            $table->mediumText('about_character')->nullable();
            $table->mediumText('preference')->nullable();
            $table->mediumText('address');
            $table->integer('district')->unsigned();
            $table->foreign('district')->references('id')->on('ht_config_districts');
            $table->string('state',500);
            $table->string('country',500);
            $table->integer('cell_no')->unsigned();
            $table->string('email',500)->unique();
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
        Schema::dropIfExists('ht_matrimony_basics');
    }
}
