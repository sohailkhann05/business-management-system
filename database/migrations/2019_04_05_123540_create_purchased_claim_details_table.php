<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasedClaimDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchased_claim_details', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->char('purchased_claim_id');
            $table->char('product_id');
            $table->bigInteger('total_quantity');
            $table->text('defect_reason');
            $table->bigInteger('received_quantity')->nullable();
            $table->bigInteger('remaining_quantity')->nullable();
            $table->integer('claim_status')->default(0);
            $table->integer('receipt_status')->default(0);
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
        Schema::dropIfExists('purchased_claim_details');
    }
}
