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
        Schema::create('appointed_agents', function (Blueprint $table) {
            $table->id();
            $table->string('agent')->nullable();
            $table->string('agent_id')->nullable();
            $table->string('portal')->nullable();
            $table->string('portal_type')->nullable();
            $table->string('user_id')->nullable();
            $table->string('password')->nullable();
            $table->string('commission_paid')->nullable();
            $table->string('notes')->nullable();
            $table->foreignId('carrier_id')->constrained('carriers')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('appointed_agents');
    }
};
