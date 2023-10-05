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
        Schema::create('agent_appointed_carriers', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->nullable();
            $table->string('agent_no')->nullable();
            $table->string('appointment_date')->nullable();
            $table->string('certification_req')->nullable();
            $table->string('certification_status')->nullable();
            $table->string('contract_files')->nullable();
            $table->string('payment_mode')->nullable();
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
        Schema::dropIfExists('agent_appointed_carriers');
    }
};
