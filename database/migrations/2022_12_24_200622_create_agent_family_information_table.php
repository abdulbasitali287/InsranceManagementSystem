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
        Schema::create('agent_family_information', function (Blueprint $table) {
            $table->id();
            $table->string('agent_family_information_name')->nullable();
            $table->string('type_of_relationship')->nullable();
            $table->date('agent_family_information_dob')->nullable();
            $table->string('agent_family_information_phone')->nullable();
            $table->string('agent_family_information_email')->nullable();
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
        Schema::dropIfExists('agent_family_information');
    }
};
