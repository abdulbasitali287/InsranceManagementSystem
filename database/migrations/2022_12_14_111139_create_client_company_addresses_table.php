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
        Schema::create('client_company_addresses', function (Blueprint $table) {
            $table->id();
            $table->string('company_address')->nullable();
            $table->string('company_city')->nullable();
            $table->string('company_state')->nullable();
            $table->string('company_zip_code')->nullable();
            $table->string('company_address_note')->nullable();
            $table->string('company_email')->nullable();
            $table->string('company_email_type')->nullable();
            $table->string('company_phone')->nullable();
            $table->string('company_phone_type')->nullable();
            $table->string('company_fax')->nullable();
            $table->string('company_fax_type')->nullable();
            $table->string('company_social_media')->nullable();
            $table->string('company_social_media_type')->nullable();
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
        Schema::dropIfExists('client_company_addresses');
    }
};
