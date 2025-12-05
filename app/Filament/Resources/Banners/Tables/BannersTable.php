<?php

namespace App\Filament\Resources\Banners\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class BannersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('file_path')->label('Pratinjau'),
                TextColumn::make('asset_name')->label('Nama Aset')->searchable(),
                TextColumn::make('type')->label('Tipe'),
                TextColumn::make('package.name')->label('Terkait Paket')->default('N/A'),
                TextColumn::make('file_path')->label('Path File')->copyable(), // Berguna untuk diintegrasikan ke frontend
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
