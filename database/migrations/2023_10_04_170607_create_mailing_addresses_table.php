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
        Schema::create('mailing_addresses', function (Blueprint $table) {
            $table->id();
            $table->string('ma_street_address')->nullable();
            $table->string('ma_city')->nullable();
            $table->string('ma_country')->nullable();
            $table->string('ma_state')->nullable();
            $table->string('ma_zip_code')->nullable();
            $table->string('ma_rent_or_own')->nullable();
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('cus_id')->on('customers')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });

        // $mailingAddressData = [
        //     'ma_street_address' => $request->input('ma_street_address'),
        //     'ma_city' => $request->input('ma_city'),
        //     'ma_country' => $request->input('ma_country'),
        //     'ma_state' => $request->input('ma_state'),
        //     'ma_zip_code' => $request->input('ma_zip_code'),
        //     'ma_rent_or_own' => $request->input('ma_rent_or_own'),
        //     'customer_id' => 1
        // ];
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mailing_addresses');
    }
};
