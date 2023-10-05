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
        Schema::create('custom_policies', function (Blueprint $table) {
            $table->id();
            $table->string('status')->nullable();
            $table->string('policy_no')->nullable();
            $table->string('blind_date')->nullable();
            $table->string('eft')->nullable();
            $table->string('eft_date')->nullable();
            $table->string('effective_date')->nullable();
            $table->string('expiration_date')->nullable();
            $table->string('policy_period')->nullable();
            $table->string('policy_note')->nullable();
            $table->string('type_of_policy')->nullable();
            $table->string('carrier')->nullable();
            $table->string('product')->nullable();
            $table->string('total_premium')->nullable();
            $table->string('due_date')->nullable();
            $table->string('remaining_payments')->nullable();
            $table->string('bodily_injury')->nullable();
            $table->string('property_damage')->nullable();
            $table->string('um-bi')->nullable();
            $table->string('uim-bi')->nullable();
            $table->string('umpd-bi')->nullable();
            $table->string('umpd-deductible')->nullable();
            $table->string('medical_payment')->nullable();
            $table->string('pip')->nullable();
            $table->string('accidental_death')->nullable();
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
        Schema::dropIfExists('custom_policies');
    }
};
