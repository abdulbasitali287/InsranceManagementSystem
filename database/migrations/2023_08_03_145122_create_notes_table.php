<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\CustomPayment;
use App\Models\Employee;



return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('heading')->nullable();
            $table->enum('status', ['Complete', 'Pending', 'Process',])->nullable();

            $table->string('customer_email');
            $table->enum('record_of', ['Call', 'Text', 'Fax', 'Mail', 'Email', 'Meeting']);
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->text('details')->nullable();
            $table->boolean('todo_list')->default(false);
            $table->boolean('remainder')->default(false);

            $table->foreignIdFor(Employee::class);
            $table->foreignIdFor(CustomPayment::class);
        });
    }

         // $table->unsignedBigInteger('customer_id');
         // $table->foreign('customer_id')->references('id')->on('custom_payments');
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notes');
    }
};
