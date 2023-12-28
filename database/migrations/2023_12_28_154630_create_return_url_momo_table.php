<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('return_url_momo', function (Blueprint $table) {
            $table->id();
            $table->string('partnerCode');
            $table->string('orderId')->nullable();
            $table->string('message');
            $table->string('transId')->nullable();
            $table->string('orderInfo');
            $table->string('amount');
            $table->string('responseTime');
            $table->string('requestId')->nullable();
            $table->string('extraData');
            $table->string('payType');
            $table->string('orderType');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('return_url_momo');
    }
};
