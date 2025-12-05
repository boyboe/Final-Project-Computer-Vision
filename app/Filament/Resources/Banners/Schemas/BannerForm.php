<?php

namespace App\Filament\Resources\Banners\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use App\Models\HostingPackage;

class BannerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('asset_name')->required()->label('Nama Banner'),
                
                Select::make('type')
                    ->options([
                        'logo' => 'Logo Brand',
                        'package_icon' => 'Ikon Paket',
                        'promotion_poster' => 'Poster Promosi',
                    ])
                    ->required()
                    ->label('Tipe Banner'),
                    
                Select::make('package_id')
                    ->label('Terkait Paket')
                    ->options(HostingPackage::pluck('name', 'id'))
                    ->nullable()
                    ->helperText('Hanya diisi jika aset ini adalah Ikon Paket.'),

                FileUpload::make('file_path')
                    ->label('Unggah File Gambar')
                    ->disk('public')
                    ->directory('assets') 
                    ->image()
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
