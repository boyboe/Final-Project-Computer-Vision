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
        Schema::create('hosting_packages', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique(); // Contoh: Scout, Hunter
            $table->integer('storage_gb'); // Kapasitas penyimpanan
            $table->integer('ram_gb'); // Alokasi RAM
            $table->integer('cpu_cores'); // Jumlah Core CPU
            $table->text('description')->nullable(); // Fitur tambahan (Opsional)
            $table->unsignedBigInteger('price_1_month'); // Harga 1 bulan
            $table->unsignedBigInteger('price_2_months'); // Harga 2 bulan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hosting_packages');
    }
};
