<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guests', function (Blueprint $table) {
            $table->id();
            $table->string('guest_name','100')->nullable();
            $table->string('father_husband_name','100')->nullable();
            $table->string('number_of_guests','100')->nullable();
            $table->string('cnic','15')->nullable();
            $table->string('contact','20')->nullable();
            $table->string('address',)->nullable();
            $table->string('room_type','100')->nullable();
            $table->string('room_number','100')->nullable();
            $table->date('check_in_date')->nullable();
            $table->date('check_out_date')->nullable();
            $table->string('discount_type')->nullable();
            $table->string('discount')->nullable();
            $table->string('total_amount')->nullable();
            $table->string('vehicle_no')->nullable();
            $table->string('advance_payment')->nullable();
            $table->string('total_payable')->nullable();
            $table->string('remarks')->nullable();
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
        Schema::dropIfExists('guests');
    }
}
