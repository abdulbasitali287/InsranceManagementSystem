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
        Schema::create('agent_accounting_infos', function (Blueprint $table) {
            $table->id();
            $table->string('void_check')->nullable();
            $table->string('w9')->nullable();
            $table->string('accounting_tax_no')->nullable();
            $table->string('business_type')->nullable();
            $table->string('routing_no')->nullable();
            $table->string('account_no')->nullable();
            $table->string('type_of_account')->nullable();
            $table->string('remittance_address')->nullable();
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
        Schema::dropIfExists('agent_accounting_infos');
    }
};
