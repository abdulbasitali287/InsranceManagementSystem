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
        Schema::create('agent_products', function (Blueprint $table) {
            $table->id();
            $table->string('product_type')->nullable();
            $table->string('state')->nullable();
            $table->string('level')->nullable();
            $table->string('comission')->nullable();
            $table->string('comission_schedule')->nullable();
            $table->string('refferal_fee')->nullable();
            $table->string('carrier_comission')->nullable();
            $table->string('contract_file')->nullable();
            $table->string('note')->nullable();
            $table->foreignId('agent_id')->constrained('agents')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('agent_products');
    }
};
