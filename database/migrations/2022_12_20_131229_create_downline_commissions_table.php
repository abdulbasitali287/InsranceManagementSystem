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
        Schema::create('downline_commissions', function (Blueprint $table) {
            $table->id();
            $table->string('type_of_payout')->nullable();
            $table->string('percentage')->nullable();
            $table->string('flat_free')->nullable();
            $table->string('initial_commission')->nullable();
            $table->string('renewal_commission_difference')->nullable();
            $table->string('add_additional_RN_commission')->nullable();
            $table->string('RN_commission')->nullable();
            $table->string('notes')->nullable();
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('downline_commissions');
    }
};
