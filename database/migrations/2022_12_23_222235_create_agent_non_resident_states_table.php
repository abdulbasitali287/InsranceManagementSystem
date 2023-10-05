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
        Schema::create('agent_non_resident_states', function (Blueprint $table) {
            $table->id();
            $table->string('non_resident_state')->nullable();
            $table->string('non_resident_license_no')->nullable();
            $table->string('non_resident_license_type')->nullable();
            $table->date('non_resident_expiration_date')->nullable();
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
        Schema::dropIfExists('agent_non_resident_states');
    }
};
