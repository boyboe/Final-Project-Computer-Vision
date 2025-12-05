<?php

namespace App\Filament\Resources\HostingPackages\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class HostingPackagesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable()->sortable(),
                TextColumn::make('storage_gb')->label('Storage')->suffix(' GB'),
                TextColumn::make('ram_gb')->label('RAM')->suffix(' GB'),
                TextColumn::make('price_2_months')->label('Harga 2 Bulan')->money('IDR', locale: 'id')->sortable(),
                TextColumn::make('created_at')->dateTime()->toggleable(isToggledHiddenByDefault: true),
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
            ])
            ->defaultSort('price_2_months' , 'asc');
    }
}
