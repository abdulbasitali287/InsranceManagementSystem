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
        Schema::create('customer_documents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id'); // Foreign key to customers (custom_payments)
            $table->string('file_name')->nullable(); // Original file name
            $table->string('file_path'); // Path to stored file
            $table->timestamps();
        
            // Define foreign key constraint
            $table->foreign('customer_id')
                  ->references('id')
                  ->on('custom_payments')
                  ->onDelete('cascade'); // You can adjust the onDelete behavior as needed
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_documents');
    }
};
