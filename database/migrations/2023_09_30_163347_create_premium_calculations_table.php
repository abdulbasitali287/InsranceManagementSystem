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
        Schema::create('premium_calculations', function (Blueprint $table) {
            $table->id();
            $table->string("base_premium")->nullable();
            $table->integer("crime_prevention_fee")->nullable();
            $table->integer("policy_fee")->nullable();
            $table->integer("agency_fee")->nullable();
            $table->integer("other_fees")->nullable(); // new column added
            $table->integer("total_premium")->nullable();
            $table->unsignedBigInteger("customer_id");
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
        Schema::dropIfExists('premium_calculations');
    }
};
