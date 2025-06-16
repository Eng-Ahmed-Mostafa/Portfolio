<?php

namespace App\Filament\Resources\BackendResource\Pages;

use App\Filament\Resources\BackendResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBackend extends EditRecord
{
    protected static string $resource = BackendResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
