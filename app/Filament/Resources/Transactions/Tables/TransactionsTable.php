<?php

namespace App\Filament\Resources\Transactions\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class TransactionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('order.customer_name')->label('Pelanggan'),
                TextColumn::make('amount_paid')->label('Jumlah')->money('IDR', locale: 'id'),
                TextColumn::make('payment_method')->label('Metode'),
                ImageColumn::make('proof_image_path')->label('Bukti'),
                TextColumn::make('payment_date')->dateTime()->label('Waktu Bayar'),
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
            ->defaultSort('payment_date', 'desc');
    }
}
