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
        Schema::create('carriers', function (Blueprint $table) {
            $table->id();
            $table->string('status')->nullable();
            $table->string('carrier_name')->nullable();
            $table->string('display_name')->nullable();
            $table->string('line_of_business')->nullable();
            $table->string('state_appointed')->nullable();
            $table->string('type_of_company')->nullable();
            $table->string('tax_id')->nullable();
            $table->string('NAIC')->nullable();
            $table->string('phone')->nullable();
            $table->string('phone_type')->nullable();
            $table->string('fax')->nullable();
            $table->string('fax_type')->nullable();
            $table->string('email')->nullable();
            $table->string('email_type')->nullable();
            $table->string('address')->nullable();
            $table->string('website')->nullable();
            $table->string('notes')->nullable();
            $table->string('file')->nullable();
            $table->string('url')->nullable();
            $table->string('website_link')->nullable();
            $table->string('types')->nullable();
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
        Schema::dropIfExists('carriers');
    }
};
