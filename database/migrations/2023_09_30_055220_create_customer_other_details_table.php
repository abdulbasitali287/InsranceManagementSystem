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
        Schema::create('customer_other_details', function (Blueprint $table) {
            $table->id();
            $table->text("phy_address")->nullable();
            $table->string("city",100)->nullable();
            $table->string("country",100)->nullable();
            $table->string("state",100)->nullable();
            $table->string("zip_code",15)->nullable();
            $table->string("emp_or_bsn_name",100)->nullable();
            $table->string("type_of_bsn_or_work",150)->nullable();
            $table->string("rent_or_own",100)->nullable();
            $table->string("mailing_addr")->nullable();
            $table->string("ein_no",20)->nullable();
            $table->string("bsn_or_work_phone",20)->nullable();
            $table->text("bsn_web")->nullable();
            $table->text("bsn_addr")->nullable();
            $table->unsignedBigInteger("customer_id");
            $table->foreign('customer_id')->references('cus_id')->on('customers');
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
        Schema::dropIfExists('customer_other_details');
    }
};
