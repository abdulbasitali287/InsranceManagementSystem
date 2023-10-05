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
        Schema::create('dates_and_amounts', function (Blueprint $table) {
            $table->id();
            $table->date('effective_date')->nullable();
            $table->date('expiry_date')->nullable();
            $table->date('reminder_date')->nullable();
            $table->date('canc_notice_date')->nullable();
            $table->date('due_date')->nullable();
            $table->date('date_paid')->nullable();
            $table->integer('next_amount_due')->nullable();
            $table->integer('new_amount_due')->nullable();
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
        Schema::dropIfExists('dates_and_amounts');
    }
};
