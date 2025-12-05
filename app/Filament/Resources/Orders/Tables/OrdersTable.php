<?php

namespace App\Filament\Resources\Orders\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class OrdersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('package.name')->label('Paket')->searchable(),
                TextColumn::make('customer_name')->label('Pembeli')->searchable(),
                TextColumn::make('customer_whatsapp')->label('WA')->searchable(),
                TextColumn::make('duration_months')->label('Durasi (Bln)'),
                TextColumn::make('total_amount')->label('Tagihan')->money('IDR', locale: 'id'),
                TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'pending' => 'warning',
                        'paid' => 'success',
                        'cancelled' => 'danger',
                    }),
                TextColumn::make('created_at')->dateTime()->label('Tanggal Pesan'),
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
            ->defaultSort('created_at', 'desc');
    }
}
