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
        Schema::create('commissions_infos', function (Blueprint $table) {
            $table->id();
            $table->string('upload')->nullable();
            $table->string('contract')->nullable();
            $table->string('commission_schedules')->nullable();
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
        Schema::dropIfExists('commissions_infos');
    }
};
