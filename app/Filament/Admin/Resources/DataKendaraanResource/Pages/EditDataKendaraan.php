<?php

namespace App\Filament\Admin\Resources\DataKendaraanResource\Pages;

use App\Filament\Admin\Resources\DataKendaraanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDataKendaraan extends EditRecord
{
    protected static string $resource = DataKendaraanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
