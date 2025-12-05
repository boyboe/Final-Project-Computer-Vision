<?php

namespace App\Filament\Resources\Orders\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use App\Models\HostingPackage;
class OrderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('package_id')
                    ->label('Paket Hosting')
                    ->options(HostingPackage::pluck('name', 'id'))
                    ->required()
                    ->searchable(),
                
                TextInput::make('customer_name')->required()->label('Nama Pembeli'),
                TextInput::make('customer_whatsapp')->required()->label('No. WhatsApp'),
                
                TextInput::make('duration_months')->numeric()->required()->label('Durasi Sewa (Bulan)'),
                TextInput::make('total_amount')->numeric()->required()->prefix('Rp')->label('Total Tagihan'),
                
                Select::make('status')
                    ->options([
                        'pending' => 'Menunggu Pembayaran',
                        'paid' => 'Lunas',
                        'cancelled' => 'Batal',
                    ])
                    ->required()
                    ->default('pending')
                    ->label('Status Pembayaran'),
            ]);
    }
}
