<?php

namespace App\Filament\Resources\CultoResource\Pages;

use App\Filament\Resources\CultoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCultos extends ListRecords
{
    protected static string $resource = CultoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
