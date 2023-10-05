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
        Schema::create('custom_payments', function (Blueprint $table) {
            // ==================================== //
            // these fields were added by abdul basit
            // ==================================== //

            // ==================================== //
            // customer information
            // ==================================== //
            $table->id(); // customer id
            $table->string("name",50)->nullable(); // customer name
            $table->string("bussiness_name",50)->nullable(); //
            $table->text("address")->nullable(); // address
            $table->string("phone_no",20)->nullable(); // phone number
            $table->string("email",50)->nullable(); // email address
            $table->string("inssurance_com",60)->nullable(); // insurance company dropdown
            $table->string("policy_number")->nullable(); // policy number dropdown
            $table->integer("pay_amount_due")->nullable(); // payment amount due
            $table->date("pay_due_date")->nullable(); // payment due date

            // ==================================== //
            // add vehicle
            // ==================================== //
            $table->string("vehicle_year",10)->nullable(); // vehicle year
            $table->string("make_model")->nullable(); // make year
            $table->string("vin_number")->nullable(); // VIN year
            // ==================================== //
            // Loss Payee/Additional interest
            // ==================================== //
            $table->string("lien_holder")->nullable(); // lien holder
            $table->string("loan_number")->nullable(); // loan number
            // ==================================== //
            // // add drivers
            // ==================================== //
            $table->string("driver_name",50)->nullable(); // driver name
            $table->date("driver_dob")->nullable(); // driver date of birth
            $table->string("gender")->nullable(); // driver gender
            $table->string("driver_lic_no")->nullable(); // driver licence number
            $table->timestamps();
            // ==================================== //
            //                  end
            // ==================================== //


            // customer schema 
            // $table->string('name')->nullable();
            // $table->string('phone')->nullable();
            // $table->string('email')->nullable();
            // $table->string('ssn')->nullable();
            // $table->date('dob')->nullable(); // date 
            // $table->text('address')->nullable();// big text
            // $table->string('marital_status')->nullable(); // Dropdown: Single, Married, Widow enum
            // $table->string('filing_status')->nullable(); // single, married, married filing separately, Head of Household, Widower
            // $table->string('name_sp')->nullable();
            // $table->string('ssn_sp')->nullable();
            // $table->date('dob_sp')->nullable(); // date of spouse 
            // $table->string('service_code')->nullable();
            // $table->integer('fees')->nullable(); // in number
            // // new fields
            // $table->integer('balance')->nullable(); // in number
            // $table->integer('amount_paid')->nullable(); // in number
            // $table->date('next_pay')->nullable(); // date of next pay 
            // $table->date('pay_date')->nullable(); // date of pay date
            // $table->string("file")->nullable();// for file  
            // $table->string("file2")->nullable();
            // $table->string("file3")->nullable();
            // $table->string("file4")->nullable();
            // $table->string("file5")->nullable();
            // $table->string('service_co')->nullable(); // drop down of all patners
            // $table->date('hire_date')->nullable(); // date
            // $table->date('last_activity')->nullable(); // auto generated based on notes
            // $table->string('business_name')->nullable();
            // $table->string('type_bu')->nullable(); // Sole Proprietor, LLC, Partnership, S-corp, C-corp drop down
            // $table->integer('ein')->nullable(); // number
            // $table->text('address_bu')->nullable(); // big text 

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('custom_payments');
    }
};
