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
        Schema::create('driver_details', function (Blueprint $table) {
            $table->id();
            $table->string("driver_name",70)->nullable();
            $table->string("relationship",70)->nullable();
            $table->string("f_name",70)->nullable();
            $table->string("m_name",70)->nullable();
            $table->string("l_name",70)->nullable();
            $table->string("email",70)->nullable();
            $table->string("phone",20)->nullable();
            $table->string("gender",70)->nullable();
            $table->date("dob",70)->nullable();
            $table->string("ss_no",30)->nullable();
            $table->string("id_no",30)->nullable();
            $table->string("id_type",70)->nullable();
            $table->string("employer_or_bsn_name")->nullable(); // new column added
            $table->string("type_of_bsn_or_work")->nullable(); // new column added
            $table->string("ein",50)->nullable(); // new column added
            $table->string("bsn_or_work_phone")->nullable(); // new column added
            $table->unsignedBigInteger("customer_id");
            $table->foreign('customer_id')->references('cus_id')->on('customers')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('driver_details');
    }
};
