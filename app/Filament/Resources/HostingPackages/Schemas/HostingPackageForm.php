<?php

namespace App\Filament\Resources\HostingPackages\Schemas;

use Filament\Forms\Components\TextInput; 
use Filament\Forms\Components\Textarea; 
use Filament\Tables\Columns\TextColumn;
use Filament\Schemas\Schema;

class HostingPackageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true)
                    ->label('Nama Paket'),
                
                // --- Spesifikasi Teknis ---
                TextInput::make('storage_gb')->numeric()->required()->label('Storage (GB)'),
                TextInput::make('ram_gb')->numeric()->required()->label('RAM (GB)'),
                TextInput::make('cpu_cores')->numeric()->required()->label('CPU Cores'),
                
                // --- Harga Jual ---
                TextInput::make('price_1_month')
                    ->numeric()
                    ->required()
                    ->prefix('Rp')
                    ->label('Harga Jual (1 Bulan)'),
                TextInput::make('price_2_months')
                    ->numeric()
                    ->required()
                    ->prefix('Rp')
                    ->label('Harga Jual (2 Bulan)'),

                Textarea::make('description')
                    ->maxLength(65535)
                    ->columnSpanFull()
                    ->label('Deskripsi Singkat Fitur'),
            ]);
    }
}
