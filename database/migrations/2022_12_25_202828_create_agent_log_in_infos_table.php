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
        Schema::create('agent_log_in_infos', function (Blueprint $table) {
            $table->id();
            $table->string('company')->nullable();
            $table->string('website')->nullable();
            $table->string('user_name')->nullable();
            $table->string('password')->nullable();
            $table->string('pin')->nullable();
            $table->text('notes')->nullable();
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
        Schema::dropIfExists('agent_log_in_infos');
    }
};
