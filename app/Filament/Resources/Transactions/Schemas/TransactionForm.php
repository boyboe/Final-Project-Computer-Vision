<?php

namespace App\Filament\Resources\Transactions\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use App\Models\Transaction;

class TransactionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('order_id')
                    ->relationship('order', 'customer_name')
                    ->required()
                    ->searchable()
                    ->label('Pesanan Pelanggan'),
                
                TextInput::make('amount_paid')
                    ->numeric()
                    ->required()
                    ->prefix('Rp')
                    ->label('Jumlah Dibayar'),
                
                Select::make('payment_method')
                    ->options([
                        'DANA' => 'DANA',
                        'GOPAY' => 'GOPAY',
                        'Bank Transfer' => 'Bank Transfer',
                    ])
                    ->label('Metode Pembayaran'),

                FileUpload::make('proof_image_path')
                    ->label('Bukti Pembayaran')
                    ->disk('public') // Pastikan storage link sudah dibuat
                    ->directory('proofs') 
                    ->image()
                    ->columnSpanFull()
                    ->required(),
            ]);
    }
}
