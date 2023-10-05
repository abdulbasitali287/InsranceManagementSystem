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
        Schema::create('client_additional_point_of_contacts', function (Blueprint $table) {
            $table->id();
            $table->string('additional_full_name')->nullable();
            $table->string('additional_email')->nullable();
            $table->string('additional_position')->nullable();
            $table->string('aditional_phone')->nullable();
            $table->string('additional_fax')->nullable();
            $table->foreignId('client_id')->constrained('clients')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('client_additional_point_of_contacts');
    }
};
