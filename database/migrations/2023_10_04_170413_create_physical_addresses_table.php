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
        Schema::create('physical_addresses', function (Blueprint $table) {
            $table->id();
            $table->string('pa_street_address')->nullable();
            $table->string('pa_city')->nullable();
            $table->string('pa_country')->nullable();
            $table->string('pa_state')->nullable();
            $table->string('pa_zip_code')->nullable();
            $table->string('pa_rent_or_own')->nullable();
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('cus_id')->on('customers')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });

        // $physicalAddressData = [
        //     'pa_street_address' => $request->input('pa_street_address'),
        //     'pa_city' => $request->input('pa_city'),
        //     'pa_country' => $request->input('pa_country'),
        //     'pa_state' => $request->input('pa_state'),
        //     'pa_zip_code' => $request->input('pa_zip_code'),
        //     'pa_rent_or_own' => $request->input('pa_rent_or_own'),
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
        Schema::dropIfExists('physical_addresses');
    }
};
