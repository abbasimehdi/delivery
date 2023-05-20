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
        Schema::create('consignments', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('rider_id')->nullable();
            $table->foreign('rider_id')->references('id')->on('riders')->cascadeOnDelete();

            $table->string('name')->comment('نام مرسوله');
            $table->boolean('status')->default(1)->comment('وضعیت مرسوله');

            $table->integer('code')->comment('کد مرسوله');

            $table->dateTime('delivery_start')->comment('تاریخ ورود مرسوله');
            $table->dateTime('delivery_end')->comment('تاریخ ارسال مرسوله');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consignments');
    }
};
