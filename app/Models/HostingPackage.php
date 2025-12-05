<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class HostingPackage extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'storage_gb',
        'ram_gb',
        'cpu_cores',
        'description',
        'price_1_month',
        'price_2_months',
    ];

    /**
     * Relasi: Satu paket memiliki banyak pesanan.
     */
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class, 'package_id');
    }

    /**
     * Relasi: Satu paket memiliki banyak aset (misal: ikon).
     */
    public function banners(): HasMany
    {
        return $this->hasMany(Banner::class, 'package_id');
    }
}