<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_bussiness_addresses', function (Blueprint $table) {
            $table->id();
            $table->string('wb_street_address')->nullable();
            $table->string('wb_city')->nullable();
            $table->string('wb_country')->nullable();
            $table->string('wb_state')->nullable();
            $table->string('wb_zip_code')->nullable();
            $table->string('wb_rent_or_own')->nullable();
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('cus_id')->on('customers')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('work_bussiness_addresses');
    }
};
