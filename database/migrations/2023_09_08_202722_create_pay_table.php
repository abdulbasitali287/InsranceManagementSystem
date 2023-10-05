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
        Schema::create('pay', function (Blueprint $table) {
            $table->id();
            // member and customer will be f id 
            $table->string('Member')->nullable();
            $table->string('customer')->nullable();
            // $table->string('policy')->nullable();
            $table->string('type_of_payment')->nullable();
            // $table->string('split_payment')->nullable();
            $table->integer('payment_amount')->nullable();
            $table->string('payment_method')->nullable();
            $table->integer('total_payment')->nullable();
            $table->integer('agency_fee')->nullable();
            $table->integer('total_recieved')->nullable();
            $table->string('future_due_date')->nullable();
            $table->string('notes')->nullable();
            $table->string('receipt')->nullable();
            $table->string('payment_amount_Split')->nullable();
            $table->string('payment_method_Split')->nullable();
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
        Schema::dropIfExists('pay');
    }
};
