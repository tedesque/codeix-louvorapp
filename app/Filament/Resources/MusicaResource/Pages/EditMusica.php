<?php

namespace App\Filament\Resources\MusicaResource\Pages;

use App\Filament\Resources\MusicaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMusica extends EditRecord
{
    protected static string $resource = MusicaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
