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
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->string('status')->nullable();
            $table->string('dob')->nullable();
            $table->string('logo')->nullable();
            $table->string('agent_name')->nullable();
            $table->string('principal_agent')->nullable();
            $table->string('tax_id')->nullable();
            $table->string('dl_id')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('fax')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('notes')->nullable();
            $table->string('file')->nullable();
            $table->string('purl')->nullable();
            $table->string('website_link')->nullable();
            $table->string('type')->nullable();
            $table->foreignId('type_id')->constrained('agent_categories')->onDelete('cascade')->onUpdate('cascade');
             //Create foreign Key
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
        Schema::dropIfExists('agents');
    }
};
