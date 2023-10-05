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
        Schema::create('agent_license_infos', function (Blueprint $table) {
            $table->id();
            $table->string('file')->nullable();
            $table->string('resident_state')->nullable();
            $table->string('npn_no')->nullable();
            $table->string('license_no')->nullable();
            $table->string('license_type')->nullable();
            $table->date('expiration_date')->nullable();
            $table->date('update_date')->nullable();
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
        Schema::dropIfExists('agent_license_infos');
    }
};
