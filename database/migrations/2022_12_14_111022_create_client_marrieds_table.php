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
        Schema::create('client_marrieds', function (Blueprint $table) {
            $table->id();
            $table->string('spouse_first_name')->nullable();
            $table->string('spouse_middle_name')->nullable();
            $table->string('spouse_last_name')->nullable();
            $table->string('spouse_salutation')->nullable();
            $table->string('spouse_phone')->nullable();
            $table->string('spouse_phone_type')->nullable();
            $table->string('spouse_email')->nullable();
            $table->string('spouse_email_type')->nullable();
            $table->string('spouse_social_media')->nullable();
            $table->string('spouse_social_media_type')->nullable();
            $table->string('spouse_occupation')->nullable();
            $table->string('spouse_employer')->nullable();
            $table->string('spouse_gender')->nullable();
            $table->date('spouse_dob')->nullable();
            $table->string('spouse_ss_no')->nullable();
            $table->string('spouse_id_no')->nullable();
            $table->string('spouse_id_type')->nullable();
            $table->string('spouse_medicare_no')->nullable();
            $table->string('spouse_part_a_start_date')->nullable();
            $table->string('spouse_part_b_start_date')->nullable();
            $table->string('spouse_medical_id')->nullable();
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
        Schema::dropIfExists('client_marrieds');
    }
};
