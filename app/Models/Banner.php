<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Banner extends Model
{
    protected $fillable = [
        'asset_name',
        'file_path',
        'type',
        'package_id',
    ];
    public function package(): BelongsTo
    {
        return $this->belongsTo(HostingPackage::class, 'package_id');
    }

}
