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
        Schema::create('cities', function (Blueprint $table) {
            $table->id();

            $table->string('name')->comment('نام شهر');
            $table->string('state')->comment('نام استان');
            $table->boolean('status')->default(1)->comment('وضعیت شهر');

            $table->decimal('long', 10, 7)->nullable()->comment('عرض جغرافیایی');
            $table->decimal('lat', 10, 7)->nullable()->comment('طول جغرافیایی');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};
