<?php

namespace App\Filament\Resources\MusicaResource\Pages;

use App\Filament\Resources\MusicaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMusicas extends ListRecords
{
    protected static string $resource = MusicaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
