<?php

namespace App\Filament\Resources\BackendResource\Pages;

use App\Filament\Resources\BackendResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBackends extends ListRecords
{
    protected static string $resource = BackendResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
