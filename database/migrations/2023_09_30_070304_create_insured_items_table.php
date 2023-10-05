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
        Schema::create('insured_items', function (Blueprint $table) {
            $table->id();
            $table->string("ins_com",100)->nullable(); // name changed
            $table->string("policy_no",100)->nullable();
            $table->string("type",50)->nullable();
            $table->string("year",20)->nullable(); // name changed
            $table->string("make",100)->nullable(); // name changed
            $table->string("model",20)->nullable(); // name changed
            $table->string("vin_no",100)->nullable(); // name changed
            $table->string("liability_limit",100)->nullable();
            $table->string("comp_deductible",100)->nullable();
            $table->string("collison_deductible",100)->nullable();
            $table->string("um_uim_bi_limit",100)->nullable();
            $table->string("um_uim_pd",100)->nullable();
            $table->integer("rent_amount")->nullable();
            $table->integer("towing_amount")->nullable();
            $table->string("gap",50)->nullable();
            $table->integer("pip_amount")->nullable();
            $table->integer("med_amount")->nullable();
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
        Schema::dropIfExists('insured_items');
    }
};
