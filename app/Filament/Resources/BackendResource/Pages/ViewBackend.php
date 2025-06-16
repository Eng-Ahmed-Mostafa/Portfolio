<?php

namespace App\Filament\Resources\BackendResource\Pages;

use App\Filament\Resources\BackendResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewBackend extends ViewRecord
{
    protected static string $resource = BackendResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
