<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'package_id',
        'customer_name',
        'customer_whatsapp',
        'duration_months',
        'total_amount',
        'status',
    ];

    /**
     * Relasi: Satu pesanan dimiliki oleh satu paket.
     */
    public function package(): BelongsTo
    {
        return $this->belongsTo(HostingPackage::class, 'package_id');
    }

    /**
     * Relasi: Satu pesanan memiliki satu transaksi.
     */
    public function transaction(): HasOne
    {
        return $this->hasOne(Transaction::class, 'order_id');
    }
}