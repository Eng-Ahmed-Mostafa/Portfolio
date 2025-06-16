<?php

namespace App\Filament\Resources\FrontendResource\Pages;

use App\Filament\Resources\FrontendResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewFrontend extends ViewRecord
{
    protected static string $resource = FrontendResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
