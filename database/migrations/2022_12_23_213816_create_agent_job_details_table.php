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
        Schema::create('agent_job_details', function (Blueprint $table) {
            $table->id();
            $table->string('job_title')->nullable();
            $table->date('start_date')->nullable();
            $table->string('type_of_agent')->nullable();
            $table->string('pay_type')->nullable();
            $table->string('pay_amount')->nullable();
            $table->string('pay_frequency')->nullable();
            $table->string('payment_method')->nullable();
            $table->date('payment_reminder')->nullable();
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
        Schema::dropIfExists('agent_job_details');
    }
};
