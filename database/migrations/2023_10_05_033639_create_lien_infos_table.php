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
        Schema::create('lien_infos', function (Blueprint $table) {
            $table->id();
            $table->string("item_no",100)->nullable(); // new column added
            $table->string("account",100)->nullable();
            $table->text("address")->nullable(); // name changed
            $table->string("city",100)->nullable();
            $table->string("state",100)->nullable();
            $table->string("zip",100)->nullable();
            $table->string("contact_name",70)->nullable();
            $table->string("phone_no",20)->nullable();
            $table->string("email",100)->nullable();
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
        Schema::dropIfExists('lien_infos');
    }
};
