<?php

namespace App\Filament\Admin\Resources\DataKendaraanResource\Pages;

use App\Filament\Admin\Resources\DataKendaraanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDataKendaraans extends ListRecords
{
    protected static string $resource = DataKendaraanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
