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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('asset_name'); // Contoh: Logo Brand, Icon Hunter
            $table->string('file_path'); // Path lokasi gambar
            $table->string('type')->nullable(); // Contoh: logo, package_icon, promotion_poster
            // Kunci Asing opsional ke hosting_packages
            $table->foreignId('package_id')->nullable()->constrained('hosting_packages')->cascadeOnDelete(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
