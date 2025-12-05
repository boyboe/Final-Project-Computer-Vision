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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            // Kunci Asing ke tabel orders
            $table->foreignId('order_id')->constrained('orders')->cascadeOnDelete();
            $table->unsignedBigInteger('amount_paid'); // Jumlah yang dibayarkan
            $table->string('payment_method')->nullable(); // Contoh: Bank BNI, DANA
            // Path untuk menyimpan gambar bukti transfer
            $table->string('proof_image_path')->nullable(); 
            $table->timestamp('payment_date')->useCurrent();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
