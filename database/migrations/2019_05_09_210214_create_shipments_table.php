<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('shipper_name')->nullable();
            $table->string('shipper_address')->nullable();
            $table->string('shipper_phone')->nullable();
            $table->string('receiver_name')->nullable();
            $table->string('receiver_address')->nullable();
            $table->string('receiver_phone')->nullable();
            $table->string('receiver_email')->nullable();

            $table->string('consignment_no')->unique();
            $table->string('type')->nullable();
            $table->string('weight')->nullable();
            $table->string('invoice_no')->unique();
            $table->string('quantity')->nullable();
            $table->string('total_freight')->nullable();
            $table->string('mode')->nullable();
            $table->string('booking_mode')->nullable();
            $table->string('departure_time')->nullable();
            $table->string('origin_sl')->nullable();
            $table->string('destination_sl')->nullable();
            $table->string('current_sl')->nullable();
            $table->string('status')->nullable();
            $table->timestamp('pickup_date')->nullable();
            $table->string('comments')->nullable();
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
        Schema::dropIfExists('shipments');
    }
}
