<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\DataKendaraanResource\Pages;
use App\Models\DataKendaraan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class DataKendaraanResource extends Resource
{
    protected static ?string $model = DataKendaraan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('merk')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('model')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('tahun')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('warna')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('nomor_polisi')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('harga')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('jenis_kendaraan')
                    ->maxLength(255)
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('merk')
                    ->searchable(),
                Tables\Columns\TextColumn::make('model')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tahun')
                    ->searchable(),
                Tables\Columns\TextColumn::make('warna')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nomor_polisi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('harga')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jenis_kendaraan')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDataKendaraans::route('/'),
            'create' => Pages\CreateDataKendaraan::route('/create'),
            'edit' => Pages\EditDataKendaraan::route('/{record}/edit'),
        ];
    }
}
