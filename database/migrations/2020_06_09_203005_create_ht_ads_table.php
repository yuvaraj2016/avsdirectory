<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHtAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ht_ads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_name');
            $table->string('product_image');
            $table->mediumText('product_details')->nullable();
            $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('ht_config_business_categories');
            $table->integer('quantity')->unsigned();
            $table->string('seller_name')->nullable();
            $table->integer('seller_phone_no')->unsigned();
            $table->mediumText('seller_address')->nullable();
            $table->integer('selling_price')->unsigned();
            $table->integer('discount')->unsigned();
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
        Schema::dropIfExists('ht_ads');
    }
}
