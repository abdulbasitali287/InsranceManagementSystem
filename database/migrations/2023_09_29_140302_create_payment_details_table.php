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
        Schema::create('payment_details', function (Blueprint $table) {
            $table->id();
            $table->string('typ_of_pay',100)->nullable();
            $table->string('carrier_name',100)->nullable();
            $table->string('policy_num',100)->nullable();
            $table->integer('due_amount')->nullable();
            $table->date('due_date')->nullable();
            $table->date('paid_date')->nullable();
            $table->string('mode_of_pay',100)->nullable();
            $table->string('received_by',100)->nullable();
            $table->integer('new_due_amount')->nullable();
            $table->date('new_due_date')->nullable();
            $table->unsignedBigInteger("customer_id");
            $table->foreign('customer_id')->references('cus_id')->on('customers');
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
        Schema::dropIfExists('payment_details');
    }
};
